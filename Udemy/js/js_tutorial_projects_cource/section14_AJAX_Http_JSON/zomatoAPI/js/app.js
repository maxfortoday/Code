class ZOMATO {
  constructor(){
    this.api = '5a1ec744c0c50447fd1a84f33b10fefa';
    this.header = {
      method: 'GET',
      headers: {
        'user-key':this.api,
        'Content-Type':'application/json'
      },
      credentials:'same-origin'
    }
  }
  async searchAPI(city,categoryID) {
    // category url 
    const categoryURL = 'https://developers.zomato.com/api/v2.1/categories';
    // city url
    const cityURL = `https://developers.zomato.com/api/v2.1/cities?q=${city}`;
    // category data
    const categoryInfo = await fetch(categoryURL, this.header);
    const categoryJSON = await categoryInfo.json();
    const categories = await categoryJSON.categories;
    // search city
    const cityInfo = await fetch(cityURL,this.header);
    const cityJSON = await cityInfo.json();
    const cityLocation = await cityJSON.location_suggestions;

    let cityID = 0;

    if(cityLocation.length > 0) {
      cityID = await cityLocation[0].id;
    }
    // search resturants
    const resturantURL = `https://developers.zomato.com/api/v2.1/search?entity_id=${cityID}&entity_type=city&category=${categoryID}&sort=rating`;
    const resturantInfo = await fetch(resturantURL,this.header);
    const resturantJSON = await resturantInfo.json();
    const restaurants = await resturantJSON.restaurants;

    return {
      categories,
      cityID,
      restaurants
    }
  }
};

class UI {
  constructor() {
    this.loader = document.querySelector('.loader');
    this.restaurantList = document.getElementById('restaurant-list');
  };
  addSelectOptions(categories) {
    const search = document.getElementById('searchCategory');
    let output = `<option value="0" selected>select category</option>`;
    categories.forEach(cat => {
      output += `<option value="${cat.categories.id}">${cat.categories.name}</option>`
    })
    search.innerHTML = output;
  }
  showFeedback(text) {
    const feedback = document.querySelector('.feedback');
    feedback.classList.add('showItem');
    feedback.innerHTML = `<p>${text}</p>`;
    setTimeout(()=>feedback.classList.remove('showItem'),3000);
  }
  showLoader(){
    this.loader.classList.add('showItem');
  }
  hideLoader(){
    this.loader.classList.remove('showItem');
  }

  getResturants(restaurants) {
    this.hideLoader();
    if(restaurants.length === 0) {
      this.showFeedback('no such category exist in the selected city')
    } else {
      // console.log(restaurants[0].restaurant);
      this.restaurantList.innerHTML = '';
      restaurants.forEach(res => {
        const {
          thumb: img,
          name,
          location:{address},
          user_rating:{aggregate_rating},
          cuisines,
          average_cost_for_two:cost,
          menu_url,
          url 
        } = res.restaurant;
        if(img !== '') {
          this.showRestaurant(img,name,address,aggregate_rating,cuisines,cost,menu_url,url)
        }
      })
    }
  }

  showRestaurant(img,name,address,aggregate_rating,cuisines,cost,menu_url,url) {
    const div = document.createElement('div');
    div.classList.add('col-11','mx-auto','my-3');
    div.innerHTML = `
    <div class="card">
     <div class="card">
      <div class="row p-3">
       <div class="col-5">
        <img src="${img}" class="img-fluid img-thumbnail" alt="">
       </div>
       <div class="col-5 text-capitalize">
        <h6 class="text-uppercase pt-2 redText">${name}</h6>
        <p>${address}</p>
       </div>
       <div class="col-1">
        <div class="badge badge-success">
         ${aggregate_rating}
        </div>
       </div>
      </div>
      <hr>
      <div class="row py-3 ml-1">
       <div class="col-5 text-uppercase ">
        <p>cousines :</p>
        <p>cost for two :</p>
       </div>
       <div class="col-7 text-uppercase">
        <p>${cuisines}</p>
        <p>${cost}</p>
       </div>
      </div>
      <hr>
      <div class="row text-center no-gutters pb-3">
       <div class="col-6">
        <a href="${menu_url}" target="_blank" class="btn redBtn  text-uppercase"><i class="fas fa-book"></i> menu</a>
       </div>
       <div class="col-6">
        <a href="${url}" target="_blank" class="btn redBtn  text-uppercase"><i class="fas fa-book"></i> website</a>
       </div>
      </div>
     </div>
    `;

    this.restaurantList.appendChild(div);
  }
};

(function(){
  const searchForm = document.getElementById('searchForm');
  const searchCity = document.getElementById('searchCity');
  const searchCategory = document.getElementById('searchCategory');

  const zomato = new ZOMATO();
  const ui = new UI();

  // add select option 
  document.addEventListener('DOMContentLoaded',() => {
    zomato.searchAPI()
    .then(data => ui.addSelectOptions(data.categories))
  });

  // submit form
  searchForm.addEventListener('submit',e => {
    e.preventDefault();

    const city = searchCity.value.toLowerCase();
    const categoryID = parseInt(searchCategory.value);
    // console.log(city,categoryID);
    if(city === '' || categoryID === 0) {
      ui.showFeedback('please enter city and select a category')
    } else {
      zomato.searchAPI(city).then(cityData => {
        if(cityData.cityID === 0) {
          ui.showFeedback('please enter a valid city!')
        } else {
          ui.showLoader();
          zomato.searchAPI(city,categoryID)
            .then(data => {
              ui.getResturants(data.restaurants);
            })
        }
      })
    }
  })
})()
//
const mainBtn = document.getElementById("mainBtn");
const result = document.getElementById("result");
const imgContainer = document.getElementById("img");
const url = "https://api.chucknorris.io/jokes/random";

mainBtn.addEventListener('click',function() {
  const ajax = new XMLHttpRequest();
  ajax.open("GET",url,true);

  ajax.onload = function() {
    if(this.status === 200) {
      const data = JSON.parse(this.responseText)  
      console.log(data);
          
      const {icon_url:img, value: joke} = data;  
          
      result.textContent = joke;
      imgContainer.src = img;
    }
  };

  ajax.onerror = function() {
    console.log('there was an error');
  };

  ajax.send();
})

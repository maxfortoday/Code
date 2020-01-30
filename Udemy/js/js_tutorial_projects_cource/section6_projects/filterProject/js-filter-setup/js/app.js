// filter btn
(function(){

  const filterBtn = document.querySelectorAll('.filter-btn');
  filterBtn.forEach(function(btn){
    btn.addEventListener('click',function(event){
      event.preventDefault();
      const value = event.target.dataset.filter;  
      // console.log(value);
      const items = document.querySelectorAll('.store-item');

      items.forEach(function(item){
        if(value === 'all'){
          item.style.display = 'block';
        } else {
          if(item.classList.contains(value)){
            item.style.display = 'block';
          } else {
            item.style.display = 'none';  
          }
        }
      })
    })
  })

})();

// search input
(function(){

  const search = document.getElementById('search-item');

  search.addEventListener('keyup',function(){
    let value = search.value.toLowerCase().trim();
    // console.log(value);
    
    const item = document.querySelectorAll('.store-item');

    item.forEach(function(item){
      let type = item.dataset.item;
      // console.log(type);
      
      // if(type.includes(value)){
      //   item.style.display = 'block'
      // } else {
      //   item.style.display = 'none'
      // }

      let length = value.length;
      let match = type.slice(0,length);
      // console.log(length);
      // console.log(match);

      if(value === match){
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
      
      
    })
  })

})();
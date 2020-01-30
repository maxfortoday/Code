(function(){

  let customers = [];
  let index = 0;

  function Customer(name,img,text){
    this.name = name;
    this.img = img;
    this.text = text;
  }

  function creatCustomer(name,img,text){
    let fullImg = `img/customer-${img}.jpg`;
    const customer = new Customer(name,fullImg,text);
    customers.push(customer)
  }

  creatCustomer('john',1,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae libero reiciendis voluptates quas quibusdam corrupti quasi dolor aut. Itaque porro maiores consequatur veniam? Expedita rerum cumque qui perferendis provident quasi.')
  creatCustomer('bob',2,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae libero reiciendis voluptates quas quibusdam corrupti quasi dolor aut.')
  creatCustomer('susy',3,'Lorem, ipsum dolor sit amet consectetur adipisicing elit.')

  // console.log(customers);

  document.querySelectorAll('.btn').forEach(function(item){
    item.addEventListener('click', function(event){
      event.preventDefault();

      if(event.target.parentElement.classList.contains('prevBtn')) {
        if(index === 0){
          index = customers.length;
        }
        index --;
        document.getElementById('customer-img').src = customers[index].img
        document.getElementById('customer-name').textContent = customers[index].name
        document.getElementById('customer-text').textContent = customers[index].text
      }

      if(event.target.parentElement.classList.contains('nextBtn')) {
        if(index === (customers.length - 1)){
          index = -1;
        }
        index ++;
        document.getElementById('customer-img').src = customers[index].img
        document.getElementById('customer-name').textContent = customers[index].name
        document.getElementById('customer-text').textContent = customers[index].text
      }
    })
  })
  
})();
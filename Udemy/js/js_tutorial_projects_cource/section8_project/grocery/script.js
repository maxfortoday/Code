// variables
const addItemAction = document.querySelector('.addItems-action');
const input = document.querySelector('.addItems-input');
const submit = document.querySelector('.addItems-submit');

const list = document.querySelector('.grocery-list');
const displayItemsAction = document.querySelector('.displayItems-action');
const clear = document.querySelector('.displayItems-clear');

// event listeners
submit.addEventListener('click',addItem);
document.addEventListener('DOMContentLoaded',displayStorage)
clear.addEventListener('click',removeItems);
list.addEventListener('click',removeSingleItem)



// functions
function addItem(e) {
  e.preventDefault();
  let value = input.value;
  // console.log(value);
  if(value === '') {
    showAction(addItemAction, 'please add grocery item', false);
  } else {
    showAction(addItemAction, `${value} added to the list`, true);
    createItem(value);
    updateStorage(value);
  }
  
}

// show action 
function showAction(element,text,value) {
  if(value === true) {
    element.classList.add('success');
    element.innerText = text;
    input.value = '';
    setTimeout(function(){
      element.classList.remove('success');
    },3000)
  } else {
    element.classList.add('alert');
    element.innerText = text;
    input.value = '';
    setTimeout(function(){
      element.classList.remove('alert');
    },3000)
  }
}

// create item 
function createItem(value) {
  let parent = document.createElement('div');
  parent.classList.add('grocery-item')
  parent.innerHTML = `
  <h4 class="grocery-item__title">${value}</h4>
  <a href="#" class="grocery-item__link">
   <i class="far fa-trash-alt"></i>
  </a>
  `

  list.appendChild(parent)
}

// update storage
function updateStorage(value) {
  let groceryList;
  let exists = localStorage.getItem('groceryList')
  groceryList = localStorage.getItem('groceryList') ? JSON.parse(localStorage.getItem('groceryList')) : [];

  // if(exists) {
  //   groceryList = JSON.parse(localStorage.getItem('groceryList'))
  // } else {
  //   groceryList = []
  // }

  groceryList.push(value);
  localStorage.setItem('groceryList',JSON.stringify(groceryList));
}

// display storage
function displayStorage() {
  let exists = localStorage.getItem('groceryList');

  if(exists) {
    let storageItem = JSON.parse(localStorage.getItem('groceryList'))

    storageItem.forEach(function(element){
      createItem(element)
    })
  }
}

// remove all items
function removeItems() {
  localStorage.removeItem('groceryList')
  let items = document.querySelectorAll('.grocery-item');
  if(items.length > 0) {
    showAction(displayItemsAction,'all items are removed',false);
    items.forEach(function(element) {
      list.removeChild(element);
    })
  } else {
    showAction(displayItemsAction,'no more items to remove', true);
  }
}

// remove single item 
function removeSingleItem(e) {
  e.preventDefault();
  // console.log(e.target);
  
  let link = e.target.parentElement;
  if(link.classList.contains('grocery-item__link')) {
    let text = link.previousElementSibling.innerHTML;
    let groceryItem = e.target.parentElement.parentElement;
    // console.log(groceryItem);
    
    list.removeChild(groceryItem);
    showAction(displayItemsAction,`${text} removed from the list`, true);
    // remove from local storage
    editStorage(text)
  }
}

// edit storage
function editStorage(item) {
  let groceryItems = JSON.parse(localStorage.getItem('groceryList'))
  // console.log(groceryItems);
  
  let index = groceryItems.indexOf(item);
  // console.log(index);
  
  groceryItems.splice(index,1);
  // console.log(groceryItems);
  localStorage.removeItem('groceryList');

  localStorage.setItem('groceryList',JSON.stringify(groceryItems));
}
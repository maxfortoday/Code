//get elements
const itemList = document.querySelector(".items");
const httpForm = document.getElementById("httpForm");
const itemInput = document.getElementById("itemInput");
const imageInput = document.getElementById("imageInput");
const feedback = document.querySelector(".feedback");
// const items = document.querySelector(".items");
const submtiBtn = document.getElementById("submitBtn");
let editedItemID = 0;

const url = `https://5e3fe87e69618d001411f6c6.mockapi.io/items`;

httpForm.addEventListener('submit',submitItem);

//
function submitItem(e) {
  e.preventDefault();
  const itemValue = itemInput.value;
  const imageValue = imageInput.value;

  if(itemValue === '' || imageValue === '') {
    showFeedback('please enter valid values');
  } else {
    postItemAPI(imageValue,itemValue);
    imageInput.value = '';
    itemInput.value = '';
  }
}

// load items
document.addEventListener('DOMContentLoaded',function() {
  getItemsAPI(showItems);
});

// shoe feedback
function showFeedback(text) {
  feedback.classList.add('showItem');
  feedback.innerHTML = `<p>${text}</p>`;
  setTimeout(()=>{
    feedback.classList.remove('showItem');
  },3000)
}

// get items
function getItemsAPI(cb) {
  const ajax = new XMLHttpRequest();
  ajax.open('GET',url,true);

  ajax.onload = function() {
    if(this.status === 200) {
      cb(this.responseText);
    } else {
      console.log('something went wrong');
    }
  };

  ajax.onerror = function() {
    console.log('something went wrong');
  };

  ajax.send();
}

// show items
function showItems(data) {
  const items = JSON.parse(data)
  // console.log(items);
  let info = '';
  items.forEach(item => {
    info+= `
    <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap item my-2">
    <img src="${item.avatar}" id='itemImage' class='itemImage img-thumbnail' alt="">
    <h6 id="itemName" class="text-capitalize itemName">${item.name}</h6>
    <div class="icons">

     <a href='#' class="itemIcon mx-2 edit-icon" data-id='${item.id}'>
      <i class="fas fa-edit"></i>
     </a>
     <a href='#' class="itemIcon mx-2 delete-icon" data-id='${item.id}'>
      <i class="fas fa-trash"></i>
     </a>
    </div>
   </li>
    `;
  })

  itemList.innerHTML = info;

  // get icons
  getIcons();
}

// post item
function postItemAPI(img,item) {
  const avatar = `img/${img}.jpeg`;
  const name = item;

  const ajax = new XMLHttpRequest();
  ajax.open('POST',url,true);

  ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded')

  ajax.onload = function() {
    // console.log(this.responseText);
    getItemsAPI(showItems);
  };

  ajax.onerror = function() {
    console.log('something went wrong');
  };

  ajax.send(`avatar=${avatar}&name=${item}`);
}

// get icons 
function getIcons() {
  const editIcon = document.querySelectorAll('.edit-icon');
  const deleteIcon = document.querySelectorAll('.delete-icon');

  deleteIcon.forEach(icon => {
    const itemId = icon.dataset.id;
    icon.addEventListener('click',(e)=>{
      e.preventDefault();
      // console.log(itemId);
      deleteItemAPI(itemId);
    })
  })
  editIcon.forEach(icon => {
    const itemId = icon.dataset.id;
    icon.addEventListener('click',(e)=>{
      e.preventDefault();
      // console.log(e.target.parentElement.parentElement.parentElement);
      const parent = e.target.parentElement.parentElement.parentElement;
      const img = parent.querySelector('.itemImage').src;
      const name = parent.querySelector('.itemName').textContent;
      // console.log(parent,img,name,itemId);
      editedItemUI(parent,img,name,itemId)
    })
  })
};

function deleteItemAPI(id) {
  const url = `https://5e3fe87e69618d001411f6c6.mockapi.io/items/${id}`;
  const ajax = new XMLHttpRequest();
  ajax.open('DELETE',url,true);

  ajax.onload = function() {
    if(this.status === 200) {
      // console.log(this.responseText);
      getItemsAPI(showItems);
    } else {
      console.log('something went wrong');
    }
  };

  ajax.onerror = function() {
    console.log('something went wrong');
  };

  ajax.send();
}

// edit item
function editedItemUI(parent,itemImg,name,itemId) {
  event.preventDefault();
  itemList.removeChild(parent);

  const imgIndex = itemImg.indexOf('img/');
  const jpegIndex = itemImg.indexOf('.jpeg');
  // console.log(imgIndex,jpegIndex);
  const img = itemImg.slice(imgIndex + 4,jpegIndex)
  // console.log(img);
  itemInput.value = name.trim();
  imageInput.value = img;
  editedItemID = itemId;
  submtiBtn.innerHTML = 'Edit item';
  httpForm.removeEventListener('submit',submitItem);
  httpForm.addEventListener('submit',editItemAPI);
}

// edit item api
function editItemAPI(){
  event.preventDefault();
  const id = editedItemID;

  const itemValue = itemInput.value;
  const imageValue = imageInput.value;

  if(itemValue === '' || imageValue === '') {
    showFeedback('please enter valid values');
  } else {
    const img = `img/${imageValue}.jpeg`;
    const name = itemValue;
    const url = `https://5e3fe87e69618d001411f6c6.mockapi.io/items/${id}`;
    const ajax = new XMLHttpRequest();
    ajax.open('PUT',url,true);

    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    ajax.onload = function() {
      console.log(this.responseText);
      reverseForm();
    };

    ajax.onerror = function() {
      console.log('something went wrong');
    };

    ajax.send(`avatar=${img}&name=${name}`);
  }
}

// reverse form
function reverseForm() {
  itemInput.value = '';
  imageInput.value = '';
  submtiBtn.innerHTML = 'Add Item';
  httpForm.removeEventListener('submit',editItemAPI);
  httpForm.addEventListener('submit',submitItem);
  getItemsAPI(showItems);
}
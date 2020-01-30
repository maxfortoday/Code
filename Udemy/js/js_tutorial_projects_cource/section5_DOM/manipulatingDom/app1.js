// lecture 83,84, 85 - event overview, click event, function reference
const btn = document.querySelector('.btn');
const heading = document.querySelector('h2');
function changeColors() {
  let hasClass = heading.classList.contains('red');
  if(hasClass){
    heading.classList.remove('red');
  } else {
    heading.classList.add('red');
  }
}

// btn.addEventListener('click',function(){
//   // console.log('hey you click me');
//   heading.classList.add('red');
// })

btn.addEventListener('click', changeColors)


// lecture 86 - mouse events
const heading1 = document.querySelector('h1');
const btn1 = document.querySelector('.btn1');

btn1.addEventListener('click',function(){
  console.log('click');
})

btn1.addEventListener('mousedown',function(){
  console.log('mousedown');
})

btn1.addEventListener('mouseup',function(){
  console.log('mouseup');
})

heading1.addEventListener('mouseenter',function(){
  heading1.classList.add("blue");
})

heading1.addEventListener('mouseleave',function(){
  heading1.classList.remove('blue');
})

// lecture 87 - key events
const nameInput = document.getElementById('name')
// nameInput.addEventListener('keypress',function(){
//   console.log('you pressed a key');
// })
// nameInput.addEventListener('keydown',function(){
//   console.log('you pressed a key');
// })
nameInput.addEventListener('keyup',function(){
console.log(nameInput.value);
})

// lecture 88 - event objects
const heading2 = document.querySelector('h3');
const btn2 = document.querySelector('.btn2');
const link = document.getElementById('link');

heading2.addEventListener('click',function(event){
  console.log(event.currentTarget);
  console.log(this);
})
btn2.addEventListener('click',function(event){
  event.currentTarget.classList.add('blue');
  console.log(event.type);
})

function someFunc(e) {
  e.preventDefault();
}

link.addEventListener('click', someFunc)

// lecture 89 - currentTarget vs target
const btns = document.querySelectorAll('.btn3');

btns.forEach(function(btn){
  btn.addEventListener('click',function(e){
    // console.log(e.currentTarget);
    // e.currentTarget.style.color = 'green';
    console.log('target', e.target);
    e.target.style.color = 'green';
  })
})

// lecture 90 - event propogation - bubbling - capturing
const container = document.querySelector('.container');
const list = document.querySelector('.list-items');

function showBubbling(e){
  console.log('current tagget',e.currentTarget);
  console.log('target',e.target);
 if(e.target.classList.contains('link2')){
   console.log('you clicked on the link');
 }
}

function stopPropagation(e){
  console.log('you clicked on the link');
  e.stopPropagation();
}

// bubble
list.addEventListener('click', showBubbling);
container.addEventListener('click', showBubbling);
document.addEventListener('click', showBubbling);
window.addEventListener('click', showBubbling);

// capturing
// list.addEventListener('click', showBubbling, {capture: true});
// container.addEventListener('click', showBubbling, {capture: true});
// document.addEventListener('click', showBubbling, {capture: true});
// window.addEventListener('click', showBubbling, {capture: true});

// lecture 91 - event propagation example
const container1 = document.querySelector('.container1')
// const heading11 = document.querySelector('.heading11');
const button = document.querySelector('.button');
// console.log(heading);

function sayHellow(){
  console.log('hello there');
}

button.addEventListener('click',function() {
  const element = document.createElement('h1');
  element.classList.add('heading');
  element.textContent = `i'm inside the contaner`
  container1.appendChild(element);
})

container1.addEventListener('click',function(e){
  if (e.target.classList.contains('heading')) {
    console.log('hello there');
  }
})

// heading11.addEventListener('click', sayHellow);

// lecture 92 - forms
const form = document.getElementById('form');
const name1 = document.getElementById('name1');
const password = document.getElementById('password');

form.addEventListener('submit',function(e){
  e.preventDefault();
  console.log('form submited');
  console.log(name1.value);
  console.log(password.value);
})

// lecture 93 - local storage / session storage
// sessionStorage.setItem('name','john');

localStorage.setItem('name','john');
localStorage.setItem('friend', 'peter');
localStorage.setItem('job','developer');
localStorage.setItem('address','street 123');

const localName = localStorage.getItem('name');
console.log(localName);
localStorage.removeItem('name');
const anothereName = localStorage.getItem('name');
console.log(anothereName);
localStorage.clear();

// lecture 94 - local storage with multiple values
const friends = ['john', 'peter', 'bob'];

// localStorage.setItem('friends',friends);
localStorage.setItem('friends',JSON.stringify(friends));

// const values = localStorage.getItem('friends');
const values = JSON.parse(localStorage.getItem('friends'));
console.log(values[2]);

let fruits;

if(localStorage.getItem('fruits')) {
  fruits = JSON.parse(localStorage.getItem('fruits'))
} else {
  fruits = []
}

console.log(fruits);
// fruits.push('apple');
fruits.push('orange');
localStorage.setItem('fruits',JSON.stringify(fruits));
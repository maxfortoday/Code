// lecture 65 - getElementById
const h1 = document.getElementById('title');
h1.style.color = 'red'

const btn = document.getElementById('btn');
btn.style.backgroundColor = 'blue';
btn.style.color = 'white';

// lecture 66 - getElementsByTagName
const headings = document.getElementsByTagName('h2');
// console.log(headings.length);
headings[0].style.color = 'red';

const items = document.getElementsByTagName('li');
items[2].style.color = 'orange';
const betterItems = [...items];

betterItems.forEach(function(item){
  // console.log(item);
})

console.log(items);  // html node list
console.log(betterItems); // after spread oparator becomes an array

// lecture 67 - getElementByClassName
const classItems = document.getElementsByClassName('special');
classItems[1].style.color = 'green';

// lecture 68 - querySelector('any css') - selects single, querySelectorAll('any css') - selects all - you can use forEach!!!
const result = document.querySelector('#result');
result.style.backgroundColor = 'blue';

const itemm = document.querySelector('.special');
console.log(itemm);

const lastItem = document.querySelector('li:last-child');
console.log(lastItem);


const listt = document.querySelectorAll('.special');

listt.forEach(function(item){
  // console.log(item);
  item.style.padding = '5px';
})
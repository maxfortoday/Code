// lecture 69 - childnodes/children
const res = document.querySelector('#res');
const allChildren = res.childNodes
// console.log(allChildren);

const children = res.children;
console.log(children);

console.log(res.firstChild);
console.log(res.lastChild);

// lecture 70 - parentElement
const heading = document.querySelector('h2');
const parent = heading.parentElement;
parent.style.color = 'red';

// lecture 71 - previouseSibling, nextSibling
const first = document.querySelector('.first');
const second = first.nextSibling.nextSibling.style.color = 'blue';
console.log(second);

const last = document.querySelector('#last');
const third = last.previousSibling.previousSibling;
console.log(third);

// lecture 72 - nextElementSibling, previouseElementSibling
first.nextElementSibling.style.color = 'orange';
last.previousElementSibling.style.color = 'blue';

// lecture 73 - textContent, nodeValue
const special = document.getElementById('special');
const val = special.firstChild.nodeValue;
console.log(val);
const easyValue = special.textContent;
console.log(easyValue);

// lecture 74 - getAttribute(), setAttribute
const first1 = document.querySelector('.first1');
const classValue = first1.getAttribute('class')
console.log(classValue);

const link = document.getElementById('link');
const showLink = link.getAttribute('href');
console.log(showLink);

const last1 = link.nextElementSibling;
last1.setAttribute('class', 'first1');
last1.textContent = 'i also have a class first';
console.log(last1);

const links = document.querySelectorAll('.first1');
console.log(links);

// lecture 75 - classList, className
const first2 = document.getElementById('first2')
const second2 = document.getElementById('second2')
const third2 = document.getElementById('third2')

const classVal = first2.className;
console.log(classVal);

// second2.className = 'colors' // adding class
// second2.className = 'text' // overight the class before
second2.className = 'colors text' // solution if you want to add couple of classes

third2.classList.add('colors'); // adding class
third2.classList.add('text') // adding another class
// third2.classList.add('colors','text') // for adding couple classes need to be ceparated with ","
third2.classList.remove('text') // remove class

let classExcists = third2.classList.contains('colors');
if(classExcists) {
  console.log('class exists');
} else {
  console.log('class not exists');
  
}

// lecture 76 - createTextNode, appendChild
const ress = document.querySelector('#ress');

// create empty element 
const bodyDiv = document.createElement('div');
// create text node
const textt = document.createTextNode('a simple body div');
bodyDiv.appendChild(textt);
// document.body.appendChild(bodyDiv)

const headingg = document.createElement('h2');
const headingText = document.createTextNode('dynamic heading');
headingg.appendChild(headingText);
headingg.classList.add('blue');
// ress.appendChild(headingg);

// lecture 77 - incertBefore
// result element
document.body.insertBefore(bodyDiv,ress);

const red = document.querySelector('.red');
ress.insertBefore(headingg, red);

// lecture 78 - replaceChild
const smallHeading = document.createElement('h6');
const smallText = document.createTextNode(`i'm small heading wuhhha`);
smallHeading.classList.add('red');
smallHeading.appendChild(smallText);
document.body.replaceChild(smallText,bodyDiv)

// lecture 79 - prepend, innerText
const newHeading = document.createElement('h2')
newHeading.innerText = 'another dynamic heading blaa'
document.body.prepend(newHeading);

// lecyure 80 - remove, removeChild
const resss = document.querySelector('#resss')
// resss.remove()
const toMAnyHeadings = resss.querySelector('h1');
resss.removeChild(toMAnyHeadings);

// lecture 81 - innerHTML, textContent
const list = document.getElementById('first3');
const div = document.getElementById('second3');
const item = document.querySelector('.item');

console.log(div.textContent);
console.log(list.innerHTML);

const randomVar = 'random text'

const ul = document.createElement('ul');
ul.innerHTML = `<li class="item">${randomVar}</li><li>ilst item</li><li>ilst item</li>`;
document.body.appendChild(ul);

div.textContent = 'hello world';

// lecture 82 - change css with style property
const random = document.querySelector('.random');
// random.style.backgroundColor = 'blue';
// random.style.color = 'white';
// random.style.fontSize = '3rem';
// random.style.textTransform = 'capitalize';

random.classList.add('title');
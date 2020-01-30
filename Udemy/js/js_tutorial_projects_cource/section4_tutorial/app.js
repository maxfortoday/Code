// lecture 41 - String properties and methods
let text = ' Peter Jordan'
let result = text.length;

console.log(text.length);
console.log(result);
console.log(text.toLocaleLowerCase());
console.log(text.toUpperCase());
console.log(text.charAt(1));
console.log(text.charAt(result - 1)); // -1 for the index of the last one
console.log(text.indexOf('p')); // -1 = no result (case sensetive)
console.log(text.indexOf('P')); 
console.log(text.indexOf('e'));
console.log(text.toLocaleLowerCase().startsWith(' peter'));
console.log(text.toLocaleLowerCase().endsWith('jordan'));
console.log(text.includes('zzz'));
console.log(text.includes('eter'));
console.log(text.slice(0,5)); // from 0 to index 5
console.log(text.slice(-5)); // negative value starts the index from the last one


// lecture 42 - Template literals
const name = 'jonn';
const age = 25;
const sentence = "Hey it's " + name + " and he is " + age + "years old";
const value = `Hey it's ${name} and he is ${age} yers old. And here is some simple math ${4+4}`;

console.log(sentence);
console.log(value);

// lecture 43 - Aray properties and methods 
let names = ['john', 'bob', 'barry', 'olga', 'ben', 12, 3];

// length 
console.log(names.length);
console.log(names[4]);
console.log(names[names.length - 1]); // array is 0 base index so need to do -1

// concat - combine 2 arrays
const lastName = ['pepper', 'onion', 'bannana'];
const allNames = names.concat(lastName);
console.log(allNames);

// reverse - reverce the array stracture
console.log(allNames.reverse());

// unshift - add to [0]
allNames.unshift('susy');
console.log(allNames);

// shift - remove [0]
allNames.shift();
allNames.shift();
console.log(allNames);

// push - add to end of array
allNames.push('susy');
console.log(allNames);

// pop - delete last index
allNames.pop();
console.log(allNames);

// splice - (index1, index2) index1: from where to start, index2: how many items to count
const specificNames = allNames.splice(2,3);
console.log(specificNames); // returns the new array start from index2 and count 3
console.log(allNames); // new array without the items in the splice method

// lecture 44 - arrays and for loop
let namess = ['anna', 'susy', 'bob'];
let newArr = [];

for(let i = 0; i < namess.length; i++) {
  console.log(i);
  console.log(names[i]);
  newArr.push(names[i])
}

console.log(namess);
console.log(newArr);

// lecture 45 - function, return, if, arrays, for loop
const names2 = ['anna', 'susy', 'bob'];

function testing(arr){
  console.log(arr);
  let newArr = [];
  for (let i = 0; i < arr.length; i++) {
    let newItem = `${arr[i]} jordan`;
    newArr.push(newItem);    
  }

  if(newArr.length > 2) {
    console.log(`here is your long array: ${newArr}`);
    return;
  }
  // this code will not be run cecause the return statement.
  console.log('this code will be still executed');
  
}

testing(names2)

// lecture 46 - primitive data type
// primitibe data value will be assigned directly to that value 
let num = 1;
let num2 = num;
num2 = 7;
console.log(`the first value is: ${num}`);
console.log(`the second value is: ${num2}`);

// assign to non primitive value will affect all the references
let person = {name: 'bob'};
let person2 = person;
person2.name = 'susy';
console.log(`the name of the first person is: ${person.name}`);
console.log(`the name of the second person is: ${person2.name}`);

// lecture 47 - null and undefine
let num3 = 20 + null; // 20+0
console.log(num3);
let num4 = 20 + undefined; // NaN
console.log(num4);

// lecture 48 - truthy vs falsy
// "",'',``,0,-0,NaN,false,null,undefined
const bool1 = false;
const res = 2 < 5;
console.log(typeof bool1);
console.log(res);

const tex = ''; // falsy statement
if(tex) {
  console.log('runs if true');
} else {
  console.log('runs if false');
}

// lecture 49 - ternary operator (es6 - if)
let value2 = 2 < 5;
value2 ? console.log('value is true') : console.log('value is false');
// old syntax
// if(value2) {
//   console.log('value is true')
// } else {
//   console.log('value is false')
// }

// lecture 50+51 - local scope vs global scope
// global scope:
let namee = 'bob';

function calculate() {
  // some other code ...
  console.log(namee);
  // by mistake
  namee = 'orange';
  function inner() {
    namee = 'this is other value';
    console.log(`this is from inner function ${namee}`);
  }
  inner()
}

calculate()

if(true) {
  // some other code
  console.log(namee);
  //by mistake
  namee = 'pants';
}

console.log(`my name is ${namee} and i'm awesome`);
// local scope:
let nameee = 'bob';

function calc() {
  const nameee = 'susy';
  const agee = 30;
  // variable without keyword (let and const)
  becomesGlobal = 'global value';  // without keyword this variable becomes global
}
calc()

if(true) {
 const nameee = 'anna';
}

console.log(nameee);
console.log(becomesGlobal);

// console.log(agee);

// lecture 52 - variable lookup
const globalNumber = 5;

function ad(num1,num2) {
  // const globalNumber = 20;
  const result = num1 + num2 + globalNumber;
  function multiply() {
    const multiplyResult = globalNumber * result;
    console.log(multiplyResult);
  }
  multiply()
  return result;
}

console.log(ad(2,4));

// lecture 53 - callback functions. higher order functions, function as first class objects
// function addition(arr) {
//   let result = [];
//   for (let i = 0; i < arr.length; i++) {
//     let item = arr[i] + 10;
//     result.push(item)
//   }
//   return result;
// }

// function multiply(arr) {
//   let result = [];
//   for (let i = 0; i < arr.length; i++) {
//     let item = arr[i] * 10;
//     result.push(item)
//   }
//   return result;
// }

function calcc(arr,cb) {
  let result = [];
  for (let i = 0; i < arr.length; i++) {
    let item = cb(arr[i]);
    result.push(item)
  }
  return result;
}

function plus(number){
  return number + 10;
}

function multy(number){
  return number * 10;
}

// a lot of code
let additionResult = calcc([1,2,3], plus);
// let additionResult = addition([1,2,3]);
console.log(additionResult);
// a lot of code
let multiplyResult = calcc([1,2,3], multy);
// let multiplyResult = multiply([1,2,3]);
console.log(multiplyResult);

// lecture - 55 for each - not returning a new array
const people = [
  {name: 'bob', age: 20, position: 'developer', id: 1, salary: 200},
  {name: 'peter', age: 25, position: 'designer', id: 2, salary: 300},
  {name: 'susy', age: 30, position: 'the boss', id: 3, salary: 500},
  {name: 'anna', age: 35, position: 'the boss', id: 4, salary: 500}

];

// one way
function showPerson(person) {
  console.log(person.position.toUpperCase());
}
// people.forEach(showPerson)

// the usefull way
people.forEach(function() {
  console.log(person);
})

// lecture - 56 map - does return a new array, does not change the original array

const peopleAges = people.map(function(person) {
  return person.age + 20;
});

const peopleNames = people.map(function(person) {
  return `<h1>${person.name}</h1>`
})

const newPeople = people.map(function(person) {
  return {
    firstName: person.name.toLocaleUpperCase(),
    oldAge: person.age + 20
  }
})

console.log(peopleAges);
console.log(peopleNames);
console.log(newPeople);

// lecture - 57 filter - does return a new array, does modify size of the original array
const youngPeople = people.filter(function(person){
  return person.age <= 25;
})

const developers = people.filter(function(person) {
  return person.position === 'developer';
})

console.log(youngPeople);
console.log(developers);

// lecture - 58 find - return first match, if no match then returns undefined

const peopleId = people.find(function(person) {
  return person.id === 4;
})

console.log(peopleId);

// lecture - 59 reduce - reduce to single value: number, array, object
const total = people.reduce(function(acc,curr){
  console.log(`total of: ${acc}`);
  console.log(`current money ${curr.salary}`);
  acc += curr.salary;
  return acc;
},0)

console.log(total);

// lecture 60 - math
const number1 = 4.785;
const number2 = 3.148;
const number3 = 25;
const result1 = Math.floor(number1);
const result2 = Math.ceil(number2);
const result3 = Math.sqrt(number3);
const result4 = Math.PI;
const result5 = Math.min(1,4,6,8,4);
const result6 = Math.max(1,4,6,8,4);
const result7 = Math.floor(Math.random() * 10 + 1);
console.log(result1);
console.log(result2);
console.log(result3);
console.log(result4);
console.log(result5);
console.log(result6);
console.log(result7);

// lecture 61 - date objects
const months = [
  'january',
  'february',
  'march',
  'april',
  'may',
  'june',
  'july',
  'august',
  'september',
  'october',
  'november',
  'december'
]

const days = [
  'sunday',
  'monday',
  'teusday',
  'wednesday',
  'thursday',
  'friday',
  'saturday'
]

// const date = new Date();
const date = new Date('1/5/2015')
let month = date.getMonth()
let day = date.getDay()
let seconds = date.getSeconds()
let year = date.getFullYear()

console.log(date);
console.log(month);
console.log(day);
console.log(seconds);
console.log(`the month is ${months[month]} and the day is ${days[day]} and the year is ${year}`);
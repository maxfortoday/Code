// function expression
const pants = function add(num1, num2) {
  let results = num1 + num2;
  return results
}

const first = pants(10, 3);
console.log(first);

const second = pants(100, 20)
console.log(second);

const third = pants(200,23)
console.log(third);

// objects
const person = {
  name: 'john',
  lastName: 'peters',
  age: 40,
  education: false,
  married: true,
  siblings: ['sister', 'brother'],
  greetings: function() {
    console.log('Hellow my name is JOHN !!!');
    
  }
};

const age = person.age;
// person.name = 'bob';
console.log(person.name);
console.log(person.siblings[0]);
person.greetings();
console.log(age);

// conditional statements - basic

let num1 = 4;
let num2 = 6;

const value = true;
const value2 = false;

if(value) {
  console.log('first number is bigger then second');
} else {
  console.log('first number is smaller then second');
}

let num3 = 6;
let num4 = 6;
let result = num3 >= num4;

if(num3 > num4) {
  console.log('first number is bigger then second');
} else if(result) {
  console.log('first number is equel then second');
} else {
  console.log('first number is smaller then second');
}

let value3 = false;

if(!value3) {
  console.log('value is false');
}

// equality
let num5 = 6;
let num6 = 6;
let value4 = 6 == '6';
let value5 = 6 === '6';

console.log(value4);
console.log(value5);

// else if 
let dice = 2;

if(dice === 1){
  console.log('you got one');
} else if(dice === 2) {
  console.log('you got two');
} else {
  console.log('wrong');
}

// switch
let dice2 = 5;

switch (dice2){
  case 1:
  console.log('you got 1');
  break;
  case 2:
  console.log('you got 2');
  break;
  case 3: 
  console.log('you got 3');
  break;
  default: 
  console.log('wrong choice');
}

// while loop
let amount = 10;

while (amount > 0) {
  console.log(`i have ${amount} dollars and I'm going to the mall`);
  amount--;
}

// do while loop
let money = 100;

do{
  console.log(`you have ${money} dollars`);
  money++
} while(money < 10);

console.log(money)

// for loop 

for(let i = 0; i <= 10; i++) {
  console.log(`amd the number is ${i}`);
}
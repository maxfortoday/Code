// const num1 = 100;
// const num2 = 50;

// val = num1 + num2;
// val = num1 / num2;
// val = num1 % num2;

// //math objects
// val = Math.PI;
// val = Math.E;
// val = Math.round(2,4);
// val = Math.ceil(2,4);
// val = Math.floor(2,8);
// val = Math.sqrt(64);
// val = Math.abs(-3);
// val = Math.pow(9,2);
// val = Math.min(2,4,56,7,7,745,654,1);
// val = Math.max(2,4,56,7,7,745,654,1);
// val = Math.random();

// val = Math.floor(Math.random() * 20 +1);


// console.log(val);

//create some arrays 
// const numbers = [43,56,33,23,44,36,5];
// const numbers2 = new Array(22,45,33,76,54);
// const fruit = ['apple', 'banana','orange', 'pear'];
// const mixed = [22, 'hello', true, undefined, null, {a:1, b:2}, new Date()];

// let val;

// val = numbers.length;
// val = Array.isArray(numbers);
// val = numbers[3];
// val = numbers[0];
// numbers[2] = 100;

// val = numbers.indexOf(36);
// numbers.push(36);
// numbers.unshift(120);
// numbers.pop();
// numbers.shift();
// numbers.splice(1,3);
// numbers.reverse();

// val = numbers.concat(numbers2);
// val = fruit.sort();
// val = numbers.sort();

// val = numbers.sort(function(x,y) {
//   return x - y;
// })

// val = numbers.sort(function(x,y) {
//   return y - x;
// })


// function under50(num) {
//   return num < 50;
// }

// function under50(num) {
//   return num > 50;
// }

// val = numbers.find(under50); 

// console.log(numbers);
// console.log(val);

//  const person = {
//    firstName: 'Steve',
//    lastName: 'smith',
//    age: 30,
//    email: 'steve@aol.com',
//    hobbies: ['music', 'sports'],
//    address: {
//      city: 'Miami',
//      state: 'FL'
//    },
//    getBirthYear: function() {
//      return 2017 - this.age
//    }
//  }

//  let val;

//  val = person;
//  val = person.firstName;
//  val = person.age;
//  val = person.hobbies[1];
//  val = person.address.state;
//  val = person.address['city'];
//  val = person.getBirthYear();


//  console.log(val);

//  const people = [
//    {name: 'John', age: 30},
//    {name: 'Mike', age: 23},
//    {name: 'Namcy', age: 40}
//  ];

//  for(let i = 0; i < people.length; i++) {
//    console.log(people[i].name);
//  }


// let val;

// const today = new Date();
// let birthday = new Date('6-13-1992');
// birthday = new Date('September 10 1981');
// birthday = new Date('6/13/1992')

// val = today.getMonth();
// val = today.getDate();
// val = today.getDay();
// val = today.getFullYear();
// val = today.getHours();
// val = today.getMinutes();
// val = today.getSeconds();
// val = today.getMilliseconds();
// val = today.getTime();



// console.log(val);

// const id = 100;
// const name = 'Steve';
// const age = 22;

// if(age > 0 && age < 12) {
//   console.log(`${name} is a child`);
// } else if(age >= 13 && age <=19) {
//   console.log(`${name} is a teenager`);
// } else {
//   console.log(`${name} is an adult`);
// }

// console.log(id === 100 ? 'CORRECT' : 'INCORRECT');

// let id = 100;

// const todo = {
//   add: function(){
//     console.log('Add todo...')
//   },
//   edit: function(){
//     console.log(`Edit todo ${id}`)
//   }
// }

// todo.delete = function(){
//   console.log('Delete todo...')
// }

// todo.add();
// todo.edit();
// todo.delete();

// for(let i = 0; i < 10; i++){
//   if(i === 2){
//     console.log('2 is my favorite number');
//     continue;
//   }

//   if(i === 5 ){
//     console.log('Stop the loop');
//     break;
//   }
  
//   console.log(`number ${i}`);
// }


// let i = 0;

// while(i < 10){
//   console.log(`Number ${i}`);
//   i++;
// }

// let i = 0;

// do {
//   console.log(`Number ${i}`);
//   i++;
// }

// while(i < 10);

// const cars = ['Ford', 'Chevy', 'Honda', 'Toyota']

// for(let i =0; i < cars.length; i++) {
//   console.log(cars[i]);
// }

// cars.forEach(function(car, index, array){
//   console.log(`${index} : ${car}`);
//   console.log(array);
// })

// const users = [
//   {id: 1, name: 'Jhone'},
//   {id: 2, name: 'Sara'},
//   {id: 3, name: 'Karen'}
// ];

// const ids = users.map(function(user){
//   return user.name;
// })

// console.log(ids);

// const user = {
//   firstName: 'John',
//   lastName: 'Doe',
//   age: 40
// }

// for(let x in user){
//   console.log(`${x} : ${user[x]}`);
// }

let val;

val = window.outerHeight;
val = window.outerWidth;

val = window.innerHeight;
val = window.innerWidth;

val = window.scrollY;
val = window.screenX;

val = window.location;
val = window.location.hostname;
val = window.location.port;
val = window.location.href;

val = window.navigator;
val = window.navigator.appName;
val = window.navigator.appVersion;
val = window.navigator.userAgent;
val = window.navigator.platform;
val = window.navigator.vendor;

console.log(val);
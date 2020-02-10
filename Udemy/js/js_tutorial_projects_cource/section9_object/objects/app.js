// lesson 156 - this key word
console.log('lesson - this key word');

const john = {
  name: 'john',
  lastName: 'anderson',
  fullname: function() {
    console.log(`my full name is ${this.name} ${this.lastName}`);
  }
}
john.fullname()

const bob = {
  name: 'bob',
  lastName: 'jordan',
  fullname: function() {
    console.log(`my full name is ${this.name} ${this.lastName}`);
  }
}
bob.fullname()

// lesson 157 - factory function
console.log('lesson - factory function');

function createPerson(name,lastName) {
  return {
    name: name,
    lastName: lastName,
    fullname: function() {
      console.log(`Hellow my name is ${this.name} ${this.lastName} and i like javascript`);      
    }
  }
}

const johnny = createPerson('johnny' ,'anderson');
const boby = createPerson('boby', 'jordan');
const susy = createPerson('susy', 'cooper');

johnny.fullname();
boby.fullname();
susy.fullname();

// lesson 158 - constructor function
console.log('lesson - constructor function');

function Person(name,lastName) {
  this.name = name;
  this.lastName = lastName;
  this.fullname = function() {
    console.log(`Hellow my name is ${this.name} ${this.lastName} and i like icecream`);      
  }
  // console.log(this);
}

const max = new Person('max','kozlov');
const niv = new Person('niv','chatuka');
const mom = new Person('anna','kozlov');

max.fullname();
niv.fullname();
mom.fullname();

// lesson 159 - constructor property
console.log('lesson - constructor property');

function Human(name,lastName) {
  this.name = name;
  this.lastName = lastName;
  this.fullname = function() {
    console.log(`Hellow my name is ${this.name} ${this.lastName} and i like icecream`);      
  }
}

const moshe = new Human('moshe','stern');
console.log(moshe.constructor);
const bla = {};
console.log(bla.constructor);
const naa = [];
console.log(naa.constructor);
const sayHi = function(){}
console.log(sayHi.constructor);

const susu = new moshe.constructor('susu','sons');
console.log(susu);
susu.fullname();

// lesson 160 - prototype property
console.log('lesson - prototype property');

function Student(name, lastName, role) {
  this.name = name;
  this.lastName = lastName;
  this.role = role;
}

Student.prototype.school = 'Hadash heigh school';
Student.prototype.great = function() {
  console.log(`Hello my name is ${this.name} ${this.lastName} and i'm ${this.role} in the ${this.school}`);
}

const maxim = new Student('maxim','kozlov','student');
const nivka = new Student('nivka','chatuka','student');

console.log(maxim);
console.log(nivka);

maxim.great();
nivka.great();

// leson 161 - find out prototypes
console.log('lesson - find out prototypes');

console.log(maxim.constructor.prototype);
// console.log(Object.getPrototypeOf(nivka));

// lesson 162 - Object()
console.log('lesson - Object()');
const bobo = {};
console.log(Object.getPrototypeOf(bobo));
console.log(Object.getPrototypeOf(nivka));
console.log(Object.getPrototypeOf(Object.getPrototypeOf(nivka)));

// lesson 163 - array example with Object()
console.log('lesson - array example with Object()');

const list = [];
console.log(list.constructor);
console.log(Object.getPrototypeOf(list));
console.log(Object.getPrototypeOf(Object.getPrototypeOf(list)));

// lesson 164 - Object.creat()
console.log('lesson - Object.creat()');

const personProto = {
  great: function() {
    console.log(`Hello there i'm ${this.name} ${this.lastName}`);
  }
}

const peter = Object.create(personProto);
peter.name = 'peter';
peter.lastName = 'parker';
console.log(peter);
peter.great();

const sara = Object.create(personProto,{
  name: {value: 'sara'},
  lastName: {value: 'conor'}
})
sara.great();

// lesson 165 + 167 - inheratence + inheratence continue
console.log('lesson - inheratence and inheratence continue');

function Persona(name,lastName) {
  this.name = name;
  this.lastName = lastName;
}
  Persona.prototype.school = 'hadash heigh school';
  Persona.prototype.greet = function() {
    console.log(`Hello i'm ${this.name} ${this.lastName} and i'm in the ${this.school} `);
  }

// student
function Studenta(name,lastName, honnorStudent) {
  Persona.call(this,name,lastName)
  this.honnorStudent = honnorStudent;
}

Studenta.prototype = Object.create(Persona.prototype);
Studenta.prototype.constructor = Studenta;
Studenta.prototype.answerQuestion = function(){
  console.log('and the answere is...');
}
Studenta.prototype.role = 'student';
const conor = new Studenta('conor','dickerson',false);
console.log(conor);
conor.greet();
conor.answerQuestion();

// teacher
function Teacher(name, lastName) {
  Persona.call(this,name,lastName);
}

Teacher.prototype = Object.create(Persona.prototype);
Teacher.prototype.constructor = Teacher;
Teacher.prototype.askQuestion = function() {
  console.log('and the answer th the question is?');
};
Studenta.prototype.role = 'teacher';
const david = new Teacher('david','shemtov');
console.log(david);
david.greet();
david.askQuestion();

// lesson 166 - Objects - call function
console.log('lesson - Objects - call function');

const greet = function(){
  console.log(`Hello my name is ${this.name} ${this.lastName}`);
}

window.name = 'jont';
window.lastName = 'carter';
greet();

const person1 = {
  name: 'anna',
  lastName: 'kozlov',
  greet: function(){
    console.log(`Hello my name is ${this.name} ${this.lastName}`);
  }
}
person1.greet();

const person2 = {
  name: 'alex',
  lastName: 'protom'
}

greet.call(person2);
greet.call(person1);

// lesson 168 - ES6 intro
console.log('lesson - ES6 intro');

function Employee(id) {
  this.id = id;
} 
Employee.prototype.showId = function() {
  console.log(`my id is ${this.id}`);
}

const bobi = new Employee(23);
console.log(bobi);
bobi.showId();

function Manager(id,name,lastName) {
  Employee.call(this,id);
  this.name = name;
  this.lastName = lastName;
}

Manager.prototype = Object.create(Employee.prototype);
Manager.prototype.constructor = Manager;
Manager.prototype.callMeeting = function() {
  console.log("i'm calling a meeting");
};

const sarah = new Manager(32,'sarah','parker');

console.log(sarah);
sarah.callMeeting();
sarah.showId();

// lesson 169 - ES6 Classes syntax
console.log('lesson - ES6 Classes syntax');
 
class Worker {
  constructor(id) {
    this.id = id;
  }
  showId() {
    console.log(`my id number is ${this.id}`);
  }
}

const ron = new Worker(32);
ron.showId();
console.log(ron);

class Boss {
  constructor(name, department) {
    this.name = name;
    this.department = department;
  }

  callMeeting() {
    console.log("i'm calling a meeting");
  }
}

const bar = new Boss('bar','sales');
console.log(bar);
bar.callMeeting();

// lesson 170 - ES6 class inheretance
console.log('lesson - ES6 class inheretance');

class Padro extends Worker {
  constructor(id,name, department) {
    super(id);
    this.name = name;
    this.department = department;
  }

  callMeeting() {
    console.log("i'm calling a meeting");
  }
}

const baris = new Padro(55,'baris','michashwilly');
console.log(baris);
baris.callMeeting();
baris.showId();
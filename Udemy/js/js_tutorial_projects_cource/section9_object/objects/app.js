// lesson 156 - this key word
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
function createPerson(name,lastNAme) {
  return {
    name: name,
    lastNAme: lastNAme,
    fullname: function() {
      console.log(`Hellow my name is ${this.name} ${this.lastNAme} and i like javascript`);      
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
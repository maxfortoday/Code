class Pet {
  constructor(name,age) {
    this.name = name;
    this.age = age;
  }
  eat() {
    return `${this.name} is eating!`
  }
}

class Cat extends Pet {
  constructor(name,age,livesLeft = 9) {
    super(name,age)
    this.livesLeft = livesLeft;
  }
  meow() {
    return 'MEOWW!!'
  }
}

class Dog extends Pet {
  bark() {
    return `WOOOF!!!`
  }
}

const cheddar = new Dog('Cheddar',0.5);
const zippi = new Cat('Zippi',16)
console.log(cheddar);
console.log(zippi);
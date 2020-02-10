// lesson 218 - new string methods
// startsWith(), endsWith(), includes(), repeat()
console.log('lesson 218 - new string methods');


const person = 'Maxim Kozlov';
const employee = '5432-4324-niv-432423';
const manager = '473289-fdsh-432d-fdsf4';

// startsWith()
console.log(person.startsWith('Max'));
console.log(person.startsWith('Ko',6));

// endsWith()
console.log(employee.endsWith('423'));
console.log(manager.endsWith('89',6));

// includes()
console.log(manager.includes('fdsh'));

const multiplyPeople = (person,amount = 5) => person.repeat(amount);

// repeat()
const people = multiplyPeople(person,3);
console.log(people);

// lesson 219 - for all
console.log('lesson 219 - for all');

const fruits = ['apple', 'banana', 'orange', 'grape'];
const longName = 'john smith pitter III';
let shortName = '';

for(const letter of longName) {
  // console.log(letter);
  if(letter === ' ') {
    continue;
  } else {
    shortName += letter;
  }
}
// console.log(shortName);

for (const fruit of fruits) {
  if(fruit === 'banana') {
    // break;
    continue
  }
  console.log(fruit); 
}

// lesson 220 - 223 spread operator
console.log('lesson 220 - 223 spread operator');

const udemy = 'udemy'
const udemySpread = [...udemy]
console.log(udemySpread);

const boys = ['peter','bob','david'];
const girls = ['susy','anna'];
const bestFriend = 'alex';

const friends = [...boys, bestFriend, ...girls];
console.log(friends);

// reference
// const newFriends = friends;
const newFriends = [...friends]
newFriends[0] = 'arnold';
console.log(newFriends);
console.log(friends);

const dave = {name: 'dave', job: 'developer'};
const newJob = {...dave, city: 'tel aviv', job: 'designer'}
console.log(newJob);
console.log(dave);

const headings = document.querySelectorAll('h1');
const result = document.getElementById('result');

// node list
console.log(headings);
// after spread operator become an array
const textx = [...headings].map(item => `<span>${item.textContent}</span>`);
result.innerHTML = textx;

const num = [23,432,593,533,546];
// cannot do Math.max on an array
console.log(Math.max(num));
// with spread operator can be done
console.log(Math.max(...num));

const johnny = ['johnny', 'peterson']
const sayHello = (name,lastName) => {
  console.log(`my name is ${name} ${lastName}`);
}
// longer way
sayHello(johnny[0],johnny[1]);
// shorter way
sayHello(...johnny);

// lesson 224 - rest operator
console.log('lesson 224 - rest operator');

// arrays
const fruu = ['apple', 'banana', 'orange', 'grape'];
const [first, ...restt] = fruu;
console.log(first, fruu);

// objects
const per = {name:'john',lastName: 'peterson',job: 'developer'};
const {job, ...rest} = per;
// rest operator cant be in the begining
// const {...rest, job} = per;
console.log(job,rest);

const testScores = [48,53,74,90,85,65,87,99];
const getAverage = (name,...scores) => {
  console.log(name);
  console.log(scores);
  let total = 0;
  for(const score of scores) {
    total+=score
  }
  console.log(`${name}'s score is ${total/scores.length}`);
  
}

getAverage(per.name,48,53,74,90,85);
getAverage(per.name,...testScores);

// lesson 225 - 227 - array.of + array.from
console.log('lesson 225 - 227 - array.of + array.from');

const blabla = Array.of('max',555,true)
console.log(blabla);

const demy = 'demy';
console.log(Array.from(demy));

function countTotal() {
  // console.log(arguments);
  let total = Array.from(arguments).reduce((total,currNum) => (total +=currNum),0);
  console.log(total);
}

countTotal(45,4,2,665,6);

const p = document.querySelectorAll('p');
const firstId = document.getElementById('first');
const secondId = document.getElementById('second');

// long way
let newText = Array.from(p)
// console.log(newText);
newText = newText.map(item => `<span>${item.textContent}</span>`).join(' ');
firstId.innerHTML = newText

// short way - secod argument for Array.from is map
const t = Array.from(document.querySelectorAll('p'),item => `<span>${item.textContent}</span>`).join(' ')
secondId.innerHTML = t

// lesson 228 - find,findIndex,every,some
console.log('lesson 228 - find,findIndex,every,some');

const a = [
  {id: 1, name: 'john'},
  {id:2, name: 'peter'},
  {id:3, name: 'andru'}
]

const b = ['a','b','a','b','c'];
const c = ['a','b','a','b'];

// find
const andru = a.find(person => person.name === 'andru');
console.log(andru.name);

// findIndex
const h = a.findIndex(item => item.id === 3);
console.log(h);
const newH = a.slice(0,h);
console.log(newH);

// every
const bb = b.every(y => y != 'c');
console.log(bb);

const bbb = c.every(y => y != 'c');
console.log(bbb);

// some
const yyy = b.some(g => g === 'c');
console.log(yyy);

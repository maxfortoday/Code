let newArr = [70,80,90,100];

function avg(arr) {
  let total = 0;
    for(let i = 0; i < arr.length ; i++) {
        total+=arr[i]
    }
  return total/arr.length
}


avg(newArr);

function isPangram(sentence) {
  let alphabet = 'abcdefghijklmnopqrstuvwxyz';
  let arr = [...alphabet]
  let str = [...sentence]
  if(arr) {
    return true
  }
  return false
}

const prices = [99,100,12,444,321.95,999,10];

// sort will do compare func if it will return negative number it will sort a before b, if it return 0 it will not change the order, if it will return a greater number it will sort b berofe a

// will sort from smallest to largest
const sort1 = prices.sort((a,b) => a-b);
console.log(sort1);

// will sort largest to smallest
const sort2 = prices.sort((a,b) => b-a);
console.log(sort2);

const books = [{
  title: 'Good Omens',
  authors: ['Terry Pratchett', 'Neil Gaiman'],
  rating: 4.25,
  genres: ['fiction', 'fantasy']
},
{
  title: 'Changing My Mind',
  authors: ['Zadie Smith'],
  rating: 3.83,
  genres: ['nonfiction', 'essays']
},
{
  title: 'Bone: The Complete Edition',
  authors: ['Jeff Smith'],
  rating: 4.42,
  genres: ['fiction', 'graphic novel', 'fantasy']
},
{
  title: 'American Gods',
  authors: ['Neil Gaiman'],
  rating: 4.11,
  genres: ['fiction', 'fantasy']
},
{
  title: 'A Gentleman in Moscow',
  authors: ['Amor Towles'],
  rating: 4.36,
  genres: ['fiction', 'historical fiction']
},
{
  title: 'The Name of the Wind',
  authors: ['Patrick Rothfuss'],
  rating: 4.54,
  genres: ['fiction', 'fantasy']
},
{
  title: 'The Overstory',
  authors: ['Richard Powers'],
  rating: 4.19,
  genres: ['fiction', 'short stories']
},
{
  title: 'The Way of Kings',
  authors: ['Brandon Sanderson'],
  rating: 4.65,
  genres: ['fantasy', 'epic']
},
{
  title: 'Lord of the flies',
  authors: ['William Golding'],
  rating: 3.67,
  genres: ['fiction']
}
]

// Sorting books by their rating:
books.sort((a, b) => b.rating - a.rating)
console.log(books);


const target = Math.floor(Math.random() * 10);
let guess = Math.floor(Math.random() * 10);

// wile target is not equell to guess the while loop will continue
while(target !== guess) {
  console.log(`Target ${target} Guess: ${guess}`);
  guess = Math.floor(Math.random() * 10);
}

console.log(`Target ${target} Guess: ${guess}`);
console.log('YOU WIN!!!');

let animals = ['shark','salmon','whale','bear','lizard','tortoise']

// slice starts from index 0 to index 3 not included
let swimers = animals.slice(0,3)
console.log(swimers);

// slice starts with index 2 and ends with index 4 not included
let mamals = animals.slice(2,4);
console.log(mamals);

// slice method wil asume to go from index 4 to the end of the array
let reptiles = animals.slice(4)
console.log(reptiles);

// slice can start from end of array by negative value
let quadruped = animals.slice(-3);
console.log(quadruped);

// will coppy the entire array to a new one 
let newAnimals = animals.slice()
console.log(newAnimals);


let topSongs = [
  'drown',
  'happy song',
  'sugar honey ice and tea',
  'throne'
];

// add a value to end of an array
topSongs.push('pray for plagues');
console.log(topSongs);

// remove last value from array and return it
topSongs.pop();
console.log(topSongs);

let dishesToDo = ['big plate'];
// unshift adds item to start of an array
dishesToDo.unshift('large plate');
dishesToDo.unshift('small plate');
dishesToDo.unshift('cerial bowl');
dishesToDo.unshift('coffee mug');
console.log(dishesToDo);

// shift takes the first item in array and returns it
dishesToDo.shift();
console.log(dishesToDo);

let fruits = ['apple', 'banana'];
let vegies = ['asparagus', 'broccoli'];
let meats = ['steak','chicken breast']

// concat combine 2 arrays in 1 without mutate the originals
let foods = fruits.concat(vegies);
console.log(foods);

// concat can take more then 1 parameters 
let allFoods = fruits.concat(vegies,meats);
console.log(allFoods);

let ingredients = [
  'water',
  'flower',
  'salt',
  'eggs',
  'sugar',
  'butter'
];

// includes will return a boolian 
// true 
console.log(ingredients.includes('water'));
// false
console.log(ingredients.includes('meat'));
// no need to check if statement, will return true/false
if(ingredients.includes('flower')) {
  console.log('cant eat that');
}

// indexOf will return the index of the match in the array
console.log(ingredients.indexOf('eggs'));

// if the index is nof found will return -1
console.log(ingredients.indexOf('pepper'));

let letters = ['T','C','E','P','S','E','R'];

// reverse will reverse the array and mutate the original
console.log(letters.reverse());

let letters1 = ['T','C','E','P','S','E','R'];

// join will join the array into a string
console.log(letters1.reverse().join('.'));


let animals1 = ['shark','salmon','whale','bear','lizard','tortoise']

// splice(start index, how many items to remove,add new items(optional))
// start with index 1 removing 0 and adding into the array a new value
animals1.splice(1,0,'octopus');
// will mutate the new array
console.log(animals1);

// will return the 2 values starting from index 3
console.log(animals1.splice(3,2));

// from index 3 will add 2 new values
animals1.splice(3,0,'snake','frog');
console.log(animals1);

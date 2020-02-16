function longestWord(str) {
  let words = str.split(' ');
  let longestWord = '';
  for(let word of words) {
    // console.log(word);
    
    if(word.length > longestWord.length) {
      longestWord = word
    }
  }
  return longestWord  
}

console.log(longestWord('yes please i like that'));
console.log(longestWord('ok sure i can do that in a moment'));


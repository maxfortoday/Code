function checkPalindrome(str) {
  // first solution, ot working with regex
  // str = str.toLowerCase();
  // let first = str.split(' ').join('');
  // let second = first.split('').reverse().join('');
  // console.log(first);
  // console.log(second);
  // return first === second

  // second solution, working with regex
  let first = str.match(/[a-z0-9]+/ig).join('').toLowerCase();
  let second = first.split('').reverse().join('');

  return first === second

}

console.log(checkPalindrome('Was it a car or a cat i saw'));
// true
console.log(checkPalindrome('Red -rum-, sir, -is-murder'));
// true
console.log(checkPalindrome('I got up early this morning'));
// false
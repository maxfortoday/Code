function isPrime(num) {
  if(num < 2) {
    return false
  }
  // modules %
  for(let i = 2 ; i < num ; i++) {
    if(num % i === 0) {
      return false
    }
  }
  return true
};

console.log(isPrime(8));
// false
console.log(isPrime(11));
// true
console.log(isPrime(121));
// false
console.log(isPrime(127));
// true
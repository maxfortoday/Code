function mathSequence(arr) {
  let arith = new Set();
  let geo = new Set();

  for(let i = 1 ; i < arr.length ; i++) {
    let number1 = arr[i] - arr[i - 1];
    // adding to a new Set not pushing like an arrey
    arith.add(number1);
    let number2 = arr[i] / arr[i - 1];
    // adding to a new Set not pushing like an arrey
    geo.add(number2);
  }

  // looking for size of new Set not length of new arrey
  if(arith.size === 1) {
    return "Arithmetic"
  }
  // looking for size of new Set not length of new arrey
  if(geo.size === 1) {
    return "Geometric"
  }
  return -1
}

// arithmetic
console.log(mathSequence([2,4,6,8]));
// geometric
console.log(mathSequence([3,9,27]));
// -1
console.log(mathSequence([3,7,46,90]));
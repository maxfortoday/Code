function secondValues(arr) {
  let value = [...new Set(arr)].sort((a,b) => a - b);
  if(value.length < 2) {
    return `${value[0]}`
  } else if(value.length === 2) {
    return `${value[0]} , ${value[1]}`
  } else {
    return `${value[1]} , ${value[value.length - 2]}`
  }
}

console.log(secondValues([1]));
// 1
console.log(secondValues([4,2]));
// 2,4
console.log(secondValues([11,44,22]));
// 11,22,44 === 22
console.log(secondValues([3,2,88,-11,67,7]));
// -11,2,3,7,67,88 === 2,67
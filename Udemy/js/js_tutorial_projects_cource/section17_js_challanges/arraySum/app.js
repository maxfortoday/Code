function arr(arr) {
  let temp = arr.sort((a,b)=>{
    return a - b;
  })
  let larg = temp.pop();
  
  let num = 0;
  temp.forEach(item => num += item);
  return larg === num
}

console.log(arr([1,6,4,2,13]));
console.log(arr([1,2,4,33,20]));
function unique(str) {
  return new Set(str).size === str.length

  // let temp = new Set();
  // for(let ltt of str) {
  //   if(temp.has(ltt)) {
  //     return false
  //   }
  //   temp.add(ltt)
  // }
  // return true
}

console.log(unique('abcdefg'));
console.log(unique('abcdabt'));
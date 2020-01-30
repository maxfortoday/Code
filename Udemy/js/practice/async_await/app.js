// async function myFunc() {
//   const promise = new Promise((resolve, reject) => {
//     setTimeout(() => resolve('hello'), 1000)
//   });

//   const error = false;

//   if(!error){
//     const res = await promise; // Wait untill promise is resolved
//     return res;
//   } else {
//     await Promise.reject(new Error('Something went wrong'))
//   }
// }

// myFunc()
//   .then(res => console.log(res))
//   .then(err => console.log(err));

async function getUsers() {
  // await response of the fetch call
  const response = await fetch('https://jsonplaceholder.typicode.com/users')
  // Only proceed once its resopved
  const data = await response.json();
  // only proceed onece second promise is resolved
  return data;
}

getUsers().then(users => console.log(users))
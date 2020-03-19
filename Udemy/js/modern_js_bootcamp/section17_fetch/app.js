// fetch('https://swapi.co/api/planets/')
//   .then((res) => {
//     if(!res.ok)
//       throw new Error(`status code error: ${res.status}`);
//     return res.json()
//   })
//   .then(data => {
//     console.log('fetch first 10 planets');
    
//     for (let planet of data.results) {
//       console.log(planet.name);
//     }
//     const nextUrl = data.next;
//     return fetch(nextUrl)
//   })    
//   .then((res) => {
//     if(!res.ok)
//       throw new Error(`status code error: ${res.status}`);
//     return res.json()
//   })
//   .then(data => {
//     console.log('fetch next 10 planets');
    
//     for (let planet of data.results) {
//       console.log(planet.name);
//     }    
//   })
//   .catch(err => {
//     console.log('something went wrong!');
//     console.log(err);
//   })

const checkStatusAndParse = (res) => {
  if(!res.ok) throw new Error(`status code error: ${res.status}`);
  return res.json() 
}

const printPlanet = (data) => {
  console.log('fetch 10 planets...');  
  for (let planet of data.results) {
    console.log(planet.name);
  }
  return Promise.resolve(data.next)
}

const fetchNextPlanets = (url = 'https://swapi.co/api/planets/') => {
  return fetch(url)
}

fetchNextPlanets()
  .then(checkStatusAndParse)
  .then(printPlanet)    
  .then(fetchNextPlanets)
  .then(checkStatusAndParse)
  .then(printPlanet)
  .then(fetchNextPlanets)
  .then(checkStatusAndParse)
  .then(printPlanet)
  .catch(err => {
    console.log('something went wrong!');
    console.log(err);
  })
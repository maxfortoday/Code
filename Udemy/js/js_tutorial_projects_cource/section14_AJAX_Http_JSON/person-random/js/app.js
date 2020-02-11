const btn = document.getElementById('btn');
const url = `https://randomuser.me/api/`;

btn.addEventListener('click',function() {
  getPerson(getData);
});

function getPerson(cb) {
  const ajax = new XMLHttpRequest();
  ajax.open('GET',url,true)

  ajax.onload = function() {
    if(this.status === 200){
      cb(this.responseText, showData)
    } else {
      console.log(this.responseText);
    }
  };

  ajax.onerror = function() {
    console.log('there was an error');
  };

  ajax.send();
};

function getData(response,cb) {
  const data = JSON.parse(response);
  const {
    name: {first},
    name: {last},
    picture: {large},
    location: {country},
    phone,
    email
  } = data.results[0];
// console.log(data);

  cb(first,last,large,country,phone,email);
};

function showData(first,last,large,country,phone,email) {
  document.getElementById('first').textContent = first;
  document.getElementById('last').textContent = last;
  document.getElementById('street').textContent = country;
  document.getElementById('phone').textContent = phone;
  document.getElementById('email').textContent = email;
  document.getElementById('photo').src = large;
}
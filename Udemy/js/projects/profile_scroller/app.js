const data = [
  {
    name: 'Jhon smith',
    age: 24,
    location: 'Tel Aviv',
    gender: 'male',
    lookingfor: 'female',
    image: 'https://randomuser.me/api/portraits/men/24.jpg' 
  },
  {
    name: 'Michal Parker',
    age: 26,
    location: 'Herzliyya',
    gender: 'male',
    lookingfor: 'female',
    image: 'https://randomuser.me/api/portraits/men/26.jpg' 
  },
  {
    name: 'Lucy Algel',
    age: 25,
    location: 'Ramat Gan',
    gender: 'female',
    lookingfor: 'male',
    image: 'https://randomuser.me/api/portraits/women/25.jpg' 
  }
];

const profile = profileIterator(data);

// Call first profile
nextProfile();

// Next event
document.getElementById('next').addEventListener('click', nextProfile);

// Next profile display
function nextProfile() {
  const currentProfile = profile.next().value;

  if(currentProfile !== undefined) {
    document.getElementById('profileDisplay').innerHTML = `
      <ul class="list-group">
        <li class="list-group-item">Name: ${currentProfile.name}</li>
        <li class="list-group-item">Age: ${currentProfile.age}</li>
        <li class="list-group-item">Location: ${currentProfile.location}</li>
        <li class="list-group-item">Preference: ${currentProfile.gender} looking for: ${currentProfile.lookingfor}</li>
      </ul>
    `;

    document.getElementById('imageDisplay').innerHTML = `
      <img src="${currentProfile.image}">
    `;
  } else {
    // No More Profiles
    window.location.reload();
  }
}

// Profile iterator
function profileIterator(profile) {
  let nextIndex = 0;

  return {
    next: function() {
      return nextIndex < profile.length ? 
      { value: profile[nextIndex++], done: false } :
      { done: true }
    }
  };
}


// cmd start:
// 1: cd to folder
// 2: npm run build
// 3: npm start
// 4: another cmd: npm run json:server

import { http } from './http';
import { ui } from './ui';

// Get posts on DOM load
document.addEventListener('DOMContentLoaded', getPosts);

function getPosts() {
  http.get('http://localhost:3000/posts')
    .then(data => ui.showPosts(data))
    .catch(err => console.log(err));
}
import React from 'react';
import "@fortawesome/fontawesome-free/css/all.min.css";
import uuid from 'uuid';
import 'bootstrap/dist/css/bootstrap.min.css';
import TodoInput from './components/TodoInput';
import TodoList from './components/TodoList';

// showwing vs-code
function App() {
  return (
    <>
      <TodoInput></TodoInput>
      <TodoList></TodoList>
    </>
  );
}

export default App;
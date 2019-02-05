import React, { Component } from 'react';
import './App.css';
import Person from './Person/Person'

class App extends Component {
  render() {
    return (
      <div className="App">
        <h1>Hi I'm React App!</h1>
        <p>This is really working!!</p>
        <Person name="Max" age="26" />
        <Person name="Menu" age="30">My hobbies: Racing</Person>
        <Person name="Niv" age="28" />
      </div>
    );
  }
}

export default App;

import React, {Component} from 'react';
import './App.css';

class App extends Component {
  state = {
    monsters: []
  }
  componentDidMount() {
    fetch('https://jsonplaceholder.typicode.com/users')
      .then(res => res.json())
      .then(data => this.setState({monsters: data}))
  };
  render() {
    return (
      <div className="App">
      {
        this.state.monsters.map(item => {
          return <h1 key={item.id}>{item.name}</h1>
        })
      }
    </div>
    )
  }
}

export default App;

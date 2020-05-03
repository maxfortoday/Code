import React, {Component} from 'react';
import CardList from './components/card-list/CardList';
import SearchBox from './components/searchBox/SearchBox';
import './App.css';

class App extends Component {
  state = {
    monsters: [],
    serchFiels: ''
  }
  componentDidMount() {
    fetch('https://jsonplaceholder.typicode.com/users')
      .then(res => res.json())
      .then(data => this.setState({monsters: data}))
  };

  handleChange = (e) => {
    this.setState({serchFiels: e.target.value})
  }

  render() {
    const {monsters,serchFiels} = this.state;
    const filteredMonsters = monsters.filter(monster => monster.name.toLowerCase().includes(serchFiels.toLocaleLowerCase()))
    return (
      <div className="App">
        <h1>monster rolodex</h1>
        <SearchBox placeholder='search monsters' handleChange={this.handleChange} />
        <CardList monsters={filteredMonsters} />      
    </div>
    )
  }
}

export default App;

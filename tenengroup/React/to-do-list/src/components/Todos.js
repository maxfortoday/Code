import React, { Component } from 'react';
import TodoItem from './ToodoItem';

class Todos extends Component {
  render() {
    // console.log(this.props.todos)
    return this.props.todos.map((todo) => (
      <TodoItem key={todo.id} todo={todo} />
    ));
  }
}


export default Todos;

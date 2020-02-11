import React, { Component } from 'react';
import Person from './Person/Person';

class Persons extends Component {
  componentWillUnmount() {
    console.log('[Persons.js] componentWillUnmount');
  }

  shouldComponentUpdate(nextProps, nextState) {
    console.log('[Persons.js] shouldComponentUpdate');
    if (nextProps.persons !== this.props.persons) {
      return true;
    } else {
      return false;
    }
    // return true;
  }

  render() {
    return this.props.persons.map( ( person, index ) => {
      return <Person 
        click={() => this.props.clicked( index )}
        name={person.name}
        age={person.age}
        key={person.id}
        changed={( event ) => this.props.changed( event, person.id )} /> 
    } );
  }
} 

export default Persons;
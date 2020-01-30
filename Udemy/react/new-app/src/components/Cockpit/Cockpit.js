import React, { useEffect } from 'react';
import classes from './Cockpit.css';

const cockpit = (props) => {
  useEffect( () => {
    console.log('[Cockpit.js] useEffect');

    setTimeout(() => {
      alert('Saved data to cloud');
    }, 1000);
    return () => {
      console.log('[Cockpit.js] cleanup work in useEffect');
    }
  }, []);

  useEffect(() => {
    console.log('[Cockpit.js] 2nd useEffect');
    return () => {
      console.log('[Cockpit.js] 2nd cleanup work in useEffect');
    }
  })

  const AssinedClasses = [];
  let btnClass = '';
  if (props.showPersons) {
    btnClass = classes.Red;
  }

  if ( props.persons.length <= 2 ) {
    AssinedClasses.push( classes.red );
  }
  if ( props.persons.length <= 1 ) {
    AssinedClasses.push( classes.bold ); 
  }

  return (
    <div className={classes.Cockpit}>
      <h1>{props.title}</h1>
      <p className={AssinedClasses.join( ' ' )}>This is really working!</p>
      <button
        className={btnClass}
        onClick={props.clicked}>Toggle Persons</button>
    </div>
  );
};

export default cockpit;
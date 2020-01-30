import React, { Component } from "react";

class valueer extends Component {

  componentDidUpdate(prevProps, prevState) {
    console.log('prevProps', prevProps);
    console.log('prevState', prevState);
  }

  componentWillUnmount() {
    console.log('Counter Unmount');
  }

  styles = {
    fontSize: 20,
    fontWieght: "bold"
  };

  render() {
    console.log('Counter Rendered');

    const {onClick, onDelete, onIncrement, counters, counter} = this.props;

    return (
      <div>
        <span style={this.styles} className={this.getBadgeClasses()}>
          {this.formatvalue()}
        </span>
        <button
          onClick={() => onIncrement(counter)}
          className="btn btn-secondary btn-sm">
          Increment
        </button>
        <button onClick={() => onDelete(counter.id)} className="btn btn-danger btn-sm m-2">Delete</button>
      </div>
    );
  }

  getBadgeClasses() {
    let classes = "badge m-2 badge-";
    classes += this.props.counter.value === 0 ? "warning" : "primary";
    return classes;
  }

  formatvalue() {
    const { value } = this.props.counter;
    return value === 0 ? "Zero" : value;
  }
}

export default valueer;
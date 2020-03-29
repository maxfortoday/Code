import React, { Component } from "react";
// STATE IMMUTABLE !!!!!
// shallow merge
// this.setState({})
export default class Book extends Component {
  constructor(props) {
    super(props);
    this.state = {
      count: 1,
      name: "john",
      showInfo: true
    };
  }

  handleInfo = () => {
    this.setState({
      showInfo: !this.state.showInfo
    })
  }

  render() {
    const { id, img, title, author } = this.props.info;

    const checkInfo = info => {
      if(info === true) {
        return <p>fhjk gd gbdgbfdj gbfdjg ndjkgnfdjg njfd gjfd gjf bgdfbgh</p>
      } else {
        return null
      }
    }

    return (
      <article className="book">
        <img src={img} width="150" alt="book" />
        <div>
          <h4>Title : {title}</h4>
          <h6>Author : {author}</h6>
          <button type="button" onClick={this.handleInfo}>toggle info</button>
          {checkInfo(this.state.showInfo)}
          {/* {this.state.showInfo ? (<p>loremfndsfjd fsn fjk</p>) : null} */}
          {/* {
            this.state.showInfo && (
              <p>
                fdshfjdjf f jsdnfjdf jdbf jd bfjbfhj
              </p>
            )
          } */}
        </div>
      </article>
    );
  }
}

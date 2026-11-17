import React, { Component } from 'react';

export default class ExpertiseCard extends Component {
  render() {
    const { item } = this.props;

    return (
      <div className="expertise-card-reveal">
        <div className="card-content-wrapper">
          <div className="front-reveal">
            <div className="icon-box-reveal">
              <i className={item.iconClass} />
            </div>
            <h3>{item.title}</h3>
          </div>
          <div className="back-reveal">
            <h3>{item.title}</h3>
            <p>{item.description}</p>
          </div>
        </div>
      </div>
    );
  }
}
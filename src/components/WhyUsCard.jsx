import React, { Component } from 'react';

export default class WhyUsCard extends Component {
  render() {
    const { item } = this.props;

    return (
      <div className="why-card">
        <div className="card-content-wrapper">
          <div className="front-reveal">
            <div className="why-icon-image-wrapper">
              <img
                src={item.iconSrc}
                alt={item.titleLines.join(' ')}
                className="why-icon-img"
              />
            </div>
          </div>

          <div className="back-reveal">
            <h3>
              {item.titleLines.map((line, idx) => (
                <React.Fragment key={idx}>
                  {line}
                  {idx < item.titleLines.length - 1 && <br />}
                </React.Fragment>
              ))}
            </h3>
            <p>{item.description}</p>
          </div>
        </div>
      </div>
    );
  }
}
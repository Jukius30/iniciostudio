import React, { Component } from 'react';

export default class BaseView extends Component {
  constructor(props, pageTitle = 'Website Profile') {
    super(props);
    this.pageTitle = pageTitle;
  }

  componentDidMount() {
    document.title = this.pageTitle;
    window.scrollTo(0, 0);
  }
}
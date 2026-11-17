import React, { Component } from 'react';

export default class FloatingSocialBar extends Component {
  constructor(props) {
    super(props);
    this.state = {
      isVisible: false,
    };

    this.handleScroll = this.handleScroll.bind(this);
  }

  componentDidMount() {
    window.addEventListener('scroll', this.handleScroll);
    this.handleScroll();
  }

  componentWillUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  }

  handleScroll() {
    const shouldShow = window.scrollY > 300;
    if (this.state.isVisible !== shouldShow) {
      this.setState({ isVisible: shouldShow });
    }
  }

  render() {
    const { isVisible } = this.state;

    return (
      <div
        className={`fixed bottom-[20px] right-[20px] lg:bottom-[30px] lg:right-[30px] flex gap-[10px] lg:gap-[15px] z-[9999] bg-[rgba(226,213,190,0.8)] px-[15px] py-[8px] lg:px-[20px] lg:py-[10px] rounded-[50px] backdrop-blur-[10px] shadow-[0_10px_30px_rgba(0,0,0,0.1)] transition-all duration-500 ease-in-out ${
          isVisible
            ? 'opacity-100 visible translate-y-0'
            : 'opacity-0 invisible translate-y-[20px]'
        }`}
      >
        <a
          href="https://instagram.com/iniciostudio.id"
          target="_blank"
          rel="noreferrer"
          className="text-[#394428] hover:text-white text-[1.3rem] lg:text-[1.6rem] no-underline transition-all duration-300 flex justify-center items-center hover:scale-120 hover:-translate-y-[3px]"
        >
          <i className="bi bi-instagram" />
        </a>
        <a
          href="https://www.linkedin.com/in/inicio-studio-a086b5325/?skipRedirect=true"
          target="_blank"
          rel="noreferrer"
          className="text-[#394428] hover:text-white text-[1.3rem] lg:text-[1.6rem] no-underline transition-all duration-300 flex justify-center items-center hover:scale-120 hover:-translate-y-[3px]"
        >
          <i className="bi bi-linkedin" />
        </a>
        <a
          href="https://www.youtube.com/watch?v=mG5YS757YCI"
          target="_blank"
          rel="noreferrer"
          className="text-[#394428] hover:text-white text-[1.3rem] lg:text-[1.6rem] no-underline transition-all duration-300 flex justify-center items-center hover:scale-120 hover:-translate-y-[3px]"
        >
          <i className="bi bi-youtube" />
        </a>
      </div>
    );
  }
}
import React, { Component } from 'react';

export default class ServiceCarousel extends Component {
  constructor(props) {
    super(props);
    this.state = {
      activeIndex: 0,
      isPaused: false,
      visibleCount: typeof window !== 'undefined' && window.innerWidth < 768 ? 1 : 3,
    };

    this.timer = null;
    this.handleNext = this.handleNext.bind(this);
    this.handlePrev = this.handlePrev.bind(this);
    this.handleResize = this.handleResize.bind(this);
  }

  componentDidMount() {
    window.addEventListener('resize', this.handleResize);
    this.startAutoPlay();
  }

  componentWillUnmount() {
    window.removeEventListener('resize', this.handleResize);
    this.stopAutoPlay();
  }

  handleResize() {
    const count = window.innerWidth < 768 ? 1 : 3;
    if (this.state.visibleCount !== count) {
      this.setState({ visibleCount: count });
    }
  }

  startAutoPlay() {
    this.stopAutoPlay();
    this.timer = setInterval(() => {
      if (!this.state.isPaused) {
        this.handleNext();
      }
    }, 4000);
  }

  stopAutoPlay() {
    if (this.timer) {
      clearInterval(this.timer);
    }
  }

  handleNext() {
    const total = this.props.services.length;
    this.setState((prev) => ({
      activeIndex: (prev.activeIndex + 1) % total,
    }));
  }

  handlePrev() {
    const total = this.props.services.length;
    this.setState((prev) => ({
      activeIndex: (prev.activeIndex - 1 + total) % total,
    }));
  }

  render() {
    const { services } = this.props;
    const { activeIndex, visibleCount } = this.state;
    const total = services.length;

    // Susun kartu yang tampil melingkar (looping persis seperti logika cloneNode di blade)
    const displayedItems = [];
    for (let i = 0; i < visibleCount; i++) {
      displayedItems.push(services[(activeIndex + i) % total]);
    }

    return (
      <div
        className="services-carousel-wrapper"
        onMouseEnter={() => this.setState({ isPaused: true })}
        onMouseLeave={() => this.setState({ isPaused: false })}
      >
        <div className="overflow-hidden">
          <div className="services-carousel-track">
            {displayedItems.map((service, idx) => (
              <div key={`${service.id}-${idx}`} className="services-carousel-slide">
                <div className="service-card">
                  <img
                    src={service.image}
                    alt={service.title}
                    className="service-card-img"
                  />
                  <div className="service-card-overlay">
                    <div className="service-card-title">{service.title}</div>
                    <div className="service-card-subtitle">{service.subtitle}</div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>

        {/* Tombol Prev & Next */}
        <button
          type="button"
          className="services-carousel-btn prev"
          onClick={this.handlePrev}
          aria-label="Previous"
        >
          <i className="bi bi-chevron-left" />
        </button>

        <button
          type="button"
          className="services-carousel-btn next"
          onClick={this.handleNext}
          aria-label="Next"
        >
          <i className="bi bi-chevron-right" />
        </button>

        {/* Indicators */}
        <div className="services-carousel-indicators">
          {services.map((service, idx) => (
            <button
              key={service.id}
              type="button"
              onClick={() => this.setState({ activeIndex: idx })}
              className={`services-indicator-dot ${
                activeIndex === idx ? 'active' : ''
              }`}
              aria-label={`Slide ${idx + 1}`}
            />
          ))}
        </div>
      </div>
    );
  }
}
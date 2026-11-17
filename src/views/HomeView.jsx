import React from 'react';
import BaseView from '../core/BaseView';
import SiteDataRepository from '../repositories/SiteDataRepository';
import BookingFormModel from '../models/BookingFormModel';
import ContactMailService from '../services/ContactMailService';
import ExpertiseCard from '../components/ExpertiseCard';
import BookingCalendar from '../components/BookingCalendar';

export default class HomeView extends BaseView {
  constructor(props) {
    super(props, 'INÍCIO STUDIO');
    this.state = {
      slides: SiteDataRepository.getHomeHeroSlides(),
      currentSlideIndex: 0,
      expertiseList: SiteDataRepository.getCoreExpertise(),
      bookedDates: SiteDataRepository.getBookedDates(),
      isBookingOpen: false,
      bookingForm: new BookingFormModel(),
      bookingErrors: {},
      bookingFeedback: null,
      isSubmittingBooking: false,
    };

    this.sliderRef = React.createRef();
    this.bookingSectionRef = React.createRef();
    this.slideTimer = null;

    this.toggleBookingSection = this.toggleBookingSection.bind(this);
    this.handleBookingInputChange = this.handleBookingInputChange.bind(this);
    this.handleSelectBookingDate = this.handleSelectBookingDate.bind(this);
    this.handleBookingSubmit = this.handleBookingSubmit.bind(this);
    this.scrollToSlider = this.scrollToSlider.bind(this);
  }

  componentDidMount() {
    super.componentDidMount();
    this.slideTimer = setInterval(() => {
      this.setState((prev) => ({
        currentSlideIndex: (prev.currentSlideIndex + 1) % prev.slides.length,
      }));
    }, 3500);
  }

  componentWillUnmount() {
    if (this.slideTimer) {
      clearInterval(this.slideTimer);
    }
  }

  scrollToSlider(e) {
    e.preventDefault();
    this.sliderRef.current?.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  toggleBookingSection() {
    this.setState({ isBookingOpen: true }, () => {
      this.bookingSectionRef.current?.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      });
    });
  }

  handleBookingInputChange(e) {
    const { name, value } = e.target;
    const updated = new BookingFormModel(
      this.state.bookingForm.nama,
      this.state.bookingForm.email,
      this.state.bookingForm.keluhan,
      this.state.bookingForm.bookingDate
    );
    updated[name] = value;

    this.setState((prev) => ({
      bookingForm: updated,
      bookingErrors: { ...prev.bookingErrors, [name]: '' },
    }));
  }

  handleSelectBookingDate(dateStr) {
    const updated = new BookingFormModel(
      this.state.bookingForm.nama,
      this.state.bookingForm.email,
      this.state.bookingForm.keluhan,
      dateStr
    );

    this.setState((prev) => ({
      bookingForm: updated,
      bookingErrors: { ...prev.bookingErrors, bookingDate: '' },
    }));
  }

  async handleBookingSubmit(e) {
    e.preventDefault();
    const { isValid, errors } = this.state.bookingForm.validate();

    if (!isValid) {
      this.setState({
        bookingErrors: errors,
        bookingFeedback: {
          type: 'error',
          text: 'Mohon lengkapi form dan pilih tanggal pada kalender.',
        },
      });
      return;
    }

    this.setState({ isSubmittingBooking: true, bookingFeedback: null });

    try {
      await ContactMailService.send(this.state.bookingForm);
      this.setState({
        bookingForm: new BookingFormModel(),
        bookingErrors: {},
        bookingFeedback: {
          type: 'success',
          text: 'Jadwal konsultasi Anda berhasil dikirim!',
        },
        isSubmittingBooking: false,
      });
    } catch (err) {
      this.setState({
        bookingFeedback: {
          type: 'error',
          text: err.message || 'Gagal mengirim jadwal konsultasi.',
        },
        isSubmittingBooking: false,
      });
    }
  }

  render() {
    const { onNavigate, onOpenContactModal } = this.props;
    const {
      slides,
      currentSlideIndex,
      expertiseList,
      bookedDates,
      isBookingOpen,
      bookingForm,
      bookingErrors,
      bookingFeedback,
      isSubmittingBooking,
    } = this.state;

    const topRowExpertise = expertiseList.slice(0, 3);
    const bottomRowExpertise = expertiseList.slice(3, 5);

    return (
      <div className="bg-main">
        {/* ================= 1. SECTION: HERO HOME ================= */}
        <section className="brand-section-grid">
          <div className="hero-side-image-left" />

          <div className="brand-content-middle">
            <div className="hero-text-wrapper">
              <div className="flex flex-col lg:flex-row items-center justify-center gap-12">
                <div className="w-full lg:w-7/12">
                  <h1 className="brand-title-main">Inicio Studio</h1>
                  <h2 className="brand-subtitle-main">Branding Made Simple</h2>
                  <div className="brand-description-text mt-4">
                    <p>
                      <strong>INICIO Studio</strong> hadir sebagai solusi bagi
                      mereka yang belum memahami dunia branding atau tidak
                      memiliki waktu untuk mengurus desain, namun ingin tampil
                      profesional dan memiliki citra kuat di mata pelanggan.
                    </p>
                  </div>
                  <button
                    type="button"
                    className="btn-hubungi"
                    onClick={onOpenContactModal}
                  >
                    Hubungi Kami!
                  </button>
                </div>

                <div className="w-full lg:w-4/12 flex justify-center">
                  <img
                    src="/assets/INICIOLOGOputih.png"
                    className="brand-logo-hero"
                    alt="Logo"
                  />
                </div>
              </div>
            </div>

            <a
              href="#portfolio-slider"
              className="see-more-container"
              onClick={this.scrollToSlider}
            >
              <span className="see-more-label">Lihat Lebih Lanjut</span>
              <i className="bi bi-chevron-down see-more-icon" />
            </a>
          </div>

          <div className="hero-side-image-right" />
        </section>

        {/* ================= SISIPAN BARU 1: HERO SLIDER AUTOMATIC ================= */}
        <section ref={this.sliderRef} className="portfolio-hero-swiper">
          <div className="relative w-full h-full">
            {slides.map((slide, idx) => (
              <div
                key={slide.id}
                className={`absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out ${
                  idx === currentSlideIndex ? 'opacity-100 z-1' : 'opacity-0 z-0'
                }`}
              >
                <img
                  src={slide.src}
                  className="hero-slide-img"
                  alt={slide.alt}
                />
              </div>
            ))}

            <a
              href="/portfolio"
              onClick={(e) => {
                e.preventDefault();
                onNavigate('portfolio');
              }}
              className="hero-overlay-clickable"
            >
              <h1 className="hero-clickable-title">Lihat Portofolio Kita!</h1>
            </a>
          </div>
        </section>

        {/* ================= SISIPAN BARU 2: CTA BANNER "TERTARIK?" ================= */}
        <section className="cta-banner-section">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="cta-box">
              <div className="cta-text-side">
                <h2>Tertarik?</h2>
                <p>
                  Belum yakin butuh apa? Ceritakan dulu! Konsultasi pertamamu di
                  Inicio Studio gratis, tanpa syarat, tanpa tekanan. Yuk booking
                  sekarang!
                </p>
              </div>
              <div>
                <button
                  type="button"
                  className="cta-btn-trigger"
                  onClick={this.toggleBookingSection}
                >
                  <span>Booking jadwal konsultasi!</span>
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M5 12H19M19 12L12 5M19 12L12 19"
                      stroke="currentColor"
                      strokeWidth="2"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </section>

        {/* ================= SISIPAN BARU 3: AREA FORM KONSULTASI & KALENDER ================= */}
        {isBookingOpen && (
          <section
            ref={this.bookingSectionRef}
            className="booking-section"
            id="bookingSection"
          >
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div className="lg:col-span-6">
                  <h2 className="booking-form-title">
                    Konsultasikan Bisnis Anda!
                  </h2>

                  {bookingFeedback && (
                    <div
                      className={`mb-6 px-5 py-3 rounded-[8px] text-sm text-white ${
                        bookingFeedback.type === 'success'
                          ? 'bg-[#8A9165]'
                          : 'bg-red-800/80'
                      }`}
                    >
                      {bookingFeedback.text}
                    </div>
                  )}

                  <form onSubmit={this.handleBookingSubmit} noValidate>
                    <div className="form-group-custom">
                      <label htmlFor="nama">Nama</label>
                      <input
                        type="text"
                        name="nama"
                        id="nama"
                        className="form-control-custom"
                        placeholder="Name"
                        value={bookingForm.nama}
                        onChange={this.handleBookingInputChange}
                        required
                      />
                      {bookingErrors.nama && (
                        <p className="text-red-300 text-xs mt-1">
                          {bookingErrors.nama}
                        </p>
                      )}
                    </div>

                    <div className="form-group-custom">
                      <label htmlFor="email">Alamat Email</label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        className="form-control-custom"
                        placeholder="Email Address"
                        value={bookingForm.email}
                        onChange={this.handleBookingInputChange}
                        required
                      />
                      {bookingErrors.email && (
                        <p className="text-red-300 text-xs mt-1">
                          {bookingErrors.email}
                        </p>
                      )}
                    </div>

                    <div className="form-group-custom">
                      <label htmlFor="keluhan">Apa keluhan anda?</label>
                      <textarea
                        name="keluhan"
                        id="keluhan"
                        rows="4"
                        className="form-control-custom"
                        placeholder="Message"
                        value={bookingForm.keluhan}
                        onChange={this.handleBookingInputChange}
                        required
                      />
                      {bookingErrors.keluhan && (
                        <p className="text-red-300 text-xs mt-1">
                          {bookingErrors.keluhan}
                        </p>
                      )}
                    </div>

                    {bookingForm.bookingDate && (
                      <p className="text-sm text-[#E2D5BE] mb-2">
                        Tanggal dipilih:{' '}
                        <strong>{bookingForm.bookingDate}</strong>
                      </p>
                    )}
                    {bookingErrors.bookingDate && (
                      <p className="text-red-300 text-xs mb-2">
                        {bookingErrors.bookingDate}
                      </p>
                    )}

                    <button
                      type="submit"
                      disabled={isSubmittingBooking}
                      className="btn-submit-booking"
                    >
                      {isSubmittingBooking ? 'Sending...' : 'Send message'}
                    </button>
                  </form>
                </div>

                <div className="lg:col-span-6 text-center lg:text-right">
                  <div className="mb-4 flex items-center justify-center lg:justify-end gap-3">
                    <img
                      src="/assets/INICIOLOGOputih.png"
                      alt="INÍCIO STUDIO"
                      style={{ maxHeight: '60px' }}
                    />
                    <span
                      style={{
                        fontSize: '1.8rem',
                        fontWeight: 800,
                        letterSpacing: '0.05em',
                      }}
                    >
                      INÍCIO STUDIO
                    </span>
                  </div>

                  <BookingCalendar
                    bookedDates={bookedDates}
                    onSelectDate={this.handleSelectBookingDate}
                  />
                </div>
              </div>
            </div>
          </section>
        )}

        {/* ================= 3. SECTION: EXPERTISE ================= */}
        <section className="expertise-section">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 className="expertise-heading">Keahlian Utama Kami</h2>

            <div className="expertise-grid-container mb-6">
              {topRowExpertise.map((item) => (
                <ExpertiseCard key={item.id} item={item} />
              ))}
            </div>

            <div className="expertise-grid-container">
              {bottomRowExpertise.map((item) => (
                <ExpertiseCard key={item.id} item={item} />
              ))}
            </div>
          </div>
        </section>

        {/* ================= 4. SECTION: WHAT WE SOLVE ================= */}
        <section className="what-solve-section-full">
          <div className="fixed-bg-container" />
          <div className="background-overlay" />
          <div className="w-full px-0">
            <div className="flex justify-center">
              <div className="w-full md:w-10/12 lg:w-4/12">
                <div className="what-solve-box-overlay">
                  <div>
                    <h2 className="font-bold mb-6" style={{ fontSize: '2.8rem' }}>
                      Apa yang kami pecahkan
                    </h2>
                    <p
                      className="mb-12"
                      style={{
                        fontSize: '1rem',
                        lineHeight: 1.8,
                        textAlign: 'justify',
                      }}
                    >
                      <strong>INICIO</strong> hadir membantu pebisnis membangun
                      brand identity yang jelas dan konsisten agar tampil
                      profesional di pasar.
                    </p>
                    <button
                      type="button"
                      onClick={() => onNavigate('services')}
                      className="btn-solve-link"
                    >
                      Cari layanan kami
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* ================= 5. SECTION: VIDEO DISPLAY ================= */}
        <section className="video-section">
          <div className="max-w-7xl mx-auto px-4">
            <div className="video-frame-container">
              <div className="video-aspect-ratio">
                <iframe
                  width="100%"
                  height="100%"
                  style={{
                    position: 'absolute',
                    top: 0,
                    left: 0,
                    border: 'none',
                  }}
                  src="https://www.youtube.com/embed/mG5YS757YCI"
                  title="INICIO STUDIO"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowFullScreen
                />
              </div>
            </div>
          </div>
        </section>
      </div>
    );
  }
}
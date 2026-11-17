import React from 'react';
import BaseView from '../core/BaseView';
import SiteDataRepository from '../repositories/SiteDataRepository';
import ServiceCarousel from '../components/ServiceCarousel';

export default class ServicesView extends BaseView {
  constructor(props) {
    super(props, 'Services - INÍCIO STUDIO');
    this.state = {
      services: SiteDataRepository.getServices(),
    };
  }

  render() {
    const { onNavigate } = this.props;
    const { services } = this.state;

    return (
      <div className="bg-main">
        {/* HERO */}
        <section className="service-hero">
          <img
            src="/assets/services.png"
            alt="Branding Made Simple"
            className="service-hero-full-img"
          />
          <div className="service-hero-hashtag font-bold">
            #BrandingMadeSimple
          </div>
        </section>

        {/* TAGLINE */}
        <section className="service-intro">
          <div className="max-w-7xl mx-auto px-4">
            <div className="service-tagline-pill">
              <span>Branding Made Simple</span>
            </div>
            <p className="service-intro-text">
              Inicio membantu brand tumbuh melalui strategi visual yang
              kuat—mulai dari brand campaign yang berdampak, konten sosial
              media yang engaging, fotografi berkualitas tinggi, hingga visual
              branding yang konsisten dan konsulting kreatif yang tepat sasaran.
              Kami hadir untuk membawa brand Anda ke level berikutnya.
            </p>
          </div>
        </section>

        {/* FRAME 1: CAROUSEL LAYANAN */}
        <section className="service-frame">
          <div className="max-w-7xl mx-auto px-4">
            <ServiceCarousel services={services} />
          </div>
        </section>

        {/* CTA STRIP DENGAN BACKGROUND GAMBAR STATIC */}
        <section className="cta-strip">
          <div className="max-w-7xl mx-auto px-4">
            <h2 className="cta-strip-title">Tertarik dengan projek kami?</h2>
            <a
              href="/portfolio"
              onClick={(e) => {
                e.preventDefault();
                if (onNavigate) onNavigate('portfolio');
              }}
              className="cta-strip-btn"
            >
              Lihat portofolio kita
            </a>
          </div>
        </section>
      </div>
    );
  }
}
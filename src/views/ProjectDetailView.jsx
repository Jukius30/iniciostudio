import React from 'react';
import BaseView from '../core/BaseView';
import SiteDataRepository from '../repositories/SiteDataRepository';

export default class ProjectDetailView extends BaseView {
  constructor(props) {
    super(props, 'Detail Portofolio - INÍCIO STUDIO');
  }

  componentDidMount() {
    super.componentDidMount();
    const project = SiteDataRepository.getProjectBySlug(this.props.slug);
    if (project) {
      document.title = `${project.title} - INÍCIO STUDIO`;
    }
  }

  componentDidUpdate(prevProps) {
    if (prevProps.slug !== this.props.slug) {
      window.scrollTo({ top: 0, behavior: 'smooth' });
      const project = SiteDataRepository.getProjectBySlug(this.props.slug);
      if (project) {
        document.title = `${project.title} - INÍCIO STUDIO`;
      }
    }
  }

  render() {
    const { slug, onSelectProject, onBackToPortfolio } = this.props;
    const project = SiteDataRepository.getProjectBySlug(slug);

    if (!project) {
      return (
        <div className="bg-[#D0C1A7] py-32 text-center">
          <h2 className="text-3xl font-bold text-[#394428] mb-6">
            Portofolio tidak ditemukan
          </h2>
          <button
            type="button"
            onClick={onBackToPortfolio}
            className="btn-next-portfolio"
          >
            <i className="bi bi-arrow-left" /> Kembali
          </button>
        </div>
      );
    }

    return (
      <div className="bg-[#D0C1A7] w-full pb-16">
        {/* ================= 1. HERO HEADER ================= */}
        <section
          className="detail-hero-banner"
          style={{
            backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("${project.heroBg}")`,
          }}
        >
          {project.heroBoxDesc ? (
            <div className="flex flex-col items-center gap-6 w-full max-w-[900px] p-5">
              <h1 className="detail-hero-title">{project.title}</h1>
              <div className="about-box-hero">
                <h2>{project.heroBoxTitle}</h2>
                <p>{project.heroBoxDesc}</p>
              </div>
            </div>
          ) : (
            <h1 className="detail-hero-title uppercase">
              {project.heroTitle || project.title}
            </h1>
          )}
        </section>

        {/* ================= 2. KONTEN UTAMA SESUAI TIPE PROJECT ================= */}

        {/* A. GASWARAS LAYOUT */}
        {project.layoutType === 'hero-box-market' && (
          <>
            <section className="detail-main-container">
              <div className="flex-layout-wrapper">
                <div className="flex-[1.2]">
                  <div className="brown-box-market">
                    <h2 className="font-bold text-[2.8rem] mb-4">
                      {project.marketTitle}
                    </h2>
                    {project.marketParagraphs.map((para, idx) => (
                      <p
                        key={idx}
                        className="text-justify leading-[1.7] text-[1.1rem] mb-4 last:mb-0"
                      >
                        {para}
                      </p>
                    ))}
                  </div>
                </div>
                <div className="flex-[0.8] flex justify-center items-center">
                  <img
                    src={project.logo}
                    alt={project.title}
                    className="max-w-[350px] w-full h-auto"
                  />
                </div>
              </div>
            </section>

            <section className="max-w-[1100px] mx-auto px-5 grid gap-8">
              {project.galleryStack.map((imgSrc, idx) => (
                <div key={idx}>
                  <img
                    src={imgSrc}
                    alt={`${project.title} ${idx + 1}`}
                    className="w-full rounded-[12px] shadow-[0_8px_20px_rgba(0,0,0,0.1)] block"
                  />
                </div>
              ))}
            </section>
          </>
        )}

        {/* B. AH PEK KOPITIAM LAYOUT */}
        {project.layoutType === 'ahpek' && (
          <>
            <section className="detail-main-container">
              <div className="flex-layout-wrapper">
                <div className="flex-[1.2]">
                  <div className="brown-box-market">
                    <h2 className="font-bold text-[2.8rem] mb-4 text-[#394428]">
                      {project.marketTitle}
                    </h2>
                    {project.marketParagraphs.map((para, idx) => (
                      <p
                        key={idx}
                        className="text-justify leading-[1.7] text-[1.1rem] mb-4 last:mb-0"
                      >
                        {para}
                      </p>
                    ))}
                  </div>
                </div>
                <div className="flex-[0.8] flex justify-center items-center min-w-[300px]">
                  <img
                    src={project.logo}
                    alt={project.title}
                    className="max-w-[350px] w-full h-auto"
                  />
                </div>
              </div>
            </section>

            <section className="max-w-[1100px] mx-auto my-20 px-5 grid grid-cols-1 md:grid-cols-2 gap-6">
              {project.splitGallery.map((item, idx) => (
                <div
                  key={idx}
                  className="w-full h-[450px] rounded-[15px] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.12)]"
                >
                  <img
                    src={item.src}
                    alt={item.alt}
                    className="w-full h-full object-cover block"
                  />
                </div>
              ))}
            </section>

            <section className="max-w-[1100px] mx-auto px-5">
              <img
                src={project.fullBanner.src}
                alt={project.fullBanner.alt}
                className="w-full rounded-[12px] shadow-[0_8px_25px_rgba(0,0,0,0.1)]"
              />
            </section>

            <section className="w-full overflow-hidden mt-20 mb-5 grid grid-cols-2 md:grid-cols-4 gap-0">
              {project.seamlessBottom.map((item, idx) => (
                <div key={idx} className="h-[450px] overflow-hidden">
                  <img
                    src={item.src}
                    alt={item.alt}
                    className="w-full h-full object-cover block transition-transform duration-500 hover:scale-110"
                  />
                </div>
              ))}
            </section>
          </>
        )}

        {/* C. ISYANA SARASVATI LAYOUT */}
        {project.layoutType === 'isyana' && (
          <>
            <section className="detail-main-container">
              <div className="flex-layout-wrapper">
                <div className="flex-[1.2]">
                  <div className="box-about">
                    <h2 className="font-bold text-[1.5rem] mb-4">
                      {project.boxSubtitle}
                    </h2>
                    <h2 className="font-bold text-[2.8rem] mb-4">
                      {project.boxTitle}
                    </h2>
                    <p className="text-justify leading-[1.7] m-0">
                      {project.boxDesc}
                    </p>
                  </div>
                </div>
                <div className="flex-[0.8] flex justify-center items-center">
                  <img
                    src={project.logo}
                    alt={project.title}
                    className="max-w-[320px] w-full h-auto"
                  />
                </div>
              </div>
            </section>

            <section className="max-w-[1200px] mx-auto py-14 px-5 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              {project.splitGallery.map((item, idx) => (
                <div key={idx} className="flex justify-center items-center">
                  <img
                    src={item.src}
                    alt={item.alt}
                    className="w-full h-auto object-cover transition-transform duration-500 hover:scale-105"
                  />
                </div>
              ))}
            </section>
          </>
        )}

        {/* D. LES AVENTURES DE L'ART DECO LAYOUT (HOVER IMAGE SWAP) */}
        {project.layoutType === 'adventure' && (
          <section className="detail-main-container">
            <div className="flex-layout-wrapper">
              <div className="flex-[1.2]">
                <div className="box-about rounded-[15px]">
                  <h2 className="font-bold text-[1.5rem] mb-4">
                    {project.boxSubtitle}
                  </h2>
                  <h2 className="font-bold text-[2.8rem] mb-4">
                    {project.boxTitle}
                  </h2>
                  <p className="text-justify leading-[1.7] m-0">
                    {project.boxDesc}
                  </p>
                </div>
              </div>
              <div className="flex-[0.8] flex justify-center items-center">
                <div className="hover-image-wrap">
                  <img
                    src={project.logoDefault}
                    className="adventure-logo-img img-default"
                    alt="Adventure Cover"
                  />
                  <img
                    src={project.logoHover}
                    className="adventure-logo-img img-hover"
                    alt="Adventure Character"
                  />
                </div>
              </div>
            </div>
          </section>
        )}

        {/* E. COOKIE UP YOUR DAY LAYOUT */}
        {project.layoutType === 'cookie' && (
          <section className="max-w-[1200px] mx-auto my-20 px-5">
            <div className="flex flex-col lg:flex-row gap-8 items-stretch mb-10">
              <div className="box-about flex-[1.5]">
                <h2 className="font-bold text-[1.5rem] mb-1">
                  {project.boxSubtitle}
                </h2>
                <h2 className="font-bold text-[2.8rem] mb-4">
                  {project.boxTitle}
                </h2>
                <p className="text-justify leading-[1.7] m-0">
                  {project.boxDesc}
                </p>
              </div>
              <div className="flex-1 flex justify-center">
                <img
                  src={project.sideBanner}
                  alt="Cookie Banner"
                  className="w-full max-w-[400px] h-auto rounded-[15px] object-cover"
                />
              </div>
            </div>

            <div className="w-full flex justify-center">
              <img
                src={project.bottomBillboard}
                alt="Cookie Billboard"
                className="w-full h-auto rounded-[15px]"
              />
            </div>
          </section>
        )}

        {/* F. HUTARAJA LAYOUT */}
        {project.layoutType === 'hutaraja' && (
          <section className="detail-main-container">
            <div className="box-about mb-10">
              <h2 className="font-bold text-[1.5rem] mb-2">
                {project.boxSubtitle}
              </h2>
              <h2 className="font-bold text-[2.8rem] mb-4">
                {project.boxTitle}
              </h2>
              <p className="text-justify leading-[1.7] m-0">{project.boxDesc}</p>
            </div>
            <div className="grid gap-6">
              {project.galleryStack.map((imgSrc, idx) => (
                <img
                  key={idx}
                  src={imgSrc}
                  alt={project.title}
                  className="w-full rounded-[15px] shadow-lg"
                />
              ))}
            </div>
          </section>
        )}

        {/* ================= 3. TOMBOL NAVIGASI BAWAH ================= */}
        {project.nextSlug && (
          <div className="text-center py-16">
            <button
              type="button"
              onClick={() => onSelectProject(project.nextSlug)}
              className="btn-next-portfolio"
            >
              Lihat portofolio berikutnya
            </button>
          </div>
        )}

        <div className="text-center py-6">
          <button
            type="button"
            onClick={onBackToPortfolio}
            className="btn-next-portfolio"
          >
            <i className="bi bi-arrow-left" /> Kembali
          </button>
        </div>
      </div>
    );
  }
}
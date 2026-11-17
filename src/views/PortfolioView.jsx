import React from 'react';
import BaseView from '../core/BaseView';
import SiteDataRepository from '../repositories/SiteDataRepository';

export default class PortfolioView extends BaseView {
  constructor(props) {
    super(props, 'Portofolio - INÍCIO STUDIO');
    this.state = {
      projects: SiteDataRepository.getProjects(),
    };
  }

  render() {
    const { onSelectProject } = this.props;
    const { projects } = this.state;

    return (
      <div className="bg-main">
        {/* HERO (100vh Sesuai About) */}
        <section className="portfolio-hero-section">
          <div className="portfolio-hero-content">
            <h1 className="portfolio-hero-title">Portofolio</h1>
            <p className="portfolio-hero-subtitle">
              Perjalanan kami telah mempertemukan kami dengan merek-merek
              terkemuka di industri mereka. Setiap kolaborasi telah memperkuat
              pemahaman kami tentang strategi khusus yang dibutuhkan untuk
              meningkatkan setiap jenis bisnis.
            </p>
          </div>
        </section>

        {/* INTRO / PERIODE */}
        <section className="portfolio-intro">
          <div className="max-w-7xl mx-auto px-4">
            <p className="portfolio-intro-text">
              Berikut adalah beberapa karya pilihan kami yang dibuat dalam
              periode ini
            </p>
          </div>
        </section>

        {/* GRID PORTFOLIO (3x2) */}
        <section className="portfolio-grid-wrapper">
          <div className="portfolio-grid-3x2">
            {projects.map((project) => (
              <div
                key={project.slug}
                onClick={() => onSelectProject && onSelectProject(project.slug)}
                className="portfolio-card"
              >
                <img
                  src={project.thumbnail}
                  alt={project.title}
                  className="portfolio-card-img"
                />
                <div className="portfolio-card-overlay">
                  <div className="portfolio-card-title">{project.title}</div>
                </div>
              </div>
            ))}
          </div>
        </section>
      </div>
    );
  }
}
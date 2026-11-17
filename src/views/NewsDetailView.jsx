import React from 'react';
import BaseView from '../core/BaseView';
import SiteDataRepository from '../repositories/SiteDataRepository';

export default class NewsDetailView extends BaseView {
  constructor(props) {
    super(props, 'Insight Detail - INÍCIO STUDIO');
  }

  componentDidMount() {
    super.componentDidMount();
    const article = SiteDataRepository.getInsightBySlug(this.props.slug);
    if (article) {
      document.title = `${article.title} - INÍCIO STUDIO`;
    }
  }

  render() {
    const { slug, onBackToInsight } = this.props;
    const article = SiteDataRepository.getInsightBySlug(slug);

    if (!article) {
      return (
        <div className="bg-[#D0C1A7] py-32 text-center">
          <h2 className="text-3xl font-bold text-[#394428] mb-6">
            Artikel tidak ditemukan
          </h2>
          <button
            type="button"
            onClick={onBackToInsight}
            className="btn-back"
          >
            ← Kembali ke Insight
          </button>
        </div>
      );
    }

    return (
      <div className="bg-[#D0C1A7] w-full pt-10">
        <div className="max-w-[900px] mx-auto px-5">
          <button
            type="button"
            onClick={onBackToInsight}
            className="btn-back"
          >
            ← Kembali ke Insight
          </button>
        </div>

        <div className="news-page-wrapper">
          <header className="news-detail-header">
            <h1 className="news-detail-title">{article.title}</h1>
            <div className="news-meta">
              <span>
                By <span className="creator-name">{article.author}</span>
              </span>
              <span className="opacity-50">|</span>
              <span>{article.date}</span>
            </div>
          </header>

          <article className="news-content-container">
            {article.blocks.map((block, idx) => {
              if (block.type === 'p') {
                return (
                  <div key={idx} className="news-paragraph">
                    {block.text}
                  </div>
                );
              }
              if (block.type === 'h2') {
                return (
                  <div key={idx} className="news-sub-heading">
                    {block.text}
                  </div>
                );
              }
              if (block.type === 'h3') {
                return (
                  <div key={idx} className="news-sub-sub-heading">
                    {block.text}
                  </div>
                );
              }
              if (block.type === 'image') {
                return (
                  <div key={idx} className="news-main-image-wrapper">
                    <img
                      src={article.articleImage}
                      className="news-main-img"
                      alt="Inicio Studio Team"
                    />
                  </div>
                );
              }
              if (block.type === 'ul') {
                return (
                  <ul key={idx} className="news-list">
                    {block.items.map((item, i) => (
                      <li key={i}>{item}</li>
                    ))}
                  </ul>
                );
              }
              if (block.type === 'numberedServices') {
                return (
                  <div key={idx} className="service-list-container">
                    {block.items.map((srv, i) => (
                      <div key={i} className="service-item">
                        <span className="service-number">{srv.num}</span>
                        <div className="service-text-wrapper">
                          <span className="service-name">{srv.name}</span>
                          <p className="service-desc">{srv.desc}</p>
                        </div>
                      </div>
                    ))}
                  </div>
                );
              }
              return null;
            })}

            <div className="back-to-news">
              <button
                type="button"
                onClick={onBackToInsight}
                className="btn-back"
              >
                Back to All News
              </button>
            </div>
          </article>
        </div>
      </div>
    );
  }
}
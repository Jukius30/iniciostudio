import React from 'react';
import BaseView from '../core/BaseView';
import SiteDataRepository from '../repositories/SiteDataRepository';

export default class InsightView extends BaseView {
  constructor(props) {
    super(props, 'Insights - INÍCIO STUDIO');
    this.state = {
      articles: SiteDataRepository.getInsights(),
    };
  }

  render() {
    const { onSelectArticle } = this.props;
    const { articles } = this.state;

    return (
      <div className="insight-page-wrapper">
        {/* SECTION 1: HERO */}
        <section className="insight-hero">
          <div className="max-w-7xl mx-auto px-4">
            <h1 className="insight-hero-title">Insights</h1>
            <p className="text-white/75 text-xl font-medium mt-2">
              Latest trends, news, and creative updates from Inicio Studio.
            </p>
          </div>
        </section>

        {/* SECTION 2: NEWS GRID */}
        <section className="news-section">
          <div className="px-4">
            <div className="news-header">
              <h2>Latest News</h2>
              <p>Stay updated with our newest projects and industry insights.</p>
            </div>

            <div className="insight-news-grid">
              {articles.map((article) => (
                <div key={article.slug} className="news-card">
                  <div className="news-img-wrapper">
                    <img
                      src={article.cardImage}
                      className="news-img"
                      alt={article.title}
                    />
                  </div>
                  <div className="news-content">
                    <span className="news-date">{article.date}</span>
                    <button
                      type="button"
                      onClick={() =>
                        onSelectArticle && onSelectArticle(article.slug)
                      }
                      className="news-title"
                    >
                      {article.title}
                    </button>
                    <p className="news-excerpt">{article.excerpt}</p>
                    <button
                      type="button"
                      onClick={() =>
                        onSelectArticle && onSelectArticle(article.slug)
                      }
                      className="btn-read-more"
                    >
                      Read More <i className="bi bi-arrow-right" />
                    </button>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </section>
      </div>
    );
  }
}
import React, { Component } from 'react';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import FloatingSocialBar from './components/FloatingSocialBar';
import ContactModal from './components/ContactModal';
import HomeView from './views/HomeView';
import AboutView from './views/AboutView';
import ServicesView from './views/ServicesView';
import PortfolioView from './views/PortfolioView';
import ProjectDetailView from './views/ProjectDetailView';
import InsightView from './views/InsightView';
import NewsDetailView from './views/NewsDetailView';

export default class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      currentPage: 'home',
      selectedSlug: null,
      isContactModalOpen: false,
    };

    this.handleNavigate = this.handleNavigate.bind(this);
    this.handleSelectProject = this.handleSelectProject.bind(this);
    this.handleSelectArticle = this.handleSelectArticle.bind(this);
    this.openContactModal = this.openContactModal.bind(this);
    this.closeContactModal = this.closeContactModal.bind(this);
  }

  handleNavigate(page) {
    this.setState({ currentPage: page, selectedSlug: null });
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  handleSelectProject(slug) {
    this.setState({ currentPage: 'project-detail', selectedSlug: slug });
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  handleSelectArticle(slug) {
    this.setState({ currentPage: 'news-detail', selectedSlug: slug });
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  openContactModal() {
    this.setState({ isContactModalOpen: true });
  }

  closeContactModal() {
    this.setState({ isContactModalOpen: false });
  }

  renderActivePage() {
    const { currentPage, selectedSlug } = this.state;

    switch (currentPage) {
      case 'about':
        return <AboutView onOpenContactModal={this.openContactModal} />;
      case 'services':
        return (
          <ServicesView
            onNavigate={this.handleNavigate}
            onOpenContactModal={this.openContactModal}
          />
        );
      case 'portfolio':
        return <PortfolioView onSelectProject={this.handleSelectProject} />;
      case 'project-detail':
        return (
          <ProjectDetailView
            slug={selectedSlug}
            onSelectProject={this.handleSelectProject}
            onBackToPortfolio={() => this.handleNavigate('portfolio')}
          />
        );
      case 'insight':
        return <InsightView onSelectArticle={this.handleSelectArticle} />;
      case 'news-detail':
        return (
          <NewsDetailView
            slug={selectedSlug}
            onBackToInsight={() => this.handleNavigate('insight')}
          />
        );
      case 'home':
      default:
        return (
          <HomeView
            onNavigate={this.handleNavigate}
            onOpenContactModal={this.openContactModal}
          />
        );
    }
  }

  render() {
    const { currentPage, isContactModalOpen } = this.state;

    return (
      <div className="min-h-screen flex flex-col bg-[#D0C1A7] text-[#333333] font-['League_Spartan',sans-serif]">
        <Navbar
          currentPage={currentPage}
          onNavigate={this.handleNavigate}
          onOpenContactModal={this.openContactModal}
        />

        <main className="flex-1 w-full">{this.renderActivePage()}</main>

        <Footer onNavigate={this.handleNavigate} />

        <FloatingSocialBar />

        <ContactModal
          isOpen={isContactModalOpen}
          onClose={this.closeContactModal}
        />
      </div>
    );
  }
}
import React, { Component } from 'react';

export default class Navbar extends Component {
  constructor(props) {
    super(props);
    this.state = {
      mobileMenuOpen: false,
    };

    this.navItems = [
      { id: 'about', label: 'About' },
      { id: 'services', label: 'Services' },
      { id: 'portfolio', label: 'Portfolio' },
      { id: 'insight', label: 'Insight' },
    ];

    this.toggleMobileMenu = this.toggleMobileMenu.bind(this);
    this.handleSelectNav = this.handleSelectNav.bind(this);
  }

  toggleMobileMenu() {
    this.setState((prev) => ({ mobileMenuOpen: !prev.mobileMenuOpen }));
  }

  handleSelectNav(viewId) {
    this.setState({ mobileMenuOpen: false });
    this.props.onNavigate(viewId);
  }

  render() {
    const { activeView, onOpenContactModal } = this.props;
    const { mobileMenuOpen } = this.state;

    return (
      <header className="sticky top-0 z-50 bg-[#f8f9fa] border-b border-[#dee2e6]">
        <div className="w-full px-4 md:px-12 py-2 flex flex-wrap items-center justify-between">
          {/* Brand Logo */}
          <button
            onClick={() => this.handleSelectNav('home')}
            className="flex items-center no-underline text-[#394428] cursor-pointer bg-transparent border-0 p-0"
          >
            <img
              src="/assets/INICIOLOGO.png"
              alt="Logo"
              className="w-[48px] h-[48px] mr-[10px] object-contain"
            />
            <div className="font-extrabold text-[18px] lg:text-[20px] tracking-[0.05em] text-[#394428]">
              INÍCIO STUDIO
            </div>
          </button>

          {/* Mobile Hamburger Button */}
          <button
            type="button"
            onClick={this.toggleMobileMenu}
            aria-label="Toggle navigation"
            className="lg:hidden p-2 rounded-md border border-black/10 text-[#394428] cursor-pointer"
          >
            <i className={`bi ${mobileMenuOpen ? 'bi-x-lg' : 'bi-list'} text-2xl`} />
          </button>

          {/* Navigation Links */}
          <div
            className={`${
              mobileMenuOpen ? 'block' : 'hidden'
            } w-full lg:flex lg:w-auto lg:items-center mt-2.5 lg:mt-0 bg-[#f8f9fa] p-4 lg:p-0 rounded-[10px] lg:rounded-none`}
          >
            <nav className="flex flex-col lg:flex-row lg:ml-auto">
              {this.navItems.map((item) => {
                const isActive = activeView === item.id;
                return (
                  <button
                    key={item.id}
                    onClick={() => this.handleSelectNav(item.id)}
                    className={`nav-link-inicio text-left lg:text-center px-0 lg:px-4 py-2.5 lg:py-2 border-b border-black/5 lg:border-none relative transition-all duration-300 cursor-pointer bg-transparent ${
                      isActive
                        ? 'active text-[#8A9165] opacity-100 font-extrabold'
                        : 'text-[#394428] opacity-50 hover:opacity-100 font-bold'
                    }`}
                  >
                    {item.label}
                  </button>
                );
              })}

              {/* Trigger Contact Modal */}
              <button
                onClick={() => {
                  this.setState({ mobileMenuOpen: false });
                  onOpenContactModal();
                }}
                className="nav-link-inicio text-left lg:text-center px-0 lg:px-4 py-2.5 lg:py-2 relative transition-all duration-300 cursor-pointer bg-transparent text-[#394428] opacity-50 hover:opacity-100 font-bold"
              >
                Contact
              </button>
            </nav>
          </div>
        </div>
      </header>
    );
  }
}
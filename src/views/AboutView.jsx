import React from 'react';
import BaseView from '../core/BaseView';
import SiteDataRepository from '../repositories/SiteDataRepository';
import ContactFormModel from '../models/ContactFormModel';
import ContactMailService from '../services/ContactMailService';
import WhyUsCard from '../components/WhyUsCard';

export default class AboutView extends BaseView {
  constructor(props) {
    super(props, 'About - INÍCIO STUDIO');
    this.state = {
      teamMembers: SiteDataRepository.getTeamMembers(),
      whyUsItems: SiteDataRepository.getWhyUsItems(),
      contactForm: new ContactFormModel(),
      contactErrors: {},
      contactFeedback: null,
      isSubmitting: false,
    };

    this.handleInputChange = this.handleInputChange.bind(this);
    this.handleContactSubmit = this.handleContactSubmit.bind(this);
  }

  handleInputChange(e) {
    const { name, value } = e.target;
    const updated = new ContactFormModel(
      this.state.contactForm.name,
      this.state.contactForm.email,
      this.state.contactForm.subject,
      this.state.contactForm.message
    );
    updated[name] = value;

    this.setState((prev) => ({
      contactForm: updated,
      contactErrors: { ...prev.contactErrors, [name]: '' },
    }));
  }

  async handleContactSubmit(e) {
    e.preventDefault();
    const { isValid, errors } = this.state.contactForm.validate();

    if (!isValid) {
      this.setState({
        contactErrors: errors,
        contactFeedback: {
          type: 'error',
          text: 'Mohon periksa kembali semua isian formulir.',
        },
      });
      return;
    }

    this.setState({ isSubmitting: true, contactFeedback: null });

    try {
      await ContactMailService.send(this.state.contactForm);
      this.setState({
        contactForm: new ContactFormModel(),
        contactErrors: {},
        contactFeedback: {
          type: 'success',
          text: 'Pesan Anda berhasil dikirim!',
        },
        isSubmitting: false,
      });
    } catch (err) {
      this.setState({
        contactFeedback: {
          type: 'error',
          text: err.message || 'Gagal mengirim pesan.',
        },
        isSubmitting: false,
      });
    }
  }

  render() {
    const {
      teamMembers,
      whyUsItems,
      contactForm,
      contactErrors,
      contactFeedback,
      isSubmitting,
    } = this.state;

    return (
      <div className="bg-[#D0C1A7] w-full relative">
        {/* ================= Section 1: Hero ================= */}
        <section
          className="relative w-full h-screen min-h-[400px] bg-cover bg-center flex justify-center items-center text-white text-center"
          style={{
            backgroundImage:
              'linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("/assets/about.png")',
          }}
        >
          <h1 className="text-[clamp(3rem,8vw,5.5rem)] font-bold tracking-[0.05em] drop-shadow-[2px_4px_10px_rgba(0,0,0,0.3)]">
            Inicio Studio
          </h1>
        </section>

        {/* ================= Section 2: Detail ================= */}
        <section className="grid grid-cols-1 lg:grid-cols-[1fr_minmax(auto,850px)_1fr] w-full min-h-[550px] bg-[#D0C1A7] m-0">
          <div className="hidden lg:block" />

          {/* Green Box Centered */}
          <div className="lg:col-start-2 bg-[#394428] flex flex-col justify-center items-center px-[20px] py-[50px] lg:px-[50px] lg:py-[80px] text-white text-left">
            <div className="max-w-[650px]">
              <h2 className="text-[clamp(2rem,5vw,3.5rem)] font-bold mb-6 text-white">
                Inicio Studio
              </h2>
              <p className="text-[1.15rem] leading-[1.8] text-justify text-white mb-6">
                <strong>INICIO Studio</strong> adalah sebuah creative agency yang
                berfokus pada desain brand. Kami membantu bisnis baik yang baru
                memulai maupun yang sudah berjalan untuk membangun identitas
                visual profesional.
              </p>
              <p className="text-[1.15rem] leading-[1.8] text-justify text-white mb-0">
                Hadir sebagai solusi bagi mereka yang belum memahami dunia
                branding namun ingin mengembangkan bisnis yang terlihat lebih
                profesional.
              </p>
            </div>
          </div>

          {/* Logo Outside Right */}
          <div className="lg:col-start-3 flex justify-center items-center p-[40px]">
            <div>
              <img
                src="/assets/INICIOLOGO.png"
                alt="Logo"
                className="max-w-[300px] w-full h-auto [filter:brightness(0)_saturate(100%)_invert(21%)_sepia(11%)_saturate(1435%)_hue-rotate(42deg)_brightness(95%)_contrast(92%)]"
              />
            </div>
          </div>
        </section>

        {/* ================= Section 3: Team ================= */}
        <section className="p-0 w-full relative bg-[#D0C1A7] overflow-hidden">
          <div className="relative w-full leading-none">
            <img
              src="/assets/grup.jpg"
              alt="Team"
              className="w-full h-auto block min-h-[450px] sm:min-h-[300px] object-cover object-[70%] sm:object-center"
            />

            <div className="absolute inset-0 w-full h-full pointer-events-none flex flex-col items-center">
              <h2 className="text-[clamp(2rem,5vw,4.5rem)] font-bold text-white drop-shadow-[2px_4px_15px_rgba(0,0,0,0.6)] mt-[15%] sm:mt-[5%] pointer-events-auto leading-normal">
                Kenali Tim Kami
              </h2>

              <div className="w-full h-full">
                {teamMembers.map((member) => (
                  <div
                    key={member.id}
                    className={`member-name-badge absolute ${member.positionClass} text-[clamp(0.7rem,1.5vw,1.3rem)] font-semibold text-white px-[12px] py-[6px] sm:px-[20px] sm:py-[8px] bg-transparent border-2 border-white/80 rounded-[50px] cursor-pointer transition-all duration-300 pointer-events-auto flex items-center gap-[12px] drop-shadow-[1px_1px_5px_rgba(0,0,0,0.5)] whitespace-nowrap hover:-translate-y-[5px] hover:bg-[#394428] hover:border-[#394428] hover:drop-shadow-none leading-normal`}
                  >
                    {member.name}
                  </div>
                ))}
              </div>
            </div>
          </div>
        </section>

        {/* ================= Section 4: Why Us? ================= */}
        <section className="bg-[#394428] py-[clamp(60px,10vw,100px)] text-center text-white">
          <div className="max-w-7xl mx-auto px-4">
            <h2 className="text-[clamp(2.5rem,5vw,4rem)] font-bold mb-[clamp(40px,8vw,80px)]">
              Kenapa Kami?
            </h2>

            <div className="flex justify-center gap-[30px] flex-wrap px-[20px]">
              {whyUsItems.map((item) => (
                <WhyUsCard key={item.id} item={item} />
              ))}
            </div>
          </div>
        </section>

        {/* ================= Section 5: Contact ================= */}
        <section className="bg-[#394428] py-[100px] text-white">
          <div className="flex flex-col lg:flex-row justify-between items-start gap-[60px] lg:gap-[80px] max-w-[1100px] mx-auto px-[20px]">
            {/* Contact Form Wrapper */}
            <div className="w-full lg:flex-[1.2]">
              <h2 className="text-[clamp(2rem,5vw,3rem)] font-bold mb-[40px]">
                Ayo Kontak Kami!
              </h2>

              {contactFeedback && (
                <div
                  className={`mb-6 px-5 py-3 rounded-[12px] text-sm text-white ${
                    contactFeedback.type === 'success'
                      ? 'bg-[#8A9165]'
                      : 'bg-red-800/80'
                  }`}
                >
                  {contactFeedback.text}
                </div>
              )}

              <form onSubmit={this.handleContactSubmit} noValidate>
                <div className="mb-[25px]">
                  <label className="block text-[1.2rem] font-semibold mb-[10px]">
                    Nama
                  </label>
                  <input
                    type="text"
                    name="name"
                    value={contactForm.name}
                    onChange={this.handleInputChange}
                    placeholder="Name"
                    className="w-full bg-[#2a331d] border-none rounded-[12px] px-[20px] py-[15px] text-white outline-none placeholder:text-white/40"
                    required
                  />
                  {contactErrors.name && (
                    <p className="text-red-300 text-xs mt-1">
                      {contactErrors.name}
                    </p>
                  )}
                </div>

                <div className="mb-[25px]">
                  <label className="block text-[1.2rem] font-semibold mb-[10px]">
                    Alamat Email
                  </label>
                  <input
                    type="email"
                    name="email"
                    value={contactForm.email}
                    onChange={this.handleInputChange}
                    placeholder="Email Address"
                    className="w-full bg-[#2a331d] border-none rounded-[12px] px-[20px] py-[15px] text-white outline-none placeholder:text-white/40"
                    required
                  />
                  {contactErrors.email && (
                    <p className="text-red-300 text-xs mt-1">
                      {contactErrors.email}
                    </p>
                  )}
                </div>

                <div className="mb-[25px]">
                  <label className="block text-[1.2rem] font-semibold mb-[10px]">
                    Subjek
                  </label>
                  <input
                    type="text"
                    name="subject"
                    value={contactForm.subject}
                    onChange={this.handleInputChange}
                    placeholder="Subject"
                    className="w-full bg-[#2a331d] border-none rounded-[12px] px-[20px] py-[15px] text-white outline-none placeholder:text-white/40"
                    required
                  />
                  {contactErrors.subject && (
                    <p className="text-red-300 text-xs mt-1">
                      {contactErrors.subject}
                    </p>
                  )}
                </div>

                <div className="mb-[25px]">
                  <label className="block text-[1.2rem] font-semibold mb-[10px]">
                    Pesan
                  </label>
                  <textarea
                    name="message"
                    rows="5"
                    value={contactForm.message}
                    onChange={this.handleInputChange}
                    placeholder="Message"
                    className="w-full bg-[#2a331d] border-none rounded-[12px] px-[20px] py-[15px] text-white outline-none placeholder:text-white/40"
                    required
                  />
                  {contactErrors.message && (
                    <p className="text-red-300 text-xs mt-1">
                      {contactErrors.message}
                    </p>
                  )}
                </div>

                <button
                  type="submit"
                  disabled={isSubmitting}
                  className="bg-[#8A9165] hover:bg-[#9ba375] text-white border-none py-[15px] px-0 w-full rounded-[30px] text-[1.5rem] font-bold cursor-pointer mt-[20px] transition-colors duration-300"
                >
                  {isSubmitting ? 'Mengirim...' : 'Kirim Pesan'}
                </button>
              </form>
            </div>

            {/* Contact Info Wrapper */}
            <div className="w-full lg:flex-[0.8] flex flex-col items-center">
              <img
                src="/assets/INICIOLOGO.png"
                alt="INÍCIO STUDIO"
                className="max-w-[250px] mb-[40px] brightness-0 invert"
              />
              <div className="list-none p-0 w-full">
                <div className="flex items-center gap-[15px] mb-[20px] text-[1.1rem]">
                  <i className="bi bi-envelope-fill" />
                  <a
                    href="mailto:inicio.studioid@gmail.com"
                    className="text-white no-underline hover:underline"
                  >
                    inicio.studioid@gmail.com
                  </a>
                </div>
                <div className="flex items-center gap-[15px] mb-[20px] text-[1.1rem]">
                  <i className="bi bi-whatsapp" />
                  <span>085103726662</span>
                </div>
                <div className="flex items-center gap-[15px] mb-[20px] text-[1.1rem]">
                  <i className="bi bi-instagram" />
                  <a
                    href="https://www.instagram.com/iniciostudio.id/"
                    target="_blank"
                    rel="noreferrer"
                    className="text-white no-underline hover:underline"
                  >
                    iniciostudio.id
                  </a>
                </div>
                <div className="flex items-center gap-[15px] mb-[20px] text-[1.1rem]">
                  <i className="bi bi-linkedin" />
                  <a
                    href="https://www.linkedin.com/in/inicio-studio-a086b5325/?skipRedirect=true"
                    target="_blank"
                    rel="noreferrer"
                    className="text-white no-underline hover:underline"
                  >
                    Inicio Studio
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* ================= Section 6: Map ================= */}
        <section className="w-full h-[450px] leading-none bg-[#D0C1A7]">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.691924846467!2d112.63953767476059!3d-7.275841892731057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fdf0084323e7%3A0xc3f345c22538f5f4!2sUniversitas%20Ciputra%20Surabaya!5e0!3m2!1sid!2sid!4v1714440000000!5m2!1sid!2sid"
            className="w-full h-[450px] border-0"
            allowFullScreen
            loading="lazy"
            referrerPolicy="no-referrer-when-downgrade"
            title="Lokasi INÍCIO STUDIO"
          />
        </section>
      </div>
    );
  }
}
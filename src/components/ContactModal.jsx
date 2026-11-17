import React, { Component } from 'react';
import ContactFormModel from '../models/ContactFormModel';
import ContactMailService from '../services/ContactMailService';

export default class ContactModal extends Component {
  constructor(props) {
    super(props);
    this.state = {
      formData: new ContactFormModel(),
      errors: {},
      feedback: null,
      isSubmitting: false,
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(e) {
    const { name, value } = e.target;
    const updatedModel = new ContactFormModel(
      this.state.formData.name,
      this.state.formData.email,
      this.state.formData.subject,
      this.state.formData.message
    );
    updatedModel[name] = value;

    this.setState((prev) => ({
      formData: updatedModel,
      errors: { ...prev.errors, [name]: '' },
    }));
  }

  async handleSubmit(e) {
    e.preventDefault();
    const { isValid, errors } = this.state.formData.validate();

    if (!isValid) {
      this.setState({
        errors,
        feedback: { type: 'error', text: 'Mohon lengkapi semua kolom dengan benar.' },
      });
      return;
    }

    this.setState({ isSubmitting: true, feedback: null });

    try {
      await ContactMailService.send(this.state.formData);
      this.setState({
        formData: new ContactFormModel(),
        errors: {},
        feedback: { type: 'success', text: 'Pesan berhasil dikirim!' },
        isSubmitting: false,
      });
    } catch (err) {
      this.setState({
        feedback: { type: 'error', text: err.message || 'Gagal mengirim pesan.' },
        isSubmitting: false,
      });
    }
  }

  render() {
    const { isOpen, onClose } = this.props;
    const { formData, errors, feedback, isSubmitting } = this.state;

    if (!isOpen) return null;

    return (
      <div
        className="fixed inset-0 z-[10000] flex items-center justify-center bg-black/60 backdrop-blur-xs p-4 overflow-y-auto"
        onClick={onClose}
      >
        <div
          className="w-full max-w-4xl bg-[#2D341F] rounded-[30px] shadow-2xl p-6 md:p-12 relative my-8"
          onClick={(e) => e.stopPropagation()}
        >
          {/* Close Button */}
          <button
            type="button"
            onClick={onClose}
            aria-label="Close"
            className="absolute top-6 right-6 text-white/70 hover:text-white text-2xl cursor-pointer bg-transparent border-0"
          >
            <i className="bi bi-x-lg" />
          </button>

          <div className="grid grid-cols-1 lg:grid-cols-12 items-center gap-8">
            {/* Kolom Form (col-lg-7) */}
            <div className="lg:col-span-7">
              <h2 className="font-bold text-white mb-6 text-[2rem]">
                Ayo Kontak Kami!
              </h2>

              {feedback && (
                <div
                  className={`mb-4 px-4 py-3 rounded-[12px] text-sm text-white ${
                    feedback.type === 'success' ? 'bg-[#8A9165]' : 'bg-red-800/80'
                  }`}
                >
                  {feedback.text}
                </div>
              )}

              <form onSubmit={this.handleSubmit} noValidate>
                <div className="mb-3">
                  <label className="block text-white text-sm font-bold mb-1">
                    Nama
                  </label>
                  <input
                    type="text"
                    name="name"
                    value={formData.name}
                    onChange={this.handleChange}
                    placeholder="Name"
                    className="w-full bg-[#1F2415] border-none rounded-[12px] text-white px-[20px] py-[12px] text-[0.9rem] placeholder:text-white/40 focus:outline-none"
                    required
                  />
                  {errors.name && (
                    <p className="text-red-300 text-xs mt-1">{errors.name}</p>
                  )}
                </div>

                <div className="mb-3">
                  <label className="block text-white text-sm font-bold mb-1">
                    Alamat Email
                  </label>
                  <input
                    type="email"
                    name="email"
                    value={formData.email}
                    onChange={this.handleChange}
                    placeholder="Email Adress"
                    className="w-full bg-[#1F2415] border-none rounded-[12px] text-white px-[20px] py-[12px] text-[0.9rem] placeholder:text-white/40 focus:outline-none"
                    required
                  />
                  {errors.email && (
                    <p className="text-red-300 text-xs mt-1">{errors.email}</p>
                  )}
                </div>

                <div className="mb-3">
                  <label className="block text-white text-sm font-bold mb-1">
                    Subjek
                  </label>
                  <input
                    type="text"
                    name="subject"
                    value={formData.subject}
                    onChange={this.handleChange}
                    placeholder="Subject"
                    className="w-full bg-[#1F2415] border-none rounded-[12px] text-white px-[20px] py-[12px] text-[0.9rem] placeholder:text-white/40 focus:outline-none"
                    required
                  />
                  {errors.subject && (
                    <p className="text-red-300 text-xs mt-1">{errors.subject}</p>
                  )}
                </div>

                <div className="mb-6">
                  <label className="block text-white text-sm font-bold mb-1">
                    Pesan
                  </label>
                  <textarea
                    name="message"
                    rows="3"
                    value={formData.message}
                    onChange={this.handleChange}
                    placeholder="Message"
                    className="w-full bg-[#1F2415] border-none rounded-[12px] text-white px-[20px] py-[12px] text-[0.9rem] placeholder:text-white/40 focus:outline-none"
                    required
                  />
                  {errors.message && (
                    <p className="text-red-300 text-xs mt-1">{errors.message}</p>
                  )}
                </div>

                <button
                  type="submit"
                  disabled={isSubmitting}
                  className="w-full bg-[#8A9165] hover:bg-[#a3ab7a] text-white border-none py-[12px] rounded-[20px] font-bold transition-colors duration-300 text-[1.1rem] cursor-pointer"
                >
                  {isSubmitting ? 'Mengirim...' : 'Kirim Pesan'}
                </button>
              </form>
            </div>

            {/* Kolom Info Kontak & Logo Putih (col-lg-5) */}
            <div className="lg:col-span-5 text-white lg:pl-8 mt-4 lg:mt-0 text-center lg:text-left">
              <div className="text-center mb-10 hidden lg:block">
                <img
                  src="/assets/logoputih.png"
                  width="85"
                  alt="Logo"
                  className="mx-auto"
                />
                <h4 className="font-bold mt-2 tracking-[2px] text-xl">
                  INÍCIO STUDIO
                </h4>
              </div>

              <div className="space-y-3 text-left text-[0.95rem]">
                <p className="flex items-center">
                  <i className="bi bi-envelope-fill mr-4 text-lg" />
                  inicio.studioid@gmail.com
                </p>
                <p className="flex items-center">
                  <i className="bi bi-whatsapp mr-4 text-lg" />
                  <a
                    href="https://wa.me/6285103726662"
                    target="_blank"
                    rel="noreferrer"
                    className="text-white no-underline hover:underline"
                  >
                    (+62) 85103726662
                  </a>
                </p>
                <p className="flex items-center">
                  <i className="bi bi-instagram mr-4 text-lg" />
                  <a
                    href="https://www.instagram.com/iniciostudio.id/"
                    target="_blank"
                    rel="noreferrer"
                    className="text-white no-underline hover:underline"
                  >
                    iniciostudio.id
                  </a>
                </p>
                <p className="flex items-center">
                  <i className="bi bi-linkedin mr-4 text-lg" />
                  <a
                    href="https://www.linkedin.com/in/inicio-studio-a086b5325/?skipRedirect=true"
                    target="_blank"
                    rel="noreferrer"
                    className="text-white no-underline hover:underline"
                  >
                    Inicio Studio
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
}
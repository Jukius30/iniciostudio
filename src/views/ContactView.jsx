import React from 'react';
import BaseView from '../core/BaseView';
import ContactFormModel from '../models/ContactFormModel';
import ContactMailService from '../services/ContactMailService';

export default class ContactView extends BaseView {
  constructor(props) {
    super(props, 'Contact - Website Profile');
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

    this.setState((prevState) => ({
      formData: updatedModel,
      errors: { ...prevState.errors, [name]: '' },
    }));
  }

  async handleSubmit(e) {
    e.preventDefault();
    const { isValid, errors } = this.state.formData.validate();

    if (!isValid) {
      this.setState({
        errors,
        feedback: { type: 'error', text: 'Periksa kembali isian formulir Anda.' },
      });
      return;
    }

    this.setState({ isSubmitting: true, feedback: null });

    try {
      await ContactMailService.send(this.state.formData);
      this.setState({
        formData: new ContactFormModel(),
        errors: {},
        feedback: { type: 'success', text: 'Pesan Anda berhasil dikirim!' },
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
    const { formData, errors, feedback, isSubmitting } = this.state;

    return (
      <section className="py-16 px-6 flex items-center justify-center">
        <div className="w-full max-w-lg bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl">
          <h2 className="text-2xl font-bold text-cyan-400">Hubungi Kami</h2>
          <p className="text-slate-400 text-sm mt-1 mb-6">
            Kirimkan pesan atau pertanyaan Anda melalui formulir di bawah ini.
          </p>

          {feedback && (
            <div
              className={`mb-6 p-4 rounded-lg text-sm border ${
                feedback.type === 'success'
                  ? 'bg-emerald-950/60 border-emerald-500/50 text-emerald-300'
                  : 'bg-rose-950/60 border-rose-500/50 text-rose-300'
              }`}
            >
              {feedback.text}
            </div>
          )}

          <form onSubmit={this.handleSubmit} className="space-y-5" noValidate>
            <div>
              <label className="block text-sm font-medium text-slate-300 mb-1">
                Nama Lengkap
              </label>
              <input
                type="text"
                name="name"
                value={formData.name}
                onChange={this.handleChange}
                placeholder="Masukkan nama Anda"
                className={`w-full px-4 py-2.5 rounded-lg bg-slate-950 border ${
                  errors.name ? 'border-rose-500' : 'border-slate-700 focus:border-cyan-400'
                } text-slate-100 focus:outline-none transition-colors`}
              />
              {errors.name && <p className="text-rose-400 text-xs mt-1">{errors.name}</p>}
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-300 mb-1">
                Alamat Email
              </label>
              <input
                type="email"
                name="email"
                value={formData.email}
                onChange={this.handleChange}
                placeholder="nama@email.com"
                className={`w-full px-4 py-2.5 rounded-lg bg-slate-950 border ${
                  errors.email ? 'border-rose-500' : 'border-slate-700 focus:border-cyan-400'
                } text-slate-100 focus:outline-none transition-colors`}
              />
              {errors.email && <p className="text-rose-400 text-xs mt-1">{errors.email}</p>}
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-300 mb-1">
                Subjek
              </label>
              <input
                type="text"
                name="subject"
                value={formData.subject}
                onChange={this.handleChange}
                placeholder="Perihal pesan"
                className={`w-full px-4 py-2.5 rounded-lg bg-slate-950 border ${
                  errors.subject ? 'border-rose-500' : 'border-slate-700 focus:border-cyan-400'
                } text-slate-100 focus:outline-none transition-colors`}
              />
              {errors.subject && <p className="text-rose-400 text-xs mt-1">{errors.subject}</p>}
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-300 mb-1">
                Pesan
              </label>
              <textarea
                name="message"
                rows="4"
                value={formData.message}
                onChange={this.handleChange}
                placeholder="Tuliskan detail pesan Anda..."
                className={`w-full px-4 py-2.5 rounded-lg bg-slate-950 border ${
                  errors.message ? 'border-rose-500' : 'border-slate-700 focus:border-cyan-400'
                } text-slate-100 focus:outline-none transition-colors`}
              />
              {errors.message && <p className="text-rose-400 text-xs mt-1">{errors.message}</p>}
            </div>

            <button
              type="submit"
              disabled={isSubmitting}
              className="w-full py-3 px-4 rounded-lg bg-cyan-500 hover:bg-cyan-400 disabled:bg-slate-700 text-slate-950 font-semibold transition-colors cursor-pointer"
            >
              {isSubmitting ? 'Mengirim...' : 'Kirim Pesan'}
            </button>
          </form>
        </div>
      </section>
    );
  }
}
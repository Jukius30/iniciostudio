import BaseModel from '../core/BaseModel';

export default class ContactFormModel extends BaseModel {
  constructor(name = '', email = '', subject = '', message = '') {
    super();
    this.name = name;
    this.email = email;
    this.subject = subject;
    this.message = message;
  }

  validate() {
    const errors = {};

    if (!this.name.trim()) {
      errors.name = 'Nama wajib diisi.';
    }
    if (!this.email.trim()) {
      errors.email = 'Email wajib diisi.';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email)) {
      errors.email = 'Format email tidak valid.';
    }
    if (!this.subject.trim()) {
      errors.subject = 'Subjek pesan wajib diisi.';
    }
    if (!this.message.trim() || this.message.trim().length < 10) {
      errors.message = 'Pesan minimal harus terdiri dari 10 karakter.';
    }

    return {
      isValid: Object.keys(errors).length === 0,
      errors,
    };
  }

  toJSON() {
    return {
      name: this.name.trim(),
      email: this.email.trim(),
      subject: this.subject.trim(),
      message: this.message.trim(),
    };
  }
}
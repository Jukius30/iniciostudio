import BaseModel from '../core/BaseModel';

export default class BookingFormModel extends BaseModel {
  constructor(nama = '', email = '', keluhan = '', bookingDate = '') {
    super();
    this.nama = nama;
    this.email = email;
    this.keluhan = keluhan;
    this.bookingDate = bookingDate;
  }

  validate() {
    const errors = {};
    if (!this.nama.trim()) errors.nama = 'Nama wajib diisi.';
    if (!this.email.trim()) {
      errors.email = 'Alamat Email wajib diisi.';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email)) {
      errors.email = 'Format email tidak valid.';
    }
    if (!this.keluhan.trim()) errors.keluhan = 'Keluhan wajib diisi.';
    if (!this.bookingDate) errors.bookingDate = 'Silakan pilih tanggal konsultasi di kalender.';

    return {
      isValid: Object.keys(errors).length === 0,
      errors,
    };
  }

  toJSON() {
    return {
      name: this.nama.trim(),
      email: this.email.trim(),
      subject: `Booking Konsultasi (${this.bookingDate})`,
      message: `Tanggal Booking: ${this.bookingDate}\nKeluhan: ${this.keluhan.trim()}`,
    };
  }
}
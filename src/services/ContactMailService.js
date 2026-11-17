class ContactMailService {
  constructor() {
    this.endpoint = 'https://api.web3forms.com/submit';
    this.accessKey = import.meta.env.VITE_WEB3FORMS_KEY || 'YOUR_ACCESS_KEY';
  }

  async send(contactModel) {
    const payload = {
      access_key: this.accessKey,
      ...contactModel.toJSON(),
    };

    const response = await fetch(this.endpoint, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        Accept: 'application/json',
      },
      body: JSON.stringify(payload),
    });

    const result = await response.json();

    if (!response.ok || !result.success) {
      throw new Error(result.message || 'Gagal mengirim pesan.');
    }

    return result;
  }
}

export default new ContactMailService();
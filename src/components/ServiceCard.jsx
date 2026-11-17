import React, { Component } from 'react';

export default class ServiceCard extends Component {
  render() {
    const { service } = this.props;

    return (
      <div className="p-8 rounded-2xl bg-slate-900 border border-slate-800 hover:border-cyan-500/50 transition-colors shadow-xl">
        <h3 className="text-xl font-bold text-slate-100">{service.title}</h3>
        <p className="text-slate-400 text-sm mt-2 mb-5 leading-relaxed">
          {service.description}
        </p>
        <ul className="space-y-2 text-sm text-cyan-300 border-t border-slate-800 pt-4">
          {service.features.map((feat, idx) => (
            <li key={idx}>• {feat}</li>
          ))}
        </ul>
      </div>
    );
  }
}
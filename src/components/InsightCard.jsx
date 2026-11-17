import React, { Component } from 'react';

export default class InsightCard extends Component {
  render() {
    const { insight, onSelect } = this.props;

    return (
      <div
        onClick={() => onSelect(insight)}
        className="p-6 rounded-2xl bg-slate-900 border border-slate-800 hover:border-cyan-500/50 transition-colors cursor-pointer"
      >
        <div className="text-xs text-slate-400">
          {insight.date} • {insight.readTime}
        </div>
        <h3 className="text-xl font-bold text-slate-100 mt-1">{insight.title}</h3>
        <p className="text-slate-400 text-sm mt-2">{insight.summary}</p>
      </div>
    );
  }
}
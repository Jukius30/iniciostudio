import React, { Component } from 'react';

export default class ProjectCard extends Component {
  render() {
    const { project } = this.props;

    return (
      <div className="p-8 rounded-2xl bg-slate-900 border border-slate-800 flex flex-col justify-between shadow-xl hover:border-cyan-500/50 transition-colors">
        <div>
          <span className="text-xs font-medium px-2.5 py-1 rounded bg-slate-950 border border-slate-800 text-cyan-400">
            {project.category}
          </span>
          <h3 className="text-xl font-bold text-slate-100 mt-4">{project.title}</h3>
          <p className="text-slate-400 text-sm mt-2 leading-relaxed">
            {project.description}
          </p>
        </div>

        <div className="mt-6 pt-4 border-t border-slate-800 flex flex-wrap gap-2">
          {project.techStack.map((tech, idx) => (
            <span
              key={idx}
              className="text-xs px-2.5 py-1 rounded-md bg-slate-950 text-slate-300 border border-slate-800"
            >
              {tech}
            </span>
          ))}
        </div>
      </div>
    );
  }
}
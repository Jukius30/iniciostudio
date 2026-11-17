import BaseModel from '../core/BaseModel';

export default class ProjectModel extends BaseModel {
  constructor(id, title, category, description, techStack = [], link = '#') {
    super();
    this.id = id;
    this.title = title;
    this.category = category;
    this.description = description;
    this.techStack = techStack;
    this.link = link;
  }
}
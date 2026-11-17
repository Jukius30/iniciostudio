import BaseModel from '../core/BaseModel';

export default class InsightModel extends BaseModel {
  constructor(id, title, date, readTime, summary, content) {
    super();
    this.id = id;
    this.title = title;
    this.date = date;
    this.readTime = readTime;
    this.summary = summary;
    this.content = content;
  }
}
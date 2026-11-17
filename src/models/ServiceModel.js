import BaseModel from '../core/BaseModel';

export default class ServiceModel extends BaseModel {
  constructor(id, title, description, features = []) {
    super();
    this.id = id;
    this.title = title;
    this.description = description;
    this.features = features;
  }
}
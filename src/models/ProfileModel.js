import BaseModel from '../core/BaseModel';

export default class ProfileModel extends BaseModel {
  constructor(name, tagline, bio, highlights = [], skills = []) {
    super();
    this.name = name;
    this.tagline = tagline;
    this.bio = bio;
    this.highlights = highlights;
    this.skills = skills;
  }
}
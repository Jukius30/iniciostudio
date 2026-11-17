export default class BaseModel {
  validate() {
    return {
      isValid: true,
      errors: {},
    };
  }

  toJSON() {
    return { ...this };
  }
}
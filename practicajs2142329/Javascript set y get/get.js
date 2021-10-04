let person={
  firstName:'John',
  lastName:'Doe',
  get fullName() {
    return this.firstName + " " + this.lastName;
  }
}


console.log(person.fullName);

let person={
  nombre:'',
  set fullName(fullName) {
    this.nombre=fullName;
  }
  
}
person.fullName="Juan";

console.log(person.nombre);
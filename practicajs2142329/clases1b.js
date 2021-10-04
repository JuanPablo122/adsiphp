class Persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }
    set nombre(nombre){
        this._nombre=nombre;
    }
    get nombre(){
        return this._nombre;
    }
    set apellido(apellido){
        this._apellido=apellido;
    }
    get apellido(){
        return this._apellido;
    }
   nombreCompleto(){
       return this._nombre+' '+this._apellido;
   } 
}

class Aprendiz extends Persona{
    constructor(nombre,apellido,programa,ficha){
        super(nombre,apellido);//llama al constructor de la clase padre
        this._programa=programa;
        this._ficha=ficha;
    }
    set programa(programa){
        this._programa=programa;
    }
    get programa(){
        return this._programa;
    }
    set ficha(ficha){
        this._ficha=ficha;
    }
    get ficha(){
        return this._ficha;
    }
    infoCompleta(){
        return this._nombre+' '+this._apellido+' '+this._programa+' '+this._ficha;
    } 
}
var obj=new Aprendiz('Laura','Tellez','Contabilidad',2142328)
console.log(obj.infoCompleta());

var obj=new Persona('Julio','Correal')
console.log(obj.nombre);
//obj.setNombre('nuevo');//asi se hacia antes
obj.nombre='Roberto';
console.log(obj.nombre);
console.log(obj.nombreCompleto());




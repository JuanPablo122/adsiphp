//Tarea sumar y restar los fraccionarios
var fraccionario={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    suma:function(){      
        return 'La suma de los fraccionarios es: '+(this.n1*this.d2 + this.d1*this.n2)+'/'+(this.d1 * this.d2);
    }
}
document.write(fraccionario.suma());

var fraccionario={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    resta:function(){      
        return '<br>La resta de los fraccionarios es: '+(this.n1*this.d2 - this.d1*this.n2)+'/'+(this.d1 * this.d2);
    }
}
document.write(fraccionario.resta());
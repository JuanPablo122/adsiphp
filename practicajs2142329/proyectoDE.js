class Usuarios{
    constructor(idUsuarios,nombres,apellidos){
        this._idUsuarios=idUsuarios;
        this._nombres=nombres;
        this._apellidos=apellidos;
    }
    set idUsuarios(idUsuarios){
        this._idUsuarios=idUsuarios;
    }
    get idUsuarios(){
        return this._idUsuarios;
    }
    set nombres(nombres){
        this._nombres=nombres;
    }
    get nombres(){
        return this._nombres;
    }
    set apellidos(apellidos){
        this._apellidos=apellidos;
    }
    get apellidos(){
        return this._apellidos;
    }
}

class Empleados extends Usuarios{
    constructor(idEmpleados,NombreEps,idUsuarios,nombres,apellidos){
        super(idUsuarios,nombres,apellidos);
        this._idEmpleados=idEmpleados;
        this._NombreEps=NombreEps;
    }
    set idEmpleados(idEmpleados){
        this._idEmpleados=idEmpleados;
    }
    get idUsuarios(){
        return this._idUsuarios;
    }
    set NombreEps(NombreEps){
        this._NombreEps=NombreEps;
    }
    get NombreEps(){
        return this._NombreEps;
    }
    
}
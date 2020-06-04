function validar(){
	var nombre, direccion, nit, numContacto, correo, expresion, val;

	nombre=document.getElementById("nombre").value;
	direccion=document.getElementById("direccion").value;
	nit=document.getElementById("nit").value;
	numContacto=document.getElementById("numContacto").value;
	correo=document.getElementById("correo").value;

	val = /\w+@\w+\.+[a-z]/;

	expresion=/^[a-zA-Z\s]*$/;

	if (nombre.length>30) {
		Swal.fire({
           title: "Nombre Demasiado Largo"
        });
		return false;
	}else if(!expresion.test(nombre)){
		 Swal.fire({
           title: "No se permiten numeros en el Nombre"
        });
		return false;
	}

	else if(direccion.length>40) {
		Swal.fire({
           title: "Direccion Demasiado Larga"
        });
		return false;
	}else if(nit.length>17) {
		Swal.fire({
           title: "NIT Demasiado Largo"
        });
		return false;
	}
	else if( !(/^\d{4}-\d{6}-\d{3}-\d{1}$/.test(nit))) {
		Swal.fire({
           title: "El Formato del NIT no es Valido"
        });
		return false;
	}
	else if(isNaN(numContacto)){
		Swal.fire({
           title: "Ingrese solo numeros en su Telefono"
        });
		return false;
	}
	else if (!val.test(correo)) {
		Swal.fire({
           title: "El correo no es valido"
        });
		return false;
	}
}
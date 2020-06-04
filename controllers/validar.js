function validar(){
	var nombre, apellido, direccion, dui, nit, numLicencia, expresion;

	nombre=document.getElementById("nombre").value;
	apellido=document.getElementById("apellido").value;
	direccion=document.getElementById("direccion").value;
	dui=document.getElementById("dui").value;
	nit=document.getElementById("nit").value;
	numLicencia=document.getElementById("numLicencia").value;

	expresion=/^[a-zA-Z\s]*$/;

	if (nombre.length>30) {
		Swal.fire({
           title: "Nombre Demasiado Largo"
        });
		return false;
	}else if(!expresion.test(nombre)){
		 Swal.fire({
           title: "No se permiten numeros en el campo nombre"
        });
		return false;
	}
	else if(apellido.length>30) {
		Swal.fire({
           title: "Apellido Demasiado Largo"
        });
		return false;
	}else if(!expresion.test(apellido)){
		 Swal.fire({
           title: "No se permiten numeros en el campo apellido"
        });
		return false;
	}else if(direccion.length>40 || direccion==="") {
		Swal.fire({
           title: "Direccion Demasiado Larga"
        });
		return false;
	}else if(dui.length>10) {
		Swal.fire({
           title: "DUI Demasiado Largo"
        });
		return false;
	}
	else if( !(/^\d{8}-\d{1}$/.test(dui))) {
		Swal.fire({
           title: "Formato de DUI no Valido"
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
           title: "Formato de NIT no Valido"
        });
		return false;
	}else if(numLicencia.length>17) {
		Swal.fire({
           title: "Licincia Demasiado Larga"
        });
		return false;
	}
	else if( !(/^\d{4}-\d{6}-\d{3}-\d{1}$/.test(numLicencia))) {
		Swal.fire({
           title: "Formato de Licencia no Valido"
        });
		return false;
	}
}
function validar(){
	var nombre, apellido, direccion, dui, nit, numLicencia, expresion;

	nombre=document.getElementById("nombre").value;
	apellido=document.getElementById("apellido").value;
	direccion=document.getElementById("direccion").value;
	dui=document.getElementById("dui").value;
	nit=document.getElementById("nit").value;
	numLicencia=document.getElementById("numLicencia").value;

	expresion=/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

	if (nombre==="" || apellido==="" || direccion==="" || dui==="" || nit==="" || numLicencia==="") {
		Swal.fire({
           title: "Todos los Campos son obligatorios"
        });
		return false;
	}

	if (nombre.length>30 || nombre.length<4) {
		Swal.fire({
           title: "Campo nombre no valido"
        });
		return false;
	}else if(!expresion.test(nombre)){
		 Swal.fire({
           title: "Campo nombre no valido"
        });
		return false;
	}
	else if(apellido.length>30 || apellido.length<4) {
		Swal.fire({
           title: "Campo apellido no valido"
        });
		return false;
	}else if(!expresion.test(apellido)){
		 Swal.fire({
           title: "Campo apellido no valido"
        });
		return false;
	}else if(direccion.length>200 ) {
		Swal.fire({
           title: "Campo direccion no valido"
        });
		return false;
	}else if(dui.length>10) {
		Swal.fire({
           title: "Campo DUI no valido"
        });
		return false;
	}
	else if( !(/^\d{8}-\d{1}$/.test(dui))) {
		Swal.fire({
           title: "Campo DUI no valido"
        });
		return false;
	}else if(nit.length>17) {
		Swal.fire({
           title: "Campo NIT no valido"
        });
		return false;
	}
	else if( !(/^\d{4}-\d{6}-\d{3}-\d{1}$/.test(nit))) {
		Swal.fire({
           title: "Campo NIT no valido"
        });
		return false;
	}else if(numLicencia.length>17) {
		Swal.fire({
           title: "Campo licencia no valido"
        });
		return false;
	}
	else if( !(/^\d{4}-\d{6}-\d{3}-\d{1}$/.test(numLicencia))) {
		Swal.fire({
           title: "Campo licencia no valido"
        });
		return false;
	}
}
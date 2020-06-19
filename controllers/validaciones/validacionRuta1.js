function validar(){
	var descripcion, carga;

	
	descripcion = document.getElementById("descripcion").value;
	carga = document.getElementById("carga").value;

	 if (descripcion.length > 200 || descripcion.length < 4) {
        Swal.fire({
            title: "Descripcion Demasiado Corta"
        });
        return false;
    }else if (carga.length > 200 || carga.length < 4) {
        Swal.fire({
            title: "Descripcion de Carga Demasiado Corta"
        });
        return false;
    }
}

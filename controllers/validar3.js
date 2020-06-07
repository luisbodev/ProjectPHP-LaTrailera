function validar2(){
	var descripcion, peso;

	descripcion=document.getElementById("descripcion").value;
	peso=document.getElementById("peso").value;
	
	

	if (descripcion.length>15) {
		Swal.fire({
           title: "Descripcion Demasiado Larga"
        });
		return false;
	}else if(peso.length>10) {
		Swal.fire({
           title: "Peso fuera de rango"
        });
		return false;
	}
	
}
function validar2(){
	var descripcion, peso;

	descripcion=document.getElementById("descripcion").value;
	peso=document.getElementById("peso").value;
	
	

	if (descripcion.length>50 || descripcion.length<4) {
		Swal.fire({
           title: "Descripcion Demasiado Larga"
        });
		return false;
	}else if(peso.length>15) || peso.length<4{
		Swal.fire({
           title: "Peso fuera de rango"
        });
		return false;
	}
	
}
function validar(){
	var my_lat, my_lng, your_lat, your_lng;

	my_lat=document.getElementById('my_lat').value;
	my_lng=document.getElementById('my_lng').value;
	your_lat=document.getElementById('your_lat').value;
	your_lng=document.getElementById('your_lng').value;

	if (my_lat==="" || my_lng==="") {
		Swal.fire({
           title: "Por favor dibujar ruta"
        });
		return false;
	}else if (your_lat==="" || your_lng==="") {
		Swal.fire({
           title: "Por favor seleccionar punto de llegada"
        });
		return false;
	}
}

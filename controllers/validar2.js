function validar(){
	var marca, placa, modelo, tazaCombustible, capacidadCombustible, kmRecorridos;

	marca=document.getElementById('marca').value;
	placa=document.getElementById('placa').value;
	modelo=document.getElementById('modelo').value;
	tazaCombustible=document.getElementById('tazaCombustible').value;
	capacidadCombustible=document.getElementById('capacidadCombustible').value;
	kmRecorridos=document.getElementById('kmRecorridos').value;

	if (marca==="" || placa==="" || modelo==="" || tazaCombustible==="" || capacidadCombustible==="" || kmRecorridos==="") {
		Swal.fire({
           title: "Todos los Campos son obligatorios"
        });
		return false;
	}

	if (marca.length>14 || marca.length<4) {
		Swal.fire({
           title: "Marca fuera de rango"
        });
		return false;
	}else if (placa.length>10 || placa.length<7) {
		Swal.fire({
           title: "Placa fuera de rango"
        });
		return false;
	}else if (modelo.length>14 || modelo.length<4) {
		Swal.fire({
           title: "Modelo fuera de rango"
        });
		return false;
	}else if (isNaN(tazaCombustible)) {
		Swal.fire({
           title: "El campo Taza de Combustible solo permite datos númericos"
        });
		return false;
	}else if (tazaCombustible.length>7 || tazaCombustible.length<2) {
		Swal.fire({
           title: "Dato Taza de Combustible fuera de rango"
        });
		return false;
	}else if (isNaN(capacidadCombustible)) {
		Swal.fire({
           title: "El campo Capacidad solo permite datos númericos"
        });
		return false;
	}else if (capacidadCombustible.length>7 || capacidadCombustible.length<2) {
		Swal.fire({
           title: "Dato Capacidad está fuera de rango"
        });
		return false;
	}else if (isNaN(kmRecorridos)) {
		Swal.fire({
           title: "El campo Kilometros Recorridos solo permite datos númericos"
        });
		return false;
	}else if (kmRecorridos.length>7) {
		Swal.fire({
           title: "Dato Kilometros Recorridos está fuera de rango"
        });
		return false;
	}	
	
}

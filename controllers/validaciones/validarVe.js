function validar() {
    var marca, placa, modelo, tazaCombustible, capacidadCombustible, kmRecorridos;

    marca = document.getElementById('marca').value;
    placa = document.getElementById('placa').value;
    modelo = document.getElementById('modelo').value;
    tazaCombustible = document.getElementById('tazaCombustible').value;
    capacidadCombustible = document.getElementById('capacidadCombustible').value;


    if (marca === "" || placa === "" || modelo === "" || tazaCombustible === "" || capacidadCombustible === "") {
        Swal.fire({
            title: "Todos los Campos son obligatorios"
        });
        return false;
    }

    if (marca.length > 14 || marca.length < 4) {
        Swal.fire({
            title: "Campo marca no valido"
        });
        return false;
    } else if (placa.length > 9 || placa.length < 8) {
        Swal.fire({
            title: "Campo placa no valido"
        });
        return false;
    } else if (modelo.length > 14 || modelo.length < 4) {
        Swal.fire({
            title: "Campo mdelo no valido"
        });
        return false;
    } else if (isNaN(tazaCombustible)) {
        Swal.fire({
            title: "Campo taza de combustible no valido"
        });
        return false;
    } else if (tazaCombustible.length > 7) {
        Swal.fire({
            title: "Campo taza de combustible no valido"
        });
        return false;
    } else if (isNaN(capacidadCombustible)) {
        Swal.fire({
            title: "Campo capacidad no valido"
        });
        return false;
    } else if (capacidadCombustible.length > 7) {
        Swal.fire({
            title: "Campo capacidad no valido"
        });
        return false;
    }

}
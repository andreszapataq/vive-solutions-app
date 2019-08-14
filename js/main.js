function dateNow(){
    var d = new Date();
    var dia = d.getDate();
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var mes = meses[d.getMonth()];
    var anio = d.getFullYear();
    document.getElementById("fechaActual").innerHTML = `${dia}-${mes}-${anio}`;
}
window.onload = dateNow;

function validarForm(){
    var valCant = document.forms["consignarForm"]["cantidad"].value;
    if(valCant == ""){
        alert("Completa este campo");
        return false;
    }
    if(isNaN(valCant)){
        alert("Digita un número");
        return false;
    }
    if(valCant == 0){
        alert("El valor debe ser superior o igual a 1");
        return false;
    }
    return true;
}
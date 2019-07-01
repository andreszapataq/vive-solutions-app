function dateNow(){
    var d = new Date();
    var dia = d.getDate();
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var mes = meses[d.getMonth()];
    var anio = d.getFullYear();
    document.getElementById("fechaActual").innerHTML = `${dia}-${mes}-${anio}`;
}
dateNow();
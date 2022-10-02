fecha = new Date();
let anio = fecha.getFullYear()
if (9 >= fecha.getMonth()) {
    var mes = "0" + fecha.getMonth();
} else {
    var mes = fecha+getMonth();
}
if (9 >= fecha.getDate()) {
    var dia = "0" + fecha.getDate();
} else {
    var dia = fecha.getDate();
}
var fechaActual = anio + "-" + mes + "-" + dia;
console.log(fechaActual);
document.write('<label class="mt-3">Fecha de nacimiento: </label><input type="date" max="'+fechaActual+'" name="fechaNac" id="input_fechaNac" class="form-control" required>')
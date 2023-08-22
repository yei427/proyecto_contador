function cargar_S() {
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/servicios.php');
}
function cargar_P(id) {

    var x = document.querySelector('object');
    x.setAttribute('data', '../formularios/frm_horas.php?id='+id);
}
function cargar_A(id) {
    
    var x = document.querySelector('object');
    x.setAttribute('data', '../php/agregar_horas.php?id='+id);
}
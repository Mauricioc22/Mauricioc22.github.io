let ubicacionPrincipal = window.pageYOffset;

window.onscroll = function() {
    let Desplazamiento_actual = window.pageYOffset;
    if (ubicacionPrincipal >= Desplazamiento_actual) {
        document.getElementById('navbar').style.top='0';
    }
    else{
        document.getElementById('navbar').style.top='-130px';
    }
    ubicacionPrincipal = Desplazamiento_actual
}
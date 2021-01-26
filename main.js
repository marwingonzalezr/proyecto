var Ubiperfil = document.getElementById("BPerfil");
var Ubiservicios = document.getElementById("BServicios");
var Ubicontacto = document.getElementById("BContacto");
var Uperfil = document.getElementById("perfil");
var Uservicios = document.getElementById("servicios");
var Ucontacto = document.getElementById("contacto");

var per = function() {
    Uperfil.className = "perfil";
    Uservicios.className = "none";
    Ucontacto.className = "none";
};

var ser = function() {
    Uperfil.className = "none";
    Uservicios.className = "servicios";
    Ucontacto.className = "none";
};

var con = function() {
    Uperfil.className = "none";
    Uservicios.className = "none";
    Ucontacto.className = "contacto";
};

Ubiperfil.addEventListener("click", per);
Ubiservicios.addEventListener("click", ser);
Ubicontacto.addEventListener("click", con);
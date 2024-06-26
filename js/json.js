document.getElementById("miFormulario").addEventListener("submit", function (event) {
    event.preventDefault();

    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var email = document.getElementById("email").value;
    var nombreError = document.getElementById("nombreError");
    var apellidoError = document.getElementById("apellidoError");
    var emailError = document.getElementById("emailError");
    var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    nombreError.textContent = "";
    apellidoError.textContent = "";
    emailError.textContent = "";

    if (nombre.trim() === "") {
        nombreError.textContent = "Complete el campo con su nombre";
        return;
    }

    if (apellido.trim() === "") {
        apellidoError.textContent = "Complete el campo con su apellido";
        return;
    }

    if (!regexEmail.test(email)) {
        emailError.textContent = "No has ingresado un mail";
        return;
    }
    alert("EL formulario se envio con exito");
});



document.getElementById("formularioPelis").addEventListener("submit", function (event) {
    event.preventDefault();

    var titulo = document.getElementById("titulo").value;
    var duracion = document.getElementById("duracion").value;
    var fechLanz = document.getElementById("fechLanz").value;
    var genero = document.getElementById("genero").value;
    var director = document.getElementById("director").value;
    var reparto = document.getElementById("reparto").value;
    var sinopsis = document.getElementById("sinopsis").value;
    var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


    var tituloError = document.getElementById("tituloError");
    var duracionError = document.getElementById("duracionError");
    var fechLanzError = document.getElementById("fechLanzError");
    var generoError = document.getElementById("generoError");
    var directorError = document.getElementById("directorError");
    var repartoError = document.getElementById("repartoError");
    var sinopsisError = document.getElementById("sinopsisError");

    tituloError.textContent = "";
    duracionError.textContent = "";
    fechLanzError.textContent = "";
    generoError.textContent = "";
    directorError.textContent = "";
    repartoError.textContent = "";
    sinopsisError.textContent = "";

    if (titulo.trim() === "") {
        tituloError.textContent = "Complete el campo con su nombre";
        return;
    }

    if (duracion.trim() === "") {
        duracionError.textContent = "Complete el campo con su apellido";
        return;
    }
    if (reparto.trim() === "") {
        repartoError.textContent = "Complete el campo con su apellido";
        return;
    }
    if (director.trim() === "") {
        generoError.textContent = "Complete el campo con su apellido";
        return;
    }
    if (sinopsis.trim() === "") {
        sinopsisError.textContent = "Complete el campo con su apellido";
        return;
    }
    
    if (fechLanz.trim() === "") {
        fechLanzError.textContent = "Complete el campo con su apellido";
        return;
    }
    if (genero.trim() === "") {
        generoError.textContent = "Complete el campo con su apellido";
        return;
    }

    if (!regexEmail.test(email)) {
        emailError.textContent = "No has ingresado un mail";
        return;
    }
    alert("EL formulario se envio con exito");
});


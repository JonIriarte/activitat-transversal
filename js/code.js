window.onload=function(){
    document.getElementById('dni').addEventListener("focusout", validarDNI);
}

function validacionForm() {
    //Variables para la validación
    var message = document.getElementById('message').value;
    var nombre = document.getElementById('nombre').value;
    var apellido1 = document.getElementById('apellido1').value;
    var dni = document.getElementById('dni').value;
    var fecha = document.getElementById('fecha_nac').value;
    var email = document.getElementById('email').value;
    //Variable de control
    var definido = true;
    //Variable para ver qué campos faltan
    var faltan = "";

    console.log(nombre);
    console.log(apellido1);
    console.log(dni);
    console.log(fecha);
    console.log(email);



    if (nombre == "") {
        document.getElementById("nombre").style.border = 'solid red 1px';
        definido = false;
        var faltan = "Nombre";
    } else {
        document.getElementById("nombre").style.border = "initial";
    }
    if (apellido1 == "") {
        document.getElementById("apellido1").style.border = 'solid red 1px';
        definido = false;
        var faltan = faltan + " Apellido ";
    } else {
        document.getElementById("apellido1").style.border = "initial";
    }

    if (fecha == '') {
        document.getElementById("fecha_nac").style.border = 'solid red 1px';
        definido = false;
        var faltan = faltan + "Fecha de nacimiento";
    } else {
        document.getElementById("fecha_nac").style.border = "initial";
        comprobarCategoria(fecha);
    }
    if (email == "") {
        document.getElementById("email").style.border = 'solid red 1px';
        definido = false;
        var faltan = faltan + " Correo  electrónico";
    } else {
        document.getElementById("email").style.border = "initial";

    }
    if (dni !== "") {
        document.getElementById("dni").style.border = "initial";
        //Insertar comprobación para el DNI 
        validarDNI(dni);
        
    } else {
        document.getElementById("dni").style.border = 'solid red 1px';
        definido = false;
        var faltan = faltan + " Número de DNI";
    }
    if (definido == false) {
        document.getElementById("message").innerHTML = "Rellena los campos que faltan:  " + faltan;

    } else {
        return definido;
    }
}

function comprobarCategoria(fecha) {
    //Hay que cambiar la fecha por la del día de la carrera.
    // Ahora mismo hace el cálculo sobre la fecha en la que se hace a inscripción
    var now = (new Date().getTime()) / 1000;
    //console.log("fecha de hoy " + now);
    var edad = Date.parse(fecha) / 1000;
    //console.log("Edad en UNIX " + edad);
    restante = now - edad;
    //Un día tiene 86400 segundos
    dias = restante / 86400;
    //console.log("Días vividos " + dias);
    categoria = Math.floor(dias / 365);
    //Mostrar la cantidad de años: 
    console.log("AÑOS " + categoria);
    if (categoria > 51) {
        id_cat = 5;
        alert(" Te has inscrito en la categoría Senior");
    } else if (categoria > 19) {
        id_cat = 4;
        alert("Te has inscrito en la categoría Adulto");
    } else if (categoria > 14) {
        id_cat = 3;
        alert("Te has inscrito en la categoría Juvenil ");
    } else if (categoria > 7) {
        id_cat = 2;
        alert("Te has inscrito en la categoría Infantil ");
    } else {
        id_cat = 1;
        alert("Te has inscrito en la categoría Alevín");
    }
    //¿Se puede devolver el valor de la variable al php?
    return id_cat;
}

function validarDNI() {
    var carnet = document.getElementById('dni');
    //Array
    var control = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    //Lectura de datos
    var $1;
    var letra;
    //Leer la letra del DNI del usuario
    //Comprobar de que el DNI tiene 8 cifras
    if (carnet.value.length != 9) {
        carnet.style.border = "solid red 2px";
    } else {
        letra = carnet.value.slice(8, 9);
        //Comprobación de que el último carácter es una letra
        dni = carnet.value.slice(0, 8);
        //Comprobaciones
        // Extraer el primer carácter y ponerlo en mayúsculas para las comprobaciones.
        $1 = dni.substr(0, 1);
        //Comprobacion-comparación-replace por número. 
        if ($1 == 'X') {
            dni = dni.replace("X", "0");
            console.log(dni);
        } else if ($1 == 'Y') {
            dni = dni.replace("Y", "1");
            console.log(dni);
        } else if ($1 == 'Z') {
            dni = dni.replace("Z", "2");
            console.log(dni);
        }
        //Comprobación de si el DNI y la letra son correctos.     
    }
    if ((carnet.value.length ==9) && (letra==control[dni % 23])) {
        console.log(letra+' , '+ dni); 
        carnet.style.border = "solid green 2px";
        return true;
    } else {
        carnet.style.border = "solid red 2px";
        return false;
    }

}
//Recorrer todos los inputs en JS con un foreach
/*
function validarFor() {
    var inputs = document.getElementsByClassName('data');
    for (let i = 0; i < inputs.length; i++) {
        if
    }
    return false;
}*/
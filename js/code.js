function validacionForm() {
    var message = document.getElementById('message').value;
    var nombre = document.getElementById('nombre').value;
    var dni = document.getElementById('dni').value;
    var fecha = document.getElementById('fecha_nac').value;
    var email = document.getElementById('email').value;
    var definido = true;

    if (nombre == "") {
        document.getElementById("nombre").style.borderColor = "red";
        definido = false;
    } else {
        document.getElementById("nombre").style.borderColor = "initial";
    }
    if (fecha == '') {
        document.getElementById("fecha_nac").style.borderColor = "red";
        definido = false;
    } else {
        //Falla el initial del borderColor
        document.getElementById("fecha_nac").style.borderColor = "initial";
    }
    if (email == "") {
        document.getElementById("email").style.borderColor = "red";
        definido = false;
    } else {
        document.getElementById("email").style.borderColor = "initial";

    }
    if (dni !== "") {

        document.getElementById("dni").style.borderColor = "initial";
        //Insertar lo del DNI 
        console.log(dni);
        comprobarDni(dni);
    } else {
        document.getElementById("dni").style.borderColor = "red";
        definido = false;
    }
    if (definido == false) {
        document.getElementById("message").innerHTML = "Rellena los campos que falten";
    } else {}
    return definido;
}

function comprobarDni(dni) {
    //Array
    var control = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    //Lectura de datos
    var $1;
    var letra;
    //Leer la letra del DNI del usuario
    //Comprobar de que el DNI tiene 8 cifras
    if (dni.length != 9) {
        alert('Si el número tiene menos de 8 dígitos hay que rellenar el número con ceros al principio hasta tener 8 dígitos y una letra');
    } else {
        letra = dni.slice(8, 9);
        //Comprobación de que el último carácter es una letra
        dni = dni.slice(0, 8);
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
    if (letra == control[dni % 23]) {
        return true;
    } else {
        alert('El número de DNI no es correcto');
        return false;
    }

}
//Recorrer todos los inputs en JS con un foreach
function validarFor() {
    var inputs = document.getElementsClassName('data');
    for (let i = 0; i < inputs.length; i++) {
        console.log(inputs[i].type);
    }
    return false;
}
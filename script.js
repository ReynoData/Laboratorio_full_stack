function validarFormulario() {
    var nombre = document.forms[0].nombre.value;
    var primerapellido = document.forms[0].primerapellido.value;
    var segundoapellido = document.forms[0].segundoapellido.value;
    var email = document.forms[0].email.value;
    var login = document.forms[0].login.value;
    var password = document.forms[0].password.value;

    // Validar que todos los campos estén llenos
    if (nombre === '' || primerapellido === '' || segundoapellido === '' || email === '' || login === '' || password === '') {
        alert('Por favor, complete todos los campos');
        return false; // Evita el envío del formulario
    }

    // Otras validaciones adicionales (puedes agregar más según tus necesidades)

    return true; // Permite el envío del formulario si todos los campos están llenos
}

// Obtener referencia al formulario
var formulario = document.forms[0];

// Agregar evento submit al formulario
formulario.addEventListener('submit', function(event) {
    var passwordInput = formulario.password.value;

    if (!validarPassword(passwordInput)) {
        alert("La contraseña no cumple con los requisitos");
        formulario.password.value = ''; // Restablecer el campo de contraseña
        formulario.password.focus(); // Colocar el foco en el campo de contraseña
        event.preventDefault(); // Detener el envío del formulario
    }
});

function validarPassword(password) {
    var regex = /^[a-zA-Z]+$/;

    if (password.length < 4 || password.length > 8) {
        return false; // La contraseña no cumple con la longitud requerida
    }

    if (!regex.test(password)) {
        return false; // La contraseña contiene caracteres que no son letras
    }

    return true; // La contraseña es válida
}
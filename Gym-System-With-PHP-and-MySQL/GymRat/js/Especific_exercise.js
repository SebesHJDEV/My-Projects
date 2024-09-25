$(document).ready(function () {

    // Expresión regular para verificar si contiene números y opcionalmente un punto decimal
    var regex = /^[0-9]+(?:\.[0-9]+)?$/;

    // Utiliza el evento submit del formulario en lugar de click del botón
    $('#registroForm').submit(function (event) {
        // Obtener los valores
        var weight = $('#weight').val();
        
        // Restablecer el color del borde a su valor original
        $('#weight').css('border-color', '');

        // Verificar si el valor no cumple con la expresión regular
        if (!regex.test(weight)) {
            $('#weight').css('border-color', 'red');
            alert("El peso debe ser un número entero o decimal válido.");
            event.preventDefault(); // Detener el envío del formulario
        }

        // Verificar y cambiar el color del borde de cada campo vacío
        if (weight === '') {
            $('#weight').css('border-color', 'red');
            alert("No se puede enviar datos vacíos");
            event.preventDefault(); // Detener el envío del formulario
        }
    });
});
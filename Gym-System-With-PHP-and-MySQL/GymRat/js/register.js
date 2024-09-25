$(document).ready(function () {
    // Utiliza el evento submit del formulario en lugar de click del botón
    $('#registroForm').submit(function (event) {
        // Obtener los valores
        
        var name = $('#name').val();
        var surnames = $('#surnames').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirm = $('#confirm').val();
        var nickname = $('#nickname').val();

        // Restablecer el color del borde a su valor original
        $('#name, #surnames, #email, #password, #confirm, #nickname').css('border-color', '');

        // Verificar y cambiar el color del borde de cada campo vacío
        if (name === '') {
            $('#name').css('border-color', 'red');
        }

        if (surnames === '') {
            $('#surnames').css('border-color', 'red');
        }

        if (email === '') {
            $('#email').css('border-color', 'red');
        }

        if (password === '') {
            $('#password').css('border-color', 'red');
        }

        if (confirm === '') {
            $('#confirm').css('border-color', 'red');
        }

        if (nickname === '') {
            $('#nickname').css('border-color', 'red');
        }
        // Comprobar si al menos un campo está vacío
        if (name === '' || surnames === '' || email === '' || password === '' || nickname === '') {
            alert("Rellenar los campos vacíos");
            event.preventDefault(); // Detener el envío del formulario
        }
        else if (confirm !== password) {
            $('#password, #confirm').css('border-color', 'red');
            alert("La confirmación de la contraseña no coincide con la contraseña principal.");
            event.preventDefault(); // Detener el envío del formulario
        } else if (password.length < 8) {
            $('#error').css('display', 'block');
            alert("La contraseña debe tener al menos 8 caracteres");
            event.preventDefault(); // Detener el envío del formulario
        }
    });
});

// Supongo que aquí obtienes el valor del nickname desde alguna fuente, como un formulario

// Realizar una solicitud AJAX al servido




/** 
$(document).ready(function () {
    //  $("p" ) => Selector por etiquera
    // $("#titulo") => selector por id, y esto es por #
    // $(".clase") => Selector por clase de la etiqueta y esto lo se por el .
    // $("[type='button']") selector por atributo
    // $("ul li") => selector de todos los elemento li que esten dentro del ul

    $('#image1').hover(function () {
        $('#fondo1').css('color', 'red');
    });
    
   

    
})

*/
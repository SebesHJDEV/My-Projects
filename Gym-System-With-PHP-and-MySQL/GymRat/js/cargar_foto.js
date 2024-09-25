$(document).ready(function () {
    var valorInput = $('#img_user').val();
    $('#imagen').attr('src', valorInput);


    $('#input-imagen').on('change', function(event) {
        // Obtener el archivo seleccionado
        var archivo = event.target.files[0];

        // Verificar si se seleccionó un archivo
        if (archivo) {
            // Crear un objeto URL para la imagen seleccionada
            var urlImagen = URL.createObjectURL(archivo);

            // Mostrar la imagen en el elemento img con el ID 'imagen'
            $('#imagen').attr('src', urlImagen);
            $('#imagen').css({
                width: '200px', // Ancho deseado
                height: '200px' // Altura deseada
            });

          
        }
    });
});
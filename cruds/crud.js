// Función para cargar los registros al cargar la página
$(document).ready(function(){
    cargarRegistros();
});

// Función para cargar los registros desde la base de datos
function cargarRegistros() {
    $.ajax({
        url: 'crud.php',
        method: 'GET',
        success: function(response){
            $('#tabla-body').html(response);
        }
    });
}

// Función para agregar un nuevo registro
function agregarRegistro() {
    var nombre = $('#nombre').val();
    var email = $('#email').val();
    
    $.ajax({
        url: 'crud.php',
        method: 'POST',
        data: {
            'nombre': nombre,
            'email': email,
            'accion': 'agregar'
        },
        success: function(response){
            cargarRegistros();
            $('#nombre').val('');
            $('#email').val('');
        }
    });
}

// Función para eliminar un registro
function eliminarRegistro(id) {
    $.ajax({
        url: 'crud.php',
        method: 'POST',
        data: {
            'id': id,
            'accion': 'eliminar'
        },
        success: function(response){
            cargarRegistros();
        }
    });
}

function buscarRegistro() {
    var id = $('#id').val();
    
    $.ajax({
        url: 'crud.php',
        method: 'POST',
        dataType: 'json',
        data: {
            'id': id,
            'accion': 'buscar'
        },
        success: function(response){
            if(response !== null) {
                $('#tabla-body').html("<tr><td>"+response.id+"</td><td>"+response.nombre+"</td><td>"+response.email+"</td><td><button onclick='eliminarRegistro("+response.id+")'>Eliminar</button></td></tr>");
            } else {
                alert('Registro no encontrado');
            }
        }
    });
}


function agregarRegistro() {
    var nombre = $('#nombre').val();
    var email = $('#email').val();
    
    $.ajax({
        url: 'crud.php',
        method: 'POST',
        data: {
            'nombre': nombre,
            'email': email,
            'accion': 'agregar'
        },
        success: function(response){
            alert("Registro agregado exitosamente.");
            window.location.href = "des.html"; // Cambia "otro_indice.php" por la URL del otro índice
        }
    });
}
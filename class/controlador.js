$("#registrarse").submit(function (event) {										//Inicio de evento en el botón submit de registro

    event.preventDefault();

    $.ajax({																//Inicio de Ajax
        url: "class/controlador.php?accion=1",
        method: "POST",
        data: "txt_nombre=" + $("#txt_nombre").val() +
            "&txt_apellido=" + $("#txt_apellido").val() +
            "&txt_correo=" + $("#txt_correo").val() +
            "&txt_contraseña=" + $("#txt_contraseña").val() +
            "&txt_contraseña2=" + $("#txt_contraseña2").val(),

        success: function (resultado) {
            console.log(resultado);
            
        },
        error: function (error) {
            console.log(error);
        }
    });																		//Fin de Ajax 
});	
$("#iniciarSesion").submit(function (event) {										//Inicio de evento en el botón submit de registro

    event.preventDefault();

    $.ajax({																//Inicio de Ajax
        url: "class/controlador.php?accion=2",
        method: "POST",
        data: "correo=" + $("#correo").val() +
            "&password=" + $("#password").val(),
        success: function (resultado) {
            respuesta = JSON.parse(resultado);									//Parsea el arreglo a JSON
            if (!respuesta.error) {												//Si no hay error entonces..
                if (respuesta.estado == 0) {				
                    console.log("No esta registrado");
                }
                else{
                    location.href = "vocabularios.php";
                }

            }
            else {
               alert("no existe el usuario");																			//Despliega el modal con el modal
            }
        },
        error: function (error) {
            console.log(error);
        }
    });																		//Fin de Ajax 
});

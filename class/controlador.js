$(document).ready(function () {
	event.preventDefault();
	//VISTA DE IMAGEN DE PERFIL
	$.get("class/actualizarImagen.php?accion=1", function (resp) {
		//alert(resp);
		if (resp == null || resp == "") {
			$("#imagenPerfil").attr("src", "http://ssl.gstatic.com/accounts/ui/avatar_2x.png");
		}
		else {
			$("#imagenPerfil").attr("src",resp);
		}
	});
	
	
	//atualizar imagen de perfil 
	$("#imagenPerfil").click(function () {
		$("#imagenActualizar").click();
		$("#imagenActualizar").change(function (e) {
			e.preventDefault();
			var dataImg = new FormData();

			dataImg.append("imagen", $("#imagenActualizar")[0].files[0]);
			$.ajax({
				url: "class/actualizarImagen.php?accion=2",
				data: dataImg,
				type: "POST",
				//dataType:"text",
				contentType: false,
				processData: false,
				success: function (resp) {
					$("#imagenPerfil").attr("src", resp);
				},
				error: function (error) {
					alert("ERRROR EN ELA PETICION" + error);
				}
			})
		});
	})
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
    $("#iniciarSesion").submit(function (event) {									
    
        event.preventDefault();
    
        $.ajax({																//Inicio de Ajax
            url: "class/controlador.php?accion=2",
            method: "POST",
            data: "correo=" + $("#correo").val() +
                "&password=" + $("#password").val(),
            success: function (resultado) {
                respuesta = JSON.parse(resultado);									
                if (!respuesta.error) {
	                if (respuesta.idtipousurio == 2) {
				location.href = admin.php";
			}else{
				location.href = "vocabularios.php";
			}    
                }
                else {
                   alert("no existe el usuario");																			
                }
            },
            error: function (error) {
                console.log(error);
            }
        });																		//Fin de Ajax 
    });
    
    $("#editarUsuario").click(function (event) {												
        event.preventDefault();
        $.ajax({
            url: "class/controlador.php?accion=3",										
            method: "POST",
            data: "txt_nombre=" + $("#nombre_editar").val() +
                "&txt_apellido=" + $("#apellido_editar").val() +
                "&txt_correo=" + $("#email_editar").val() +
                "&txt_contra=" + $("#contra_editar").val() +
                "&txt_contra2=" + $("#contra2_editar").val(),
            success: function (resultado) {
                console.log(resultado);	
                 
                    location.reload()
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
    $("#comentario").click(function (event) {										

        event.preventDefault();
    
        $.ajax({																
            url: "class/controlador.php?accion=4",
            method: "POST",
            data: "txt_descripcion=" + $("#txt_texto").val(),
               
            success: function (resultado) {
                console.log(resultado);
                $("#txt_texto").empty();
                location.reload("../vocabularios.php");
            },
            error: function (error) {
                console.log(error);
            }
        });																	
    });	

    anexarcomentarios();

});	
anexarcomentarios = function () {
    $.ajax({
      url: "class/controlador.php?accion=5",
      success: function (resultado) {
        var datos = JSON.parse(resultado);
        console.log(datos);
        
        comentarios1 = "";
        if (datos.comentarios.error == true) {
            comentarios1 =
            "<li>" +
            "<div class='title'>" +
            "</div>" +
            "<div class='content'>" +
            "<div>" +
            "<p>" +
            "Sin comentarios todavia" +
            "</p>" +
            "</div>" +
            "</div>" +
            "</li>";
        } else {
            for (var i = 0; i < datos.comentarios.length; i++) {
            comentarios1 +=
            "<div class='media comment-box col-lg-12 col-md-12 col-sm-12' style='text-align:left'>"+
            " <div class='media-left'>"+
                " <a href='#'>"+
                   "  <img class='img-responsive user-photo' src='"+datos.comentarios[i].urlFoto +"'>"+
                " </a>"+
            " </div>"+
            " <div class='media-body' style='background-color:white'>"+
                " <h4 class='media-heading'>"+datos.comentarios[i].nombre+" "+datos.comentarios[i].apellido+"</h4>"+
                " <p >"+datos.comentarios[i].comentario+"</p>"+
             
             "</div>"+
        " </div>";
            }
        }
        
        $("#insertacomentarios").html(comentarios1);
      },
      error: function (error) {
        console.log(error);
      },
    }); //Fin ajax categorias
  };

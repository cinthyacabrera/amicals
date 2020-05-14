<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/login.css">
  
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/faviconA.png">
  
  <link rel="stylesheet" href="fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    <title>Amicals Perfil</title>


</head>
<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent ">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo  del header-->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logoletras.png" style="width: 150px; position:relative; left: 0px; top: -10px; z-index: 999; opacity: 1;">
                                </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">    
                                    <li ><a href="index-sesion.php">Acerca de Amicals</a></li>
                                    
                                    <li ><a href="Vocabularios.php">Vocabularios</a>
                                        <ul class="submenu">
                                            <li><a href="Saludos.html">Saludos</a></li>
                                          <li><a href="preguntas.html">Preguntas</a></li>
                                          <li><a href="familia.html">Familia</a></li>
                                          <li><a href="colores.html">colores</a></li>
                                          <li><a href="medios.html">Medios de transporte</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="Perfil.php">Perfil</a>
                                        <ul class="submenu">
                                            <li><a href="class/cerrarSesion.php">Cerrar Sesión</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- Header End -->
</header>


<body >
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="panel-body card" style="background-color: rgb(255, 221, 219); margin: 10px 10px 10px 10px;">
        
      
    <div class="container bootstrap snippet" style="margin-top: 13px;">
        
        <div class="row">
              <div class="col-lg-3"><!--left col-->
                  
    
          <div class="text-center col-lg-12">
            <img id="imagenPerfil" class="avatar img-circle img-thumbnail" alt="avatar">
            <div class="col-xs-6 col-lg-12">
                <label for="first_name"><h4>
                <?php echo $_SESSION["usuario"]["nombre"] . ' ' . $_SESSION["usuario"]["apellido"]; ?>
                </h4></label>
                <h6>Si quiere editar su fotografia de click sobre ella.</h6>
            </div>
            <form id="formAtualizarImagen" style="display:none" enctype="multipart/form-data">
                            <!-- ACTUALIZAR IMAGEN -->
                            <input type="file" name="imagen" accept="image/*" id="imagenActualizar" class="file-upload col-lg-12">
             </form>
            
            
          </div></hr><br>
    
            </div><!--/col-3-->
            
            
            <div class="col-lg-9" role="tablist">
                   
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#informacion" role="tab" aria-controls="nav-home" aria-selected="true" style="color:black">INFORMACION</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#editar" role="tab" aria-controls="nav-contact" aria-selected="false" style="color:black">EDITAR</a>
                                    
                
                                </div>
                            </nav>
              <div class="tab-content">
                <div class="tab-pane" id="editar">
                    <hr>
                      <form class="form" action="##" method="post" id="registrationForm">
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="first_name"><h4>Nombre</h4></label>
                                  <input type="text" class="form-control" name="first_name" id="nombre_editar" value="<?php echo $_SESSION["usuario"]["nombre"]; ?>" title="enter your first name if any.">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                <label for="last_name"><h4>Apellido</h4></label>
                                  <input type="text" class="form-control" name="last_name" id="apellido_editar" value="<?php echo $_SESSION["usuario"]["apellido"]; ?>" title="enter your last name if any.">
                              </div>
                          </div>
              
                                      
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email_editar" value="<?php echo $_SESSION["usuario"]["email"]; ?>" title="enter your email.">
                              </div>
                          </div>
                         
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="password"><h4>Contraseña </h4></label>
                                  <input type="password" class="form-control" name="password" id="contra_editar" value="<?php echo $_SESSION["usuario"]["contrasenia"]; ?>" title="enter your password.">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="password"><h4>Confirme contraseña</h4></label>
                                  <input type="password" class="form-control" name="password" id="contra2_editar" placeholder="confirme contraseña" title="enter your password.">
                              </div>
                          </div>
                          
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                      <button class="btn btn-lg btn-success" id="editarUsuario"type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar</button>
                                       
                                </div>
                          </div>
                      </form>
                  
                  <hr>
                  
                 </div><!--/tab-pane-->
                 
                 <div class="tab-pane active" id="informacion">
                        
                       
                      <hr>
                      <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="first_name"><h4>Nombre</h4></label>
                                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="<?php echo $_SESSION["usuario"]["nombre"]; ?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                <label for="last_name"><h4>Apellido</h4></label>
                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="<?php echo $_SESSION["usuario"]["apellido"]; ?>" readonly>
                              </div>
                          </div>
              
                                      
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="email"><h4>Email</h4></label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $_SESSION["usuario"]["email"]; ?>" readonly>
                              </div>
                          </div>
                         
                          <div class="form-group">
                              
                              <div class="col-xs-6">
                                  <label for="password"><h4>Contraseña </h4></label>
                                  <input type="password" class="form-control" name="password" id="password" value="<?php echo $_SESSION["usuario"]["contrasenia"]; ?>" readonly>
                              </div>
                          </div>
                          
                          
                      </form>
                  </div>
                   
                  </div><!--/tab-pane-->
              </div><!--/tab-content-->
    
            </div><!--/col-9-->
        </div>
        </div>
        
 
    
    
    
    
    
    
    
    
    </body>
<footer>

    <!-- Footer Start-->
   <div class="footer-main">
     <div class="footer-area footer-padding">
         <div class="container">
             <div class="row  justify-content-between">
                 <div class="col-lg-3 col-md-4 col-sm-8">
                      <div class="single-footer-caption mb-30">
                           <!-- logo -->
                          <div class="footer-logo">
                              <a href="index.html"><img src="assets/img/logoletras.png" alt=""></a>
                          </div>
                          <div class="footer-tittle">
                              <div class="footer-pera">
                                  <p class="info1">Amicals, una buena comunicacion es el siguiente paso a un mejor futuro.</p>
                             </div>
                          </div>
                      </div>
                 </div>
                 <div class="col-lg-2 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>¡Siguenos en nuestras Redes!</h4>
                            <ul>
                            <li> <img class="logo" src="assets/img/facebook.png"><a href="#">Facebook</a></li>
                            
                         <li><img class="logo" src="assets/img/Twitter.png"><a href="#">Twitter</a></li>
                               
                               
                               
                            </ul>
                        </div> 
                    </div>
                 </div>
                 <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>¡Contactanos!</h4>
                        <ul>
                            <li> <img class="logo" src="assets/img/whatsapp.png"><a href="#">89231542</a></li>
                            <li> <img class="logo" src="assets/img/correo.png"> <a href="#">correo: Amicals@gmail.com</a></li>
                            
                        </ul>
                    </div>
                 </div>
             </div>
                <div class="mt-10 info"></div>
         </div>
         <div class="col-xl-12 ">
            <div class="footer-copy-right">
               <h4>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Amicals </h4>
            </div>
        </div>
     </div>
    </div>
</footer>                   
   
    <!-- Footer End-->

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        <script src="class/controlador.js"></script>
       <script>$(document).ready(function() {

    
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }
            
        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
</script> 

      
</html>
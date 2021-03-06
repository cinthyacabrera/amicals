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
    <title>Amicals Vocabularios</title>


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
                                    <li class="active"><a href="Vocabularios.html">Vocabularios</a>
                                        <ul class="submenu">
                                            <li><a href="Saludos.html">Saludos</a></li>
                                          <li><a href="preguntas.html">Preguntas</a></li>
                                          <li><a href="familia.html">Familia</a></li>
                                          <li><a href="colores.html">colores</a></li>
                                          <li><a href="medios.html">Medios de transporte</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                        if ($_SESSION["usuario"]["tipo"] == "administrador") {
                                            echo ' <li class="active"><a href="admin.php">Perfil</a>
                                            <ul class="submenu">
                                                <li><a href="class/cerrarSesion.php">Cerrar Sesión</a></li>
                                            </ul>
                                        </li>';
                                        }
                                        if ($_SESSION["usuario"]["tipo"] == "normal") {
                                            echo ' <li class="active"><a href="Perfil.php">Perfil</a>
                                            <ul class="submenu">
                                                <li><a href="class/cerrarSesion.php">Cerrar Sesión</a></li>
                                            </ul>
                                        </li>';
                                        }


                                        ?>
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
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                  <!-- logo amicals -->
                <img src="assets/img/logoR.png">
            </div>
        </div>
    </div>
</div>
<body class="foto">
    
    <main>

        <!-- Best Features Start -->
        
        <!-- Best Features End -->
        <!-- Our Customer Start -->
        <div class="our-customer pt-50 pb-100">
            <div class="montana">
            <div class="container-fluid">
                <div class="our-customer-wrapper">
                    <!-- Section Tittle -->
                    <div class="row d-flex justify-content-center">
                         
                            <div class="section-tittle text-center">
                                <h2>TU TIENES QUE SER SORDO <br> PARA ENTENDER.</h2>
                            </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="customar-active dot-style d-flex dot-style">
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                              
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Tu tienes que ser sordo para entender</a></h4>
                                        <p>Que se siente al “oir” una mano.</p>
                                    </div>
                                </div>
                            
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                       
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Tu tienes que ser sordo para entender</a></h4>
                                        <p>Que se siente cuando de frente te gritan creyendo que asi te van a ayudar a oir o si tratando de entender a un amigo que un chiste trata de aclarar, no te ries porque no entiendes.</p>
                                    </div>
                                </div>
                            
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                       
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Tu tienes que ser sordo para entender</a></h4>
                                        <p>Que se siente en el camino de la vida encontrarse con un extraño que abre su boca y diga una línea de palabras con rapidez y tu no puedes entender la expresión de su cara porque es nueva y tu estas perdido. </p>
                                    </div>
                                </div>
                            
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Tu tienes que ser sordo para entender</a></h4>
                                        <p>Que se siente el ser curioso, el tener sed por el conocimiento que tu puedas llamar propio con un deseo que se enciende como el fuego, y al preguntarle al hermano o amigo, te dan una como respuesta, mejor olvídalo.</p>
                                    </div>
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>          

       
   
      
    </main>
    <section style="text-align:center">
    <div style="text-align:center; background-color: rgb(255, 221, 219); margin: 10px 10px 10px 10px;">
        <h1 style="text-align:center">Comenta tu experiencia:</h1>
    </div>
    
    <style>
    .comment-box {
    margin-top: 30px !important;
}
/* CSS Test end */

.comment-box img {
    width: 50px;
    height: 50px;
}
.comment-box .media-left {
    padding-right: 10px;
    width: 65px;
}
.comment-box .media-body p {
   
    padding: 10px;
}
.comment-box .media-body .media p {
    margin-bottom: 0;
}
.comment-box .media-heading {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 7px 10px;
    position: relative;
    margin-bottom: -1px;
}
.comment-box .media-heading:before {
    content: "";
    width: 12px;
    height: 12px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-width: 1px 0 0 1px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    position: absolute;
    top: 10px;
    left: -6px;
}

.comment-area{
   background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 85px;
letter-spacing: 0.3px;
padding: 10px 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}
    </style>

    <div style=" background-color: rgb(255, 221, 219); margin: 10px 10px 10px 10px; padding:20px">
                 <div class='container' id="insertacomentarios" >
                        
                </div>
                <form class="comment-form">
					<textarea class="comment-area" name="user_comment" placeholder="Escribe tu comentario aqui" id="txt_texto" ></textarea>
					<br>
                    <button type="submit" style="position:static"class="btn btn-lg btn-success comment-btn col-lg-4 col-md-2 col-sm-2" id="comentario">Enviar</button>
				</form>
                
                
    </div>
                
    
    
    </section>
    
 
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
</html>
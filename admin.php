<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Amicals || Inicio </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/faviconA.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">

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
                            <a href="index.php"><img src="assets/img/logoletras.png" style="width: 150px; position: relative; left: 0px; top: -10px; z-index: 999; opacity: 1;">
                                </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">    
                                    <li ><a href="index-sesion.php">Acerca de Amicals</a></li>
                                    
                                    <li><a href="Vocabularios.php">Vocabularios</a>
                                       
                                        <ul class="submenu">
                                            <li><a href="Saludos.html">Saludos</a></li>
                                             <li><a href="preguntas.html">Preguntas</a></li>
                                             <li><a href="familia.html">Familia</a></li>
                                             <li><a href="colores.html">colores</a></li>
                                             <li><a href="medios.html">Medios de transporte</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="admin.php">Perfil</a>
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

   <body style="    background: rgb(193, 193, 193);">
       
    <!-- Preloader Start -->
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


    <div class="container">    
        
            <div class="row">
                <div class="col-md-6">
                    
                        <div class="card-header">
                            <h4>Images with text items</h4>
                        </div>
                        <div class="gaadiex-list">
                            <div class="gaadiex-list-item"><img class="gaadiex-list-item-img" src="<?php echo $_SESSION["usuario"]["urlFoto"]; ?>" alt="List user">
                              <div class="gaadiex-list-item-text">
                                <h3><?php echo $_SESSION["usuario"]["nombre"] . ' ' . $_SESSION["usuario"]["apellido"]; ?></h3>
                                <h4><?php echo $_SESSION["usuario"]["email"]; ?></h4>
                                <style>.card-header{ padding: 16px;margin:0px;}
                                    .card-body {position: relative; padding: 16px;}
                                    
                                    .gaadiex-list {list-style-type: none; margin: 0;padding: 0;}
                                    .gaadiex-list>.gaadiex-list-item {padding: 0 22px;}
                                    .gaadiex-list-item-img  {
                                        float: left;
                                        width: 58px;
                                        height: 58px;
                                        margin-top: 20px;
                                        margin-bottom: 8px;
                                        margin-right: 20px;
                                        border-radius: 50%;
                                    }
                                    .gaadiex-list-item i  {
                                        float: left;
                                        font-size:48px;
                                        width: 58px;
                                        height: 58px;
                                        margin-top: 20px;
                                        margin-bottom: 8px;
                                        margin-right: 20px;
                                        border-radius: 50%;
                                    }
                                    .border-b-1 {border-bottom: 1px solid rgba(162,162,162,.16);}
                                    </style>
                            </div>
                            
                            </div>
                            </div>
                 </div>
    <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Usuarios</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Comentarios</a>
             </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="container">
                    <div class="row">
                        <div class="panel panel-default widget col-lg-12">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-comment"></span>
                                <h3 class="panel-title">
                                    Usuario registrados:</h3>
                                
                            </div>
                            <div class="panel-body">
                                    <div class='container' id="insertausuarios" >
                        
                                     </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <style>body { padding-top:30px; }
                    .widget .panel-body { padding:0px; }
                    .widget .list-group { margin-bottom: 0; }
                    .widget .panel-title { display:inline }
                    .widget .label-info { float: right; }
                    .widget li.list-group-item {border-radius: 0;border: 0;border-top: 1px solid #ddd;}
                    .widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
                    .widget .mic-info { color: #666666;font-size: 11px; }
                    .widget .action { margin-top:5px; }
                    .widget .comment-text { font-size: 12px; }
                    .widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
                    </style>
                </div>
              
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <style>
                    .comment-box img {
                     width: 50px;
                     height: 50px;
                     }
                     .comment-box .media-left {
                         padding-right: 10px;
                         width: 65px;
                     }
                     .comment-box .media-body p {
                         border: 1px solid #ddd;
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
                         top: 10px;}
                     </style>
                    
                    <hr>
                         <div class='container'>
                         <div class='container' id="insertacomentarios1" >
                        
                         </div>
                         </div>
                     </div>
             
            
          
          </div>
        </div>
  </div>
    </div>
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
    

      
</html>
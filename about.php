<?php 
session_start();
include("connection/connection.php");

if (isset($_SESSION["email"])) {
    $correo = $_SESSION["email"];
$recuperar =mysqli_query($connection,"SELECT * FROM tb_user WHERE email = '$correo'");
$info = mysqli_fetch_array($recuperar);
$type_user=$info["user_type"];
if ( $type_user==1 ) {
        
  echo"<script>window.location='user/index.php'</script>";
}
if ($type_user==3) {
    echo"<script>window.location='admin/index.php'</script>";   
}
else{
    echo"<script>window.location='doctor/index.php'</script>";
}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Medic+</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/stethoscope.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
       
        .banner-area {
    padding: 200px 0 200px;}

    </style>
</head>
<body>
        <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

        <!-- Navbar -->
<header class="header">
    <nav id="nav-menu" class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 6px 0 rgba(0,0,0,.12), inset 0 -1px 0 0 #dadce0;">
        <a class="navbar-brand" href="index.php">
         <img src="assets/images/logo/medic.png" width="150" height="53" alt="Dr.Find"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicio</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="contact.php">Contacto</a>
        </div>
           </li>
         </ul>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
             <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Registrarse</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                 <a class="dropdown-item" href="doc_register.php">Como Doctor</a>
                 <a class="dropdown-item" href="register.php">Como Paciente</a>
                </div>
             </div>
           <a class="btn btn-outline-primary" href="login.php" role="button">Iniciar Sesión</a>
           <a class="btn btn-primary" href="javascript:history.back(-1);" role="button">Atrás</a>
        </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Banner Area Starts -->
    <section class="banner-area shadow p-5 mb-12 bg-white rounded">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Quiénes somos</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- About us -->
     <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>¡Conoce a nuestro equipo!</h2>
                        <p>Encuentre un médico, reserve una visita y resuelva cualquier duda relacionada con la salud.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/rebeca.jpg"   class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Rebeca Blanco</h3>
                                <h6>Programador</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>Liderando el camino en excelencia médica.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img src="assets/images/rodrigo.jpg" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Rodrigo Cabrera</h3>
                                <h6>Programador</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>Hacer que la experiencia en salud sea más humana.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="assets/images/ricardo.jpg"  class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Ricardo Moreno</h3>
                                <h6>Programador</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>Cuidar una vida mejor.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About us -->

    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
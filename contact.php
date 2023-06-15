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
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
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
              <a class="dropdown-item" href="about.php">Quiénes somos</a>
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
                    <h1>Contacto</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

            
    <!-- Contact Form Starts -->
    <section class="contact-form section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h3>Alameda Juan Pablo II, San Salvador</h3>
                            <p><a href="https://www.uees.edu.sv">https://www.uees.edu.sv</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h3>2275 4000</h3>
                            <p>Lunes a Viernes 8:00 a.m a 5:00 p.m</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h3>plusmedic2@gmail.com</h3>
                            <p>¡Escríbenos!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="connection/mgs.php" method="POST">
                        <div class="left">
                            <input type="text" name="a" placeholder="Ingrese su nombre" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'" required>
                            <input type="email" name="b" placeholder="Ingrese su correo electrónico" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su correo electrónico'" required>
                            <input type="text" name="c" placeholder="Ingrese el asunto" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                        </div>
                        <div class="right">
                            <textarea name="d" cols="20" rows="7"  placeholder="Ingrese el mensaje" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese el mensaje'" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Contact Form End -->
   <?php 

if (isset($_GET['success'])) {
                            echo "<script type='text/javascript'>


  toastr.options = {
  closeButton: true,
  progressBar: true,
  positionClass: 'toast-bottom-right',
  preventDuplicates: false,
  timeOut: 5000,
}  
toastr.info('El mensaje ha sido enviado.')

</script>";
                        }
?>
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
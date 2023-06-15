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
<html lang="es">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Medic+</title>

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
toastr.info('Te has registrado exitosamente.')
 
</script>";
                        }
?>
        <!-- Navbar -->
<header class="header">
    <nav id="nav-menu" class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 6px 0 rgba(0,0,0,.12), inset 0 -1px 0 0 #dadce0;">
        <a class="navbar-brand" href="index.php">
         <img src="assets/images/logo/medic.png" width="150" height="53" />
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
                 Lenguaje</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                 <a class="dropdown-item" href="../Medicplus_ES/index.php">Español</a>
                 <a class="dropdown-item" href="../Medicplus_EN/index.php">Ingles</a>
                </div>
             </div>
             <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Registrarse</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                 <a class="dropdown-item" href="doc_register.php">Como Doctor</a>
                 <a class="dropdown-item" href="register.php">Como Paciente</a>
                </div>
             </div>
           <a class="btn btn-primary" href="login.php" role="button">Iniciar Sesión</a>
        </div>
        </div>
    </nav>
    <!-- Navbar -->
            
    <!-- Banner Area Starts -->
    <section class="banner-area shadow p-6 mb-12 bg-white rounded">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Cuidando una vida mejor</h4>
                    <h1>Liderando el camino en la excelencia médica.</h1>
                    <p>Donde quiera que se ama el arte de la medicina se ama también a la humanidad.</p>
                    <a class="btn btn-outline-primary btn-lg btn-block" href="login.php" role="button">Reservar una cita</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Department Area Starts -->
    <section class="department-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Encuentra tu especialista</h2>
                        <p>Las opiniones de pacientes te ayudarán a tomar siempre la mejor decisión.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-slider owl-carousel">
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="index.php"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Cardiología</h3>
                                <p>El cardiólogo es el profesional de la medicina con preparación específica para asistir a pacientes con problemas cardiovasculares, ya sea como clínico, ya sea como técnico especializado en procedimientos diagnósticos y terapéuticos. </p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department2.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="index.php"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Pediatría</h3>
                                <p>Se trata de una especialidad médica que se centra en los pacientes desde el momento del nacimiento hasta la adolescencia, sin que exista un límite preciso que determine el final de su validez.</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department3.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="index.php"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Anestesiología</h3>
                                <p>Su anestesiólogo es el responsable de manejar sus funciones vitales, incluidas la respiración, la frecuencia cardiaca y la presión arterial mientras es anestesiado.</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/news1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="index.php"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Dermatología</h3>
                                <p>Un dermatólogo se dedica a todo lo que tiene que ver con su principal causa de existencia: la piel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Department Area Starts -->

   
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

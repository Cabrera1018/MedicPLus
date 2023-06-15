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
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="body">
   <?php 

if (isset($_GET['error'])) {
                            echo "<script type='text/javascript'>


  toastr.options = {
  closeButton: true,
  progressBar: true,
  positionClass: 'toast-bottom-right',
  preventDuplicates: false,
  timeOut: 5000,
}  
toastr.error('Las contraseñas no coinciden, intenta otra vez.')
 
</script>";
                        }
                        if (isset($_GET['error2'])) {
                            echo "<script type='text/javascript'>


  toastr.options = {
  closeButton: true,
  progressBar: true,
  positionClass: 'toast-bottom-right',
  preventDuplicates: false,
  timeOut: 5000,
}  
toastr.error('El correo ya ha sido usado.')
 
</script>";
                        }
?>


    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->


<!-- Navbar -->
<header class="header">
    <nav id="nav-menu" class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 6px 0 rgba(0,0,0,.12), inset 0 -1px 0 0 #dadce0;">
        <a class="navbar-brand" href="index.php">
         <img src="assets/images/logo/medic.png" width="150" height="53" alt="Medicplus"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link " href="index.php">Inicio</a>
          </li>
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
                </div>
             </div>
           <a class="btn btn-primary" href="javascript:history.back(-1);" role="button">Atrás</a>
        </div>
        </div>
    </nav>
    <!-- Navbar -->   
<script type="text/javascript">
        
        function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
    </script>
         

<form method="POST" action="connection/register.php">
       <center> <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <img src="assets/images/logo/medic.png" style="width: 38%;" />
                     <h1>Registrarse como paciente</h1>
                     <br>   
                   <div class="container">
 
                <div class="col-lg-5 align-self-center">  <div class="mt-10">
                                <input type="text" name="first_name" placeholder="Nombre" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" required class="single-input form-control">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="last_name" placeholder="Apellido" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Apellido'" required class="single-input form-control">
                            </div>
                    <div class="input-group-icon mt-10">

                                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                     <div class="mt-10">
                                <input type="email" name="email" placeholder="Correo Electrónico" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo Electrónico'" required class="single-input form-control">
                                </div>
                            </div>

                                <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select2">
                                 <div class="mt-10">
                                <input type="text" name="phone" placeholder="Telefóno" autocomplete="off" onkeypress="return justNumbers(event)" maxlength="8"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefóno'" required class="single-input form-control">
                                </div>
                            </div>

                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select2">
                                 <div class="mt-10">
                                <input type="password" name="password" placeholder="Contraseña" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contraseña'" required class="single-input form-control">
                                </div>
                            </div>

                                <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select2">
                                 <div class="mt-10">
                                <input type="password" name="confirm" placeholder="Confirmar Contraseña" autocomplete="off" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirmar Contraseña'" required class="single-input form-control">
                                </div>
                             </div>
                            <br><button class="btn btn-outline-primary btn-lg btn-block">
                        Registrarse
                    </button>
</form>
    </section></center><br>

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

<?php
include("connection/connection.php");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$user_type= $_POST['user_type'];
$speciality = $_POST['speciality'];
$department = $_POST['department'];
$boardnumber = $_POST['boardnumber'];
$address = $_POST['address'];

$title=$_FILES["title"]["name"];
$ruta=$_FILES["title"]["tmp_name"];
$direc="title/".$title;
$destino="title/".$title;
copy($ruta,$destino);
?>


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
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
 <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
<script type="text/javascript">
        
        function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
    </script>
        
        <style>
img {
    width: 100%;
}
 
    </style>
</head>
<body class="body">
  <!-- Navbar -->
<header class="header">
    <nav id="nav-menu" class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 6px 0 rgba(0,0,0,.12), inset 0 -1px 0 0 #dadce0;">
        <a class="navbar-brand" href="index.php">
         <img style="width: 150px; height: 53px; " src="assets/images/logo/medic.png" alt="Medicplus"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicio</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php">Quiénes somos</a>
              <a class="dropdown-item" href="contact.php">Contacto</a>
              <div class="dropdown-divider"></div>
        </div>
           </li>
         </ul>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        </div>
        </div>
    </nav>
    <!-- Navbar --> 
       <center> <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <img src="assets/images/logo/medic.png" style="width: 38%;" />
                     <h1>Registrarse como Doctor</h1><br>  
                     
                   <div class="container">
 
                <div class="col-lg-6 align-self-center"> 

                             
                                
                    <p>Por favor, haga clic en el botón de abajo para obtener la ubicación actual. <br> * Este será el lugar que se mostrará al paciente</p>
                   <button class="btn btn-primary btn-lg " style="font-family: Poppins, Arial, sans-serif;" onclick="findMe()">Obtenga su ubicación</button>
                   <br>
    <div id="map"></div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVvZjG1_IT2zKGB0Lqd7CMOzowAFRdE1w"></script>
    <script>
        function findMe(){
            var output = document.getElementById('map');

            // Verificar si soporta geolocalizacion
            if (navigator.geolocation) {
                output.innerHTML = "<p>Su navegador admite la geolocalización</p>";
            }else{
                output.innerHTML = "<p>Su navegador no admite la geolocalización</p>";
            }

            //Obtenemos latitud y longitud
            function localizacion(posicion){

                var latitude = posicion.coords.latitude;
                var longitude = posicion.coords.longitude;  
                document.map.latitude.value= latitude 
                document.map.longitude.value= longitude

                var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+latitude+","+longitude+"&zoom=16&size=600x300&markers=color:red%7C"+latitude+","+longitude+"&key=AIzaSyCVvZjG1_IT2zKGB0Lqd7CMOzowAFRdE1w";

                output.innerHTML ="<br><img  src='"+imgURL+"'>";

                

            }

            function error(){
                output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";

            }

            navigator.geolocation.getCurrentPosition(localizacion,error);

        }
</script>
 <form name="map" action="connection/register_dr.php" method="POST" enctype="multipart/form-data">  
                            <div class="col-lg-12">
                                <div class="mt-5"> <p>Selecciona una foto de perfil</p>
                                <input type="file" accept="(.jpg, .png, .gif, .GIF)" name="img" style="width:100%;">
                                </div>
                            </div>
             <br>
             <br>

  
    <input type="text" name="first_name" readonly="readonly" hidden="hidden" value="<?php echo $first_name; ?>">
    <input type="text" name="last_name" readonly="readonly" hidden="hidden" value="<?php echo $last_name; ?>">
    <input type="text" name="email" readonly="readonly" hidden="hidden" value="<?php echo $email; ?>">
    <input type="text" name="phone" readonly="readonly" hidden="hidden" value="<?php echo $phone; ?>">
    <input type="text" name="password" readonly="readonly" hidden="hidden" value="<?php echo $password; ?>">
    <input type="text" name="confirm" readonly="readonly" hidden="hidden" value="<?php echo $confirm; ?>">
    <input type="text" name="user_type" readonly="readonly" hidden="hidden" value="<?php echo $user_type; ?>">
    <input type="text" name="speciality" readonly="readonly" hidden="hidden" value="<?php echo $speciality; ?>">
    <input type="text" name="department" readonly="readonly" hidden="hidden" value="<?php echo $department; ?>">
    <input type="text" name="address" readonly="readonly" hidden="hidden" value="<?php echo $address; ?>">
    <input type="text" name="title" readonly="readonly" hidden="hidden" value="<?php echo $direc; ?>">
    <input type="text" name="boardnumber" readonly="readonly" hidden="hidden" value="<?php echo $boardnumber; ?>">
    <input type="text"  hidden="hidden" readonly="readonly" name="latitude" required="required">        
    <input type="text"  hidden="hidden" readonly="readonly" name="longitude" required="required">



                            <button class="btn btn-outline-primary btn-lg btn-block">
                        Registrarse
                    </button>
<label style="float: right;">Paso 3/3</label>
    </section></center> </form>

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

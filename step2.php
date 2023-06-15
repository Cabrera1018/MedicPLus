    <?php
include("connection/connection.php");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$user_type= "0";

$query=mysqli_query($connection,"SELECT * FROM tb_user WHERE  email='".$_POST['email']."'");
$line = mysqli_fetch_array($query);
$emaildb = $line['email'];

if ($email == $emaildb){

    echo"<script>window.location='doc_register.php?error2'</script>";}

$query=mysqli_query($connection,"SELECT * FROM tb_doctor WHERE  email='".$_POST['email']."'");
$line = mysqli_fetch_array($query);
$emaildb = $line['email'];

if ($email == $emaildb){

    echo"<script>window.location='doc_register.php?error2'</script>";

}if ($password!==$confirm)
{
 
    echo"<script>window.location='doc_register.php?error'</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
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
        
        #header{
            position: static !important;
            background-color: #88e0f5;
        }
        .banner-area {
    padding: 4.3% 200px;}

    .nav-menu a {
    color: black;
    }

 
    </style>
</head>
<body class="body">

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

<form method="POST" action="step3.php " enctype="multipart/form-data">
       <center> <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <img src="assets/images/logo/medic.png" style="width: 38%;" />
                     <h1>Registrarse como Doctor</h1>
                     <br>   
                   <div class="container">
 
                <div class="col-lg-5 align-self-center"> 
                    <div class="input-group-icon mt-10">

                                 <div class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select name="speciality" required="required" id="Speciality">
                                    <option value="">Seleccionar Especialidad</option>
                                <option value="1">Anestesiología</option>
                                <option value="2">Dermatología</option>
                                <option value="3">Oftalmología</option>
                                <option value="4">Ortopedia</option>
                                <option value="5">Inmunología</option>
                                <option value="6">Pediatría</option>
                                <option value="7">Cardiología</option>
                                <option value="8">Neurocirugía</option>
                                <option value="9">Endocrinología</option>
                                <option value="10">Medicina General</option>
                                <option value="11">Gastroenterología</option>
                                <option value="12">Ginecología</option>
                                <option value="13">Hematología</option>
                                <option value="14">Oncología</option>
                                <option value="15">Urología</option>
                                <option value="16">Geriatría</option>
                                    </select>
                                </div>
                            </div>

                                 <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select2">
                                    <select name="department" class="required-entry" required="required" id="department">
                                        <option value="">Seleccionar Departamento</option>
                                        <option value="1">Ahuachapán</option>
                                        <option value="2">Cabañas</option>
                                        <option value="3">Chalatenango</option>
                                        <option value="4">Cuscatlán</option>
                                        <option value="5">La Libertad</option>
                                        <option value="6">La Paz</option>
                                        <option value="7">La Unión</option>
                                        <option value="8">Morazán</option>
                                        <option value="9">San Miguel</option>
                                        <option value="10">San Salvador</option>
                                        <option value="11">San Vicente</option>
                                        <option value="12">Santa Ana</option>
                                        <option value="13">Sonsonate</option>
                                        <option value="14">Usulután</option>
                                    
                                    </select>
                                </div>
                            </div>

                            <div class="mt-10">
                                <textarea class="single-textarea single-input form-control" autocomplete="off" name="address" placeholder="Dirección" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dirección'" required></textarea>
                            </div>

                                 <div class="mt-10">
                                <input type="text" name="boardnumber" autocomplete="off" placeholder="Número de Junta de la Vigilancia" onkeypress="return justNumbers(event)" maxlength="8"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Número de Junta de la Vigilancia'" required class="single-input form-control">
                                </div>
          


                            <div class="col-lg-12">
                                 <div class="mt-5"> <h3>Agrega tus Títulos Profesionales</h3><br>
                                <input type="file" accept="(.jpg, .png, .pdf, .docx)" name="title" style="width:100%;">
                                </div>
                            </div>

                            <br><button class="btn btn-outline-primary btn-lg btn-block">
                        Siguiente Paso
                    </button>
<label style="float: right;">Paso 2/3</label>
    </section></center> 



<input type="text" name="first_name" readonly="readonly" hidden="hidden" value="<?php echo $first_name; ?>">
<input type="text" name="last_name" readonly="readonly" hidden="hidden" value="<?php echo $last_name; ?>">
<input type="text" name="email" readonly="readonly" hidden="hidden" value="<?php echo $email; ?>">
<input type="text" name="phone" readonly="readonly" hidden="hidden" value="<?php echo $phone; ?>">
<input type="text" name="password" readonly="readonly" hidden="hidden" value="<?php echo $password; ?>">
<input type="text" name="confirm" readonly="readonly" hidden="hidden" value="<?php echo $confirm; ?>">
<input type="text" name="user_type" readonly="readonly" hidden="hidden" value="<?php echo $user_type; ?>">


</form>

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

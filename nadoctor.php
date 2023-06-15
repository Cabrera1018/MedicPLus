
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
        
        #header{
            position: static !important;
            background-color: #88e0f5;
        }
        .banner-area {
    padding: 200px 0 200px;}

    .nav-menu a {
    color: black;

    }
 
    </style>
</head>
<body>
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
toastr.info('Has sido registrado exitosamente.')
 
</script>";
                        }
?>
    <!-- Navbar -->
 <header class="header">
    <nav id="nav-menu" class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 6px 0 rgba(0,0,0,.12), inset 0 -1px 0 0 #dadce0;">
        <a class="navbar-brand" href="index.php">
         <img src="assets/images/logo/medic.png" style="width:150px; height:53px;"  alt="Medicplus"/>
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
        </div>
    </nav>
<!-- Navbar -->
       <center> <div class="container">
        <div class="row">
                <div class="col-lg-12">
                     <img src="assets/images/logo/medic.png" style="width: 38%;" />
                        <h1>Ya has sido registrado</h1><br>
                        <h3>
Tu cuenta de doctor sera activada en un lapso de 24 - 48 horas, porfavor espere.</h3>
</div>
<br>          
                   </center> 
</form>
    </section>

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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/recursos/dist/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/recursos/dist/css/adminlte.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php include "modulos/header.php";?>
  <!-- /.navbar -->
<?php include "modulos/menu.php";?>
  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->

<?php
if(isset($_GET["pagina"])){
  
  if($_GET["pagina"]=="usuarios"||
     $_GET["pagina"]=="roles"){
    include "paginas/".$_GET["pagina"].".php";
  }}

?>
  
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="vista/recursos/dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vista/recursos/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vista/recursos/dist/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vista/recursos/dist/dist/js/demo.js"></script>
</body>
</html>
<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
   <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">



</head>
<body class="bg-black">

  <div class="form-box login-box" id="login-box">

    <div class="header">Registro de asistentes
      
    </div>
    <form action="RegistroAsistentes.php" method="post">


      <div class="body bg-bray has-feedback">

      <div class="form-group ">

        <input type="text" name="name" class="form-group" placeholder="Nombre Completo">
      </div>

      <div class="form-group">

        <input type="text" name="apellido" class="form-group" placeholder="Apellido Completo">
      </div>

      <div class="form-group">

        <input type="text" name="dnicodigo" class="form-group" placeholder="DNI">
      </div>

      <div class="form-group">

        <input type="text" name="email" class="form-group" placeholder="Email">
      </div>

      <div class="form-group">

        <input type="text" name="numerocelular" class="form-group" placeholder="Numero de celular">
      </div>

        
      </div>
      <div class="footer">

        <button id="btnRegistrar" type="submit" class="btn bg-olive btn-block">Enviar</button>
        
      </div>
    
    </form>
    
  </div>

     <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>


</html>

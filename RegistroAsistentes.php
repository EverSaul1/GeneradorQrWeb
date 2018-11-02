<?php
include('Settings/conexion.php');
include('static/lib/phpqrcode/qrlib.php');
	
	$Nombre =$_POST['nombre'];
	$Apellido =$_POST['apellidos'];
	$Dnicodigo =$_POST['dnicodigo'];
	$Email =$_POST['email'];
	$Numerocelular =$_POST['numerocelular'];

	$PersonaNuevo = "INSERT INTO persona(Nombre, Apellido, Dnicodigo, Email, Numerocelular) VALUE ($Nombre, $Apellido, $Dnicodigo, $Email, $Numerocelular)";
	mysql_query($PersonaNuevo);

	header("location:PersonaNuevo.php?email=".$Email."&nombre=".$Nombre );




<?php

	$matricula=$_POST['matricula'];
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$promedio=$_POST['promedio'];
	$genero=$_POST['optradio'];
	$fechaIngreso=$_POST['datFecha'];
	$escuela=$_POST['escuela'];
	$ciudad=$_POST['ciudad'];
	$area=$_POST['area'];
	$carrera=$_POST['carrera'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE matricula='$matricula'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe la matricula designado para un usuario, verifique sus datos");</script> ';
			}else{

				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$pass','$mail', '$matricula','$promedio','$genero','$escuela','$ciudad','$area','$carrera','','2','$fechaIngreso')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='index.php'</script>";

			}

		}else
			echo 'Las contraseñas son incorrectas';
		


?>

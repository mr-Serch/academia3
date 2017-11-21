<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto UV</title>
</head>
<body background="images/a4.jpg" style="background-attachment: fixed" >
	<br>
  <br>
  <br>
  <br>
<center><div class="tit"><h2 style="color: #6C5E3A; ">Bienvenido Administrador</h2>
<br>
<br>
  <center><div class="tit"><h2 style="color: #6C5E3A; ">Iniciar sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
  <a href="index.php">No eres administrador, click aqui</a>
<br>

<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>


		</td>
		</tr>
		</table>
		</div></center></div></center>


</body>
</html>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
  <title>Proyecto academias</title>
</head>
<body background="images/uv5.jpeg" style="background-attachment: fixed" >
    <center><div class="Ingreso">

    </form>

<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>



    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Nombre(s) y Apellidos" />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Matrícula</b></label>
      <input type="text" name="matricula" class="form-control"  required placeholder="Ejemplo: S12345678"/>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="email" name="nick" class="form-control"  required placeholder="algo@dominio.com"/>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu promedio</b></label>
      <input type="text" name="promedio" class="form-control"  required placeholder="Promedio"/>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Genero</b></label>
      <label class="radio-inline">
          <input type="radio" name="optradio" value="M">Masculino
          <input type="radio" name="optradio" value="F">Femenino<br>
      </label>

    </div>

    <div class="form-group has-feedback">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Fecha de Ingreso UV</b></label>
        <input type="date" class="form-control" name="datFecha" placeholder="Fecha de Ingreso">
        <span class="glyphicon glyphicon-calendar  form-control-feedback"></span>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu escuela de procedencia</b></label>
      <input type="text" name="escuela" class="form-control"  required placeholder="escuela de procedencia"/>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu ciudad</b></label>
      <input type="text" name="ciudad" class="form-control"  required placeholder="ciudad"/>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;" for="area"><b>Area Propedeutica</b></label>
      <select name="area">
        <option>Exactas</option>
        <option>Humanidades</option>
        <option>Biologicas</option>
        <option>Economico</option>
      </select>
    </div>

    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;" for="carrera"><b>Selecciona tu carrera</b></label>
      <select name="carrera">
        <option>Administracion</option>
        <option>Administracion de negocios internacionales</option>
        <option>Ciencias y Tecnicas estadisticas</option>
        <option>Contaduria</option>
        <option>Economia</option>
        <option>Geografia</option>
        <option>Gestion y direccion de negocios</option>
        <option>Ingenieria de Software</option>
        <option>Ciencias politicas y gestion publica</option>
        <option>Estadistica</option>
        <option>Publicidad y relaciones publicas</option>
        <option>Redes y Servicios de computo</option>
        <option>Relaciones industriales</option>
        <option>Sistemas Computacionales Admministrativos</option>
        <option>Tecnologias Computacionales</option>
      </select>
    </div>



    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>

    </div>

    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>
<!--Fin formulario registro -->

<br>
<br>
<br>
  <a href="index.php">Iniciar Sesion</a>
<br>


    </td>
    </tr>
    </table>
    </div></center></div></center>


</body>
</html>

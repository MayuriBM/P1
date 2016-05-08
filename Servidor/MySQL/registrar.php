<!doctype html>
<html lang="en">
 <head>
  <title>Registrar</title>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="estilosRegistro.css">
 </head>
 <body>
  <form name="datos" method="post" action="insertarRegistro.php">
<table class="tabla" align="center" width="60%">
	
	<tr><td>Usuario</td>
		<td><input name="usuario" id="usuario" cols="10" rows="1" required="yes"></input></td>
	</tr>
	<tr><td>Clave</td>
		<td><input type="password" name="clave" id="clave" cols="10" rows="1" required="yes"></td>
			
	</tr>
	<tr><td>Nombre Completo</td>
		<td><input name="nombre" id="nombre" cols="30" rows="1" required="yes"></input></td>
	</tr>
	
	<tr><td>Fecha nacimiento</td>
		<td><input type="date" name="fecha" id="fecha" required="yes"></input></td>
	</tr>
	<tr><td>Email</td>
		<td><input type="text" id="email" name="email" size="20" maxlength="60" value="" required="yes"></td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center"><button>Continuar</button></td>
	</tr>
	
	
 </body>
</html>


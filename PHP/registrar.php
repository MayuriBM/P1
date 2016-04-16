<!doctype html>
<html lang="en">
 <head>
  <title>Registrar</title>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  
 </head>
 <body>
  <form name="datos" method="post" action="insertarRegistro.php">
<table align="center" width="60%">
	
	<tr><td>Usuario</td>
		<td><textarea name="usuario" id="usuario" cols="10" rows="1" required="yes"></textarea></td>
	</tr>
	<tr><td>Clave</td>
		<td><input type="password" name="clave" id="clave" cols="10" rows="1" required="yes"></td>
			
	</tr>
	<tr><td>Nombre Completo</td>
		<td><textarea name="nombre" id="nombre" cols="30" rows="1" required="yes"></textarea></td>
	</tr>
	
	<tr><td>Fecha nacimiento</td>
		<td><input type="date" name="fecha" id="fecha" required="yes"></input></td>
	</tr>
	<tr><td>Email</td>
		<td><input type="text" id="email" name="email" size="60" maxlength="60" value="" required="yes"></td>
	</tr>
	<tr><td colspan="2" align="center"><input type="submit" value="continuar"></td>
	</tr>
	
	
 </body>
</html>


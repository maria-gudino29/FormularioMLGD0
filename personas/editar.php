<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Inicio</title>
</head>
<body>
<br> 
	<form action="PersonasControlador.php" method="post" name="formulario">
	<table>
		<tr>
			<td>Nombres:</td>
			
			<td><input type="text" name="nombres" id="nombres" placeholder="Ej: Martin José" title="Ingrese sus nombres" value="<?=$data[0][1]?>"></td>
		</tr>
		<tr>
			<td>Apellidos:</td><td><input type="text" name="apellidos" id="apellidos" placeholder="Ej: Perez Salcedo" title="Ingrese sus apellidos" value="<?=$data[0][2]?>"></td>
		</tr>
		<tr>
			<td>Cédula:</td><td><input type="text" name="number" id="cedula" placeholder="Ej: 291581160" title="Ingrese su cedula" value="<?=$data[0][3]?>"></td>
	</tr>
	<tr>
		<td>
			<input type="hidden" name="id_persona" value="<?=$data[0][0]?>">
			<input type="hidden" name="operacion" value="actualizar">
			<input type="submit" name="enviar" value="Enviar"></td>
	</tr>
</table>
</form>
</body>
</html>
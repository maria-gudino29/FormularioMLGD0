<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html> 
<head>
	<meta charset="iso-8559-1"/>

	<title>Inicio</title>
</head>
<body>
<br> 
	<form action="RopasControlador.php" method="post" name="formulario">
	<table>
		<tr>
			<td>Nombre:</td>
			
			<td><input type="text" name="nombre" id="nombre" placeholder="Ej: Pantalón" title="Ingrese el nombre de la prenda de vestir" value="<?=$data[0][1]?>"></td>
	</tr>
		<tr>
			<td>Tipos:</td>
			<td><input type="text" name="tipos" id="tipos" placeholder="Ej: Vaqueros" title="Ingrese el tipo de prenda de vestir" value="<?=$data[0][2]?>"></td>
	</tr>
		<tr>
			<td>Estilo:</td>
			<td><input type="text" name="estilo" id="estilo" placeholder="Ej: Americano" title="Ingrese el estilo de la prenda de vestir" value="<?=$data[0][3]?>"></td>
	</tr>
		<tr>
			<td>Uso:</td>
			<td><input type="text" name="uso" id="uso" placeholder="Ej: Trabajo insustrial" title="Ingrese el tipo de prenda de vestir" value="<?=$data[0][4]?>"></td>
	</tr>
		<tr>
			<td>Materiales:</td>
			<td><input type="text" name="materiales" id="materiales" placeholder="Ej: Blue Jean" title="Ingrese el nombre de los materiales de la prenda de vestir" value="<?=$data[0][5]?>"></td>
	</tr>
	
	</tr>
	<tr>
		<td>
			<input type="hidden" name="id_ropas" value="<?=$data[0][0]?>">
			<input type="hidden" name="operacion" value="actualizar">
			<input type="submit" name="enviar" value="Enviar"></td>
	</tr>
</table>
</form>
</body>
</html>
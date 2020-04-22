<?php

extract($_REQUEST);
$data=unserialize($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de personas</title>
<script type="text/javascript">
	function eliminar (id){
		if (confirm("Seguro desea eliminar el registro?")) {
			window.location="PersonasControlador.php?operacion=eliminar&id_persona="+id;
		}
	}
</script>
</head>
<body>
	<table align="center">
		<a href="PersonasControlador.php?operacion=index">Inicio</a>
		<center><a href="personasControlador.php?operacion=registrar">Registrar</a></center>
		<tr><th>Nro</th><th>Nombres</th><th>Apellidos</th><th>Cédula</th><th>Operaciones</th></tr>
	<?php $num=1;
	for ($i=0; $i < $filas; $i++) { 
			echo "<tr>";
	?>
		<?php for ($j=0; $j <$campos ; $j++) { ?>
			<td><?php echo $data[$i][$j]; 	}	?></td>
<td><a href="PersonasControlador.php?operacion=modificar&id_persona=<?php echo $data[$i][0]; ?>">Modificar</a>
<a href="javascript:eliminar(<?php echo $data[$i][0];?>)">Eliminar</a>
</td>
	<?php echo "</tr>"; $num++; }?>
</table>
</body>
</html>
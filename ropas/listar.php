<?php

extract($_REQUEST);
$data=unserialize($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de ropas</title>
<script type="text/javascript">
	function eliminar (id){
		if (confirm("Seguro desea eliminar el registro?")) {
			window.location="RopasControlador.php?operacion=eliminar&id_ropas="+id;
		}
	}
</script>
</head>
<body>
	<table align="center">
		<a href="RopasControlador.php?operacion=index">Inicio</a>
		<center><a href="RopasControlador.php?operacion=registrar">Registrar</a></center>
		<tr><th>Nro</th><th>Nombre</th><th>Tipo</th><th>Estilo</th><th>Uso</th><th>Materiales</th><th>Operaciones</th></tr>
	<?php $num=1;
	for ($i=0; $i < $filas; $i++) { 
			echo "<tr>";
	?>
		<?php for ($j=0; $j <$campos ; $j++) { ?>
			<td><?php echo $data[$i][$j]; 	}	?></td>
<td><a href="RopasControlador.php?operacion=modificar&id_ropas=<?php echo $data[$i][0]; ?>">Modificar</a>
<a href="javascript:eliminar(<?php echo $data[$i][0];?>)">Eliminar</a>
</td>
	<?php echo "</tr>"; $num++; }?>
</table>
</body>
</html>
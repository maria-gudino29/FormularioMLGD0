<?php
include ("clasedb.php");
extract($_REQUEST);
class PersonaControlador{

	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();
		$sql="SELECT * FROM datos_personales";
		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$i=0;
		$datos[] = array();

		while ($data=mysqli_fetch_array($res)) {
			for ($i=0; $i < count($data); $i++) { 
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
		header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}

	static function controlador($operacion){
		switch ($operacion) {
			case 'index':
				self::index();
				break;
			case 'registrar':
				self::registrar();
				break;
			case 'guardar':
				self::guardar();
				break;
			case 'modificar':
				self::modificar();
				break;
			case 'actualizar':
				self::actualizar();
				break;
			case 'eliminar':
				self::eliminar();
				break;		
			default:
				?> 		
					<script type="text/javascript">
						alert("No existe la ruta");
						window.location="PersonasControlador.php?operación=index";
					</script>
				<?php
				break;
		}
	}
}

PersonaControlador::controlador($operacion);

?>
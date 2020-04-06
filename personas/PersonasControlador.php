<?php
include (".../clasedb.php");
extract($_REQUEST);
class PersonaControlador
{
	public function index(){
		$db=new clasedb();//instanciando clasedb
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM datos_personales";//query

		$res=mysql_query($conex,$sql);//ejecutando query
		$campos=mysqli_num_fields($res);//cuantos campos trae la cunsulta
		$i=0;
		$datos[]=$array();//inicializando array
		//extrayendo datos
		while ($data=mysqli_fetch_array($res)) {
			for ($i=0; $i < ; $i++) { 
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
		//enviando datos
		header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}//fin de la funcion index

		$persona=new PersonasControlador();
	static function controlador($operación){
			$persona=new PersonasControlador();
		switch ($operación) {
			case 'index':
				$persona->index();
				break;
			case 'registrar':
				$persona->registrar();
				//$persona->registrar();
				break;
			case 'guardar':
				$persona->guardar();
				//$persona->guardar();
				break;
			case 'modificar':
				$persona->modificar();
				//$persona->modificar();
				break;
			case 'actualizar':
				$personar->actualizar();
				//$personar->actualizar();
				break;
			case 'eliminar':
				$persona->eliminar();
				//$persona->eliminar();
				break;		
			default:
			?> <script type="text/javascript">
				alert("No existe la ruta");
				window.location="PersonasControlador.php?operación=index";
			</script>
				<?php
				break;
		}//cierre del switch
	}//cirre de la función controlador
}//cierre de la clase Persona Controlador

PersonasControlador::controlador($operación);

?>
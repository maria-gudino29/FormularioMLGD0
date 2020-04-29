<?php
include ("clasedb.php");
extract($_REQUEST);
class RopasControlador{

	public function index(){
		$db=new clasedb();//instanciando clasedb
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM ropas";//query

		$res=mysqli_query($conex,$sql);//ejecutando query
		$campos=mysqli_num_fields($res);//cuantos campos trae la cunsulta
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();//inicializando array
		//extrayendo datos
		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j <$campos ; $j++){ 
				$datos[$i][$j]=$data[$j];
			}//cierro for
			$i++;
		}
			mysqli_close($conex);
			//enviando datos
			header("Location:listar.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));	
	}
	
	public function registrar(){
		header("Location:formulario.html");
	}

	public function guardar(){
		extract($_REQUEST);//Extrayendo valores de url
		$db=new clasedb();
		$conex=$db->conectar();//conectando con la base de datos
		$sql="INSERT INTO ropas (nombre, tipo, estilo, uso, materiales) VALUES ('{$nombre}','{$tipo}','{$estilo}','{$uso}','{$materiales}')";
		$res=mysqli_query($conex,$sql);//ejecutando query
		self::index();
	}

	public function modificar (){
		extract($_REQUEST);//Extrayendo valores de url
		$db=new clasedb();
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM ropas WHERE id =".$id_ropas."";
		$res=mysqli_query($conex,$sql);//ejecutando query
		$campos=mysqli_num_fields($res);//cuantos campos trae la cunsulta
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();//inicializando array
		//extrayendo datos
		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j <$campos ; $j++){ 
				$datos[$i][$j]=$data[$j];
			}//cierro for
			$i++;
		}
		header("Location: editar.php?data=".serialize($datos));
	}

	public function actualizar(){

		extract($_POST);//EXTRAYENDO VARIABLES DEL FORMULARIO
		$db=new clasedb();
		$conex=$db->conectar();//conectando con la base de datos
		$sql="SELECT * FROM ropas WHERE nombre = '{$nombre}' AND id <> ".$id_ropas;
		//echo $sql;
		$res=mysqli_query($conex,$sql);
		$cant=mysqli_num_rows($res);//trae cuantos registros tiene la consulta

		if ($cant > 0){
			?>
				<script type="text/javascript">
					alert("NOMBRE YA REGISTRADO");
					window.location="RopasControlador.php?operacion=index";	
				</script>
			<?php

		}else{

			$sql="UPDATE ropas SET nombre='".$nombre."',tipo='".$tipos."',estilo='".$estilo."',uso='".$uso."',materiales='".$materiales."' WHERE id = ".$id_ropas;
			$res=mysqli_query($conex,$sql);

				if($res){

					?>
					<script type="text/javascript">
							alert("REGISTRO MODIFICADO");
							window.location="RopasControlador.php?operacion=index";
					</script>
					<?php

			}else{

				?>	
				<script type="text/javascript">
					alert("ERROR AL MODIFICAR EL REGISTRO");
					window.location="RopasControlador.php?operacion=index";
				</script>
				<?php
			}
		}
	}//Fin de la funcion actualizar

	public function eliminar(){

		extract($_REQUEST);//extrayendo variables del url
		$db=new clasedb();
		$conex=$db->conectar();//conectando con la base de datos

		$sql="DELETE FROM ropas WHERE id=".$id_ropas;
		$res=mysqli_query($conex,$sql);

		if ($res) {
			?>
				<script type="text/javascript">
					alert("REGISTRO ELIMINADO");
					window.location="RopasControlador.php?operacion=index";
				</script>
			<?php	
		} else {
			?>
				<script type="text/javascript">
					alert("REGISTRO NO ELIMINADO");
					window.location="RopasControlador.php?operacion=index";
				</script>
			<?php
		}

		mysqli_close($conex);

		self::index();

	}//fin de la funcion index

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
						window.location="RopasControlador.php?operacion=index";
					</script>
					<?php
				break;
		}//cierre del switch
	}//cirre de la función controlador
}//cierre de la clase Ropas Controlador

RopasControlador::controlador($operacion);

?>
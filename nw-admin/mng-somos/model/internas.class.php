<?php
class internas {
	var $con;  var $c;
	function __construct(){
		$this->con = new DBManager;
		$this->c = $this->con->conectar();
	}

	function sql($query){
		$sql = $query;
		$data = $this->Execute(mysqli_query( $this->c ,$sql));
		return $data;
	}


	function getSomos(){
		$sql = "SELECT int_contenido FROM tbl_internas WHERE int_id = 1";
		$result = $this->sql($sql);
		$data = $result[0];
		return $data['int_contenido'];
	}

	function getNosotros(){
		$sql = "SELECT int_contenido FROM tbl_internas WHERE int_id = 2";
		$result = $this->sql($sql);
		$data = $result[0];
		return $data['int_contenido'];
	}

	function update($array,$condicion) {
		$valores = '';
		foreach ($array as $nombre => $valor){
			$valores .= $nombre . "='" . $valor . "',";
		}
		$valores .= '['; $valores = str_replace(',[','',$valores);
		$sql = "UPDATE tbl_internas SET ".$valores ." WHERE int_id = ".$condicion;
		$bool = mysqli_query( $this->c ,$sql);
		return $bool;
	}

	function Execute($data){
		while($reg = mysqli_fetch_assoc($data)){
			$registros[] = $reg;
		}

		if(empty($registros)){
			$registros = array();
		}
		return $registros;
	}

}
?>

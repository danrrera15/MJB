<?php
class productos {
	var $DB;
  function __construct() {
    $this->DB = new DBManager;
  }

	/*** Obtener Datos ***/

	function get(){
		$sql = "SELECT * FROM tbl_productos ORDER BY prod_nombre ASC";
		$data	= $this->DB->Consulta($sql);
		return $data;
	}

	function getById($id){
		$sql = "SELECT * FROM tbl_productos WHERE prod_id = %d LIMIT 1;";
		$sql = sprintf($sql, $id);
		$data	= $this->DB->Consulta($sql);
		return $data[0];
	}

	function getByUrl($url){
		$sql = "SELECT * FROM tbl_productos WHERE prod_url = '%s' LIMIT 1;";
		$sql = sprintf($sql, $url);
		$data	= $this->DB->Consulta($sql);
		return $data[0];
	}

	/*** Manipular Datos ***/

	function insert($array){
		$campos = ''; $datos = '';
		foreach ($array as $nombre => $valor){
			$campos .= " $nombre,";
			$datos  .= " '$valor',";
		}
		$campos = preg_replace('/(,{1})$/','',$campos);
		$datos = preg_replace('/(,{1})$/','',$datos);
		$sql = "INSERT INTO tbl_productos ($campos) VALUES ($datos)";
		$bool = $this->DB->Execute($sql);
		return $bool;
	}

	function update($array,$condicion) {
		$valores = '';
		foreach ($array as $nombre => $valor){
			$valores .= " $nombre = '$valor',";
		}
		$valores = preg_replace('/(,{1})$/','',$valores);
		$sql = "UPDATE tbl_productos SET $valores WHERE prod_id = $condicion";
		$bool = $this->DB->Execute($sql);
		return $bool;
	}

	function delete($id) {
		$sql = "DELETE FROM tbl_productos WHERE prod_id = %d;";
		$sql = sprintf($sql, $id);
		$bool	= $this->DB->Execute($sql);
		return $bool;
	}

}
?>

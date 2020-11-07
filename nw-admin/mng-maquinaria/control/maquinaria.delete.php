<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/maquinaria.class.php';
	$maquinaria = new maquinaria();
	$id = $_GET['id'];
	if( $maquinaria->delete($id) ) echo "1";
	else echo "0";
?>

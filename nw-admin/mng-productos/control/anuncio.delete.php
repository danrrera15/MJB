<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/anuncios.class.php';
	$anuncios = new anuncios();
	$id = $_GET['id'];
	if( $anuncios->delete($id) ) echo "1";
	else echo "0";
?>

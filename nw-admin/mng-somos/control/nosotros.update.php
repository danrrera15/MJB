<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/internas.class.php';
	$somos = new internas();
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Contenido actualizado correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');

	$_valores['int_contenido'] = $_POST['contenido'];

	if ( $somos->update($_valores, 2) ) echo json_encode($hecho);
	else echo json_encode($error);
?>

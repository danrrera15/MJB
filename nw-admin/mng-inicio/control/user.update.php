<?php
	session_start();
	require_once '../../php/conexion.class.php';
	require_once '../model/users.class.php';
	$users = new usuarios();
	$_valores = array();
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Información actualizada correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');

	$_valores['user_sesion'] 	= $_POST['sesion'];
	$_valores['user_name']		= $_POST['name'];
	$_valores['user_pass'] 		= md5($_POST['contra']);

	if( $users->update($_valores,$_POST['id'])) echo json_encode($hecho);
	else echo json_encode($error);
?>

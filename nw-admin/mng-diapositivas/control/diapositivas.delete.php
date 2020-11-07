<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/diapositivas.class.php';
	$diapos = new diapositivas();
	$id = $_GET['id'];
	$diapos = $diapos->getById($id);
	unlink('../../../img/diapositivas/'.$diapos['diap_imagen']);
	$diapos->delete($id);
?>

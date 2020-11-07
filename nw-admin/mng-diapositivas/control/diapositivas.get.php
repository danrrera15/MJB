<?php
	session_start();
	require_once '../../php/conexion.class.php';
	require_once '../model/diapositivas.class.php';
	$diapos = new diapositivas();
  	$data = $diapos->getById($_GET['id']);
	echo json_encode($data);
?>

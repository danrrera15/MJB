<?php
	session_start();
	require_once '../../php/conexion.class.php';
	require_once '../model/banner.class.php';
	$banners = new banner();
  $data = $banners->getById($_GET['id']);
	echo json_encode($data);
?>

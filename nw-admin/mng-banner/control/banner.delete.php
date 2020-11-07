<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/banner.class.php';
	$banners = new banner();
	$id = $_GET['id'];
	$banner = $banners->getById($id);
	unlink('../../../img/slider/'.$banner['slider_desk']);
	unlink('../../../img/slider/'.$banner['slider_movil']);
	$banners->delete($id);
?>

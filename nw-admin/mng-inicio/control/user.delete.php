<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/users.class.php';
	$users = new usuarios();
	$id = $_GET['id'];
	$users->delete($id);
?>

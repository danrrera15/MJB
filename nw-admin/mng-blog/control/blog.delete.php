<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/blog.class.php';
	$blog = new blog();
	$id = $_GET['id'];
	if( $blog->delete($id) ) echo "1";
	else echo "0";
?>

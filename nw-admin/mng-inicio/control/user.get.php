<?php
	session_start();
	require_once '../../php/conexion.class.php';
	require_once '../model/users.class.php';
	$users = new usuarios();
  $data = $users->getById($_GET['id']);
	echo json_encode($data);
?>

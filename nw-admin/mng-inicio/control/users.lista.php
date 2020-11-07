<?php
	session_start();
	require_once '../../php/conexion.class.php';
	require_once '../model/users.class.php';
	$users = new usuarios();
  $data = $users->get();
  $nodo = array('data' => array());

	foreach ($data as $value) {

		$options 	= '<span>';
		$options .= '<i title="Editar usuario" class="fa fa-pencil pre_edit-sm" onclick="editar('.$value['user_id'].');"></i>&nbsp;&nbsp;';
		$options .= '<i title="Eliminar usuario" class="fa fa-trash-o pre_erase-sm pre_eraseFN" data-pro="'.$value['user_id'].'"></i>';
		$options .= '</span>';


    $nodo['data'][] = array(
			$value['user_sesion'],
			$value['user_name'] ,
			$options
		);
	}
	echo json_encode($nodo);
?>

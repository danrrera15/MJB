<?php
	session_start();
	require_once '../../php/conexion.class.php';
	require_once '../model/banner.class.php';
	$banners = new banner();
  $data = $banners->get();
  $nodo = array('data' => array());

	foreach ($data as $value) {

		$options = '<span>';
		$options .= '<i title="Editar banner" class="fa fa-pencil pre_edit-sm" data-desk="'.$value['slider_desk'].'" data-movi="'.$value['slider_movil'].'" data-pro="'.$value['slider_id'].'"></i>&nbsp;&nbsp;';
		$options .= '<i title="Eliminar banner" class="fa fa-trash-o pre_erase-sm pre_eraseFN" data-pro="'.$value['slider_id'].'"></i>';
		$options .= '</span>';

    $nodo['data'][] = array(
			$value['slider_id'] ,
			'<img src="../../img/slider/'.$value['slider_desk'].'?lastmod='.date('dmyHisu').'" width="300px;" >',
			'<img src="../../img/slider/'.$value['slider_movil'].'?lastmod='.date('dmyHisu').'" width="150px;" >',
			$options
		);
	}
	echo json_encode($nodo);
?>

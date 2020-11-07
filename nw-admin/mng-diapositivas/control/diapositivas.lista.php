<?php
session_start();
require_once '../../php/conexion.class.php';
require_once '../model/diapositivas.class.php';
$diapos = new diapositivas();
$data = $diapos->get();
$nodo = array('data' => array());

foreach ($data as $value) {

	$options = '<span>';
	$options .= '<i title="Editar diapositiva" class="fa fa-pencil pre_edit-sm" data-desk="'.$value['diap_imagen'].'" data-pro="'.$value['diap_id'].'"></i>&nbsp;&nbsp;';
	$options .= '<i title="Eliminar diapositiva" class="fa fa-trash-o pre_erase-sm pre_eraseFN" data-pro="'.$value['diap_id'].'"></i>';
	$options .= '</span>';

	$nodo['data'][] = array(
		$value['diap_id'] ,
		'<img src="../../img/diapositivas/'.$value['diap_imagen'].'?lastmod='.date('dmyHisu').'" width="300px;" >',
		$options
	);
}
echo json_encode($nodo);
?>

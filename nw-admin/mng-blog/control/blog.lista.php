<?php
session_start();
require_once '../../php/conexion.class.php';
require_once '../model/blog.class.php';
$blog = new blog();
$data = $blog->get();
$nodo = array( 'data' => array() );

foreach ($data as $p) {

	/*** Sección de Opciones ***/
	$options = '<span>';
	$options .= '<a href="editar.php?id='.$p['blg_id'].'"><i title="Editar Blog" class="fa fa-pencil pre_edit-sm"></i>&nbsp;&nbsp;</a>';
	$options .= '<i title="Eliminar blog" class="fa fa-trash-o pre_erase-sm pre_eraseFN" data-pro="'.$p['blg_id'].'"></i>';
	$options .= '</span>';

	$nodo['data'][] = array(
		$p['blg_id'],
		$p['blg_nombre'],
		'<img src="../../img/blog/'.$p['blg_img1'].'?lastmod='.date('dmyHisu').'" width="300px;" >',
		$options
	);

}
echo json_encode($nodo);

/*** Funciones auxiliares ***/
function ValDate($d) {
	$h = strtotime(date('Y-m-d'));
	$v = explode('/',$d);

	if (strlen($d) > 10) return 1;
	else $p = (count($v)==3) ? true : false;

	if ($p && checkdate($v[1],$v[0],$v[2])) {
		$s = strtotime($v[2].'-'.$v[1].'-'.$v[0]);
		return ($h < $s) ? 2 : 0;
	} else return 0;
}

?>

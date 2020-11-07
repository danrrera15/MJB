<?php
	session_start();
	require_once '../../php/conexion.class.php';
	require_once '../model/productos.class.php';
	$productos = new productos();
  $data = $productos->get();
  $nodo = array( 'data' => array() );

	foreach ($data as $p) {

		/*** Sección de Opciones ***/
		$options = '<span>';
		$options .= '<a href="editar.php?id='.$p['prod_id'].'"><i title="Editar producto" class="fa fa-pencil pre_edit-sm"></i>&nbsp;&nbsp;</a>';
		$options .= '<i title="Eliminar producto" class="fa fa-trash-o pre_erase-sm pre_eraseFN" data-pro="'.$p['prod_id'].'"></i>';
		$options .= '</span>';

    $nodo['data'][] = array(
			$p['prod_id'],
			$p['prod_nombre'],
			'<img src="../../img/productos/'.$p['prod_imgmain'].'?lastmod='.date('dmyHisu').'" width="300px;" >',
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

<?php
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Contenido actualizado correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');

	$valores = array();

	$acentos = ['á','é','í','ó','ú','Á','É','Í','Ó','Ú','ñ','Ñ'];
	$clear = ['&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&ntilde;','&Ntilde;'];
	foreach ($_POST['valor'] as $k => $l) {
	    $valor = str_replace($acentos,$clear,$l);
		$texto = str_replace($acentos,$clear,$_POST['texto'][$k]);
		$valores[] = array(
			'valor' => $valor,
			'texto' => $texto
		);
	}
	$somos['contenido'] = $_POST['contenido'];
	$somos['valores'] = $valores;
	$mision['mision'] = $_POST['mision'];
	$vision['vision'] = $_POST['vision'];

	//Quienes somos
	$json_string = json_encode($somos);
	$file = '../../../somos.json';
	if (file_put_contents($file,$json_string)) echo json_encode($hecho);
	else echo json_encode($error);

	//Mision
	$json_string_mision = json_encode($mision);
	$file_mision = '../../../mision.json';
	if (file_put_contents($file_mision,$json_string_mision)) echo json_encode($hecho);
	else echo json_encode($error);

	//Vision
	$json_string_vision	= json_encode($vision);
	$file_vision = '../../../vision.json';
	if (file_put_contents($file_vision,$json_string_vision)) echo json_encode($hecho);
	else echo json_encode($error);
?>

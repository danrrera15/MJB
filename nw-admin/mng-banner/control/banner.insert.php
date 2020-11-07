<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/banner.class.php';
	$banner = new banner();
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Slider agregado correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');
	$directorio = '../../../img/slider/';

	$insert['slider_desk'] = 'iniciar';
	if (!$banner->insert($insert)){
		echo json_encode($error);
		die();
	} else { $ID = $banner->DB->GetLastInsertID(); }

	// Recibo los datos de la imagen de escritorio
	if ($_FILES['escritorio']['error'] == 0) {
		$imagen = 'maderas_mjb_'.$ID.'_desk'.getExtension( $_FILES['escritorio']['name'] );
		move_uploaded_file( $_FILES['escritorio']['tmp_name'],$directorio.$imagen );
		$_valores['slider_desk'] = $imagen;
	}

	// Recibo los datos de la imagen para movil
	if ($_FILES['movil']['error'] == 0) {
		$imagen = 'maderas_mjb_'.$ID.'_movil'.getExtension( $_FILES['movil']['name'] );
		move_uploaded_file( $_FILES['movil']['tmp_name'],$directorio.$imagen );
		$_valores['slider_movil'] = $imagen;
	}

	if ( $banner->update($_valores,$ID) ) echo json_encode($hecho);
	else echo json_encode($error);

	function makeURL($texto) {
	  $chr = "/[^a-zA-Z0-9-]+/";
	  $acl = ['á','é','í','ó','ú','ñ','Á','É','Í','Ó','Ú','Ñ',' '];
	  $vcl = ['a','e','i','o','u','n','A','E','I','O','U','N','-'];
	  $url = trim($texto);
	  $url = str_replace($acl,$vcl,$url);
	  $url = preg_replace($chr,'',$url);
	  $url = strtolower($url);
	  return $url;
	}

  function getExtension($nombre) {
    $nom = explode('.',$nombre);
    $l = count($nom) - 1;
    return ".".$nom[$l];
  }

?>

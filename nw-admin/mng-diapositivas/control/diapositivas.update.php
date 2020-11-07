<?php
	session_start();
	error_reporting(1);
	require_once '../../php/conexion.class.php';
	require_once '../model/diapositivas.class.php';
	$diapos = new diapositivas();
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Diapositiva actualizada correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');
	$directorio = '../../../img/diapositivas/';
	$ID =  $_POST['id'];

	// Recibo los datos de la diapositiva
	if ($_FILES['escritorio']['error'] == 0) {
		$imagen = 'mjb_diapositivas_'.$ID.'_diap'.getExtension( $_FILES['escritorio']['name'] );
		move_uploaded_file( $_FILES['escritorio']['tmp_name'],$directorio.$imagen );
		$_valores['diap_imagen'] = $imagen;
	}

	if ( $diapos->update($_valores,$ID) ) echo json_encode($hecho);
	else echo json_encode( $error );

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

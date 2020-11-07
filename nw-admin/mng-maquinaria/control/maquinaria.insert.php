<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/maquinaria.class.php';
	$maquinaria = new maquinaria();
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Maquinaria agregada correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');
	$dirIMG = '../../../img/maquinaria/';
	$lista = "";
	$URL = makeURL( $_POST['nombre'] );

	$_valores['maq_nombre'] = $_POST['nombre'];
	$_valores['maq_modelo']	= $_POST['modelo'];
	$_valores['maq_url'] = $URL;
	$_valores['maq_descripcion'] = $_POST['contenido'];
	$_valores['maq_video'] = $_POST['video'];

	// Recibo los datos de las imágenes
	if ($_FILES['principal']['error'] == 0) {
		$img = "maderas_mjb_".$URL.getExtension($_FILES['principal']['name']);
		move_uploaded_file( $_FILES['principal']['tmp_name'],$dirIMG.$img );
		$_valores['maq_imagen'] = $img;
	}

	if ($_FILES['m1']['error'] == 0) {
		$img = "maderas_mjb_".$URL."_slider1".getExtension($_FILES['m1']['name']);
		move_uploaded_file( $_FILES['m1']['tmp_name'],$dirIMG.$img );
		$_valores['maq_img1'] = $img;
	}

	if ($_FILES['m2']['error'] == 0) {
		$img = "maderas_mjb_".$URL."_slider2".getExtension($_FILES['m2']['name']);
		move_uploaded_file( $_FILES['m2']['tmp_name'],$dirIMG.$img );
		$_valores['maq_img2'] = $img;
	}

	if ($_FILES['m3']['error'] == 0) {
		$img = "maderas_mjb_".$URL."_slider3".getExtension($_FILES['m3']['name']);
		move_uploaded_file( $_FILES['m3']['tmp_name'],$dirIMG.$img );
		$_valores['maq_img3'] = $img;
	}


	if ($_FILES['m4']['error'] == 0) {
		$img = "maderas_mjb_".$URL."_slider4".getExtension($_FILES['m4']['name']);
		move_uploaded_file( $_FILES['m4']['tmp_name'],$dirIMG.$img );
		$_valores['maq_img4'] = $img;
	}

	if ( $maquinaria->insert($_valores) ) echo json_encode($hecho);
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

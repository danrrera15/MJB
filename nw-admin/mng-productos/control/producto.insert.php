<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/productos.class.php';
	$productos = new productos();
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Producto agregado correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');
	$dirIMG = '../../../img/productos/';
	$lista = "";
	$URL = makeURL( $_POST['nombre'] );

	$_valores['prod_nombre'] = $_POST['nombre'];
	$_valores['prod_url'] = $URL;
	$_valores['prod_descripcion'] = $_POST['contenido'];
	foreach ($_POST['lista'] as $k => $l) { $lista .= "$l,"; }
	$lista = preg_replace("/(,{1})$/",'',$lista);
	$_valores['prod_lista'] = $lista;

	// Recibo los datos de las imágenes
	if ($_FILES['main']['error'] == 0) {
		$img = "maderas_mjb_".$URL.getExtension($_FILES['main']['name']);
		move_uploaded_file( $_FILES['main']['tmp_name'],$dirIMG.$img );
		$_valores['prod_imgmain'] = $img;
	}

	if ($_FILES['home']['error'] == 0) {
		$img = "maderas_mjb_".$URL."_home".getExtension($_FILES['home']['name']);
		move_uploaded_file( $_FILES['home']['tmp_name'],$dirIMG.$img );
		$_valores['prod_imghome'] = $img;
	}

	if ($_FILES['slider']['error'] == 0) {
		$img = "maderas_mjb_".$URL."_slider".getExtension($_FILES['slider']['name']);
		move_uploaded_file( $_FILES['slider']['tmp_name'],$dirIMG.$img );
		$_valores['prod_imgslider'] = $img;
	}

	if ( $productos->insert($_valores) ) echo json_encode($hecho);
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

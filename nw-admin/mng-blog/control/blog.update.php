<?php
	session_start();
	error_reporting(0);
	require_once '../../php/conexion.class.php';
	require_once '../model/blog.class.php';
	$blog = new blog();
	$hecho = array('success'=>true,'tit'=>'Exito!','msg'=>'Blog actualizado correctamente.','tipo'=>'success');
	$error = array('success'=>false,'tit'=>'Error!','msg'=>'Ocurrió un error, inténtelo más tarde.','tipo'=>'error');
	$dirIMG = '../../../img/blog/';
	$lista = "";
	$URL = makeURL( $_POST['nombre'] );
	$ID = $_POST['id'];

	$_valores['blg_nombre'] = $_POST['nombre'];
	$_valores['blg_url'] = $URL;
	$_valores['blg_contenido'] = $_POST['contenido'];
	$_valores['blg_img1'] = $_POST['img1'];
	$_valores['blg_img2'] = $_POST['img2'];

	// Update de imágenes
	if ($_FILES['img1']['error'] == 0) {
		$img = "mjb_blog_portada_".$URL.getExtension($_FILES['img1']['name']);
		move_uploaded_file($_FILES['img1']['tmp_name'],$dirIMG.$img );
		$_valores['']	= $img;
	}

	if ($_FILES['img2']['error'] == 0) {
		$img = "mjb_blog_".$URL."BlogContent_".getExtension($_FILES['img2']['name']);
		move_uploaded_file( $_FILES['img2']['tmp_name'],$dirIMG.$img );
		$_valores['blg_img2'] = $img;
	}


	if ( $blog->update($_valores,$ID) ) echo json_encode($hecho);
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

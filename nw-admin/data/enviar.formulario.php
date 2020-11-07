<?php

session_start( ); // allows us to retrieve our key form the session

$nombre 	= $_POST['name'];
$email = $_POST['mail'];
$asunto = $_POST['subject'];
$mensaje 	= $_POST['message'];


if( $_POST['name'] = empty($nombre) && $_POST['email']=empty($email) && $_POST ['subject']=empty($asunto) && $_POST['message']=empty($mensaje) ) {
//if( md5( $_POST[ 'code' ] ) != $capchaTemp ) {
	// echo $_SESSION['key'].'   Session';
	// echo $_POST['a'].'    post';
    echo "Por favor asegurese de llenar todos los campos.";
	//$datos["success"] = 0;

} else {
	$ok = true;
	// Validamos Si los campos minimos requeridos fueron llenados
	if($nombre == ''){
		$ok = false;
		$falta = 'Falta el campo: <strong>Nombre</strong>';
	}
	if (!preg_match("/^[A-Za-zñÑáéíóúüÁÉÍÓÚ]{3,50}/",$nombre)) {
		$ok = false;
		$falta = 'No es un nombre valido, debe ser mayor a tres caracteres y utilize solo letras';
	}
	

	// Validamos campo email y Checamos si el formato de correo es correcto
	if($email == ''){
		$ok = false;
		$falta = 'Falta el campo: <strong>Correo electrónico</strong>';
	}
	//
	if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,50}$/i", $email)){
		$ok = false;
		$falta = 'No es una cuenta de CORREO válida';
	}

	//Validamos el campo mensaje
	if ($mensaje == '') {
		$ok = false;
		$falta = 'Falta el campo:<strong>Mensaje</strong>';
	}
	if (!preg_match("/^[A-Za-z0-9!?,#$%@&-]/",$mensaje)) {
		$ok = false;
		$falta = 'El campo mensaje debe contener entre 5 y 100 caracteres';
	}
	
	//Validamos el campo Asunto
	if ($asunto=='') {
		$ok = false;
		$falta = 'Falta el campo:<strong>Asunto</strong>';
	}
	if (!preg_match("/^[A-Za-z0-9-]{5,50}/",$asunto)) {
		$ok = false;
		$falta = 'El campo "asunto" debe contener entre 5 y 350 caracteres.';
	}





	if($ok == true){
		// ENVIAMOS EL MAIL
		$data['para'] = 'soporte1@netweb.com.mx';
		$data['asunto'] = 'Contacto desde Tableros y maderas MJB Sitio web.';
		$data['mensaje'] = '<h3>Datos del contacto via mjbtm.com</h3><br>
							<br><strong>Nombre: </strong> '.$nombre.'
							<br><strong>E-mail: </strong> '.$email.'
							<br><strong>Asunto: </strong> '.$asunto.'
							<br><strong>Mensaje: </strong><br>
							<p style="text-align:left">'.$mensaje.'</p>
							';


		// echo 'test 1-';
		$para = $data['para'];
		// Asunto
		$titulo = $data['asunto'];		 
		// Cuerpo o mensaje
		$mensaje = load_page('correo_template.html');
		$_REPLACE['MENSAJE'] = $data['mensaje'];
		$mensaje = replace($mensaje,$_REPLACE);
		// Cabecera que especifica que es un HMTL
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		// Cabeceras adicionales
		$cabeceras .= 'From: Formulario Web <pablo@mjbtm.com>' . "\r\n";
	    $cabeceras .= 'Bcc:sauron69.db@gmail.com';
	    // enviamos el correo!
		if(mail($para, $titulo, $mensaje, $cabeceras)){
			echo true;	
		}else{
			echo 'Ocurrio un error al enviar el formulario, por favor intente mas tarde';
		}
		//	
    }else{
    	echo $falta;
    }

}

//session_destroy();

	function replace($template,$_DICTIONARY){
		foreach ($_DICTIONARY as $clave=>$valor) {
			$template = str_replace(':'.$clave.':', $valor, $template);
		}		
		return $template;
	}

	function load_page($page)
	{
		return file_get_contents($page);
	}

?>

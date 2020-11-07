<?php
	session_start();
	// $res = post_captcha($_POST['g-recaptcha-response']);
	require_once 'conexion.class.php';
	require_once 'usuario.class.php';
	$cli = new usuario();

	$user = $_POST['email'];
	$pass = md5($_POST['password']);
	$login = $cli->login( $user, $pass );
	if( count($login) == 0 ){
		$_return['success'] = false;
		$_return['msg'] = 'La informacion es incorrecta.';
		echo json_encode($_return);
		die();
	} else {
		$_SESSION['login'] 	= true;
		$_SESSION['id']     = $login[0]['user_id'];
		$_SESSION['user'] 	= $login[0]['user_name'];
		$_SESSION['email'] 	= $login[0]['user_sesion'];

		$_return['success'] = true;
		$_return['msg'] = 'Bienvenido';
		echo json_encode($_return);
		die();
	}

	function v_email( $email ){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
		else return false;
	}

	function post_captcha($user_response) {
		include 'config.php';
        $fields_string = '';
        $fields = array(
          'secret' => $key_secret,
          'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }
?>

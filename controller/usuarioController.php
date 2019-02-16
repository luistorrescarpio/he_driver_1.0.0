<?php 
require_once("../he_driver/start.php");
switch ($obj->action) {
	case 'logear_test':
		//simulacion db
		$db_login = "user35";
		$db_password = "123456";
		$db_usuario_name = "USER 35 - PRUEBA 001";

		//validacion
		if( $obj->login == $db_login && $obj->password == $db_password ){
			$_SESSION['user'] = true;
			$_SESSION['user_name'] = $db_usuario_name;
			res([
				"success"=>true
				,"message"=>"Acceso Correcto"
				,"dir"=>"cuenta.php"
			]);
		}else{
			res([
				"success"=>false
				,"message"=>"Acceso Denegado"
			]);
		}
		break;
	case 'session_close':
		session_destroy();
		header("Location: {$base_url}/index.php");
		break;
}
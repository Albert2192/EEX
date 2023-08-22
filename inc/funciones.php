<?php
require_once "mysql.php";

/* function url(){
    $host = $_SERVER['HTTP_HOST'];
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://$_SERVER[HTTP_HOST]" : "http://$_SERVER[HTTP_HOST]/Sistema_gestion/");
    return $url;
} */
function url() {
	$host = $_SERVER['HTTP_HOST'];
	/* return "https://$host/"; */
	return "http://$host/EEA/";
}

/* FUNCION QUE HACE MAYUSCULA O CAPITALIZE SEGUN EL TIPO */
function textMayus($palabra = "", $tipo = "")
{
    if ($tipo == "mayus") {
        $tipo = MB_CASE_UPPER;
    } else if ($tipo == "title") {
        $tipo = MB_CASE_TITLE;
    } else {
        $tipo = MB_CASE_LOWER;
    }
    $resultado = mb_convert_case("$palabra", $tipo, "UTF-8");
    return $resultado;
}

/* CLASE ENCARGADA DE GENERAR EL PASSWORD CON EL HASH */
class Password{
    const SALT = 'free2023lancer';
    public static function hash($password){
        return hash('sha256', self::SALT . $password);
    }
    public static function verify($password, $hash){
        return ($hash == self::hash($password));
    }
}

function verificarLogin($token){
    $db     = DataBase::conectar();
    $query  = "SELECT * FROM `users` WHERE token = '$token';";
    $db->setQuery($query);
    $row    = $db->loadObject();
    return $row;
}

function verificarUser($token){
    $db     = DataBase::conectar();
    $query  = "SELECT 	u.`user_id`, 
                        u.`user_name`, 
                        u.`nick`, 
                        u.`email`, 
                        u.`rol_user_id`, 
                        r.`rol`, 
                        u.`ciudad_id`, 
                        c.`ciudad`,
                        p.`pais`,
                        u.`password`, 
                        u.`password_master`, 
                        u.`status`, 
                        u.`last_login`, 
                        u.`token`, 
                        u.`photo`, 
                        u.`system_status`
                        FROM 
                        `users` u 
                        LEFT JOIN `ciudades` c ON c.`ciudad_id` = u.`ciudad_id`
                        LEFT JOIN `paises` p ON c.`pais_id` = p.`pais_id`
                        LEFT JOIN `rol_user` r ON u.`rol_user_id` = r.`rol_user_id`
                        WHERE token = '$token';";
    $db->setQuery($query);
    $row    = $db->loadObject();
    return $row;
}

function verificarEmpresa(){
    $db     = DataBase::conectar();
    $query  = "SELECT * FROM `config` WHERE config_id = 1;";
    $db->setQuery($query);
    $row    = $db->loadObject();
    return $row;
}

function verificarSession($token){
    $db     = DataBase::conectar();
    $query  = "SELECT * FROM `users` WHERE token = '$token';";
    $db->setQuery($query);
    $row    = $db->loadObject();
    if(empty($row)){
        unset($_SESSION['session']);
        session_destroy();
    }
}

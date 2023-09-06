<?php
require 'funciones.php';

$q          = $_REQUEST['q'];
$db         = DataBase::conectar();
$session    = verificarUser($_SESSION['session']);
$user_id    = $session->user_id;

switch ($q) {
    case "change_pass":
        $pass1   = $db->clearText($_POST['pass1']);
        $pass2   = $db->clearText($_POST['pass2']);

        if(empty($pass1)){
            echo json_encode(["status" => "error", "mensaje" => "Ingrese una nueva contraseña."]);
            exit;
        }
        if(empty($pass2)){
            echo json_encode(["status" => "error", "mensaje" => "Repita su nueva contraseña."]);
            exit;
        }
        if($pass1 != $pass2){
            echo json_encode(["status" => "error", "mensaje" => "Las contraseñas no coinciden."]);
            exit;
        }
        if(strlen($pass1) <= 5 || strlen($pass2) <= 5){
            echo json_encode(["status" => "error", "mensaje" => "La contraseña debe contener al menos 6 caracteres."]);
            exit;
        }

        $password = Password::hash($pass1);

        $query = "UPDATE `users` SET `password` = '$password' WHERE `user_id` = '$user_id';";
        $db->setQuery($query);
        if(!$db->alter()){
            echo json_encode(["status" => "error", "mensaje" => "No se pudo cambiar la contraseña."]);
            exit;
        }

        echo json_encode(["status" => "success", "mensaje" => "Contraseña cambiada!"]);
        break;
}
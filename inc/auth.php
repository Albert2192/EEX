<?php
session_start();
require 'funciones.php';
/* require 'funciones'; */

$q = $_REQUEST['q'];

switch ($q) {

    case 'login':

        $db         = DataBase::conectar();
        $usuario    = $db->clearText(strtoupper($_POST['usuario']));
        $password   = Password::hash($db->clearText($_POST['pass']));
        /* echo $password;
        exit; */

        if (empty($usuario)) {
            echo json_encode(['status' => 'error', 'mensaje' => 'Ingrese un usuario']);
            exit;
        }
        if (empty($password)) {
            echo json_encode(['status' => 'error', 'mensaje' => 'Ingrese una contraseña']);
            exit;
        }

        $query = "SELECT `user_id`, 
                        `user_name`, 
                        `nick`, 
                        `rol_user_id`, 
                        `password`, 
                        `status`, 
                        `last_login`, 
                        `token`, 
                        `photo`,
                        `system_status`
                        FROM 
                        `users` 
                        WHERE `nick` = '$usuario' 
                        AND `password` = '$password'
                        AND `status` = 1;";
        //AND SHA2(CONCAT('free2023lancer' ,`password`), 256) = '$password'
        $db->setQuery($query);
        $user = $db->loadObject();

        if (!empty($user)) {
            /* $_SESSION['sesion'] = Password::hash($user->user_id); */
            $id_persona = $user->user_id;
            $hora       = date('YmdHis');
            $token      = Password::hash($id_persona . $hora);

            $db->setQuery("UPDATE `users` SET 
                            `last_login` = NOW(), 
                            `system_status` = 1, 
                            `token` = '$token' 
                            WHERE `user_id` = $id_persona;");
            if ($db->alter()) {
                $_SESSION['session'] = $token;
                echo json_encode(["status" => "ok", "mensaje" => "Acceso Exitoso, redirigiendo...", "token" => $token]);
                exit;
            } else {
                echo json_encode(['status' => 'error', 'mensaje' => 'Error al ingresar.']);
            }
        } else {
            session_destroy();
            echo json_encode(['status' => 'error', 'mensaje' => 'Credenciales Incorrectas']);
        }
        break;

    case 'logout':
        $db    = DataBase::conectar();
        $token = $_SESSION['session'];
        $query = "UPDATE `users` SET `system_status` = 0 WHERE `token` = '$token';";
        $db->setQuery($query);
        if ($db->alter()) {
            unset($_SESSION['session']);
            session_destroy();
            echo json_encode(["status" => "ok", "mensaje" => "Logout"]);
        }
        break;
}

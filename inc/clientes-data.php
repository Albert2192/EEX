<?php
require 'funciones.php';

$q = $_REQUEST['q'];
$db = DataBase::conectar();

switch ($q) {

    case 'ver':
        $where = "";

        //Parametros de ordenamiento, busqueda y paginacion
        $search     = $db->clearText($_REQUEST['search']);
        $limit      = $db->clearText($_REQUEST['limit']);
        $offset        = $db->clearText($_REQUEST['offset']);
        $order      = $db->clearText($_REQUEST['order']);
        $sort       = ($db->clearText($_REQUEST['sort'])) ?: 2;
        if (isset($search) && !empty($search)) {
            $where = "AND CONCAT_WS(' ', `nombre_r_social`,
                                            `ruc_ci`,
                                            `email`) LIKE '%$search%'";
        }

        $db->setQuery("SELECT SQL_CALC_FOUND_ROWS
                                `cliente_id`, 
                                `nombre_r_social`, 
                                `ruc_ci`, 
                                `telefono`, 
                                `celular`, 
                                `direccion`, 
                                `email`, 
                                `obs`, 
                                `estado`, 
                                `fecha`, 
                                `usuario`
                            FROM
                            `clientes`
                            WHERE 1=1 $where AND `estado` = 1
                            ORDER BY $sort $order
                            LIMIT $offset, $limit");
        $rows = $db->loadObjectList();

        $db->setQuery("SELECT FOUND_ROWS() as total");
        $total_row = $db->loadObject()->total;

        if ($rows) {
            $salida = array('total' => $total_row, 'rows' => $rows);
        } else {
            $salida = array('total' => 0, 'rows' => array());
        }

        echo json_encode($salida);
        break;

    case "cargar":
        $ruc        = $db->clearText($_POST['ruc']);
        $nombre     = $db->clearText(strtoupper($_POST['nombre']));
        $email      = $db->clearText(strtoupper($_POST['email']));
        $telefono   = $db->clearText($_POST['telefono']);
        $celular    = $db->clearText($_POST['celular']);
        $direccion  = $db->clearText(strtoupper($_POST['direccion']));
        $obs        = $db->clearText(strtoupper($_POST['obs']));

        if (empty($ruc)) {
            echo json_encode(["status" => "error", "mensaje" => "Ingrese un RUC o C.I."]);
            exit;
        } else {
            $query = "SELECT * FROM `clientes` WHERE ruc_ci = '$ruc';";
            $db->setQuery($query);
            $row = $db->loadObject();
            if (!empty($row)) {
                echo json_encode(["status" => "error", "mensaje" => "Este cliente ya esta registrado."]);
                exit;
            }
        }
        if (empty($nombre)) {
            echo json_encode(["status" => "error", "mensaje" => "Ingrese un Nombre o R. Social"]);
            exit;
        }

        $query = "INSERT INTO `clientes` 
                                        ( 
                                        `nombre_r_social`, 
                                        `ruc_ci`, 
                                        `telefono`, 
                                        `celular`, 
                                        `direccion`, 
                                        `email`, 
                                        `obs`, 
                                        `fecha`, 
                                        `usuario`
                                        ) VALUES (
                                        '$nombre', 
                                        '$ruc', 
                                        '$telefono', 
                                        '$celular', 
                                        '$direccion', 
                                        '$email', 
                                        '$obs', 
                                        NOW(), 
                                        'ADMIN'
                                        );";
        $db->setQuery($query);
        if (!$db->alter()) {
            echo json_encode(["status" => "error", "mensaje" => "No se pudo guardar el nuevo cliente."]);
            exit;
        }

        echo json_encode(["status" => "success", "mensaje" => "Agregado exitosamente!"]);

        break;
}

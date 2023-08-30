<?php
require 'funciones.php';

$q = $_REQUEST['q'];

switch ($q) {

    case 'ver':
        $db = DataBase::conectar();
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
}

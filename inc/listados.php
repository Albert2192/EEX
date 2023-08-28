<?php
include("funciones.php");
$q = $_REQUEST['q'];

switch ($q) {
    
    case 'roles':
        $db = DataBase::conectar();
        $page = $db->clearText($_GET['page']);
        $term = $db->clearText($_GET['term']);
        $resultCount = 5;
        $end = ($page - 1) * $resultCount;
        $query = "SELECT SQL_CALC_FOUND_ROWS 
                    `rol_user_id` AS id, 
                    `rol` AS rol, 
                    `estado`
                    FROM 
                    `rol_user`
                    WHERE rol LIKE '%$term%' AND estado=1
                    ORDER BY rol ASC
                    LIMIT $end, $resultCount";
        $db->setQuery($query);
        $rows = ($db->loadObjectList()) ?: [];

        $db->setQuery("SELECT FOUND_ROWS() as total");
        $total_row = $db->loadObject();
        $total_count = $total_row->total;

        if (empty($rows)) {
            $salida = ['data' => [], 'total_count' => 0];
        } else {
            $salida = ['data' => $rows, 'total_count' => $total_count];
        }
        echo json_encode($salida);
        break;

        default:
        echo json_encode(["status"=>"error", "mensaje"=>"No se encontro recurso"]);
}

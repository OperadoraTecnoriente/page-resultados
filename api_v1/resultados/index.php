<?php

header('Content-Type: application/json');
include('../../conexion.php');
include('../FuncionesGenerales.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle POST request
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['tipo_sorteo'])) {

        if (validar_int($_GET['tipo_sorteo'])) {
            $tipo_sorteo = $_GET['tipo_sorteo'];

            $fecha_actual = date("Y-m-d");
            // $consulta = "EXEC web_consulta_semanal";
            $consulta = "

                SELECT
                    IFNULL(c3.ganador,'Pendiente') as ganador,
                    IFNULL(c3.descripcion,'Pendiente') as descripcion,
                    c2.sorteo,
                    c1.id_sorteo,
                    c1.nombre,
                    c2.cod_sorteo 
                FROM
                    id_sorteos c1
                    INNER JOIN sorteos c2 ON c2.id_sorteo = c1.id_sorteo and c2.activo = '1'
                    INNER JOIN premios c3 ON c3.cod_sorteo = c2.cod_sorteo AND c3.fecha = '2023-12-21'
                WHERE c1.tipo = '$tipo_sorteo' AND C1.activo = '1'
                ORDER BY c1.orden asc, c1.id_sorteo asc, c2.hora desc";



            $resultados = mysqli_query($conexion, $consulta);

            if ($resultados) {
                $consulta_data = [];
                while ($row = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
                    array_push($consulta_data, $row);
                }



                $resultado = new stdClass();
                $resultado->result = TRUE;
                $resultado->icono = "success";
                $resultado->titulo = "";
                $resultado->mensaje = "";
                $resultado->data = $consulta_data;
                echo  json_encode($resultado);
                return;
            } else {
                $resultado = new stdClass();
                $resultado->result = FALSE;
                $resultado->icono = "error";
                $resultado->titulo = "Error!";
                $resultado->mensaje = 'Error Interno';
                echo json_encode($resultado);
                return;
            }
        } else {
            $resultado = new stdClass();
            $resultado->result = false;
            $resultado->icono = "error";
            $resultado->titulo = "Error!";
            $resultado->mensaje = 'Sorteo no Valido';
            echo json_encode($resultado);
            return;
        }
    } else {
        $resultado = new stdClass();
        $resultado->result = false;
        $resultado->icono = "error";
        $resultado->titulo = "Error!";
        $resultado->mensaje = 'Parametro No Valido';
        echo json_encode($resultado);
        return;
    }
} else {
    $resultado = new stdClass();
    $resultado->result = false;
    $resultado->icono = "error";
    $resultado->titulo = "Error!";
    $resultado->mensaje = 'Parametro No Valido';
    echo json_encode($resultado);
    return;
}

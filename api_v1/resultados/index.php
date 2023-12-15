<?php

header('Content-Type: application/json');
include('../../conexion.php');
include('../FuncionesGenerales.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle POST request
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_sorteo'])) {
        if (is_array($_GET['id_sorteo'])) {
            if (validar_array($_GET['id_sorteo'])) {
                $id_sorteo = $_GET['id_sorteo'];

                $fecha_actual = date("Y-m-d");
                $consulta_data = [];
                for ($i = 0; $i < count($id_sorteo); $i++) {
                    $consulta = "
                        SELECT
                        premios.ganador,
                        premios.descripcion,
                        sorteos.sorteo,
                        id_sorteos.id_sorteo,
                        id_sorteos.nombre,
                        sorteos.cod_sorteo 
                    FROM
                        id_sorteos
                        INNER JOIN sorteos ON sorteos.id_sorteo = id_sorteos.id_sorteo
                        INNER JOIN premios ON premios.cod_sorteo = sorteos.cod_sorteo 
                    WHERE
                        premios.fecha = '$fecha_actual' 
                        AND id_sorteos.id_sorteo = '$id_sorteo[$i]'
                        ";
                    $resultados = mysqli_query($conexion, $consulta);

                    if ($resultados) {

                        while ($row = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
                            array_push($consulta_data, $row);
                        }
                    } else {
                        $resultado = new stdClass();
                        $resultado->result = FALSE;
                        $resultado->icono = "error";
                        $resultado->titulo = "Error!";
                        $resultado->mensaje = 'Error Interno';
                        echo json_encode($resultado);
                        return;
                    }
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
                $resultado->result = false;
                $resultado->icono = "error";
                $resultado->titulo = "Error!";
                $resultado->mensaje = 'Un Sorteo del Array no Es Valido';
                echo json_encode($resultado);
                return;
            }
        } else {
            if (validar_int($_GET['id_sorteo'])) {
                $id_sorteo = $_GET['id_sorteo'];

                $fecha_actual = date("Y-m-d");
                // $consulta = "EXEC web_consulta_semanal";
                $consulta = "
					SELECT
					premios.ganador,
					premios.descripcion,
					sorteos.sorteo,
					id_sorteos.id_sorteo,
					id_sorteos.nombre,
					sorteos.cod_sorteo 
				FROM
					id_sorteos
					INNER JOIN sorteos ON sorteos.id_sorteo = id_sorteos.id_sorteo
					INNER JOIN premios ON premios.cod_sorteo = sorteos.cod_sorteo 
				WHERE
					premios.fecha = '$fecha_actual' 
					AND id_sorteos.id_sorteo = '$id_sorteo'
					";




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

function validar_array($arr)
{
    foreach ($arr as $valor) {
        if (!validar_int($valor)) {
            return false;
        }
    }
    return true;
}

<?php 

//header('Content-Type: application/json');
require '../startApp.php';

$valor = (isset($_POST["valor"])) ? $_POST["valor"] : "";

$sql = "select nombre from productos where nombre like '%$valor%'";
$resultado = sqlsrv_query($conexion, $sql);

if($resultado){
    while($datos = sqlsrv_fetch_array( $resultado, SQLSRV_FETCH_ASSOC)){
        echo json_encode($datos['nombre']);
    }
}


?>
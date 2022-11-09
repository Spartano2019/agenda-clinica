<?php
header('Content-Type: application/json');
include('../conexion/configuracion.php');

$consulta="SELECT id_especialidad,nombre FROM especialidad ";
$query=mysqli_query($conn,$consulta);
$array=array();

while($arr=mysqli_fetch_array($query)){
    $array[]=$arr;
}
echo json_encode($array);
?>
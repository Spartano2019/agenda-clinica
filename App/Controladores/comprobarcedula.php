<?php

include('../conexion/configuracion.php');
$cedula=htmlspecialchars($_POST["cedula"]);//recojemos lo seleccionado

$query=mysqli_query($conn,"SELECT nombre_paciente,cedula,edad,email FROM paciente WHERE cedula = '" . $cedula . "'");
$row=mysqli_fetch_array($query);
if($row){
    session_start();
    $_SESSION['paciente']=$row['nombre_paciente'];
    $_SESSION['cedula']=$row['cedula'];
   echo "<script>window.location.href='./App/Vistas/inicio.php'</script>";
}else{
    echo "<script>$('#modelId').modal('show');</script>";
}


?>
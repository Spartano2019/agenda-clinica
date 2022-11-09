<?php

include('../conexion/configuracion.php');

$ced=htmlspecialchars($_POST['ced']);
$nombre=htmlspecialchars($_POST['usuario']);
$tipo=htmlspecialchars($_POST['sangre']);
$correo=htmlspecialchars($_POST['correo']);
$edad=htmlspecialchars($_POST['edad']);

$consulta="SELECT cedula from paciente where cedula=$ced";
$query1=mysqli_query($conn,$consulta);
$i=0;

if($query21=mysqli_fetch_array($query1)){
    $i++;
}

if($i>0){
  echo "<script>Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Cedula ya Existe'
  })</script>";
}else{
    $agregar="INSERT into paciente(nombre_paciente,cedula,edad,email,id_tipo) values('$nombre',$ced,$edad,'$correo',$tipo)";
    $query=mysqli_query($conn,$agregar);
    if($query){
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: 'Usuario Guardado'
          });</script> ";
    }else{
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Error en el servidor'
          })</script>";
    }
}

?>
<?php 
$servername = "localhost";
$database = "agendar";
$username = "root";
$password = "";
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo " fallo al conectar ";
}else{

}
?>
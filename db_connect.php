<?php

session_start();
ob_start();

$server="localhost";
$serverUsername="id14534511_root";
$serverPassword="mD?1\~x{dZw^tt)R";
$dbName="id14534511_fortune_400";

$conn= new mysqli($server,$serverUsername,$serverPassword,$dbName);

if($conn->connect_error){
	echo "<script> alert('cannot connect to the database') </script>";
}else{
// 	 echo "<script> alert('connected successfully') </script>";
}
?>
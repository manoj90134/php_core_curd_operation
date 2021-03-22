<?php

$server="localhost";
$username="root";
$password="";
$dbname="php_curd0";


$conn=mysqli_connect($server,$username,$password,$dbname);

if (mysqli_connect_error($conn)) {
echo "connection failed";
}else{
	// echo "Db connected";
}








?>



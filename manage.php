<?php

include 'db.php';

if (isset($_POST['submit'])) {

$name=$_POST['user'];
$email=$_POST['email'];

$sql="INSERT INTO users(name,email) VALUES('$name','$email')";
$check=mysqli_query($conn,$sql);

if ($check) {
echo "data Insert";
	header('location:index.php');

}

}else{

	header('location:index.php');
}





?>
<?php

include 'db.php';

$id=$_POST['id'];

$sql="DELETE FROM users where id='$id' ";

$check=mysqli_query($conn,$sql);

if ($check) {
	echo "data delete";
	header('location:index.php');
}else{
	echo "not delete";
}





?>
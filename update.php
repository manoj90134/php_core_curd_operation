<?php

include 'db.php';
if (isset($_POST['submit_update'])) {

$name_update=$_POST['user_update'];
$email_update=$_POST['email_update'];

$update_id=$_POST['id'];

$sql="UPDATE users SET name='$name_update' , email='$email_update' WHERE id='$update_id'   ";
$check=mysqli_query($conn,$sql);

if ($check) {
	echo "data update";
	header('location:index.php');
}else{
	echo "data not Update";
}


}else{
	header('location:index.php');
	
}

?>
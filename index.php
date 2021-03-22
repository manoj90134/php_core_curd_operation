<?php
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<br/><br/><br/>
	<div class="row">
		<div class="col-md-6 col-md-offset-3" style="border:1px solid">
			
  <h2 class="text-center">All User Details Page <a class="btn btn-primary" href="insert.php"> Add user </a></h2>
  
<table class="table table-bordered">
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
<?php   

$sql="SELECT * FROM users";
$check=mysqli_query($conn,$sql);
$count=mysqli_num_rows($check);
$num=1;
while ($row=mysqli_fetch_array($check) ) { 
// echo "<tr>
// 		<td>".$row['id']."</td>
// 		<td>".$row['name']."</td>
// 		<td>".$row['email']."</td>
// 	</tr> ";
 ?>
 
<tr>

<td><?= $num++; ?> </td>
<td><?= $row['name'] ; ?> </td>
<td> <?= $row['email'] ; ?> </td>
<!-- edit section -->
<td><a href="edit.php?id=<?= $row['id']?>" class="btn  btn-success">Edit</a></td>

<!-- delete section -->
<td><a href="#" class="btn btn-danger" onclick="
event.preventDefault();
document.getElementById('delete<?=$row['id'] ?>').submit(); 
">Delete</a></td>

	<form action="delete.php" method="POST" id="delete<?= $row['id'] ?>">
		<input type="hidden" name="id" value="<?= $row['id']?>">
	</form>

<!-- delete section end -->


</tr>




<?php  
}
?>


	
</table>


</div>
</div>
</div>
</body>
</html>

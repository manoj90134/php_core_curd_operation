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
	<div class="row">
		<div class="col-md-5 col-md-offset-3" style="border:1px solid">
			
  <h2 class="text-center">User Details Insert</h2>
  <form action="manage.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
      <label for="email">Users:</label>
      <input type="Text" class="form-control" id="user" placeholder="Enter User Name" name="user">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>    <div class="checkbox">

      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <input type="submit" class="btn btn-primary btn-block btn-default" name="submit">
  </form>
  <br/><br/>
</div>
</div>
</div>
</body>
</html>

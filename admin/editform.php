<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $con->prepare("SELECT * FROM users WHERE user_id= :user_id");
	$result->bindParam(':user_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="Design/css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit Admin User</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"  />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
				</div>
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" name="full_name" value="<?php echo $row['full_name']; ?>"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password"  value="<?php echo passthru($row['password']);?>" required/>
				</div>
<input type="submit" value="Save" />
</form>
</div>
	</div>
</body>
</html>
<?php
	}
?>


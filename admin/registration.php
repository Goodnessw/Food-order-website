<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="Design/css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Add Admin User</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="register_query.php" method="POST">	
				<h4 class="text-success">Add here...</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username"  />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" />
				</div>
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" name="fullname" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" name="cpassword" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="register">Add User</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
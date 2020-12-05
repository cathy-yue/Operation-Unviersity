<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<font color="white">
	<h2>Update Password</h2>
		<form action="valid-update.php" method="post">
			<div class="form-group">
					<label>Old Password</label>
				<input type="text" name="oldpassword" class="form-control">
			</div>
			<div class="form-group">
				<label>New Password</label>
				<input type="password" name="newpassword" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary" name="updatebtn">Update</button>
			<button type="submit" class="btn btn-secondary" name="deletebtn">Delete Account</button>
		</form>
			
	</font>
</body>
</html>
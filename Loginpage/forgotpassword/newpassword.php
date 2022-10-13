<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="forgotpage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Set New Password</h3>
        <?php
                    if(isset($_GET['passerror'])=="InvalidPassword")
                    {
                        echo "<br>";
                        echo "<div class='isa_error'>";
                        echo "<i class='fa fa-times-circle'></i>";
                        echo "&nbsp Invalid Password";
                        echo "</div>";
                    }
                ?>
		<div class="card-text">
			<form action="checknewpassword.php" method="POST">
                <input type="text" name="encryptedemail" value="<?php if(isset($_GET['e'])){echo $_GET['e']; }?>" style="display:none;">
				<div class="form-group">
					<label for="exampleInputEmail1">Enter a new password</label>
					<input type="password" name="pass1" class="form-control form-control-sm" placeholder="Enter your new password" required>
				</div>
                <div class="form-group">
					<label for="exampleInputEmail1">Re-Enter the password</label>
					<input type="text" name="pass2" class="form-control form-control-sm" placeholder="Re-Enter the password" required>
				</div>

				<button type="submit" name="setnewpassword" class="btn btn-primary btn-block" name="submitbutton">Save Password</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>

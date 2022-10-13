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
		<h3 class="card-title text-center">Reset password</h3>
        <?php
                if(isset($_GET['error'])=="InvalidEmail")
                {
                    echo "<br>";
                    echo "<div class='isa_error'>";
                    echo "<i class='fa fa-times-circle'></i>";
                    echo "&nbsp Invalid Email !";
                    echo "</div>";
                }
        ?>
        <?php
        if(!isset($_GET['action'])=="True")
        {?>
		<div class="card-text">
			<form action="checkmail.php" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Enter your registered email address and we will send you a code to reset your password.</label>
					<input type="email" name="l_email" class="form-control form-control-sm" placeholder="Enter your email address">
				</div>

				<button type="submit" class="btn btn-primary btn-block" name="submitbutton">Send code</button>
			</form>
		</div>
        <?php } ?>
        <?php
                if(isset($_GET['action'])=="True")
                {?>
                <?php
                    if(isset($_GET['otperror'])=="WrongOTP")
                    {
                        echo "<br>";
                        echo "<div class='isa_error'>";
                        echo "<i class='fa fa-times-circle'></i>";
                        echo "&nbsp Wrong OTP !";
                        echo "</div>";
                    }
                ?>
                <div class="card-text">
                    <form action="checkotp.php" method="POST">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Enter the 6 digit code sent to your registered email.</label>
                        <input type="text" name="encryptedemail" value="<?php if(isset($_GET['e'])){echo $_GET['e']; }?>" style="display:none;">
                        <input type="number" class="form-control form-control-sm" name="user_otp" placeholder="Enter 6-digit Code" min="100000" max="999999" required>
				        </div>
				    <button type="submit" name="verifycode" class="btn btn-primary btn-block">Verify Code</button>
			        </form>
		        </div>
                <?php }?>
	</div>
</div>
</body>
</html>

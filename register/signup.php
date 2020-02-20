

<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<meta name="keywords" content="Quick Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="../register/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="../register/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>


<div class="signupform">
<h1>Quick Register Form</h1>
	<div class="container">

		<div class="agile_info">
			<div class="w3_info">
				<h2>Register Here</h2>
						<form action="submit.php" method="post">
						<div class="left margin">
							<label>First Name</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" name="firstname" placeholder="First Name" required="">
							</div>
						</div>
						<div class="left">
							<label>Last Name</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" name="lastname" placeholder="Last Name" required="">
							</div>
						</div>
						<div class="left margin">
							<label>Email Address</label>
							<div class="input-group">
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input type="email" name="email" placeholder="Email" required="">
							</div>
						</div>
						<div class="left">
							<label>Phone Number</label>
							<div class="input-group">
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
								<input type="text" name="number" placeholder="Phone Number" required>
							</div>
						</div>
						<div class="left margin">
							<label>Password</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" id="password" name="password" placeholder="Password" required="">
							</div>
						</div>
						<div class="left">
							<label>Confirm Password</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="Password" id="confirm_password" name="cnpassword" placeholder="Confirm Password" required="">
							</div>
						</div>

						<span id='message'></span>

                     <script type="text/javascript">

                      $('#password, #confirm_password').on('keyup', function () {
                      if ($('#password').val() == $('#confirm_password').val()) {
                        $('#message').html('Password Matching').css('color', 'green');
                      } else
                        $('#message').html('Password Not Matching').css('color', 'red');
                    });

                    </script>


                      <div class="custom-control custom-radio">

                      <input type="radio" class="custom-control-input" value="student" id="defaultChecked2" name="role" checked>
                      <label class="custom-control-label" for="defaultChecked2">Student</label>


                      <input type="radio" class="custom-control-input" value="company" id="defaultChecked2" name="role" checked>
                      <label class="custom-control-label" for="defaultChecked2">Company</label>
                        </div>

						<div class="clear"></div>
							<button class="btn btn-danger btn-block" name ="submit" type="submit">Register Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button >
					</form>
			</div>
			<div class="w3l_form">
				<div class="left_grid_info">
					<h3>Already Registered?</h3>
					<p> Nam eleifend velit eget dolor vestibulum ornare. Vestibulum est nulla, fermentum eget euismod et, tincidunt at dui. Nulla tellus nisl, semper id justo vel, rutrum finibus risus. Cras vel auctor odio.</p>
					<a href="../login/login.php" class="btn">Login <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="clear"></div>
			</div>

		</div>


<div class="footer">


 <p>&copy; 2018 Quick Register form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="blank">W3layouts</a></p>
 </div>
	</div>
	</body>
</html>

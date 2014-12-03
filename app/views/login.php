<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo URL::to('/') ;?>/frontend/css/base.css">
	<link rel="stylesheet" href="<?php echo URL::to('/') ;?>/frontend/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo URL::to('/') ;?>/frontend/css/layout.css">
	
</head>
<body>

	<div class="notice">
	
	</div>



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<!--<form action="" method="post" name="login-form">
				<h2>Login</h2>
				<p><input type="text" placeholder="Username"></p>
				<p><input type="password" placeholder="Password"></p>
				<label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label>
				<button type="submit"></button>
			</form>-->
			<?php  echo Form::open(array('url' => 'login', 'id'=>'login_form', 'files' => true));  ?>
		<h2>Login</h2>

		<!-- if there are login errors, show them here -->
		<h5><?php if(isset($_GET['errors'])){ echo 'something went wrong!';}else{echo '<p> </p>';}?></h5>
		<p>
			<?php //echo  Form::label('email', 'Email Address') ;
			 echo Form::text('username', Input::old('email'), array('placeholder' => 'username'));  ?>
		</p>
		<p>
		<?php 	//echo Form::label('password', 'Password') ;
			echo Form::password('password',array('placeholder' => 'Password'));  ?>
		</p>

		<?php  echo Form::submit(''); 
			echo Form::close();  ?>

		</div>

	
		<p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


	</div><!-- container -->

	<!-- JS  -->
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="<?php //echo URL::to('/') ;?>/frontend/js/app.js"></script>-->
	
<!-- End Document -->

  
  <link href="runnable.css" rel="stylesheet" />
  <!-- Load jQuery and the validate plugin -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#login_form").validate({
    
        // Specify the validation rules
        rules: {
            username: "required",
            password: {
                required: true,
                minlength: 5
            }
        },
        
        // Specify the validation error messages
        messages: {
            usernamee: "Please enter your login username",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
</body>
</html>
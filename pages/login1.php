
<?php
    require_once('load.php');

    $action = isset($_GET['action']) ? $_GET['action'] : '';

    if ( $action == 'logout' ) {
        $loggedout = $j->logout();
    }
    
    $logged = $j->login('index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
#loader{  
    position:relative;
    margin:0 auto;
    clear:left;
    height:auto;
    z-index: 0;
    text-align:center;/* Add This*/
}​
</style>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			
			<div id="loader">
				            <?php if ( $logged == 'invalid' ) : ?>
                <p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px; text-align: center" >
                    The username password combination you entered is incorrect. Please try again.
                </p>
            <?php endif; ?>

            <?php 
            $reg = isset($_GET['reg']) ? $_GET['reg'] : '';
            if ( $reg == 'true' ) : ?>   

                <p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px; text-align: center">
                    Your registration was successful, please login below.
                </p>
            <?php endif; ?>

            <?php 
            $action = isset($_GET['action']) ? $_GET['action'] : '';
            if ( $action == 'logout' ) : ?>
                <?php if ( $loggedout == true ) : ?>
                    <p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px; text-align: center">
                        You have been successfully logged out.
                    </p>
                <?php else: ?>
                    <p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px; text-align: center">
                        There was a problem logging you out.
                    </p>
                <?php endif; ?>
            <?php endif; ?>
            <?php 
            $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
            if ( $msg == 'login' ) : ?>
                <p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px; text-align: center">
                        You must log in to view this content. Please log in below.
                    </p>
            <?php endif; ?>
			</div>
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<span class="login100-form-logo">
						<img src="image/logo_JMM.jpg" width="280" height="125" title="Logo of a company" alt="Logo of a company" />
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						
						<input type="submit" value="Login" class="login100-form-btn"/>
					</div>

	<!--				<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
	-->
				</form>
			</div>

		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
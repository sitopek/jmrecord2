
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff Record v1.0</title>

    <link rel="icon" type="image/png" href="image/title_icon.png">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body  {
    background-image: url("images/bg-01.jpg");
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>

<body>

    <div class="container">
        <div class="row">
            
                <div style="width: 500px; padding: 0px; margin: 10px auto;">

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
           <!-- <img src="image/logo_JMM.jpg" width="500" height="377">-->
        </div>
        <div class="col-md-4 col-md-offset-4"  style="display:table-cell; vertical-align:top; text-align:top">

                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="display:table-cell; vertical-align:middle; text-align:center"><img src="image/logo_JMM.jpg" width="100%" title="Logo of a company" alt="Logo of a company" /><br><br><strong>Please Sign In</strong></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="username" placeholder="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" placeholder="Password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <input type="submit" value="Login" class="btn btn-lg btn-success btn-block"/>
                                </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

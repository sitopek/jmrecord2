<?php
error_reporting(E_ERROR | E_PARSE);
    require_once('load.php');
    $j->register('login.php');

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

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ADMIN Registration</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                  <input class="form-control" name="username" type="text" placeholder="username">
                                </div>
                                <div class="form-group">
                                  <input class="form-control" name="email" type="text" placeholder="email">
                                </div>
                                <div class="form-group">
                                 <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                 <input type="hidden" name="date" value="<?php echo time(); ?>" />                           
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Register" class="btn btn-primary signup"/>    
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

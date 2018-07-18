<?php
    require_once('load.php');
    $logged = $j->checkLogin();
    
    if ( $logged == false ) {
        //Build our redirect
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('login.php', $url);
        
        //Redirect to the home page
        header("Location: $redirect?msg=login");
        exit;
    } else {
        //Grab our authorization cookie array
        $cookie = $_COOKIE['joombologauth'];
        
        //Set our user and authID variables
        $user = $cookie['user'];
        $authID = $cookie['authID'];
        
        //Query the database for the selected user
        $table = 'j_users';
        $sql = "SELECT * FROM $table WHERE user_login = '" . $user . "'";
        $results = $jdb->select($sql);

        //Kill the script if the submitted username doesn't exit
        if (!$results) {
            die('Sorry, that username does not exist!');
        }

        //Fetch our results into an associative array
        $results = mysql_fetch_assoc( $results );

$j->update('login.php');
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
                        <h3 class="panel-title">Edit Information</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="user_login" value="<?php echo $results['user_login'];?>">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" type="text" name="user_name" value="<?php echo $results['user_name'];?>">
                                </div>
                                <div class="form-group">
                                 <input class="form-control" name="newPassword" type="password" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                 <input class="form-control" name="confirmPassword" type="password" placeholder="Confirm New Password">
                                </div>
                                 <input type="hidden" name="date" value="<?php echo time(); ?>" />                           
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Save" class="btn btn-primary signup"/>    
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
<?php } ?>
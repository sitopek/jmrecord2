<?php
    require_once('load.php');
	$logged = $j->checkLogin();
	
	if ( $logged == false ) {
		//Build our redirect
		$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		
		//Redirect to the home page
		header("Location: login.php?msg=login");
		exit;
		}
	else
		{
?>
<?php

if(isset($_POST['update'])) 
{
		$ID = $_POST['ID'];
		$user_login = $_POST['user_login'];
   	 	$user_name = $_POST['user_name'];
    	$user_email = $_POST['user_email'];
    	$user_registered = $_POST['user_registered'];    
    
    // checking empty fields
    if(empty($user_name) || empty($user_email)) {            
        if(empty($user_name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($user_email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }       
} 

    else{

    	//updating the table
        $sql = "UPDATE j_users SET user_name='$user_name', user_email='$user_email' WHERE ID = $ID";
        $results = $jdb->select($sql);
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: users_disp.php");
    }
}

?>

<?php
		$ID = $_GET['ID'];
		$table = 'j_users';
		$sql = "SELECT * FROM $table WHERE ID= $ID";
		$results = $jdb->select($sql);

while ($row = mysql_fetch_array($results)) 
{
	$user_login = $row['user_login'];
    $user_name = $row['user_name'];
    $user_email = $row['user_email'];
    $user_registered = $row['user_registered'];
}


?>
<html>
  <head>

    <title>Walawe Walawu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Walawe Walawu</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="user_index.php">Profile</a></li>
	                          <li><a href="login.php?action=logout">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li  class="current"><a href="users_disp.php"><i class="glyphicon glyphicon-user"></i> Users Display</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Edit Information (ADMIN)</div>
			  					<div class="panel-options">
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
			<div class="panel-body">
			<form action="edit_disp.php" method="post" class="form-horizontal" role="form">

				<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
				<textarea rows="1" cols="50" name="user_name" class="form-control"><?php echo $user_name; ?></textarea>
				</div></div>
								  
				<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
				<label class="form-control" disabled="disabled"><?php echo $user_login; ?></label>
				</div></div>

				<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				<textarea rows="1" cols="50" name="user_email" class="form-control"><?php echo $user_email; ?></textarea>
				</div></div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Registered</label>
				<div class="col-sm-10">
				<label class="form-control" disabled="disabled"><?php echo date('l, F jS  Y', $user_registered); ?></label>
				</div></div>
				<input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>>
				<input type="submit" value="update" name="update" class="btn btn-primary signup "/>
				
				</form>
			</div>
					  			
							</div>
		  				</div>
		  			</div>
		  			  
		  </div>
		</div>


    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
<?php } ?>
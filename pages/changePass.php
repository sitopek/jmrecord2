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
 } ?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<style type="text/css">
fieldset {
	width:500px;
	border:5px dashed #CCCCCC;
	margin:0 auto;
	border-radius:5px;
}

legend {
	color: blue;
	font-size: 25px;
}

dl {
	float: right;
	width: 390px;
}

dt {
	width: 180px;
	color: brown;
	font-size: 19px;
}

dd {
	width:200px;
	float:left;
}

dd input {
	width: 200px;
	border: 2px dashed #DDD;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}

.btn {
	color: #fff;
	background-color: dimgrey;
	height: 38px;
	border: 2px solid #CCC;
	border-radius: 10px;
	float: right;
}

</style>
</head>

<body>
	<fieldset>
		<legend>Change Password</legend>
	<?php 
		$conn_db = mysql_connect("localhost","root","") or die();
		$sel_db = mysql_select_db("joombo",$conn_db) or die();
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$user_name= $_POST['user_name'];
		$chg_pwd=mysql_query("select * from j_users where user_name='$user_name'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['user_pass'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update j_users set user_pass='$new_pass' where user_name='$user_name'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
		}}
	?>
	
	<form method="post">
		<dl>
			<dt>
				 <input class="form-control" type="text" name="user_name" value="<?php echo $results['user_name'];?>">
			</dt>
			<dt>
				Old Password
			</dt>
				<dd>
					<input type="password" name="old_pass" placeholder="Old Password..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				New Password
			</dt>
				<dd>
					<input type="password" name="new_pass" placeholder="New Password..." value=""  required />
				</dd>
		</dl>
		<dl>
			<dt>
				Retype New Password
			</dt>
				<dd>
					<input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
				</dd>
		</dl>
		
		<p align="center">
			<input type="submit" class="btn" value="Reset Password" name="re_password" />
		</p>
	</form>
	</fieldset>
</body>
</html>
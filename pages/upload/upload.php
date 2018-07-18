<?php
	session_start();
	//Include database connection details
	require("opener_db.php");	
	$errmsg_arr = array();	
	//Validation error flag
	$errflag = false;	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	//$filedesc= clean($_POST['desc']);
	//$subject= clean($_POST['upname']);

	//if($filedesc == '') {
	//	$errmsg_arr[] = ' file discription is missing';
	//	$errflag = true;
	//}
		
	if($_FILES['uploaded_file']['size'] >= 1048576*5) {
		$errmsg_arr[] = 'file selected exceeds 5MB size limit';
		$errflag = true;
	}	
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {		
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();
	}  
	 //upload random name/number
	 $rd2 = mt_rand(1000,9999)."_File"; 
	 
	 //Check that we have a file
	if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']['name']);
  
  $ext = substr($filename, strrpos($filename, '.') + 1);
  
  if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload"))  {
    //Determine the path to which we want to save this file      
	  //$newname = dirname(__FILE__).'/upload/'.$filename;
	  $newname="../uploads/".$rd2."_".$filename;      
	  //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
			//successful upload
          // echo "It's done! The file has been saved as: ".$newname;	
        $title = mysql_real_escape_string($_POST['title']);
        $cert = mysql_real_escape_string($_POST['cert']);
	    $vessel = mysql_real_escape_string($_POST['vessel']);
	    $issued = mysql_real_escape_string($_POST['issued']);
	    $annual = mysql_real_escape_string($_POST['annual']);
	    $exp = mysql_real_escape_string($_POST['exp']);
	    $certno = mysql_real_escape_string($_POST['certno']);
		$certrange = mysql_real_escape_string($_POST['certrange']);
		$place = mysql_real_escape_string($_POST['place']);	
		$remark = mysql_real_escape_string($_POST['remark']);    

	    

		$qry2 = "INSERT INTO up_files (fdesc,floc,name,fdatein, title, cert, vessel, issued, annual, exp, certno, certrange, place, remark) VALUES ('$filedesc','$newname', '$filename',NOW(),'$title', '$cert', '$vessel', '$issued','$annual','$exp','$certno','$certrange','$place')";	
		//$result = @mysql_query($qry);
	    $result2 = $connector->query($qry2);		
		if ($result2){
		$errmsg_arr[] = 'record was saved in the database and the file was uploaded';
		$errflag = true;	
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();}	
		}
		else {
		$errmsg_arr[] = 'record was not saved in the database but file was uploaded';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();}		
		
		
		}
		
        } 
		
		
		else 
		{
           //unsuccessful upload
		   //echo "Error: A problem occurred during file upload!";
		$errmsg_arr[] = 'upload of file ' .$filename. ' was unsuccessful';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();}
		   
        }
		
      	} 
	  
	  else 
	  {
         //existing upload
		// echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
		$errmsg_arr[] = 'Error: File >>'.$_FILES["uploaded_file"]["name"].'<< already exists';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();}
		 
      }
	  
  	} 
  	else 
	{
		//wrong file upload
     //echo "Error: Only .jpg images under 350Kb are accepted for upload";
	 $errmsg_arr[] = 'Error: All file types except .exe file under 5 Mb are not accepted for upload';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();}
  	}
	
	} 
	
	else 
	{
		//no file to upload
 	//echo "Error: No file uploaded";
	
		/*$errmsg_arr[] = 'Error: No file uploaded';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();}*/
		 $title = mysql_real_escape_string($_POST['title']);
        $cert = mysql_real_escape_string($_POST['cert']);
	    $vessel = mysql_real_escape_string($_POST['vessel']);
	    $issued = mysql_real_escape_string($_POST['issued']);
	    $annual = mysql_real_escape_string($_POST['annual']);
	    $exp = mysql_real_escape_string($_POST['exp']);
		$certno = mysql_real_escape_string($_POST['certno']);
		$certrange = mysql_real_escape_string($_POST['certrange']);
		$place = mysql_real_escape_string($_POST['place']);	
		$remark = mysql_real_escape_string($_POST['remark']);    

		$qry2 = "INSERT INTO up_files (fdatein, title, cert, vessel, issued, annual, exp, certno, certrange, place, remark) VALUES (NOW(),'$title', '$cert', '$vessel', '$issued','$annual','$exp','$certno','$certrange','$place','$remark')";	
		//$result = @mysql_query($qry);
	    $result2 = $connector->query($qry2);		
		if ($result2){
		$errmsg_arr[] = 'record was saved in the database and the file was uploaded';
		$errflag = true;	
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../certificateJM1.php");
		exit();}	
		}
	}


	mysql_close();
?>



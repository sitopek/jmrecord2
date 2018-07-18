<?php 
session_start();
require("opener_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload</title>
<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-button.js"></script>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
<link href="../css/styles.css" rel="stylesheet">
<link href="../bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
</head>

<body>

<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="../index.php">Walawe Walawu</a></h1>
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
	                          <li><a href="../user_index.php">Profile</a></li>
	                          <li><a href="../login.php?action=logout">Logout</a></li>
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
                    <li class="current"><a href="../index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="../users_disp.php"><i class="glyphicon glyphicon-user"></i> Users Display</a></li>
                    <li><a href="../upload/index.php"><i class="glyphicon glyphicon-stats"></i> Upload Files</a></li>
                    <li><a href="../tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="../buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="../editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="../forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="../login.html">Login</a></li>
                            <li><a href="../signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>


<div class="col-md-10">
<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Upload Files</div>
				</div>
  				<div class="panel-body">

 <div class="status" style="width:100%;" >
        <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo "<ul class='error'> ";
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li> <strong><font color="red">',$msg ,'</font></strong></li>'; 
		}echo "</ul>";
		unset($_SESSION['ERRMSG_ARR']);
	}
?> 
</div> 

  				<form action="upload.php" method="post" enctype="multipart/form-data" name="upload">
<input name="uploaded_file" type="file" class="input-xlarge" required/>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<br />
<label> Description</label>
<textarea name="desc" cols="" rows="" class="input-xlarge" required=""></textarea>
<input name="Upload" type="submit" value="Upload" class="btn" />
</form>

<br /><br />
  					
  				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
 					<th><strong>#</strong></th>
                    <th><strong>File Name</strong></th>
                    <th><strong>Descriptions</strong></th>
                    <th><strong>Date Upload</strong></th>
                    <th><strong>Items </strong></th>
                    <th><strong>Download </strong></th>
							</tr>
						</thead>
						<tbody>
 <?php
   			$list4 = "SELECT * FROM up_files ";
			$result4 = $connector->query($list4);
			if(mysql_num_rows($result4) > 0)
				{
					$tmptCount = 1;
				while($data4 = mysql_fetch_assoc($result4))
					{					
				 echo "
				 <tr>
                    <td>{$tmptCount}</td>                   
				 <td>
				    {$data4['name']}				    
				</td>
				<td>{$data4['fdesc']} 
				</td>
				<td>{$data4['fdatein']}				   
				   </td>  
				    <td>
				    <img src = '{$data4['floc']}' width='90' height='90'>
					</td>
					<td>
					<a href='{$data4['floc']}' title='download file' target='_blank' >Download</a>
					</td>            
				</tr> 	 
				 ";
				 $tmptCount ++; 
		// replace the A href link with 
					
					}
					
				}
					?>
						</tbody>
						</table>
						</div>
						</div>
						</div>

<div>

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
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>

    <script src="../js/custom.js"></script>
    <script src="../vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="../js/tables.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  </body>
</html>
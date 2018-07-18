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
        $id = $_POST['id'];
        $cert = $_POST['cert'];  
        $title = $_POST['title'];
        $vessel = $_POST['vessel'];
        $place = $_POST['place'];
        $certrange = $_POST['certrange'];
        $certno = $_POST['certno'];
        $issued = $_POST['issued'];
        $annual = $_POST['annual'];
        $exp = $_POST['exp'];
        $remark = $_POST['remark'];

    // checking empty fields
    if(empty($cert) /*|| empty($user_email)*/) {            
        if(empty($cert)) {
            echo "<font color='red'>cert field is empty.</font><br/>";
        }
              
} 

    else{

        //updating the table
        $sql = "UPDATE up_files SET cert='$cert',title='$title',vessel='$vessel',place='$place',certrange='$certrange',certno='$certno',issued='$issued',annual='$annual',exp='$exp',remark='$remark'
          WHERE id = $id";
        $results = $jdb->select($sql);
        
        //redirectig to the display page. In our case, it is index.php
       
        echo '<script type="text/javascript">'; 
        echo 'alert("Update Successful");'; 
        echo 'window.location.href = "certificateJM2.php";';
        echo '</script>';
    }
}

?>

<?php
        $id = $_GET['id'];
        $table = 'up_files';
        $sql = "SELECT * FROM $table WHERE id= $id";
        $results = $jdb->select($sql);

while ($row = mysql_fetch_array($results)) 
{  
    $cert = $row['cert'];
    $title = $row['title'];
    $vessel = $row['vessel'];
    $place = $row['place'];
    $certrange = $row['certrange']; 
    $certno = $row['certno'];    
    $issued = $row['issued'];    
    $annual = $row['annual'];    
    $exp = $row['exp'] ;
    $remark = $row['remark'] ; 
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JM Record v1.0</title>

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
   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">JM Record v1.0</a>
            </div>
            <!-- /.navbar-header -->

           <?php include("include/topHeader.php"); ?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?php include("include/sidemenu.php"); ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                     <h1 class="page-header">Edit Records</h1>
                </div></div>
                  <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                           
                        <form role="form" action="formedit_cert.php" method="post" enctype="multipart/form-data" name="upload">
                            <!-- Tab panes -->
                            <div class="tab-content">
                               
                            <div class="tab-pane fade in active" id="home">
                                     <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Certificate Information
                                    </div>
                                    
                                     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                        <div class="form-group">

                                            <label>Certificate Description</label> 
                                            <input class="form-control" type="text" name="cert" value="<?php echo $cert; ?>  " style="text-transform:uppercase">  
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Certificate Group</label>
                                           
                                                <select class="form-control" name="title" value="<?php echo $title; selected?>" style="text-transform:uppercase">
                                                <option  <?php if($title=="CUSTOMS AND QUARANTINE (ONBOARD ONLY)") echo 'selected="selected"'; ?> value="CUSTOMS AND QUARANTINE (ONBOARD ONLY)">1.CUSTOMS AND QUARANTINE (ONBOARD ONLY)</option>
                                                <option <?php if($title=="OWNERSHIP, ISM, ISPS, ISO, SAFE MANNING, ITF, P&I") echo 'selected="selected"'; ?> value="OWNERSHIP, ISM, ISPS, ISO, SAFE MANNING, ITF, P&I">2.OWNERSHIP, ISM, ISPS, ISO, SAFE MANNING, ITF, P&I</option>
                                                <option <?php if($title=="TONNAGE, LOADLINE, SOLAS") echo 'selected="selected"'; ?> value="TONNAGE, LOADLINE, SOLAS">3.TONNAGE, LOADLINE, SOLAS</option>
                                                <option <?php if($title=="MARPOL") echo 'selected="selected"'; ?> value="MARPOL">4.MARPOL</option>
                                                <option <?php if($title=="Class") echo 'selected="selected"'; ?> value="Class">5.Class</option>
                                                <option <?php if($title=="Miscellaneous") echo 'selected="selected"'; ?> value="Miscellaneous">6.Miscellaneous</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Vessel Name</label>
                                                <select class="form-control" name="vessel" value="<?php echo $vessel; selected?>" style="text-transform:uppercase">
                                                <option  <?php if($vessel=="JM Sutera 1") echo 'selected="selected"'; ?> value="JM Sutera 1">JM Sutera 1</option>
                                                <option <?php if($vessel=="JM Sutera 2") echo 'selected="selected"'; ?> value="JM Sutera 2">JM Sutera 2</option>
                                                <option <?php if($vessel=="JM Sutera 3") echo 'selected="selected"'; ?> value="JM Sutera 3">JM Sutera 3</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label>Place of Issue</label>  
                                            <input class="form-control" type="text" name="place" value="<?php echo $place; ?>  " style="text-transform:uppercase">  
                                        </div>                                      
                                        <div class="form-group">
                                            <label>Range</label>
                                           <select class="form-control" name="certrange" style="text-transform:uppercase" value="<?php echo $certrange; selected?>">
                                                <option <?php if($certrange=="N/A") echo 'selected="selected"'; ?> value="N/A">N/A</option>
                                                <option <?php if($certrange=="Permanent") echo 'selected="selected"'; ?> value="Permanent">Permanent</option>
                                                <option <?php if($certrange=="Annually") echo 'selected="selected"'; ?> value="Annually">Annually</option>
                                                <option <?php if($certrange=="Continuous") echo 'selected="selected"'; ?> value="Continuous">Continuous</option>
                                                <option <?php if($certrange=="Amended") echo 'selected="selected"'; ?> value="As Amended">As Amended</option>
                                                <option <?php if($certrange=="5 Yealy") echo 'selected="selected"'; ?> value="5 Yealy">5 Yealy</option>
                                                <option <?php if($certrange=="4 Yearly") echo 'selected="selected"'; ?> value="4 Yearly">4 Yearly</option>
                                                <option <?php if($certrange=="6 monthly") echo 'selected="selected"'; ?> value="6 monthly">6 monthly</option>
                                                <option <?php if($certrange=="&plusmn;3 monthly") echo 'selected="selected"'; ?> value="&plusmn;3 monthly">&plusmn;3 monthly</option>
                                            </select>
                                          
                                        </div>
                                           <div class="form-group">

                                            <label>Certificate No</label> 
                                            <input class="form-control" type="text" name="certno" value="<?php echo $certno; ?>  " style="text-transform:uppercase"> 
                                            
                                        </div> 
                                       
                                         <div class="form-group">
                                            <label>Issued Date</label>
                                            <input class="form-control" type="date" name="issued" value="<?php echo $issued; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Annual</label>
                                            <input class="form-control" type="date" name="annual" value="<?php echo $annual; ?>  "> 
                                        </div>
                                        <div class="form-group">
                                            <label>Expirated Date</label>
                                            <input class="form-control" type="date" name="exp" value="<?php echo $exp; ?>"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" rows="3" name="remark"><?php echo $remark; ?></textarea> 
                                        </div> 

                                        <input type="hidden" name="date" value="<?php echo time(); ?>" /> 
                                    
                                    </div>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        
                                </div>

                               
            
           </div> 
           <br>
            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
            <input type="submit" value="Save All" class="btn btn-primary signup" name="update" />
            </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

 <script type="text/javascript">
        $('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>
    

</body>

</html>
<?php } ?>


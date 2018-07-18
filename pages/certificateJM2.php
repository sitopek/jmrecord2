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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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

    <!--print-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


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
                    <h1 class="page-header">JM Sutera 2 Records</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>1. CUSTOMS AND QUARANTINE (ONBOARD ONLY)</strong>
                            <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print">Print All</li></a>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                    <th><strong>#</strong></th>
                    <th><strong>Certificate Name</strong></th>
                    <th><strong>Place of Issue</strong></th>
                    <th><strong>Range</strong></th>
                    <th><strong>Certificate No.</strong></th>
                    <th width="89px"><strong>Issued Date</strong></th>
                    <th width="89px"><strong>Expired Date </strong></th>
                    <th><strong>Remark</strong></th>
                    <th><strong>Download </strong></th>
                    <th><strong>Edit</strong></th>
                            </tr>
                        </thead>
                        <tbody>
<!--where vessel='JM Sutera 1'-->
 <?php $query = "SELECT * FROM up_files where title='CUSTOMS AND QUARANTINE (ONBOARD ONLY)' and vessel='JM Sutera 2'"; 

            $result = mysql_query($query);

            $tmptCount = 1;
                while($row = mysql_fetch_array($result))
                    {                   
                 echo "
                  <tr>
                    <td>{$tmptCount}</td>                   
                 <td style='text-transform:uppercase'>
                    {$row['cert']}                    
                </td>
                <td style='text-transform:uppercase'>
                    {$row['place']}                    
                </td>
                <td>
                    {$row['certrange']}                    
                </td>
                <td>{$row['certno']} 
                </td>
                <td>{$row['issued']} 
                </td>  
                    <td>
                     {$row['exp']} 
                    <!--<img src = '{$row['floc']}' width='90' height='90'>-->
                    </td>
                    <td> {$row['remark']}                
                   </td> 
                    <td>
                    <a href='../pages/upload/{$row['floc']}' title='download file' target='_blank' >Download</a>
                    </td>   
                    <td align='center'><form action='formEdit_cert.php?id=".$row['id']."' method='post'>
                                             <input type='hidden' name='edit_id' value='".$row['id']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-pencil' input type='submit'></i></button></form></td>         
                </tr>   
                 ";
                 $tmptCount ++; 
        // replace the A href link with 
                    
                    }
                    
                
                    ?>
                        </tbody>
                        </table>
                 
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>2. OWNERSHIP, ISM, ISPS, ISO, SAFE MANNING, ITF, P&I</strong>
                            <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print">Print All</li></a>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" >
                        <thead>
                            <tr>
                  <th><strong>#</strong></th>
                    <th><strong>Certificate Name</strong></th>
                    <th><strong>Place of Issue</strong></th>
                    <th><strong>Range</strong></th>
                    <th><strong>Certificate No.</strong></th>
                    <th width="89px"><strong>Issued Date</strong></th>
                    <th width="89px"><strong>Expired Date </strong></th>
                    <th><strong>Remark</strong></th>
                    <th><strong>Download </strong></th>
                    <th><strong>Edit</strong></th>
                            </tr>
                        </thead>
                        <tbody>
<!--where vessel='JM Sutera 1'-->
 <?php $query = "SELECT * FROM up_files where title='OWNERSHIP, ISM, ISPS, ISO, SAFE MANNING, ITF, P&I' and vessel='JM Sutera 2'"; 

            $result = mysql_query($query);

            $tmptCount = 1;
                while($row = mysql_fetch_array($result))
                    {                   
                 echo "
                  <tr>
                    <td>{$tmptCount}</td>                   
                <td style='text-transform:uppercase'>
                    {$row['cert']}                    
                </td>
                <td style='text-transform:uppercase'>
                    {$row['place']}                    
                </td>
                <td>
                    {$row['certrange']}                    
                </td>
                <td>{$row['certno']} 
                </td>
                <td>{$row['issued']} 
                </td>  
                    <td>
                     {$row['exp']} 
                    <!--<img src = '{$row['floc']}' width='90' height='90'>-->
                    </td>
                    <td> {$row['remark']}                
                   </td> 
                    <td>
                    <a href='../pages/upload/{$row['floc']}' title='download file' target='_blank' >Download</a>
                    </td>   
                    <td align='center'><form action='formEdit_cert.php?id=".$row['id']."' method='post'>
                                             <input type='hidden' name='edit_id' value='".$row['id']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-pencil' input type='submit'></i></button></form></td>         
                </tr> 
                 ";
                 $tmptCount ++; 
        // replace the A href link with 
                    
                    }
                    
                
                    ?>
                        </tbody>
                        </table>
                 
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>3. TONNAGE, LOADLINE, SOLAS</strong>
                            <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print">Print All</li></a>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                   <th><strong>#</strong></th>
                    <th><strong>Certificate Name</strong></th>
                    <th><strong>Place of Issue</strong></th>
                    <th><strong>Range</strong></th>
                    <th><strong>Certificate No.</strong></th>
                    <th width="89px"><strong>Issued Date</strong></th>
                    <th width="89px"><strong>Expired Date </strong></th>
                    <th><strong>Remark</strong></th>
                    <th><strong>Download </strong></th>
                    <th><strong>Edit</strong></th>
                            </tr>
                        </thead>
                        <tbody>
<!--where vessel='JM Sutera 1'-->
 <?php $query = "SELECT * FROM up_files where title='TONNAGE, LOADLINE, SOLAS' and vessel='JM Sutera 2'"; 

            $result = mysql_query($query);

            $tmptCount = 1;
                while($row = mysql_fetch_array($result))
                    {                   
                 echo "
                <tr>
                    <td>{$tmptCount}</td>                   
                <td style='text-transform:uppercase'>
                    {$row['cert']}                    
                </td>
                <td style='text-transform:uppercase'>
                    {$row['place']}                    
                </td>
                <td>
                    {$row['certrange']}                    
                </td>
                <td>{$row['certno']} 
                </td>
                <td>{$row['issued']} 
                </td>  
                    <td>
                     {$row['exp']} 
                    <!--<img src = '{$row['floc']}' width='90' height='90'>-->
                    </td>
                    <td> {$row['remark']}                
                   </td> 
                    <td>
                    <a href='../pages/upload/{$row['floc']}' title='download file' target='_blank' >Download</a>
                    </td>   
                    <td align='center'><form action='formEdit_cert.php?id=".$row['id']."' method='post'>
                                             <input type='hidden' name='edit_id' value='".$row['id']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-pencil' input type='submit'></i></button></form></td>         
                </tr>  
                 ";
                 $tmptCount ++; 
        // replace the A href link with 
                    
                    }
                    
                
                    ?>
                        </tbody>
                        </table>
                 
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>4. MARPOL</strong>
                            <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print">Print All</li></a>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                   <th><strong>#</strong></th>
                    <th><strong>Certificate Name</strong></th>
                    <th><strong>Place of Issue</strong></th>
                    <th><strong>Range</strong></th>
                    <th><strong>Certificate No.</strong></th>
                    <th width="89px"><strong>Issued Date</strong></th>
                    <th width="89px"><strong>Expired Date </strong></th>
                    <th><strong>Remark</strong></th>
                    <th><strong>Download </strong></th>
                    <th><strong>Edit</strong></th>
                            </tr>
                        </thead>
                        <tbody>
<!--where vessel='JM Sutera 1'-->
 <?php $query = "SELECT * FROM up_files where title='MARPOL' and vessel='JM Sutera 2'"; 

            $result = mysql_query($query);

            $tmptCount = 1;
                while($row = mysql_fetch_array($result))
                    {                   
                 echo "
                <tr>
                    <td>{$tmptCount}</td>                   
                 <td style='text-transform:uppercase'>
                    {$row['cert']}                    
                </td>
                <td style='text-transform:uppercase'>
                    {$row['place']}                    
                </td>
                <td>
                    {$row['certrange']}                    
                </td>
                <td>{$row['certno']} 
                </td>
                <td>{$row['issued']} 
                </td>  
                    <td>
                     {$row['exp']} 
                    <!--<img src = '{$row['floc']}' width='90' height='90'>-->
                    </td>
                    <td> {$row['remark']}                
                   </td> 
                    <td>
                    <a href='../pages/upload/{$row['floc']}' title='download file' target='_blank' >Download</a>
                    </td>   
                    <td align='center'><form action='formEdit_cert.php?id=".$row['id']."' method='post'>
                                             <input type='hidden' name='edit_id' value='".$row['id']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-pencil' input type='submit'></i></button></form></td>         
                </tr> 
                 ";
                 $tmptCount ++; 
        // replace the A href link with 
                    
                    }
                    
                
                    ?>
                        </tbody>
                        </table>
                 
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>5. Class</strong>
                            <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print">Print All</li></a>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                    <th><strong>#</strong></th>
                    <th><strong>Certificate Name</strong></th>
                    <th><strong>Place of Issue</strong></th>
                    <th><strong>Range</strong></th>
                    <th><strong>Certificate No.</strong></th>
                    <th width="89px"><strong>Issued Date</strong></th>
                    <th width="89px"><strong>Expired Date </strong></th>
                    <th><strong>Remark</strong></th>
                    <th><strong>Download </strong></th>
                    <th><strong>Edit</strong></th>
                            </tr>
                        </thead>
                        <tbody>
<!--where vessel='JM Sutera 1'-->
 <?php $query = "SELECT * FROM up_files where title='Class' and vessel='JM Sutera 2'"; 

            $result = mysql_query($query);

            $tmptCount = 1;
                while($row = mysql_fetch_array($result))
                    {                   
                 echo "
                <tr>
                    <td>{$tmptCount}</td>                   
                 <td style='text-transform:uppercase'>
                    {$row['cert']}                    
                </td>
                <td style='text-transform:uppercase'>
                    {$row['place']}                    
                </td>
                <td>
                    {$row['certrange']}                    
                </td>
                <td>{$row['certno']} 
                </td>
                <td>{$row['issued']} 
                </td>  
                    <td>
                     {$row['exp']} 
                    <!--<img src = '{$row['floc']}' width='90' height='90'>-->
                    </td>
                    <td> {$row['remark']}                
                   </td> 
                    <td>
                    <a href='../pages/upload/{$row['floc']}' title='download file' target='_blank' >Download</a>
                    </td>   
                    <td align='center'><form action='formEdit_cert.php?id=".$row['id']."' method='post'>
                                             <input type='hidden' name='edit_id' value='".$row['id']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-pencil' input type='submit'></i></button></form></td>         
                </tr> 
                 ";
                 $tmptCount ++; 
        // replace the A href link with 
                    
                    }
                    
                
                    ?>
                        </tbody>
                        </table>
                 
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>6. Miscellaneous</strong>
                            <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print">Print All</li></a>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                   <th><strong>#</strong></th>
                    <th><strong>Certificate Name</strong></th>
                    <th><strong>Place of Issue</strong></th>
                    <th><strong>Range</strong></th>
                    <th><strong>Certificate No.</strong></th>
                    <th width="89px"><strong>Issued Date</strong></th>
                    <th width="89px"><strong>Expired Date </strong></th>
                    <th><strong>Remark</strong></th>
                    <th><strong>Download </strong></th>
                    <th><strong>Edit</strong></th>
                            </tr>
                        </thead>
                        <tbody>
<!--where vessel='JM Sutera 1'-->
 <?php $query = "SELECT * FROM up_files where title='Miscellaneous' and vessel='JM Sutera 2'"; 

            $result = mysql_query($query);

            $tmptCount = 1;
                while($row = mysql_fetch_array($result))
                    {                   
                 echo "
               <tr>
                    <td>{$tmptCount}</td>                   
                 <td style='text-transform:uppercase'>
                    {$row['cert']}                    
                </td>
                <td style='text-transform:uppercase'>
                    {$row['place']}                    
                </td>
                <td>
                    {$row['certrange']}                    
                </td>
                <td>{$row['certno']} 
                </td>
                <td>{$row['issued']} 
                </td>  
                    <td>
                     {$row['exp']} 
                    <!--<img src = '{$row['floc']}' width='90' height='90'>-->
                    </td>
                    <td> {$row['remark']}                
                   </td> 
                    <td>
                    <a href='../pages/upload/{$row['floc']}' title='download file' target='_blank' >Download</a>
                    </td>   
                    <td align='center'><form action='formEdit_cert.php?id=".$row['id']."' method='post'>
                                             <input type='hidden' name='edit_id' value='".$row['id']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-pencil' input type='submit'></i></button></form></td>         
                </tr> 
                 ";
                 $tmptCount ++; 
        // replace the A href link with 
                    
                    }
                    
                
                    ?>
                        </tbody>
                        </table>
                 
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
        <script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   alert ("record deleted")
}
return del;
}
</script>

</body>

</html>
<?php } ?>

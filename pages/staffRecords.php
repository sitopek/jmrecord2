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
<script type="text/javascript">//<![CDATA[ 
 $(function(){
  function openPrintWindow(url, name, specs) {
    var printWindow = window.open(url, name, specs);
    var printAndClose = function () {
      if (printWindow.document.readyState == 'complete') {
        clearInterval(sched);
        printWindow.print();
        printWindow.close();
     }
    }  
      var sched = setInterval(printAndClose, 200);
   };

 jQuery(document).ready(function ($) {
   $(".test").on("click", function (e) {

    var myUrl = $(this).attr('data-url');
    alert(myUrl);

    e.preventDefault();
    openPrintWindow(myUrl, "to_print", "width=700,height=400,_blank");
   });
 });

 });//]]> 
</script>

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

 <?php $query = "SELECT * FROM j_staff"; //You don't need a ; like you do in SQL
                                    $result = mysql_query($query);?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Staff Records</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Staff Overview
                            <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print">Print All</li></a>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
  

                                   <?php // start a table tag in the HTML
                                    echo "<tr><th>#</th><th width='18%'>Name</th><th>NRIC</th><th width='23%'>Address</th><th width='13%'>Email</th><th>Edit</th><th>Delete</th><th>View</th></tr>";
                                    echo "</thead>";
                                    echo "<tbody>";

                                    $tmptCount = 1;
                                    while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results

                                         echo "<tr><td style='text-align: center;'>".$tmptCount."</td><td>" . $row['user_name'] . "</td><td>" . $row['user_ic']. "</td><td>" . $row['user_address'] . "</td><td>".$row['user_email']."</td>";
                                         echo "<td align='center'><form action='formEdit.php?ID=".$row['ID']."' method='post'>
                                             <input type='hidden' name='edit_id' value='".$row['ID']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-pencil' input type='submit'></i></button></form></td>";
                                         echo "<td align='center'><form action='delete.php' method='post' onsubmit='return deleletconfig()'>
                                             <input type='hidden' name='delete_id' value='".$row['ID']."' />
                                             <button class='btn btn-danger btn-xs'><i class='glyphicon glyphicon-remove' input type='submit'></i></button></form></td>";
                                        echo "<td style='text-align: center;'><form action='doc2.php?ID=".$row['ID']."' method='post' target='_blank'>
                                             <input type='hidden' name='edit_id' value='".$row['ID']."' />
                                             <button class='btn btn-primary btn-xs'><i class='glyphicon glyphicon-print' input type='submit'></i></button></form></td></tr>";
                                             $tmptCount ++;  
                                        //$row['index'] the index here is a field name
                                }

                                    echo "</tbody>";
                                    echo "</table>"; //Close the table in HTML
                                        mysql_close();
                                
                            ?>
                 
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
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

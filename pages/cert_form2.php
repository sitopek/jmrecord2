<?php
    require_once('load.php');

error_reporting(E_ERROR | E_PARSE);

   //$j->register2('staffRecords.php');

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
                <a class="navbar-brand" href="index.html">Staff Record v1.0</a>
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
                    <h1 class="page-header">Add New Records</h1>
                </div>
                  <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                           
                        <form role="form" action="j_includes/insert2.php" method="post" enctype="multipart/form-data">
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

                                            <label>Certification</label>
                                            <input class="form-control" type="text" placeholder="Certificate Name" name="cert" style="text-transform:uppercase">   
                                            
                                        </div>
                                        <div class="form-group">

                                            <label>Your Photo</label>
                                           <input name="uploaded_file" type="file" class="input-xlarge" required/>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                            
                                        </div>
                                         
                                        <div class="form-group">
                                            <label>Vessel Name</label>
                                           <select class="form-control" name="vessel" style="text-transform:uppercase">
                                            <option value="">-Please select-</option>
                                                <option value="JM Sutera 1">JM Sutera 1</option>
                                                <option value="JM Sutera 2">JM Sutera 2</option>
                                                <option value="JM Sutera 3">JM Sutera 3</option>                    
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Issued Date</label>
                                            <input class="form-control" type="date" name="issued">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Annual</label>
                                            <input class="form-control" type="date" name="annual">
                                        </div>
                                        <div class="form-group">
                                            <label>Expirated Date</label>
                                            <input class="form-control" type="date" name="exp">
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
            <input type="submit" value="Save" class="btn btn-primary signup" /> 
            <input type="reset" name="Reset" value="Reset" class="btn btn-primary signup"/> 
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



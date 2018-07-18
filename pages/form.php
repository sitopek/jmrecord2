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
                    <h1 class="page-header">Add New Records</h1>
                </div>
                  <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="mytabs">
                                <li class="active"><a href="#home" data-toggle="tab">Personal Information</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Additional Information</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Personal Details</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Spouse Information</a>
                                </li>
                                <li><a href="#emergency" data-toggle="tab">Emergency Information</a>
                                </li>
                                <li><a href="#children" data-toggle="tab">Children Information</a>
                                </li>
                            </ul>
                        <form role="form" action="j_includes/insert.php" method="post">
                            <!-- Tab panes -->
                            <div class="tab-content">
                               
                            <div class="tab-pane fade in active" id="home">
                                     <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Personal Information
                                    </div>
                                    
                                     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                        <div class="form-group">

                                            <label>Name</label><label class="help"> (as per IC)</label> 
                                            <input class="form-control" type="text" placeholder="Full Name" name="name" style="text-transform:uppercase">   
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                           <select class="form-control" name="user_national" style="text-transform:uppercase">
                                            <option value="">-Please select-</option>
                                                <option value="Malaysian">Malaysian</option>
                                                <option value="NonMalaysian">Non-Malaysian</option>                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NRIC</label>
                                            <input class="form-control" type="text" placeholder="NRIC" name="user_ic">
                                        </div>
                                         <div class="form-group">
                                            <label>Old NRIC</label>
                                            <input class="form-control" placeholder="Old NRIC" name="user_oldic">
                                        </div>
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" type="date" name="bday">
                                        </div>
                                        <div class="form-group">
                                            <label>Birth of Place</label>
                                            <input class="form-control" placeholder="Birth of Place" name="user_bop" style="text-transform:uppercase">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_gender" value="Male">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_gender" value="Female">Female
                                            </label>                                 
                                        </div>
                                        <input type="hidden" name="date" value="<?php echo time(); ?>" />
                                         <div class="form-group">
                                            <label>Race</label>
                                            <select class="form-control" name="user_race">
                                                <option value="">-Please select-</option>
                                                <option value="Malay">Malay</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Religion</label>
                                            <select class="form-control" name="user_religion">
                                                <option value="">-Please select-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" placeholder="Weight" name="user_weight">
                                        </div>
                                         <div class="form-group">
                                            <label>Height</label>
                                            <input class="form-control" placeholder="Height" name="user_height">
                                        </div>

                                         <div class="form-group">
                                            <label>Marital Status</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_marriage" value="Married">Married
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_marriage" value="Single">Single
                                            </label>
                                        </div>
                                        
                                       
                                    </div>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <a class="btn btn-primary btnNext" >Next</a>
                                </div>

                                <!-- ./children -->
                                <div class="tab-pane fade" id="children">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Report of Children Information
                                    </div>
                               <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="" method="post">
                          
                                    <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            
                                            <th width="23%" style="text-align: center; font-size: 15px;vertical-align: middle;">Name</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Birth Date</th>
                                            <th style="text-align: center;fontpx;vertical-align: middle;">Age</th>
                                            <th width="15%" style="text-align: center;font-size: 15px;vertical-align: middle;">NRIC</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Birth Certificate</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">*Status*</th>
                                            <th width="15%" style="text-align: center;font-size: 15px;vertical-align: middle;">Maritial Status</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td> <input class="form-control" placeholder="Name" name="c1name" style="text-transform:uppercase"></td>
                                            <td><input class="form-control" type="date" name="c1bday"></td>
                                            <td> <input class="form-control" placeholder="Age" name="c1age"></td>
                                            <td> <input class="form-control" placeholder="NRIC" name="c1ic"></td>
                                           <td> <input class="form-control" placeholder="Certificate" name="c1cert" style="text-transform:uppercase"></td>
                                            <td><select class="form-control" name="c1status" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Minor">Minor</option>
                                                <option value="Student">Student</option>
                                                <option value="Working">Working</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c1marriage" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c1gender" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                         <tr>
                                             <td> <input class="form-control" placeholder="Name" name="c2name" style="text-transform:uppercase"></td>
                                            <td><input class="form-control" type="date" name="c2bday"></td>
                                            <td> <input class="form-control" placeholder="Age" name="c2age"></td>
                                            <td> <input class="form-control" placeholder="NRIC" name="c2ic"></td>
                                           <td> <input class="form-control" placeholder="Certificate" name="c2cert" style="text-transform:uppercase"></td>
                                            <td><select class="form-control" name="c2status" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Minor">Minor</option>
                                                <option value="Student">Student</option>
                                                <option value="Working">Working</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c2marriage" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c2gender" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" placeholder="Name" name="c3name" style="text-transform:uppercase"></td>
                                            <td><input class="form-control" type="date" name="c3bday"></td>
                                            <td> <input class="form-control" placeholder="Age" name="c3age"></td>
                                            <td> <input class="form-control" placeholder="NRIC" name="c3ic"></td>
                                           <td> <input class="form-control" placeholder="Certificate" name="c3cert" style="text-transform:uppercase"></td>
                                            <td><select class="form-control" name="c3status" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Minor">Minor</option>
                                                <option value="Student">Student</option>
                                                <option value="Working">Working</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c3marriage" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c3gender" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" placeholder="Name" name="c4name" style="text-transform:uppercase"></td>
                                            <td><input class="form-control" type="date" name="c4bday"></td>
                                            <td> <input class="form-control" placeholder="Age" name="c4age"></td>
                                            <td> <input class="form-control" placeholder="NRIC" name="c4ic"></td>
                                           <td> <input class="form-control" placeholder="Certificate" name="c4cert" style="text-transform:uppercase"></td>
                                            <td><select class="form-control" name="c4status" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Minor">Minor</option>
                                                <option value="Student">Student</option>
                                                <option value="Working">Working</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c4marriage" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c4gender" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" placeholder="Name" name="c5name" style="text-transform:uppercase"></td>
                                            <td><input class="form-control" type="date" name="c5bday"></td>
                                            <td> <input class="form-control" placeholder="Age" name="c5age"></td>
                                            <td> <input class="form-control" placeholder="NRIC" name="c5ic"></td>
                                           <td> <input class="form-control" placeholder="Certificate" name="c5cert" style="text-transform:uppercase"></td>
                                            <td><select class="form-control" name="c5status"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Minor">Minor</option>
                                                <option value="Student">Student</option>
                                                <option value="Working">Working</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c5marriage"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c5gender"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" placeholder="Name" name="c6name"  style="text-transform:uppercase"></td>
                                            <td><input class="form-control" type="date" name="c6bday"></td>
                                            <td> <input class="form-control" placeholder="Age" name="c6age"></td>
                                            <td> <input class="form-control" placeholder="NRIC" name="c6ic"></td>
                                           <td> <input class="form-control" placeholder="Certificate" name="c6cert"  style="text-transform:uppercase"></td>
                                            <td><select class="form-control" name="c6status"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Minor">Minor</option>
                                                <option value="Student">Student</option>
                                                <option value="Working">Working</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c6marriage"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c6gender"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" placeholder="Name" name="c7name"  style="text-transform:uppercase"></td>
                                            <td><input class="form-control" type="date" name="c7bday"></td>
                                            <td> <input class="form-control" placeholder="Age" name="c7age"></td>
                                            <td> <input class="form-control" placeholder="NRIC" name="c7ic"></td>
                                           <td> <input class="form-control" placeholder="Certificate" name="c7cert"  style="text-transform:uppercase"></td>
                                            <td><select class="form-control" name="c7status"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Minor">Minor</option>
                                                <option value="Student">Student</option>
                                                <option value="Working">Working</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c7marriage"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c7gender"  style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                    </tbody>
                                </table>

                                    </div>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <a class="btn btn-primary btnPrevious" >Previous</a>
                        
                        
                                </div>

                                <!-- ./children -->
                                <div class="tab-pane fade" id="emergency">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Emergency Information
                                    </div>
                               <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Full Name" name="E_name" style="text-transform:uppercase">   
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship</label>
                                            <input class="form-control" placeholder="Relationship" name="E_relationship" style="text-transform:uppercase">
                                        </div>
                                          <div class="form-group">
                                            <label>Nationality</label>
                                            <select class="form-control" name="E_nationality" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Malaysian">Malaysian</option>
                                                <option value="NonMalaysian">Non-Malaysian</option>                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NRIC</label>
                                            <input class="form-control" placeholder="NRIC" name="E_ic">
                                        </div>
                                         <div class="form-group">
                                            <label>Old NRIC</label>
                                            <input class="form-control" placeholder="Old NRIC" name="E_oldic">
                                        </div>
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" type="date" name="E_bd">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Birth of Place</label>
                                            <input class="form-control" placeholder="Birth of Place" name="E_bop" style="text-transform:uppercase">
                                        </div>                                      
                                         <div class="form-group">
                                            <label>Race</label>
                                            <select class="form-control" name="E_race" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Malay">Malay</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Religion</label>
                                            <select class="form-control" name="E_religion" style="text-transform:uppercase"> 
                                                <option value="">-Please select-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" placeholder="Weight" name="E_weight">
                                        </div>
                                         <div class="form-group">
                                            <label>Height</label>
                                            <input class="form-control" placeholder="Height" name="E_height">
                                        </div> 
                                         <div class="form-group">
                                            <label>Gender</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="E_gender" value="Male">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="E_gender" value="Female">Female
                                            </label>
                                        </div>
                                        </div>  
                                        <div class="col-sm-8">
                                         <div class="form-group">
                                            <label>Address as per NRIC</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" name="E_address" style="text-transform:uppercase"></textarea>   
                                        </div>   
                                        </div>                              

                                    </div>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <a class="btn btn-primary btnPrevious" >Previous</a>
                        <a class="btn btn-primary btnNext" >Next</a>
                        
                                </div>

                              
                                <div class="tab-pane fade" id="profile">
                                   
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Additional Information
                                    </div>
                                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                        <div class="form-group">
                                            <label>Passport No</label>
                                            <input class="form-control" placeholder="Passport No" name="user_passno">   
                                        </div>
                                        <div class="form-group">
                                            <label>Issue</label>
                                            <input class="form-control" placeholder="Issue" name="user_Issue">
                                        </div>
                                        <div class="form-group">
                                            <label>Expiricy</label>
                                            <input class="form-control" type="date" name='user_PassExp'>
                                        </div>
                                         <div class="form-group">
                                            <label>EPF No</label>
                                            <input class="form-control" placeholder="EPF No" name="user_EPFno">
                                        </div>
                                         <div class="form-group">
                                            <label>SOCSO No</label>
                                            <input class="form-control" placeholder="SOCSO No" name="user_SOCSOno">
                                        </div>
                                         <div class="form-group">
                                            <label>Income Tax File No</label>
                                            <input class="form-control" placeholder="Income Tax File No" name="user_incomeTax">
                                        </div>
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <input class="form-control" placeholder="Qualification" name="user_Qualification">
                                        </div>
                                        <div class="form-group">
                                            <label>Language (Please Tick)</label><br>
                                             <p class="help-block">Spoken</p>
                                             <label>Malay</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="speak_malay" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_malay" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_malay" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_malay" value="Bad">Bad
                                            </label><br>
                                             <label>English</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="speak_english" id="optionsRadiosInline1" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_english" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_english" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_english" value="Bad">Bad
                                            </label><br>
                                            <label>Cantonese</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="speak_Cantonese" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Cantonese" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Cantonese" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Cantonese" value="Bad">Bad
                                            </label><br>
                                            <label>Others :<input class="form-control" placeholder="Other Language" style="width: 150px;" name="speak_language"></label>                                  
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Bad">Bad
                                            </label> <br><br>
                                             <p class="help-block">Written</p>
                                             <label>Malay</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="write_malay" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_malay" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_malay" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_malay" value="Bad">Bad
                                            </label><br>
                                             <label>English</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="write_english" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_english" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_english" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_english" value="Bad">Bad
                                            </label><br>
                                            <label>Cantonese</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="write_cantonese" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_cantonese" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_cantonese" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_cantonese" value="Bad">Bad
                                            </label><br>
                                            <label>Others :<input class="form-control" placeholder="Other Language" style="width: 150px;" name="write_language"></label> 
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Well">Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Good">Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Fair">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Bad">Bad
                                            </label>
                                        </div>
 
                                </div></div>

                            </div>
                            <!-- /.row (nested) -->
                            </div>
                            <a class="btn btn-primary btnPrevious" >Previous</a>
                            <a class="btn btn-primary btnNext" >Next</a>
                            
                            </div>

                            <div class="tab-pane fade" id="messages">
                             <div class="panel panel-default">
                            <div class="panel-heading">Personal Details</div>
                             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <p class="help-block">Job Information</p>                  
                                            <label for="position">Position</label>
                                            <input class="form-control" placeholder="Position" name="user_position" style="text-transform:uppercase">
                                            </div>
                                              <div class="form-group">                        
                                            <label>Department</label>
                                            <input class="form-control" placeholder="Department" name="user_department" style="text-transform:uppercase">
                                        </div>
                                        <div class="form-group">
                                            <label>Join Date</label>
                                           <input class="form-control" type="date" name="JDate">
                                        </div>
                                         <div class="form-group">
                                            <label>Address as per NRIC</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" name="user_address" style="text-transform:uppercase"></textarea>   
                                        </div>
                                        </div>          
                                        <div class="col-sm-6">
                                             <br><br>
                                             <div class="form-group col-xs-4">
                                            <label>Personal Contact</label><br>
                                            <p class="help-block">Telephone No 1</p>
                                            <p class="help-block">Telephone No 2</p>
                                            <p class="help-block">Mobile No</p>
                                            <p class="help-block">Email</p>
                                        </div>
                                        <div class="form-group col-xs-8">
                                            <label>&nbsp;</label><br>
                                            <input class="form-control" placeholder="Telephone 1" name="tel_1">
                                            <input class="form-control" placeholder="Telephone 2" name="tel_2"> 
                                            <input class="form-control" placeholder="Mobile" name="user_mobile">
                                            <input class="form-control" placeholder="Email" type="email" name="user_email"><br><br>
                                        </div>
                                       
                                         <div class="form-group">
                                            <label>Residence Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Residence Address" name="user_residence" style="text-transform:uppercase"></textarea>
                                        </div>
                                         </div>    
                                         <div class="col-sm-12">
                            <div class="table-responsive">
                                <label>Working Experience</label>
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            
                                            <th width="30%" style="text-align: center; font-size: 15px;vertical-align: middle;">Company &amp; Location</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Period</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Position Held</th>
                                            <th style="text-align: center;font-size: 15px;">Last Drawn Salary (RM)</th>
                                            <th width="30%" style="text-align: center;font-size: 15px;vertical-align: middle;">Reason for Leaving</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                            <td><textarea class="form-control" rows="3" placeholder="Company & Address" name="company_detail" style="text-transform:uppercase"></textarea></td>
                                            <td> <input class="form-control" placeholder="Period" name="period"></td>
                                            <td> <input class="form-control" placeholder="Position" name="position" style="text-transform:uppercase"></td>
                                            <td> <input class="form-control" placeholder="Salary" name="salary"></td>
                                            <td><textarea class="form-control" rows="3" placeholder="Reason" name="reason" style="text-transform:uppercase"></textarea></td>
                                        </tr>
                                         <tr>
                                           
                                            <td><textarea class="form-control" rows="3" placeholder="Company & Address" name="company_detail2" style="text-transform:uppercase"></textarea></td>
                                            <td> <input class="form-control" placeholder="Period" name="period2"></td>
                                            <td> <input class="form-control" placeholder="Position" name="position2" style="text-transform:uppercase"></td>
                                            <td> <input class="form-control" placeholder="Salary" name="salary2"></td>
                                            <td><textarea class="form-control" rows="3" placeholder="Reason" name="reason2" style="text-transform:uppercase"></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                       </div>
                            <!-- /.table-responsive -->
                        </div>
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <label>Education Background</label>
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            
                                            <th width="40%" style="text-align: center; font-size: 15px;vertical-align: middle;">University/College/School</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Period</th>
                                            <th width="40%" style="text-align: center;font-size: 15px;">Qualification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                            <td><textarea class="form-control" rows="3" placeholder="Uni/College/School" name="uni"></textarea></td>
                                            <td> <input class="form-control" placeholder="Period" name="uni_period"></td>
                                            <td><textarea class="form-control" rows="3" placeholder="Qualification" name="uni_qualification" style="text-transform:uppercase"></textarea></td>
                                        </tr>
                                         <tr>
                                           
                                            <td><textarea class="form-control" rows="3" placeholder="Uni/College/School" name="uni2"></textarea></td>
                                            <td> <input class="form-control" placeholder="Period" name="uni_period2"></td>
                                            <td><textarea class="form-control" rows="3" placeholder="Qualification" name="uni_qualification2" style="text-transform:uppercase"></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                       </div>
                            <!-- /.table-responsive -->
                        </div>

                                </div>
                            </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <a class="btn btn-primary btnPrevious" >Previous</a>
                        <a class="btn btn-primary btnNext" >Next</a>
                        
                        </div>
                               
                                <div class="tab-pane fade" id="settings">
                        <div class="panel panel-default">
                            <div class="panel-heading">Spouse Information</div>
                             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Name" name="S_name" style="text-transform:uppercase">   
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship</label>
                                            <input class="form-control" placeholder="Relationship" name="S_relationship" style="text-transform:uppercase">
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                             <select class="form-control" name="S_nationality" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Malaysian">Malaysian</option>
                                                <option value="NonMalaysian">Non-Malaysian</option>             </select>
                                        </div>
                                         <div class="form-group">
                                            <label>NRIC</label>
                                            <input class="form-control" placeholder="NRIC" name="S_ic">
                                        </div>
                                        <div class="form-group">
                                            <label>Old NRIC</label>
                                            <input class="form-control" placeholder="Old NRIC" name="S_oldic">
                                        </div>
                                    </div>

                                     <div class="col-sm-6"> 
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" placeholder="Date" name="S_bd" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" placeholder="Weight" name="S_weight">
                                        </div>
                                        <div class="form-group">
                                            <label>Height</label>
                                             <input class="form-control" placeholder="Height" name="S_height">
                                        </div>
                                         <div class="form-group">
                                            <label>Race</label>
                                            <select class="form-control" name="S_race" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Malay">Malay</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Religion</label>
                                            <select class="form-control" name="S_religion" style="text-transform:uppercase">
                                                <option value="">-Please select-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                        </div>

                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                                </div>

                            <div class="panel panel-default">
                            <div class="panel-heading">Spouse Details</div>
                             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Personal Contact</label>
                                            <textarea class="form-control" rows="3" placeholder="Contact" name="S_contact" style="text-transform:uppercase"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control" placeholder="Postal Code" style="width: 150px;" name="S_postal">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone 1</label>
                                            <input class="form-control" placeholder="Tel No." style="width: 300px;" name="S_tel1">
                                        </div> 
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" placeholder="Old NRIC" style="width: 300px;" name="S_mobile">
                                        </div>                                    
                                    </div>

                                     <div class="col-sm-6"> 
                                          <div class="form-group">
                                            <label>Address as per NRIC</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" name="S_address" style="text-transform:uppercase"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control" placeholder="Postal Code" style="width: 150px;" name="S_postal2">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone 2</label>
                                            <input class="form-control" placeholder="Tel No." style="width: 300px;" name="S_tel2">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" style="width: 300px;" name="S_email">
                                        </div>
                                        </div>
                                       

                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                                </div>

                            <div class="panel panel-default">
                            <div class="panel-heading">Employer Contact</div>
                             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">

                                         <div class="form-group">
                                            <label>Employer</label>
                                            <input class="form-control" placeholder="Employer" style="width: 60%;text-transform:uppercase;" name="S_employer">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" style="width: 60%;text-transform:uppercase;" name="S_emp_address"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control" placeholder="Postal Code" style="width: 150px;" name="S_emp_postal">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" placeholder="Tel No." style="width: 300px;" name="S_emp_tel">
                                        </div> 
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="email" style="width: 300px;" name="S_emp_email">
                                        </div>                                   

                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                      
                        <!-- /.panel-body -->
                             


                            </div>

                        <!-- /.panel-body -->
                <!-- /.col-lg-12 -->
                <a class="btn btn-primary btnPrevious" >Previous</a> 
                <a class="btn btn-primary btnNext" >Next</a>
            
           </div> 
           <br>
            <input type="submit" value="Save All" class="btn btn-primary signup" /> 
            <input type="reset" name="Reset" value="Reset All" class="btn btn-primary signup"/> 
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



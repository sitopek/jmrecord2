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
        $ID = $_GET['ID'];
        $table = 'j_staff';
        $sql = "SELECT * FROM $table WHERE ID= $ID";
        $results = $jdb->select($sql);

while ($row = mysql_fetch_array($results)) 
{  
    $user_name = $row['user_name'];
    $user_ic = $row['user_ic'];
    $user_email = $row['user_email'];
    $user_registered = $row['user_registered'];

         //personal info
    $user_oldic =  $row['user_oldic'];
    $user_bd =  $row['user_bd'];
    $user_race =  $row['user_race'];
    $user_religion =  $row['user_religion'];
    $user_national =  $row['user_national'];
    $user_bop =  $row['user_bop'];
    $user_gender =  $row['user_gender'];
    $user_weight =  $row['user_weight'];
    $user_height =  $row['user_height'];
    $user_marriage =  $row['user_marriage'];

    //Add info
    $user_passno =  $row['user_passno'];
    $user_Issue =  $row['user_Issue'];
    $user_PassExp =  $row['user_PassExp'];
    $user_EPFno =  $row['user_EPFno'];
    $user_SOCSOno =  $row['user_SOCSOno'];
    $user_incomeTax =  $row['user_incomeTax'];
    $user_Qualification =  $row['user_Qualification'];
    $speak_malay =  $row['speak_malay'];
    $speak_english =  $row['speak_english'];
    $speak_Cantonese =  $row['speak_Cantonese'];
    $speak_language =  $row['speak_language'];
    $speak_Others =  $row['speak_Others'];
    $write_malay =  $row['write_malay']; 
    $write_english =  $row['write_english'];
    $write_cantonese =  $row['write_cantonese'];
    $write_language =  $row['write_language'];
    $write_others =  $row['write_others']; 

    //Personal Detail
    $user_position =  $row['user_position'];
    $user_department =  $row['user_department'];
    $JDate =  $row['JDate'];
    $user_address =  $row['user_address'];
    $tel_1 =  $row['tel_1'];
    $tel_2 =  $row['tel_2'];
    $user_mobile =  $row['user_mobile'];
    $user_residence =  $row['user_residence'];
    $company_detail =  $row['company_detail'];
    $period =  $row['period'];
    $position =  $row['position'];
    $reason =  $row['reason'];
    $salary =  $row['salary'];
    $company_detail2 =  $row['company_detail2'];
    $period2 =  $row['period2'];
    $position2 =  $row['position2'];
    $salary2 =  $row['salary2'];
    $reason2 =  $row['reason2'];
    $uni =  $row['uni'];
    $uni_period =  $row['uni_period'];
    $uni_qualification =  $row['uni_qualification'];
    $uni2 =  $row['uni2'];
    $uni_period2 =  $row['uni_period2'];
    $uni_qualification2 =  $row['uni_qualification2'];

    //spouse info 23
    $S_name =  $row['S_name'];
    $S_relationship =  $row['S_relationship'];
    $S_nationality =  $row['S_nationality'];
    $S_ic =  $row['S_ic'];
    $S_oldic =  $row['S_oldic'];
    $S_bd =  $row['S_bd'];
    $S_weight =  $row['S_weight'];
    $S_height =  $row['S_height'];
    $S_race =  $row['S_race'];
    $S_religion =  $row['S_religion'];
    $S_contact =  $row['S_contact'];
    $S_postal =  $row['S_postal'];
    $S_tel1 =  $row['S_tel1'];
    $S_mobile =  $row['S_mobile'];
    $S_address =  $row['S_address']; 
    $S_postal2 =  $row['S_postal2'];
    $S_tel2 =  $row['S_tel2'];
    $S_email =  $row['S_email'];
    $S_employer =  $row['S_employer'];
    $S_emp_address =  $row['S_emp_address'];
    $S_emp_postal =  $row['S_emp_postal'];
    $S_emp_tel =  $row['S_emp_tel'];
    $S_emp_email =  $row['S_emp_email'];

    //emergency
    $E_name =  $row['E_name'];
    $E_relationship =  $row['E_relationship'];
    $E_nationality =  $row['E_nationality'];
    $E_ic =  $row['E_ic'];
    $E_oldic =  $row['E_oldic'];
    $E_bd =  $row['E_bd'];
    $E_bop =  $row['E_bop'];
    $E_race =  $row['E_race'];
    $E_religion =  $row['E_religion'];
    $E_weight =  $row['E_weight'];
    $E_height =  $row['E_height'];
    $E_gender =  $row['E_gender'];
    $E_address =  $row['E_address'];

    //child1
    $c1name =  $row['c1name'];
    $c1bday =  $row['c1bday'];
    $c1age =  $row['c1age'];
    $c1ic =  $row['c1ic'];
    $c1cert =  $row['c1cert'];
    $c1status =  $row['c1status'];
    $c1marriage =  $row['c1marriage'];
    $c1gender =  $row['c1gender'];

 //child2
    $c2name =  $row['c2name'];
    $c2bday =  $row['c2bday'];
    $c2age =  $row['c2age'];
    $c2ic =  $row['c2ic'];
    $c2cert =  $row['c2cert'];
    $c2status =  $row['c2status'];
    $c2marriage =  $row['c2marriage'];
    $c2gender =  $row['c2gender'];

     //child3
    $c3name =  $row['c3name'];
    $c3bday =  $row['c3bday'];
    $c3age =  $row['c3age'];
    $c3ic =  $row['c3ic'];
    $c3cert =  $row['c3cert'];
    $c3status =  $row['c3status'];
    $c3marriage =  $row['c3marriage'];
    $c3gender =  $row['c3gender'];

      //child4
    $c4name =  $row['c4name'];
    $c4bday =  $row['c4bday'];
    $c4age =  $row['c4age'];
    $c4ic =  $row['c4ic'];
    $c4cert =  $row['c4cert'];
    $c4status =  $row['c4status'];
    $c4marriage =  $row['c4marriage'];
    $c4gender =  $row['c4gender'];

  //child5
    $c5name =  $row['c5name'];
    $c5bday =  $row['c5bday'];
    $c5age =  $row['c5age'];
    $c5ic =  $row['c5ic'];
    $c5cert =  $row['c5cert'];
    $c5status =  $row['c5status'];
    $c5marriage =  $row['c5marriage'];
    $c5gender =  $row['c5gender'];

      //child6
    $c6name =  $row['c6name'];
    $c6bday =  $row['c6bday'];
    $c6age =  $row['c6age'];
    $c6ic =  $row['c6ic'];
    $c6cert =  $row['c6cert'];
    $c6status =  $row['c6status'];
    $c6marriage =  $row['c6marriage'];
    $c6gender =  $row['c6gender'];

      //child7
    $c7name =  $row['c7name'];
    $c7bday =  $row['c7bday'];
    $c7age =  $row['c7age'];
    $c7ic =  $row['c7ic'];
    $c7cert =  $row['c7cert'];
    $c7status =  $row['c7status'];
    $c7marriage =  $row['c7marriage'];
    $c7gender =  $row['c7gender'];
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
   <script type="text/javascript">
<script type='text/javascript'>//<![CDATA[ 
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
<style type="text/css">
@media screen and (min-width: 480px) {
    .form-control[disabled]{
background-color:#ffffff;
    }
    .panel-body {
  padding: 5px;
}
}
</style>
 <style type="text/css" media="print">
    @page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

    html
    {
        background-color: #FFFFFF; 
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }
    </style>
    <basefont size="7">
</head>

<body>

   

        <!-- Navigation -->
    




                  <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                             <div class="btn-group pull-right">
                                   <a class="test" href="javascript:;" data-url= "doc.php"><li class="fa fa-print"> PRINT DETAIL</li></a>
                            </div>
                                    <h1 align="center">Staff Information</h1>                   

                                     <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Personal Information
                                    </div>
                                    
                                     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-7">
                                        <div class="form-group"> 
                                            <label class="col-lg-3">Name (as per IC):</label>
                                        <div class="col-lg-9">
                                         <input class="form-control" type="text" name="name" value="<?php echo $user_name; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Nationality</label>
                                            <div class="col-lg-9">
                                             <input class="form-control" type="text" value="<?php echo $user_national; ?>" disabled>
                                            </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="col-lg-3">NRIC</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" type="text" name="user_ic" value="<?php echo $user_ic; ?>" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Old NRIC</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_oldic; ?>" name="user_oldic" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Date of Birth</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" type="text" name="user_bd" value="<?php echo date('d F Y', strtotime($user_bd)); ?>" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Birth of Place</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_bop; ?>" name="user_bop" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Gender</label><br>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_gender; ?>" disabled>
                                        </div>                                
                                        </div>
                                        <input type="hidden" name="date" value="<?php echo time(); ?>" />
                                         <div class="form-group">
                                            <label class="col-lg-3">Race</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_race; ?>" disabled>
                                        </div>  
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Religion</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_religion; ?>" disabled>
                                        </div> 
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Weight</label>

                                             <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_weight; ?>" name="user_height" disabled>
                                        </div> 
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Height</label>

                                        <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_height; ?>" name="user_height" disabled>
                                        </div> 
                                        </div>

                                         <div class="form-group">
                                            <label class="col-lg-3">Marital Status</label><br>

                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_marriage; ?>" name="user_height" disabled>
                                        </div> 
                                        </div>
                                        
                                       
                                    </div>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>


                                <!-- ./children -->

                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Report of Children Information
                                    </div>
                               <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                         
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
                                        <tr style="text-align: center;">
                                          <td> <p><?php echo $c1name; ?></p></td>
                                            <td><p><?php if (!isset($c1bday)) $c1bday = '' ; else echo date('d F Y', strtotime($c1bday))?></p></td>
                                            <td> <p><?php echo $c1age; ?></p></td>
                                            <td> <p><?php echo $c1ic; ?></p></td>
                                           <td> <p><?php echo $c1cert; ?></p></td>
                                            <td> <p><?php echo $c1status; ?></p></td>
                                            <td><p><?php echo $c1marriage; ?></p>
                                            </td>
                                            <td><p><?php echo $c1gender; ?></p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: center;">
                                          <td> <p><?php echo $c2name; ?></p></td>
                                            <td><p><?php if (!isset($c2bday)) $c2bday = '' ; else echo date('d F Y', strtotime($c2bday))?></p></td>
                                            <td> <p><?php echo $c2age; ?></p></td>
                                            <td> <p><?php echo $c2ic; ?></p></td>
                                           <td> <p><?php echo $c2cert; ?></p></td>
                                            <td> <p><?php echo $c2status; ?></p></td>
                                            <td><p><?php echo $c2marriage; ?></p>
                                            </td>
                                            <td><p><?php echo $c2gender; ?></p>
                                            </td>
                                        </tr>
                                       <tr style="text-align: center;">
                                          <td> <p><?php echo $c3name; ?></p></td>
                                            <td><p><?php if (!isset($c3bday)) $c3bday = '' ; else echo date('d F Y', strtotime($c3bday))?></p></td>
                                            <td> <p><?php echo $c3age; ?></p></td>
                                            <td> <p><?php echo $c3ic; ?></p></td>
                                           <td> <p><?php echo $c3cert; ?></p></td>
                                            <td> <p><?php echo $c3status; ?></p></td>
                                            <td><p><?php echo $c3marriage; ?></p>
                                            </td>
                                            <td><p><?php echo $c3gender; ?></p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: center;">
                                          <td> <p><?php echo $c4name; ?></p></td>
                                            <td><p><?php if (!isset($c4bday)) $c4bday = '' ; else echo date('d F Y', strtotime($c4bday))?></p></td>
                                            <td> <p><?php echo $c4age; ?></p></td>
                                            <td> <p><?php echo $c4ic; ?></p></td>
                                           <td> <p><?php echo $c4cert; ?></p></td>
                                            <td> <p><?php echo $c4status; ?></p></td>
                                            <td><p><?php echo $c4marriage; ?></p>
                                            </td>
                                            <td><p><?php echo $c4gender; ?></p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: center;">
                                          <td> <p><?php echo $c5name; ?></p></td>
                                            <td><p><?php if (!isset($c5bday)) $c5bday = '' ; else echo date('d F Y', strtotime($c5bday))?></p></td>
                                            <td> <p><?php echo $c5age; ?></p></td>
                                            <td> <p><?php echo $c5ic; ?></p></td>
                                           <td> <p><?php echo $c5cert; ?></p></td>
                                            <td> <p><?php echo $c5status; ?></p></td>
                                            <td><p><?php echo $c5marriage; ?></p>
                                            </td>
                                            <td><p><?php echo $c5gender; ?></p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: center;">
                                          <td> <p><?php echo $c6name; ?></p></td>
                                            <td><p><?php if (!isset($c6bday)) $c6bday = '' ; else echo date('d F Y', strtotime($c6bday))?></p></td>
                                            <td> <p><?php echo $c6age; ?></p></td>
                                            <td> <p><?php echo $c6ic; ?></p></td>
                                           <td> <p><?php echo $c6cert; ?></p></td>
                                            <td> <p><?php echo $c6status; ?></p></td>
                                            <td><p><?php echo $c6marriage; ?></p>
                                            </td>
                                            <td><p><?php echo $c6gender; ?></p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: center;">
                                          <td> <p><?php echo $c7name; ?></p></td>
                                            <td><p><?php if (!isset($c7bday)) $c7bday = '' ; else echo date('d F Y', strtotime($c7bday))?></p></td>
                                            <td> <p><?php echo $c7age; ?></p></td>
                                            <td> <p><?php echo $c7ic; ?></p></td>
                                           <td> <p><?php echo $c7cert; ?></p></td>
                                            <td> <p><?php echo $c7status; ?></p></td>
                                            <td><p><?php echo $c7marriage; ?></p>
                                            </td>
                                            <td><p><?php echo $c7gender; ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                    </div>
                                </div>

                            </div>
                            <!-- /.row (nested) -->

                        
                        
                                </div>

                                <!-- ./children -->

                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Emergency Information
                                    </div>
                               <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3">Name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $E_name; ?>" name="user_height" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-lg-3">Relationship</label>
                                             <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $E_relationship; ?>" name="E_relationship" disabled>
                                        </div></div>
                                          <div class="form-group">
                                            <label  class="col-lg-3">Nationality</label>
                                             <div class="col-lg-9">
                                                <input class="form-control" value="<?php echo $E_nationality; ?>" name="E_relationship" disabled>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-lg-3">NRIC</label>
                                             <div class="col-lg-9">
                                            <input class="form-control" value="<?php if (!isset($E_ic)) $E_ic = '' ; else echo $E_ic; ?>" name="E_ic" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label  class="col-lg-3">Old NRIC</label>
                                             <div class="col-lg-9">
                                            <input class="form-control" value="<?php if (!isset($E_oldic)) $E_oldic = '' ; else echo $E_oldic; ?>" name="E_oldic" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Date of Birth</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" type="text" name="E_bd" value="<?php if (!isset($E_bd)) $E_bd = '' ; else echo date('d F Y', strtotime($E_bd)) ?>" disabled> 
                                        </div>
                                        </div>
                                         <div class="form-group">
                                        <label class="col-lg-3">Address as per NRIC</label>
                                            <div class="col-lg-9">
                                            <textarea class="form-control" rows="3" name="E_address" disabled><?php echo $E_address; ?></textarea>   
                                        </div>   
                                        </div></div>

                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3">Birth of Place</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $E_bop; ?>" name="E_bop" disabled>
                                        </div>    </div>                                  
                                         <div class="form-group">
                                            <label class="col-lg-3">Race</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $E_race; ?>" name="E_bop" disabled>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Religion</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" value="<?php echo $E_religion; ?>" name="E_bop" disabled>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Weight</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $E_weight; ?>" name="E_weight" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Height</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $E_height; ?>" name="E_height" disabled>
                                        </div> </div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Gender</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" value="<?php echo $E_gender; ?>" name="E_height" disabled>
                                            </div>
                                        </div>
                                        </div> 
                         

                                    </div>
                                </div>

                            </div>
                            <!-- /.row (nested) -->

                        
                                </div>

                              

                                   
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Additional Information
                                    </div>
                                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                        <div class="form-group">
                                            <label class="col-lg-3">Passport No</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_passno; ?>" name="user_passno" disabled>   
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Issue</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_Issue; ?>" name="user_Issue" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Expiricy</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" type="text" name="user_PassExp" value="<?php if (!isset($user_PassExp)) $user_PassExp = '' ; else echo  date('d F Y', strtotime($user_PassExp)) ?>" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">EPF No</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_EPFno; ?>" name="user_EPFno" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">SOCSO No</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_SOCSOno; ?>" name="user_SOCSOno" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Income Tax File No</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_incomeTax; ?>" name="user_incomeTax" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Qualification</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_Qualification; ?>" name="user_Qualification" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-12">Language </label>
                                            <p class="help-block col-lg-12">Spoken</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Malay</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $speak_malay; ?>" disabled>
                                        </div> </div>

                                        <div class="form-group">
                                             <label class="col-lg-3">English</label>
                                              <div class="col-lg-9">
                                              <input class="form-control" value="<?php echo $speak_english; ?>" disabled>
                                        </div></div>

                                         <div class="form-group">
                                            <label class="col-lg-3">Cantonese</label>
                                             <div class="col-lg-9">
                                             <input class="form-control" value="<?php echo $speak_Cantonese; ?>" disabled>
                                        </div></div>

                                        <div class="form-group">
                                            <label class="col-lg-12">Others :</label>
                                            <div class="col-lg-3">
                                            <input class="form-control" value="<?php echo $speak_language; ?>" disabled style="width: 150px;" name="speak_language"></div>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $speak_Others; ?>" disabled>          
                                        </div>
                                        </div>                        
                                           
                                             <p class="help-block col-lg-12">Written</p>
                                              <div class="form-group">
                                            <label class="col-lg-3">Malay</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $write_malay; ?>" disabled>
                                        </div> </div>

                                        <div class="form-group">
                                             <label class="col-lg-3">English</label>
                                              <div class="col-lg-9">
                                              <input class="form-control" value="<?php echo $write_english; ?>" disabled>
                                        </div></div>

                                         <div class="form-group">
                                            <label class="col-lg-3">Cantonese</label>
                                             <div class="col-lg-9">
                                             <input class="form-control" value="<?php echo $write_cantonese; ?>" disabled>
                                        </div></div>

                                        <div class="form-group">
                                            <label class="col-lg-12">Others :</label>
                                            <div class="col-lg-3">
                                            <input class="form-control" value="<?php echo $write_language; ?>" disabled style="width: 150px;" name="speak_language"></div>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $write_others; ?>" disabled>          
                                        </div>
                                        </div>           
                                            
                                        </div>
 
                                </div></div>

                            </div>
                            <!-- /.row (nested) -->

                            
                            </div>


                             <div class="panel panel-default">
                            <div class="panel-heading">Personal Details</div>
                             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <p class="help-block">Job Information</p>                  
                                            <label class="col-lg-3">Position</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_position; ?>"" name="user_position" disabled>
                                            </div></div>
                                        <div class="form-group">                        
                                            <label class="col-lg-3">Department</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $user_department; ?>"" name="user_department" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Join Date</label>
                                            <div class="col-lg-9">
                                           <input class="form-control" type="text" name="JDate" value="<?php if (!isset($JDate)) $JDate = '' ; else echo date('d F Y', strtotime($JDate)) ?>" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Address as per NRIC</label>
                                            <div class="col-lg-9">
                                            <textarea class="form-control" rows="3" name="user_address" disabled><?php echo $user_address; ?></textarea>   
                                        </div></div>
                                           
                                            <label class="col-lg-3">Residence Address</label>
                                             <div class="col-lg-9">
                                            <textarea class="form-control" rows="3" name="user_residence" disabled><?php echo $user_residence; ?></textarea>
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
                                            <input class="form-control" value="<?php echo $tel_1; ?>" name="tel_1" disabled>
                                            <input class="form-control" value="<?php echo $tel_2; ?>" name="tel_2" disabled> 
                                            <input class="form-control" value="<?php echo $user_mobile; ?>" name="user_mobile" disabled>
                                            <input class="form-control" value="<?php echo $user_email; ?>" type="email" name="user_email" value="<?php echo $user_email; ?>" disabled><br><br>
                                        </div>
                                         </div>    
                            <div class="col-sm-12">
                                    <div class="table-responsive"><br><br>
                                    <label>Working Experience</label>
                                    <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            
                                            <th width="30%" style="text-align: center; font-size: 15px;vertical-align: middle;">Company &amp; Location</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Period</th>
                                            <th style="text-align: center;font-size: 15px;vertical-align: middle;">Position Held</th>
                                            <th style="text-align: center;font-size: 15px;">Last Drawn Salary</th>
                                            <th width="30%" style="text-align: center;font-size: 15px;">Reason for Leaving</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;"> 
                                        <tr>
                                           
                                            <td><?php echo $company_detail; ?><br></td>
                                            <td><?php echo $period; ?></td>
                                            <td><?php echo $position; ?></td>
                                            <td> <?php echo $salary; ?></td>
                                            <td><?php echo $reason; ?></td>
                                        </tr>
                                         <tr>
                                           
                                            <td><?php echo $company_detail2; ?></td>
                                            <td> <?php echo $period2; ?><br></td>
                                            <td> <?php echo $position2; ?></td>
                                            <td> <?php echo $salary2; ?></td>
                                            <td><?php echo $reason2; ?></td>
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
                                    <tbody style="text-align: center;">
                                        <tr>
                                           
                                            <td><?php echo $uni; ?><br></td>
                                            <td> <?php echo $uni_period; ?></td>
                                            <td><?php echo $uni_qualification; ?></td>
                                        </tr>
                                         <tr>
                                           
                                            <td><?php echo $uni2; ?><br></td>
                                            <td> <?php echo $uni_period2; ?></td>
                                            <td><?php echo $uni_qualification2; ?></td>
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

                        <div class="panel panel-default">
                            <div class="panel-heading">Spouse Information</div>
                             <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label class="col-lg-3">Name</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_name; ?>" name="S_name" disabled>   
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Relationship</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_relationship; ?>" name="S_relationship" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Nationality</label>
                                            <div class="col-lg-9">
                                                 <input class="form-control" value="<?php echo $S_nationality; ?>" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">NRIC</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_ic; ?>" name="S_ic" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Old NRIC</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_oldic; ?>" name="S_oldic" disabled>
                                        </div></div>
                                    </div>

                                     <div class="col-sm-6"> 
                                         <div class="form-group">
                                            <label class="col-lg-3">Date of Birth</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php if (!isset($S_bd)) $S_bd = '' ; else echo date('d F Y', strtotime($S_bd)) ?>" name="S_bd" type="text" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Weight</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_weight; ?>" name="S_weight" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Height</label>
                                            <div class="col-lg-9">
                                             <input class="form-control" value="<?php echo $S_height; ?>" name="S_height" disabled>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Race</label>
                                            <div class="col-lg-9">
                                                 <input class="form-control" value="<?php echo $S_race; ?>" disabled>
                                           
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Religion</label>
                                            <div class="col-lg-9">
                                                 <input class="form-control" value="<?php echo $S_religion; ?>" disabled>
                                        
                                        </div></div>
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
                                            <label class="col-lg-3">Personal Contact</label>
                                            <div class="col-lg-9">
                                            <textarea class="form-control" rows="3" name="S_contact" disabled><?php echo $S_contact; ?></textarea>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Postal Code</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_postal; ?>" style="width: 150px;" name="S_postal" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Telephone 1</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_tel1; ?>" style="width: 300px;" name="S_tel1" disabled>
                                        </div> </div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Mobile No.</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_mobile; ?>" style="width: 300px;" name="S_mobile" disabled>
                                        </div>  </div>                                  
                                    </div>

                                     <div class="col-sm-6"> 
                                          <div class="form-group">
                                            <label class="col-lg-3">Address as per NRIC</label>
                                            <div class="col-lg-9">
                                            <textarea class="form-control" rows="3" name="S_address" disabled><?php echo $S_address; ?></textarea>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Postal Code</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_postal2; ?>" style="width: 150px;" name="S_postal2" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Telephone 2</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_tel2; ?>" style="width: 300px;" name="S_tel2" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Email</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_email; ?>" style="width: 300px;" name="S_email" disabled>
                                        </div></div>
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
                                            <label class="col-lg-3">Employer</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_employer; ?>" style="width: 60%;" name="S_employer" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Address</label>
                                            <div class="col-lg-9">
                                            <textarea class="form-control" rows="3" style="width: 60%;" name="S_emp_address" disabled><?php echo $S_emp_address; ?></textarea>
                                        </div></div>
                                         <div class="form-group">
                                            <label class="col-lg-3">Postal Code</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_emp_postal; ?>" style="width: 150px;" name="S_emp_postal" disabled>
                                        </div></div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Telephone</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_emp_tel; ?>" style="width: 300px;" name="S_emp_tel" disabled>
                                        </div> </div>
                                        <div class="form-group">
                                            <label class="col-lg-3">Email</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" value="<?php echo $S_emp_email; ?>" style="width: 300px;" name="S_emp_email" disabled>
                                        </div>       </div>                            

                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                      
                        <!-- /.panel-body -->
                             



                        <!-- /.panel-body -->
                <!-- /.col-lg-12 -->

            


            <!-- /.row -->

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


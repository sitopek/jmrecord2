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
        $user_name = $_POST['name'];
        $user_email = $_POST['user_email'];
        $user_bop = $_POST['user_bop'];
        $user_gender = $_POST['user_gender'];
        $user_race = $_POST['user_race'];
        $user_ic = $_POST['user_ic'];

        $user_oldic =  $_POST['user_oldic'];
    $user_bd =  $_POST['user_bd'];
    $user_race =  $_POST['user_race'];
    $user_religion =  $_POST['user_religion'];
    $user_national =  $_POST['user_national'];
    $user_bop =  $_POST['user_bop'];
    $user_gender =  $_POST['user_gender'];
    $regDate =  $_POST['date'];
    $user_weight =  $_POST['user_weight'];
    $user_height =  $_POST['user_height'];
    $user_marriage =  $_POST['user_marriage'];

    //Add info
    $user_passno =  $_POST['user_passno'];
    $user_Issue =  $_POST['user_Issue'];
    $user_PassExp =  $_POST['user_PassExp'];
    $user_EPFno =  $_POST['user_EPFno'];
    $user_SOCSOno =  $_POST['user_SOCSOno'];
    $user_incomeTax =  $_POST['user_incomeTax'];
    $user_Qualification =  $_POST['user_Qualification'];
    $speak_malay =  $_POST['speak_malay'];
    $speak_english =  $_POST['speak_english'];
    $speak_Cantonese =  $_POST['speak_Cantonese'];
    $speak_language =  $_POST['speak_language'];
    $speak_Others =  $_POST['speak_Others'];
    $write_malay =  $_POST['write_malay']; 
    $write_english =  $_POST['write_english'];
    $write_cantonese =  $_POST['write_cantonese'];
    $write_language =  $_POST['write_language'];
    $write_others =  $_POST['write_others']; 

    //Personal Detail
    $user_position =  $_POST['user_position'];
    $user_department =  $_POST['user_department'];
    $JDate =  $_POST['JDate'];
    $user_address =  $_POST['user_address'];
    $tel_1 =  $_POST['tel_1'];
    $tel_2 =  $_POST['tel_2'];
    $user_mobile =  $_POST['user_mobile'];
    $user_residence =  $_POST['user_residence'];
    $company_detail =  $_POST['company_detail'];
    $period =  $_POST['period'];
    $position =  $_POST['position'];
    $reason =  $_POST['reason'];
    $salary =  $_POST['salary'];
    $company_detail2 =  $_POST['company_detail2'];
    $period2 =  $_POST['period2'];
    $position2 =  $_POST['position2'];
    $salary2 =  $_POST['salary2'];
    $reason2 =  $_POST['reason2'];
    $uni =  $_POST['uni'];
    $uni_period =  $_POST['uni_period'];
    $uni_qualification =  $_POST['uni_qualification'];
    $uni2 =  $_POST['uni2'];
    $uni_period2 =  $_POST['uni_period2'];
    $uni_qualification2 =  $_POST['uni_qualification2'];

    //spouse info 23
    $S_name =  $_POST['S_name'];
    $S_relationship =  $_POST['S_relationship'];
    $S_nationality =  $_POST['S_nationality'];
    $S_ic =  $_POST['S_ic'];
    $S_oldic =  $_POST['S_oldic'];
    $S_bd =  $_POST['S_bd'];
    $S_weight =  $_POST['S_weight'];
    $S_height =  $_POST['S_height'];
    $S_race =  $_POST['S_race'];
    $S_religion =  $_POST['S_religion'];
    $S_contact =  $_POST['S_contact'];
    $S_postal =  $_POST['S_postal'];
    $S_tel1 =  $_POST['S_tel1'];
    $S_mobile =  $_POST['S_mobile'];
    $S_address =  $_POST['S_address']; 
    $S_postal2 =  $_POST['S_postal2'];
    $S_tel2 =  $_POST['S_tel2'];
    $S_email =  $_POST['S_email'];
    $S_employer =  $_POST['S_employer'];
    $S_emp_address =  $_POST['S_emp_address'];
    $S_emp_postal =  $_POST['S_emp_postal'];
    $S_emp_tel =  $_POST['S_emp_tel'];
    $S_emp_email =  $_POST['S_emp_email'];

    //emergency
    $E_name =  $_POST['E_name'];
    $E_relationship =  $_POST['E_relationship'];
    $E_nationality =  $_POST['E_nationality'];
    $E_ic =  $_POST['E_ic'];
    $E_oldic =  $_POST['E_oldic'];
    $E_bd =  $_POST['E_bd'];
    $E_bop =  $_POST['E_bop'];
    $E_race =  $_POST['E_race'];
    $E_religion =  $_POST['E_religion'];
    $E_weight =  $_POST['E_weight'];
    $E_height =  $_POST['E_height'];
    $E_gender =  $_POST['E_gender'];
    $E_address =  $_POST['E_address'];

    //child1
    $c1name =  $_POST['c1name'];
    $c1bday =  $_POST['c1bday'];
    $c1age =  $_POST['c1age'];
    $c1ic =  $_POST['c1ic'];
    $c1cert =  $_POST['c1cert'];
    $c1status =  $_POST['c1status'];
    $c1marriage =  $_POST['c1marriage'];
    $c1gender =  $_POST['c1gender'];

 //child2
    $c2name =  $_POST['c2name'];
    $c2bday =  $_POST['c2bday'];
    $c2age =  $_POST['c2age'];
    $c2ic =  $_POST['c2ic'];
    $c2cert =  $_POST['c2cert'];
    $c2status =  $_POST['c2status'];
    $c2marriage =  $_POST['c2marriage'];
    $c2gender =  $_POST['c2gender'];

     //child3
    $c3name =  $_POST['c3name'];
    $c3bday =  $_POST['c3bday'];
    $c3age =  $_POST['c3age'];
    $c3ic =  $_POST['c3ic'];
    $c3cert =  $_POST['c3cert'];
    $c3status =  $_POST['c3status'];
    $c3marriage =  $_POST['c3marriage'];
    $c3gender =  $_POST['c3gender'];

      //child4
    $c4name =  $_POST['c4name'];
    $c4bday =  $_POST['c4bday'];
    $c4age =  $_POST['c4age'];
    $c4ic =  $_POST['c4ic'];
    $c4cert =  $_POST['c4cert'];
    $c4status =  $_POST['c4status'];
    $c4marriage =  $_POST['c4marriage'];
    $c4gender =  $_POST['c4gender'];

  //child5
    $c5name =  $_POST['c5name'];
    $c5bday =  $_POST['c5bday'];
    $c5age =  $_POST['c5age'];
    $c5ic =  $_POST['c5ic'];
    $c5cert =  $_POST['c5cert'];
    $c5status =  $_POST['c5status'];
    $c5marriage =  $_POST['c5marriage'];
    $c5gender =  $_POST['c5gender'];

      //child6
    $c6name =  $_POST['c6name'];
    $c6bday =  $_POST['c6bday'];
    $c6age =  $_POST['c6age'];
    $c6ic =  $_POST['c6ic'];
    $c6cert =  $_POST['c6cert'];
    $c6status =  $_POST['c6status'];
    $c6marriage =  $_POST['c6marriage'];
    $c6gender =  $_POST['c6gender'];

      //child7
    $c7name =  $_POST['c7name'];
    $c7bday =  $_POST['c7bday'];
    $c7age =  $_POST['c7age'];
    $c7ic =  $_POST['c7ic'];
    $c7cert =  $_POST['c7cert'];
    $c7status =  $_POST['c7status'];
    $c7marriage =  $_POST['c7marriage'];
    $c7gender =  $_POST['c7gender'];    
    
    // checking empty fields
    if(empty($user_name) /*|| empty($user_email)*/) {            
        if(empty($user_name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($user_email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }       
} 

    else{

        //updating the table
        $sql = "UPDATE j_staff SET user_name='$user_name', user_email='$user_email', user_bop = '$user_bop', user_gender = '$user_gender', user_race = '$user_race',
        user_ic='$user_ic', 
        user_national='$user_national', 
        user_oldic='$user_oldic', 
        user_bd='$user_bd', 
        user_registered ='$regDate', 
        user_religion='$user_religion', 
        user_weight='$user_weight', 
        user_height='$user_height', 
        user_marriage='$user_marriage', 
        user_passno='$user_passno',
        user_Issue='$user_Issue', 
        user_PassExp='$user_PassExp',
        user_EPFno='$user_EPFno',
        user_SOCSOno='$user_SOCSOno',
        user_incomeTax='$user_incomeTax', 
        user_Qualification='$user_Qualification', 
        speak_malay='$speak_malay',
        speak_english='$speak_english' ,
        speak_Cantonese='$speak_Cantonese', 
        speak_language='$speak_language',
        speak_Others='$speak_Others',
         write_malay='$write_malay', 
         write_english='$write_english', 
         write_cantonese='$write_cantonese', 
         write_language='$write_language', 
         write_others='$write_others', 
    user_position='$user_position', 
    user_department='$user_department', 
    JDate='$JDate',
     user_address='$user_address', 
     tel_1='$tel_1', 
     tel_2='$tel_2', 
     user_mobile='$user_mobile', 
     user_residence='$user_residence', 
     company_detail='$company_detail', 
     period='$period', 
     position='$position', 
     reason='$reason', 
     salary='$salary', 
     company_detail2='$company_detail2', 
     period2='$period2', 
     position2='$position2', 
     salary2='$salary2', 
     reason2='$reason2', 
     uni='$uni', 
     uni_period='$uni_period',
      uni_qualification='$uni_qualification',
       uni2='$uni2', 
       uni_period2='$uni_period2', 
       uni_qualification2='$uni_qualification2', 
   S_name='$S_name', 
   S_relationship='$S_relationship', 
   S_nationality='$S_nationality', 
   S_ic='$S_ic',
   S_oldic='$S_oldic', 
   S_bd='$S_bd', 
   S_weight='$S_weight',  
   S_height='$S_height', 
   S_race='$S_race', 
   S_religion='$S_religion', 
   S_contact='$S_contact', 
   S_postal='$S_postal', 
   S_tel1='$S_tel1', 
   S_mobile='$S_mobile', 
   S_address='$S_address', 
   S_postal2='$S_postal2',
   S_tel2='$S_tel2', 
   S_email='$S_email', 
   S_employer='$S_employer',
   S_emp_address='$S_emp_address',
   S_emp_postal='$S_emp_postal',
   S_emp_tel='$S_emp_tel',
   S_emp_email='$S_emp_email', 
   E_name='$E_name', 
   E_relationship='$E_relationship', 
   E_nationality='$E_nationality' , 
   E_ic='$E_ic' , 
   E_oldic ='$E_oldic', 
   E_bd='$E_bd' , 
   E_bop='$E_bop' , 
   E_race='$E_race', 
   E_religion='$E_religion' , 
   E_weight='$E_weight' , 
   E_height='$E_height', 
   E_gender ='$E_gender', 
   E_address='$E_address',
   c1name='$c1name', 
   c1bday='$c1bday', 
   c1age='$c1age', 
   c1ic='$c1ic', 
   c1cert='$c1cert', 
   c1status='$c1status', 
   c1marriage='$c1marriage', 
   c1gender='$c1gender',
   c2name='$c2name', 
   c2bday='$c2bday', 
   c2age='$c2age', 
   c2ic='$c2ic', 
   c2cert='$c2cert', 
   c2status='$c2status', 
   c2marriage='$c2marriage', 
   c2gender='$c2gender',
   c3name='$c3name', 
   c3bday='$c3bday', 
   c3age='$c3age', 
   c3ic='$c3ic', 
   c3cert='$c3cert', 
   c3status='$c3status', 
   c3marriage='$c3marriage', 
   c3gender='$c3gender',
   c4name='$c4name', 
   c4bday='$c4bday', 
   c4age='$c4age', 
   c4ic='$c4ic', 
   c4cert='$c4cert', 
   c4status='$c4status',
    c4marriage='$c4marriage',
     c4gender='$c4gender',
     c5name='$c5name', 
     c5bday='$c5bday',
      c5age='$c5age', 
      c5ic='$c5ic', 
      c5cert='$c5cert',
       c5status='$c5status', 
       c5marriage='$c5marriage', 
       c5gender='$c5gender',
       c6name='$c6name', 
       c6bday='$c6bday', 
       c6age='$c6age', 
       c6ic='$c6ic', 
       c6cert='$c6cert', 
       c6status='$c6status',
        c6marriage='$c6marriage',
         c6gender='$c6gender',
         c7name='$c7name', 
         c7bday='$c7bday', 
         c7age='$c7age', 
         c7ic='$c7ic', 
         c7cert='$c7cert', 
         c7status='$c7status', 
         c7marriage='$c7marriage',
          c7gender='$c7gender' 
          WHERE ID = $ID";
        $results = $jdb->select($sql);
        
        //redirectig to the display page. In our case, it is index.php
       
        echo '<script type="text/javascript">'; 
        echo 'alert("Update Successful");'; 
        echo 'window.location.href = "staffRecords.php";';
        echo '</script>';
    }
}

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
                        <form role="form" action="formEdit.php" method="post">
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
                                            <input class="form-control" type="text" name="name" value="<?php echo $user_name; ?>  "> 
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                           <select class="form-control" name="user_national">
                                                <option value="Malaysian">Malaysian</option>
                                                <option value="NonMalaysian">Non-Malaysian</option>                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NRIC</label>
                                            <input class="form-control" type="text" name="user_ic" value="<?php echo $user_ic; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Old NRIC</label>
                                            <input class="form-control" value="<?php echo $user_oldic; ?>" name="user_oldic">
                                        </div>
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" type="date" name="user_bd" value="<?php echo $user_bd; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Birth of Place</label>
                                            <input class="form-control" value="<?php echo $user_bop; ?>" name="user_bop">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_gender" value="Male" <?php echo ($user_gender =='Male')?'checked':'' ?>>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_gender" value="Female" <?php echo ($user_gender =='Female')?'checked':'' ?>>Female
                                            </label>                                 
                                        </div>
                                        <input type="hidden" name="date" value="<?php echo time(); ?>" />
                                         <div class="form-group">
                                            <label>Race</label>
                                            <select class="form-control" name="user_race" value="<?php echo $user_race; selected?>">
                                                <option  <?php if($user_race=="Malay") echo 'selected="selected"'; ?> value="Malay">Malay</option>
                                                <option <?php if($user_race=="Indian") echo 'selected="selected"'; ?> value="Indian">Indian</option>
                                                <option <?php if($user_race=="Chinese") echo 'selected="selected"'; ?> value="Chinese">Chinese</option>
                                                <option <?php if($user_race=="Others") echo 'selected="selected"'; ?> value="Others">Others</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Religion</label>
                                            <select class="form-control" name="user_religion" value="<?php echo $user_religion; selected?>">
                                                <option <?php if($user_religion=="Islam") echo 'selected="selected"'; ?> value="Islam">Islam</option>
                                                <option <?php if($user_religion=="Hindu") echo 'selected="selected"'; ?> value="Hindu">Hindu</option>
                                                <option <?php if($user_religion=="Buddha") echo 'selected="selected"'; ?> value="Buddha">Buddha</option>
                                                <option <?php if($user_religion=="Others") echo 'selected="selected"'; ?> value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" value="<?php echo $user_weight; ?>" name="user_weight">
                                        </div>
                                         <div class="form-group">
                                            <label>Height</label>
                                            <input class="form-control" value="<?php echo $user_height; ?>" name="user_height">
                                        </div>

                                         <div class="form-group">
                                            <label>Marital Status</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_marriage" value="Married" <?php echo ($user_marriage =='Married')?'checked':'' ?>>Married
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="user_marriage" value="Single" <?php echo ($user_marriage =='Single')?'checked':'' ?>>Single
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
                                          <td> <input class="form-control" name="c1name" value="<?php echo $c1name; ?>"></td>
                                            <td><input class="form-control" type="date" name="c1bday" value="<?php echo $c1bday; ?>"></td>
                                            <td> <input class="form-control" value="<?php echo $c1age; ?>" name="c1age"></td>
                                            <td> <input class="form-control" value="<?php echo $c1ic; ?>" name="c1ic"></td>
                                           <td> <input class="form-control" value="<?php echo $c1cert; ?>" name="c1cert"></td>
                                            <td><select class="form-control" name="c1status" value="<?php echo $c1status; selected?>">    
                                                <option <?php if($c1status=="Minor") echo 'selected="selected"'; ?> value="Minor">Minor</option>
                                                <option <?php if($c1status=="Student") echo 'selected="selected"'; ?> value="Student">Student</option>
                                                <option <?php if($c1status=="Working") echo 'selected="selected"'; ?> value="Working">Working</option>
                                                <option <?php if($c1status=="Unemployed") echo 'selected="selected"'; ?> value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c1marriage" value="<?php echo $c1marriage; selected?>">
                                                <option <?php if($c1marriage=="Married") echo 'selected="selected"'; ?> value="Married">Married</option>
                                                <option <?php if($c1marriage=="Single") echo 'selected="selected"'; ?> value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c1gender" value="<?php echo $c1gender; selected?>">
                                                <option <?php if($c1gender=="Male") echo 'selected="selected"'; ?> value="Male">Male</option>
                                                <option  <?php if($c1gender=="Female") echo 'selected="selected"'; ?> value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                         <tr>
                                             <td> <input class="form-control" value="<?php echo $c2name; ?>" name="c2name"></td>
                                            <td><input class="form-control" type="date" name="c2bday" value="<?php echo $c2bday; ?>"></td>
                                            <td> <input class="form-control" value="<?php echo $c2age; ?>" name="c2age"></td>
                                            <td> <input class="form-control" value="<?php echo $c2ic; ?>" name="c2ic"></td>
                                           <td> <input class="form-control" value="<?php echo $c2cert; ?>" name="c2cert"></td>
                                            <td><select class="form-control" name="c2status" value="<?php echo $c2status; selected?>">
                                                <option <?php if($c2status=="Minor") echo 'selected="selected"'; ?> value="Minor">Minor</option>
                                                <option <?php if($c2status=="Student") echo 'selected="selected"'; ?> value="Student">Student</option>
                                                <option <?php if($c2status=="Working") echo 'selected="selected"'; ?> value="Working">Working</option>
                                                <option <?php if($c2status=="Unemployed") echo 'selected="selected"'; ?> value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c2marriage" value="<?php echo $c2marriage; selected?>">
                                                <option <?php if($c2marriage=="Married") echo 'selected="selected"'; ?> value="Married">Married</option>
                                                <option <?php if($c2marriage=="Single") echo 'selected="selected"'; ?> value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c2gender" value="<?php echo $c2gender; selected?>">
                                                <option <?php if($c2gender=="Male") echo 'selected="selected"'; ?> value="Male">Male</option>
                                                <option <?php if($c2gender=="Female") echo 'selected="selected"'; ?> value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" value="<?php echo $c3name; ?>" name="c3name"></td>
                                            <td><input class="form-control" type="date" name="c3bday" value="<?php echo $c3bday; ?>"></td>
                                            <td> <input class="form-control" value="<?php echo $c3age; ?>" name="c3age"></td>
                                            <td> <input class="form-control" value="<?php echo $c3ic; ?>" name="c3ic"></td>
                                           <td> <input class="form-control" value="<?php echo $c3cert; ?>" name="c3cert"></td>
                                            <td><select class="form-control" name="c3status" value="<?php echo $c3status; selected?>"
>
                                                <option <?php if($c3status=="Minor") echo 'selected="selected"'; ?> value="Minor">Minor</option>
                                                <option <?php if($c3status=="Student") echo 'selected="selected"'; ?> value="Student">Student</option>
                                                <option <?php if($c3status=="Working") echo 'selected="selected"'; ?> value="Working">Working</option>
                                                <option <?php if($c3status=="Unemployed") echo 'selected="selected"'; ?> value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c3marriage" value="<?php echo $c3marriage; selected?>"
>
                                                <option <?php if($c3marriage=="Married") echo 'selected="selected"'; ?> value="Married">Married</option>
                                                <option <?php if($c3marriage=="Single") echo 'selected="selected"'; ?> value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c3gender" value="<?php echo $c3gender; selected?>">
                                                <option <?php if($c3gender=="Male") echo 'selected="selected"'; ?> value="Male">Male</option>
                                                <option <?php if($c3gender=="Female") echo 'selected="selected"'; ?> value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" value="<?php echo $c4name; ?>" name="c4name"></td>
                                            <td><input class="form-control" type="date" name="c4bday" value="<?php echo $c4bday; ?>"></td>
                                            <td> <input class="form-control" value="<?php echo $c4age; ?>" name="c4age"></td>
                                            <td> <input class="form-control" value="<?php echo $c4ic; ?>" name="c4ic"></td>
                                           <td> <input class="form-control" value="<?php echo $c4cert; ?>" name="c4cert"></td>
                                            <td><select class="form-control" name="c4status" value="<?php echo $c4status; selected?>">
                                                <option <?php if($c4status=="Minor") echo 'selected="selected"'; ?> value="Minor">Minor</option>
                                                <option <?php if($c4status=="Student") echo 'selected="selected"'; ?> value="Student">Student</option>
                                                <option <?php if($c4status=="Working") echo 'selected="selected"'; ?> value="Working">Working</option>
                                                <option <?php if($c4status=="Unemployed") echo 'selected="selected"'; ?> value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c4marriage" value="<?php echo $c4marriage; selected?>">
                                                <option <?php if($c4marriage=="Married") echo 'selected="selected"'; ?> value="Married">Married</option>
                                                <option <?php if($c4marriage=="Single") echo 'selected="selected"'; ?> value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c4gender" value="<?php echo $c4gender; selected?>">
                                                <option <?php if($c4gender=="Male") echo 'selected="selected"'; ?> value="Male">Male</option>
                                                <option <?php if($c4gender=="Female") echo 'selected="selected"'; ?> value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" value="<?php echo $c5name; ?>" name="c5name"></td>
                                            <td><input class="form-control" type="date" name="c5bday" value="<?php echo $c5bday; ?>"></td>
                                            <td> <input class="form-control" value="<?php echo $c5age; ?>" name="c5age"></td>
                                            <td> <input class="form-control" value="<?php echo $c5ic; ?>" name="c5ic"></td>
                                           <td> <input class="form-control" value="<?php echo $c5cert; ?>" name="c5cert"></td>
                                            <td><select class="form-control" name="c5status" value="<?php echo $c5status; selected?>">
                                                <option <?php if($c5status=="Minor") echo 'selected="selected"'; ?> value="Minor">Minor</option>
                                                <option <?php if($c5status=="Student") echo 'selected="selected"'; ?> value="Student">Student</option>
                                                <option <?php if($c5status=="Working") echo 'selected="selected"'; ?> value="Working">Working</option>
                                                <option <?php if($c5status=="Unemployed") echo 'selected="selected"'; ?> value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c5marriage" value="<?php echo $c5marriage; selected?>">
                                                <option <?php if($c5marriage=="Married") echo 'selected="selected"'; ?> value="Married">Married</option>
                                                <option <?php if($c5marriage=="Single") echo 'selected="selected"'; ?> value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c5gender" value="<?php echo $c5gender; selected?>">
                                                <option <?php if($c5gender=="Male") echo 'selected="selected"'; ?> value="Male">Male</option>
                                                <option <?php if($c5gender=="Female") echo 'selected="selected"'; ?> value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" value="<?php echo $c6name; ?>" name="c6name"></td>
                                            <td><input class="form-control" type="date" name="c6bday" value="<?php echo $c6bday; ?>"></td>
                                            <td> <input class="form-control" value="<?php echo $c6age; ?>" name="c6age"></td>
                                            <td> <input class="form-control" value="<?php echo $c6ic; ?>" name="c6ic"></td>
                                           <td> <input class="form-control" value="<?php echo $c6cert; ?>" name="c6cert"></td>
                                            <td><select class="form-control" name="c6status" value="<?php echo $c6status; selected?>">
                                                <option <?php if($c6status=="Minor") echo 'selected="selected"'; ?> value="Minor">Minor</option>
                                                <option <?php if($c6status=="Student") echo 'selected="selected"'; ?> value="Student">Student</option>
                                                <option <?php if($c6status=="Working") echo 'selected="selected"'; ?> value="Working">Working</option>
                                                <option <?php if($c6status=="Unemployed") echo 'selected="selected"'; ?> value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c6marriage" value="<?php echo $c6marriage; selected?>">
                                                <option <?php if($c6marriage=="Married") echo 'selected="selected"'; ?> value="Married">Married</option>
                                                <option <?php if($c6marriage=="Single") echo 'selected="selected"'; ?> value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c6gender" value="<?php echo $c6gender; selected?>">
                                                <option <?php if($c6gender=="Male") echo 'selected="selected"'; ?> value="Male">Male</option>
                                                <option <?php if($c6gender=="Female") echo 'selected="selected"'; ?> value="Female">Female</option>
                                            </select></td>
                                        </tr>
                                          <tr>
                                            <td> <input class="form-control" value="<?php echo $c7name; ?>" name="c7name"></td>
                                            <td><input class="form-control" type="date" name="c7bday" value="<?php echo $c7bday; ?>"></td>
                                            <td> <input class="form-control" value="<?php echo $c7age; ?>" name="c7age"></td>
                                            <td> <input class="form-control" value="<?php echo $c7ic; ?>" name="c7ic"></td>
                                           <td> <input class="form-control" value="<?php echo $c7cert; ?>" name="c7cert"></td>
                                            <td><select class="form-control" name="c7status" value="<?php echo $c7status; selected?>">
                                                <option <?php if($c7status=="Minor") echo 'selected="selected"'; ?> value="Minor">Minor</option>
                                                <option <?php if($c7status=="Student") echo 'selected="selected"'; ?> value="Student">Student</option>
                                                <option <?php if($c7status=="Working") echo 'selected="selected"'; ?> value="Working">Working</option>
                                                <option <?php if($c7status=="Unemployed") echo 'selected="selected"'; ?> value="Unemployed">Unemployed</option>
                                            </select></td>
                                            <td><select class="form-control" name="c7marriage" value="<?php echo $c7marriage; selected?>">
                                                <option <?php if($c7marriage=="Married") echo 'selected="selected"'; ?> value="Married">Married</option>
                                                <option <?php if($c7marriage=="Single") echo 'selected="selected"'; ?> value="Single">Single</option>
                                            </select></td>
                                            <td><select class="form-control" name="c7gender" value="<?php echo $c7gender; selected?>">
                                                <option <?php if($c7gender=="Male") echo 'selected="selected"'; ?> value="Male">Male</option>
                                                <option <?php if($c7gender=="Female") echo 'selected="selected"'; ?> value="Female">Female</option>
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
                                            <input class="form-control" value="<?php echo $E_name; ?>" name="E_name">   
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship</label>
                                            <input class="form-control" value="<?php echo $E_relationship; ?>" name="E_relationship">
                                        </div>
                                          <div class="form-group">
                                            <label>Nationality</label>
                                            <select class="form-control" name="E_nationality" value="<?php echo $E_nationality; selected?>">
                                                <option <?php if($E_nationality=="Malaysian") echo 'selected="selected"'; ?> value="Malaysian">Malaysian</option>
                                                <option <?php if($E_nationality=="NonMalaysian") echo 'selected="selected"'; ?> value="NonMalaysian">Non-Malaysian</option>                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NRIC</label>
                                            <input class="form-control" value="<?php echo $E_ic; ?>" name="E_ic">
                                        </div>
                                         <div class="form-group">
                                            <label>Old NRIC</label>
                                            <input class="form-control" value="<?php echo $E_oldic; ?>" name="E_oldic">
                                        </div>
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" type="date" name="E_bd" value="<?php echo $E_bd; ?>">
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Birth of Place</label>
                                            <input class="form-control" value="<?php echo $E_bop; ?>" name="E_bop">
                                        </div>                                      
                                         <div class="form-group">
                                            <label>Race</label>
                                            <select class="form-control" name="E_race" value="<?php echo $E_race; selected?>">
                                                <option <?php if($E_race=="Malay") echo 'selected="selected"'; ?> value="Malay">Malay</option>
                                                <option <?php if($E_race=="Indian") echo 'selected="selected"'; ?> value="Indian">Indian</option>
                                                <option <?php if($E_race=="Chinese") echo 'selected="selected"'; ?> value="Chinese">Chinese</option>
                                                <option <?php if($E_race=="Others") echo 'selected="selected"'; ?> value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Religion</label>
                                            <select class="form-control" name="E_religion" value="<?php echo $E_religion; selected?>">
                                                <option <?php if($E_religion=="Islam") echo 'selected="selected"'; ?> value="Islam">Islam</option>
                                                <option <?php if($E_religion=="Hindu") echo 'selected="selected"'; ?> value="Hindu">Hindu</option>
                                                <option <?php if($E_religion=="Buddha") echo 'selected="selected"'; ?> value="Buddha">Buddha</option>
                                                <option <?php if($E_religion=="Others") echo 'selected="selected"'; ?> value="Others">Others</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" value="<?php echo $E_weight; ?>" name="E_weight">
                                        </div>
                                         <div class="form-group">
                                            <label>Height</label>
                                            <input class="form-control" value="<?php echo $E_height; ?>" name="E_height">
                                        </div> 
                                         <div class="form-group">
                                            <label>Gender</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="E_gender" value="Male" <?php echo ($E_gender =='Male')?'checked':'' ?>>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="E_gender" value="Female" <?php echo ($E_gender =='Female')?'checked':'' ?>>Female
                                            </label>
                                        </div>
                                        </div>  
                                        <div class="col-sm-8">
                                         <div class="form-group">
                                            <label>Address as per NRIC</label>
                                            <textarea class="form-control" rows="3" name="E_address"><?php echo $E_address; ?></textarea>   
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
                                            <input class="form-control" value="<?php echo $user_passno; ?>" name="user_passno">   
                                        </div>
                                        <div class="form-group">
                                            <label>Issue</label>
                                            <input class="form-control" value="<?php echo $user_Issue; ?>" name="user_Issue">
                                        </div>
                                        <div class="form-group">
                                            <label>Expiricy</label>
                                            <input class="form-control" type="date" name="user_PassExp" value="<?php echo $user_PassExp; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>EPF No</label>
                                            <input class="form-control" value="<?php echo $user_EPFno; ?>" name="user_EPFno">
                                        </div>
                                         <div class="form-group">
                                            <label>SOCSO No</label>
                                            <input class="form-control" value="<?php echo $user_SOCSOno; ?>" name="user_SOCSOno">
                                        </div>
                                         <div class="form-group">
                                            <label>Income Tax File No</label>
                                            <input class="form-control" value="<?php echo $user_incomeTax; ?>" name="user_incomeTax">
                                        </div>
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <input class="form-control" value="<?php echo $user_Qualification; ?>" name="user_Qualification">
                                        </div>
                                        <div class="form-group">
                                            <label>Language (Please Tick)</label><br>
                                             <p class="help-block">Spoken</p>
                                             <label>Malay</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="speak_malay" value="Well" <?php echo ($speak_malay =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_malay" value="Good" <?php echo ($speak_malay =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_malay" value="Fair" <?php echo ($speak_malay =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_malay" value="Bad" <?php echo ($speak_malay =='Bad')?'checked':'' ?>>Bad
                                            </label><br>
                                             <label>English</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="speak_english" value="Well" <?php echo ($speak_english =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_english" value="Good" <?php echo ($speak_english =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_english" value="Fair" <?php echo ($speak_english =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_english" value="Bad" <?php echo ($speak_english =='Bad')?'checked':'' ?>>Bad
                                            </label><br>
                                            <label>Cantonese</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="speak_Cantonese" value="Well" <?php echo ($speak_Cantonese =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Cantonese" value="Good" <?php echo ($speak_Cantonese =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Cantonese" value="Fair" <?php echo ($speak_Cantonese =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Cantonese" value="Bad" <?php echo ($speak_Cantonese =='Bad')?'checked':'' ?>>Bad
                                            </label><br>
                                            <label>Others :<input class="form-control" value="<?php echo $speak_language; ?>" style="width: 150px;" name="speak_language"></label>                                  
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Well" <?php echo ($speak_Others =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Good" <?php echo ($speak_Others =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Fair" <?php echo ($speak_Others =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="speak_Others" value="Bad" <?php echo ($speak_Others =='Bad')?'checked':'' ?>>Bad
                                            </label> <br><br>
                                             <p class="help-block">Written</p>
                                             <label>Malay</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="write_malay" value="Well" <?php echo ($write_malay =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_malay" value="Good" <?php echo ($write_malay =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_malay" value="Fair" <?php echo ($write_malay =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_malay" value="Bad" <?php echo ($write_malay =='Bad')?'checked':'' ?>>Bad
                                            </label><br>
                                             <label>English</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="write_english" value="Well" <?php echo ($write_english =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_english" value="Good" <?php echo ($write_english =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_english" value="Fair" <?php echo ($write_english =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_english" value="Bad" <?php echo ($write_english =='Bad')?'checked':'' ?>>Bad
                                            </label><br>
                                            <label>Cantonese</label>
                                            <label class="radio-inline">&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="write_cantonese" value="Well" <?php echo ($write_cantonese =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_cantonese" value="Good" <?php echo ($write_cantonese =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_cantonese" value="Fair" <?php echo ($write_cantonese =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_cantonese" value="Bad" <?php echo ($write_cantonese =='Bad')?'checked':'' ?>>Bad
                                            </label><br>
                                            <label>Others :<input class="form-control" value="<?php echo $write_language; ?>" style="width: 150px;" name="write_language"></label> 
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Well" <?php echo ($write_others =='Well')?'checked':'' ?>>Well
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Good" <?php echo ($write_others =='Good')?'checked':'' ?>>Good
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Fair" <?php echo ($write_others =='Fair')?'checked':'' ?>>Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="write_others" value="Bad" <?php echo ($write_others =='Bad')?'checked':'' ?>>Bad
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
                                            <input class="form-control" value="<?php echo $user_position; ?>"" name="user_position">
                                            </div>
                                              <div class="form-group">                        
                                            <label>Department</label>
                                            <input class="form-control" value="<?php echo $user_department; ?>"" name="user_department">
                                        </div>
                                        <div class="form-group">
                                            <label>Join Date</label>
                                           <input class="form-control" type="date" name="JDate" value="<?php echo $JDate; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Address as per NRIC</label>
                                            <textarea class="form-control" rows="3" name="user_address"><?php echo $user_address; ?></textarea>   
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
                                            <input class="form-control" value="<?php echo $tel_1; ?>" name="tel_1">
                                            <input class="form-control" value="<?php echo $tel_2; ?>" name="tel_2"> 
                                            <input class="form-control" value="<?php echo $user_mobile; ?>" name="user_mobile">
                                            <input class="form-control" value="<?php echo $user_email; ?>" type="email" name="user_email" value="<?php echo $user_email; ?>"><br><br>
                                        </div>
                                       
                                         <div class="form-group">
                                            <label>Residence Address</label>
                                            <textarea class="form-control" rows="3" name="user_residence"><?php echo $user_residence; ?></textarea>
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
                                            <th style="text-align: center;font-size: 15px;">Last Drawn Salary</th>
                                            <th width="30%" style="text-align: center;font-size: 15px;">Reason for Leaving</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                            <td><textarea class="form-control" rows="3" name="company_detail"><?php echo $company_detail; ?></textarea></td>
                                            <td> <input class="form-control" value="<?php echo $period; ?>" name="period"></td>
                                            <td> <input class="form-control" value="<?php echo $position; ?>" name="position"></td>
                                            <td> <input class="form-control" value="<?php echo $salary; ?>" name="salary"></td>
                                            <td><textarea class="form-control" rows="3" name="reason"><?php echo $reason; ?></textarea></td>
                                        </tr>
                                         <tr>
                                           
                                            <td><textarea class="form-control" rows="3" name="company_detail2"><?php echo $company_detail2; ?></textarea></td>
                                            <td> <input class="form-control" value="<?php echo $period2; ?>" name="period2"></td>
                                            <td> <input class="form-control" value="<?php echo $position2; ?>" name="position2"></td>
                                            <td> <input class="form-control" value="<?php echo $salary2; ?>" name="salary2"></td>
                                            <td><textarea class="form-control" rows="3" name="reason2"><?php echo $reason2; ?></textarea></td>
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
                                           
                                            <td><textarea class="form-control" rows="3" name="uni"><?php echo $uni; ?></textarea></td>
                                            <td> <input class="form-control" value="<?php echo $uni_period; ?>" name="uni_period"></td>
                                            <td><textarea class="form-control" rows="3" name="uni_qualification"><?php echo $uni_qualification; ?></textarea></td>
                                        </tr>
                                         <tr>
                                           
                                            <td><textarea class="form-control" rows="3" name="uni2"><?php echo $uni2; ?></textarea></td>
                                            <td> <input class="form-control" value="<?php echo $uni_period2; ?>" name="uni_period2"></td>
                                            <td><textarea class="form-control" rows="3" name="uni_qualification2"><?php echo $uni_qualification2; ?></textarea></td>
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
                                            <input class="form-control" value="<?php echo $S_name; ?>" name="S_name">   
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship</label>
                                            <input class="form-control" value="<?php echo $S_relationship; ?>" name="S_relationship">
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                             <select class="form-control" name="S_nationality" value="<?php echo $S_nationality; selected?>">
                                                <option <?php if($S_nationality=="Malaysian") echo 'selected="selected"'; ?> value="Malaysian">Malaysian</option>
                                                <option <?php if($S_nationality=="NonMalaysian") echo 'selected="selected"'; ?> value="NonMalaysian">Non-Malaysian</option>                    
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>NRIC</label>
                                            <input class="form-control" value="<?php echo $S_ic; ?>" name="S_ic">
                                        </div>
                                        <div class="form-group">
                                            <label>Old NRIC</label>
                                            <input class="form-control" value="<?php echo $S_oldic; ?>" name="S_oldic">
                                        </div>
                                    </div>

                                     <div class="col-sm-6"> 
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" value="<?php echo $S_bd; ?>" name="S_bd" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" value="<?php echo $S_weight; ?>" name="S_weight">
                                        </div>
                                        <div class="form-group">
                                            <label>Height</label>
                                             <input class="form-control" value="<?php echo $S_height; ?>" name="S_height">
                                        </div>
                                         <div class="form-group">
                                            <label>Race</label>
                                            <select class="form-control" name="S_race" value="<?php echo $S_race; selected?>">
                                                <option <?php if($S_race=="Malay") echo 'selected="selected"'; ?> value="Malay">Malay</option>
                                                <option <?php if($S_race=="Indian") echo 'selected="selected"'; ?> value="Indian">Indian</option>
                                                <option <?php if($S_race=="Chinese") echo 'selected="selected"'; ?> value="Chinese">Chinese</option>
                                                <option <?php if($S_race=="Others") echo 'selected="selected"'; ?> value="Others">Others</option>
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Religion</label>
                                            <select class="form-control" name="S_religion" value="<?php echo $S_religion; selected?>">
                                                <option <?php if($S_religion=="Islam") echo 'selected="selected"'; ?> value="Islam">Islam</option>
                                                <option <?php if($S_religion=="Hindu") echo 'selected="selected"'; ?> value="Hindu">Hindu</option>
                                                <option <?php if($S_religion=="Buddha") echo 'selected="selected"'; ?> value="Buddha">Buddha</option>
                                                <option <?php if($S_religion=="Others") echo 'selected="selected"'; ?> value="Others">Others</option>
                                                
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
                                            <textarea class="form-control" rows="3" name="S_contact"><?php echo $S_contact; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control" value="<?php echo $S_postal; ?>" style="width: 150px;" name="S_postal">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone 1</label>
                                            <input class="form-control" value="<?php echo $S_tel1; ?>" style="width: 300px;" name="S_tel1">
                                        </div> 
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" value="<?php echo $S_mobile; ?>" style="width: 300px;" name="S_mobile">
                                        </div>                                    
                                    </div>

                                     <div class="col-sm-6"> 
                                          <div class="form-group">
                                            <label>Address as per NRIC</label>
                                            <textarea class="form-control" rows="3" name="S_address"><?php echo $S_address; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control" value="<?php echo $S_postal2; ?>" style="width: 150px;" name="S_postal2">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone 2</label>
                                            <input class="form-control" value="<?php echo $S_tel2; ?>" style="width: 300px;" name="S_tel2">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="<?php echo $S_email; ?>" style="width: 300px;" name="S_email">
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
                                            <input class="form-control" value="<?php echo $S_employer; ?>" style="width: 60%;" name="S_employer">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" style="width: 60%;" name="S_emp_address"><?php echo $S_emp_address; ?></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control" value="<?php echo $S_emp_postal; ?>" style="width: 150px;" name="S_emp_postal">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" value="<?php echo $S_emp_tel; ?>" style="width: 300px;" name="S_emp_tel">
                                        </div> 
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="<?php echo $S_emp_email; ?>" style="width: 300px;" name="S_emp_email">
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
           <input type="hidden" name="ID" value="<?php echo $_GET['ID'];?>">
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


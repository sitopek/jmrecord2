    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "joombo");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }   
    // Escape user inputs for security

    //personal info
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $user_ic = mysqli_real_escape_string($link, $_REQUEST['user_ic']);
    $user_oldic = mysqli_real_escape_string($link, $_REQUEST['user_oldic']);
    $date = mysqli_real_escape_string($link, $_REQUEST['bday']);
    $user_race = mysqli_real_escape_string($link, $_REQUEST['user_race']);
    $user_religion = mysqli_real_escape_string($link, $_REQUEST['user_religion']);
    $user_national = mysqli_real_escape_string($link, $_REQUEST['user_national']);
    $user_bop = mysqli_real_escape_string($link, $_REQUEST['user_bop']);
    $user_gender = mysqli_real_escape_string($link, $_REQUEST['user_gender']);
    $regDate = mysql_real_escape_string($_POST['date']);
    $user_weight = mysqli_real_escape_string($link, $_REQUEST['user_weight']);
    $user_height = mysqli_real_escape_string($link, $_REQUEST['user_height']);
    $user_marriage = mysqli_real_escape_string($link, $_REQUEST['user_marriage']);

    //Add info
    $user_passno = mysqli_real_escape_string($link, $_REQUEST['user_passno']);
    $user_Issue = mysqli_real_escape_string($link, $_REQUEST['user_Issue']);
    $user_PassExp = mysqli_real_escape_string($link, $_REQUEST['user_PassExp']);
    $user_EPFno = mysqli_real_escape_string($link, $_REQUEST['user_EPFno']);
    $user_SOCSOno = mysqli_real_escape_string($link, $_REQUEST['user_SOCSOno']);
    $user_incomeTax = mysqli_real_escape_string($link, $_REQUEST['user_incomeTax']);
    $user_Qualification = mysqli_real_escape_string($link, $_REQUEST['user_Qualification']);
    $speak_malay = mysqli_real_escape_string($link, $_REQUEST['speak_malay']);
    $speak_english = mysqli_real_escape_string($link, $_REQUEST['speak_english']);
    $speak_Cantonese = mysqli_real_escape_string($link, $_REQUEST['speak_Cantonese']);
    $speak_language = mysqli_real_escape_string($link, $_REQUEST['speak_language']);
    $speak_Others = mysqli_real_escape_string($link, $_REQUEST['speak_Others']);
    $write_malay = mysqli_real_escape_string($link, $_REQUEST['write_malay']); 
    $write_english = mysqli_real_escape_string($link, $_REQUEST['write_english']);
    $write_cantonese = mysqli_real_escape_string($link, $_REQUEST['write_cantonese']);
    $write_language = mysqli_real_escape_string($link, $_REQUEST['write_language']);
    $write_others = mysqli_real_escape_string($link, $_REQUEST['write_others']); 

    //Personal Detail
    $user_position = mysqli_real_escape_string($link, $_REQUEST['user_position']);
    $user_department = mysqli_real_escape_string($link, $_REQUEST['user_department']);
    $JDate = mysqli_real_escape_string($link, $_REQUEST['JDate']);
    $user_address = mysqli_real_escape_string($link, $_REQUEST['user_address']);
    $tel_1 = mysqli_real_escape_string($link, $_REQUEST['tel_1']);
    $tel_2 = mysqli_real_escape_string($link, $_REQUEST['tel_2']);
    $user_mobile = mysqli_real_escape_string($link, $_REQUEST['user_mobile']);
    $user_email = mysqli_real_escape_string($link, $_REQUEST['user_email']);
    $user_residence = mysqli_real_escape_string($link, $_REQUEST['user_residence']);
    $company_detail = mysqli_real_escape_string($link, $_REQUEST['company_detail']);
    $period = mysqli_real_escape_string($link, $_REQUEST['period']);
    $position = mysqli_real_escape_string($link, $_REQUEST['position']);
    $reason = mysqli_real_escape_string($link, $_REQUEST['reason']);
    $salary = mysqli_real_escape_string($link, $_REQUEST['salary']);
    $company_detail2 = mysqli_real_escape_string($link, $_REQUEST['company_detail2']);
    $period2 = mysqli_real_escape_string($link, $_REQUEST['period2']);
    $position2 = mysqli_real_escape_string($link, $_REQUEST['position2']);
    $salary2 = mysqli_real_escape_string($link, $_REQUEST['salary2']);
    $reason2 = mysqli_real_escape_string($link, $_REQUEST['reason2']);
    $uni = mysqli_real_escape_string($link, $_REQUEST['uni']);
    $uni_period = mysqli_real_escape_string($link, $_REQUEST['uni_period']);
    $uni_qualification = mysqli_real_escape_string($link, $_REQUEST['uni_qualification']);
    $uni2 = mysqli_real_escape_string($link, $_REQUEST['uni2']);
    $uni_period2 = mysqli_real_escape_string($link, $_REQUEST['uni_period2']);
    $uni_qualification2 = mysqli_real_escape_string($link, $_REQUEST['uni_qualification2']);

    //spouse info 23
    $S_name = mysqli_real_escape_string($link, $_REQUEST['S_name']);
    $S_relationship = mysqli_real_escape_string($link, $_REQUEST['S_relationship']);
    $S_nationality = mysqli_real_escape_string($link, $_REQUEST['S_nationality']);
    $S_ic = mysqli_real_escape_string($link, $_REQUEST['S_ic']);
    $S_oldic = mysqli_real_escape_string($link, $_REQUEST['S_oldic']);
    $S_bd = mysqli_real_escape_string($link, $_REQUEST['S_bd']);
    $S_weight = mysqli_real_escape_string($link, $_REQUEST['S_weight']);
    $S_height = mysqli_real_escape_string($link, $_REQUEST['S_height']);
    $S_race = mysqli_real_escape_string($link, $_REQUEST['S_race']);
    $S_religion = mysqli_real_escape_string($link, $_REQUEST['S_religion']);
    $S_contact = mysqli_real_escape_string($link, $_REQUEST['S_contact']);
    $S_postal = mysqli_real_escape_string($link, $_REQUEST['S_postal']);
    $S_tel1 = mysqli_real_escape_string($link, $_REQUEST['S_tel1']);
    $S_mobile = mysqli_real_escape_string($link, $_REQUEST['S_mobile']);
    $S_address = mysqli_real_escape_string($link, $_REQUEST['S_address']); 
    $S_postal2 = mysqli_real_escape_string($link, $_REQUEST['S_postal2']);
    $S_tel2 = mysqli_real_escape_string($link, $_REQUEST['S_tel2']);
    $S_email = mysqli_real_escape_string($link, $_REQUEST['S_email']);
    $S_employer = mysqli_real_escape_string($link, $_REQUEST['S_employer']);
    $S_emp_address = mysqli_real_escape_string($link, $_REQUEST['S_emp_address']);
    $S_emp_postal = mysqli_real_escape_string($link, $_REQUEST['S_emp_postal']);
    $S_emp_tel = mysqli_real_escape_string($link, $_REQUEST['S_emp_tel']);
    $S_emp_email = mysqli_real_escape_string($link, $_REQUEST['S_emp_email']);

    //emergency
    $E_name = mysqli_real_escape_string($link, $_REQUEST['E_name']);
    $E_relationship = mysqli_real_escape_string($link, $_REQUEST['E_relationship']);
    $E_nationality = mysqli_real_escape_string($link, $_REQUEST['E_nationality']);
    $E_ic = mysqli_real_escape_string($link, $_REQUEST['E_ic']);
    $E_oldic = mysqli_real_escape_string($link, $_REQUEST['E_oldic']);
    $E_bd = mysqli_real_escape_string($link, $_REQUEST['E_bd']);
    $E_bop = mysqli_real_escape_string($link, $_REQUEST['E_bop']);
    $E_race = mysqli_real_escape_string($link, $_REQUEST['E_race']);
    $E_religion = mysqli_real_escape_string($link, $_REQUEST['E_religion']);
    $E_weight = mysqli_real_escape_string($link, $_REQUEST['E_weight']);
    $E_height = mysqli_real_escape_string($link, $_REQUEST['E_height']);
    $E_gender = mysqli_real_escape_string($link, $_REQUEST['E_gender']);
    $E_address = mysqli_real_escape_string($link, $_REQUEST['E_address']);

    //child1
    $c1name = mysqli_real_escape_string($link, $_REQUEST['c1name']);
    $c1bday = mysqli_real_escape_string($link, $_REQUEST['c1bday']);
    $c1age = mysqli_real_escape_string($link, $_REQUEST['c1age']);
    $c1ic = mysqli_real_escape_string($link, $_REQUEST['c1ic']);
    $c1cert = mysqli_real_escape_string($link, $_REQUEST['c1cert']);
    $c1status = mysqli_real_escape_string($link, $_REQUEST['c1status']);
    $c1marriage = mysqli_real_escape_string($link, $_REQUEST['c1marriage']);
    $c1gender = mysqli_real_escape_string($link, $_REQUEST['c1gender']);

 //child2
    $c2name = mysqli_real_escape_string($link, $_REQUEST['c2name']);
    $c2bday = mysqli_real_escape_string($link, $_REQUEST['c2bday']);
    $c2age = mysqli_real_escape_string($link, $_REQUEST['c2age']);
    $c2ic = mysqli_real_escape_string($link, $_REQUEST['c2ic']);
    $c2cert = mysqli_real_escape_string($link, $_REQUEST['c2cert']);
    $c2status = mysqli_real_escape_string($link, $_REQUEST['c2status']);
    $c2marriage = mysqli_real_escape_string($link, $_REQUEST['c2marriage']);
    $c2gender = mysqli_real_escape_string($link, $_REQUEST['c2gender']);

     //child3
    $c3name = mysqli_real_escape_string($link, $_REQUEST['c3name']);
    $c3bday = mysqli_real_escape_string($link, $_REQUEST['c3bday']);
    $c3age = mysqli_real_escape_string($link, $_REQUEST['c3age']);
    $c3ic = mysqli_real_escape_string($link, $_REQUEST['c3ic']);
    $c3cert = mysqli_real_escape_string($link, $_REQUEST['c3cert']);
    $c3status = mysqli_real_escape_string($link, $_REQUEST['c3status']);
    $c3marriage = mysqli_real_escape_string($link, $_REQUEST['c3marriage']);
    $c3gender = mysqli_real_escape_string($link, $_REQUEST['c3gender']);

      //child4
    $c4name = mysqli_real_escape_string($link, $_REQUEST['c4name']);
    $c4bday = mysqli_real_escape_string($link, $_REQUEST['c4bday']);
    $c4age = mysqli_real_escape_string($link, $_REQUEST['c4age']);
    $c4ic = mysqli_real_escape_string($link, $_REQUEST['c4ic']);
    $c4cert = mysqli_real_escape_string($link, $_REQUEST['c4cert']);
    $c4status = mysqli_real_escape_string($link, $_REQUEST['c4status']);
    $c4marriage = mysqli_real_escape_string($link, $_REQUEST['c4marriage']);
    $c4gender = mysqli_real_escape_string($link, $_REQUEST['c4gender']);

  //child5
    $c5name = mysqli_real_escape_string($link, $_REQUEST['c5name']);
    $c5bday = mysqli_real_escape_string($link, $_REQUEST['c5bday']);
    $c5age = mysqli_real_escape_string($link, $_REQUEST['c5age']);
    $c5ic = mysqli_real_escape_string($link, $_REQUEST['c5ic']);
    $c5cert = mysqli_real_escape_string($link, $_REQUEST['c5cert']);
    $c5status = mysqli_real_escape_string($link, $_REQUEST['c5status']);
    $c5marriage = mysqli_real_escape_string($link, $_REQUEST['c5marriage']);
    $c5gender = mysqli_real_escape_string($link, $_REQUEST['c5gender']);

      //child6
    $c6name = mysqli_real_escape_string($link, $_REQUEST['c6name']);
    $c6bday = mysqli_real_escape_string($link, $_REQUEST['c6bday']);
    $c6age = mysqli_real_escape_string($link, $_REQUEST['c6age']);
    $c6ic = mysqli_real_escape_string($link, $_REQUEST['c6ic']);
    $c6cert = mysqli_real_escape_string($link, $_REQUEST['c6cert']);
    $c6status = mysqli_real_escape_string($link, $_REQUEST['c6status']);
    $c6marriage = mysqli_real_escape_string($link, $_REQUEST['c6marriage']);
    $c6gender = mysqli_real_escape_string($link, $_REQUEST['c6gender']);

      //child7
    $c7name = mysqli_real_escape_string($link, $_REQUEST['c7name']);
    $c7bday = mysqli_real_escape_string($link, $_REQUEST['c7bday']);
    $c7age = mysqli_real_escape_string($link, $_REQUEST['c7age']);
    $c7ic = mysqli_real_escape_string($link, $_REQUEST['c7ic']);
    $c7cert = mysqli_real_escape_string($link, $_REQUEST['c7cert']);
    $c7status = mysqli_real_escape_string($link, $_REQUEST['c7status']);
    $c7marriage = mysqli_real_escape_string($link, $_REQUEST['c7marriage']);
    $c7gender = mysqli_real_escape_string($link, $_REQUEST['c7gender']);
    // attempt insert query execution

    $sql = "INSERT INTO j_staff (user_name, user_ic, user_national, user_oldic, user_bd, user_bop,user_gender, user_registered ,user_race, user_religion, user_weight, user_height, user_marriage, user_passno,user_Issue,user_PassExp,user_EPFno,user_SOCSOno,user_incomeTax,user_Qualification,speak_malay,speak_english,speak_Cantonese, speak_language,speak_Others, write_malay, write_english, write_cantonese, write_language, write_others, 
    user_position,user_department, JDate, user_address, tel_1, tel_2, user_mobile, user_email, user_residence, company_detail, period, position, reason, salary, company_detail2, period2, position2, salary2, reason2, uni, uni_period, uni_qualification, uni2, uni_period2, uni_qualification2, 
   S_name, S_relationship, S_nationality, S_ic,S_oldic, S_bd, S_weight,  S_height, S_race, S_religion, S_contact, S_postal, S_tel1, S_mobile, S_address, S_postal2,S_tel2, S_email, S_employer,S_emp_address,S_emp_postal,S_emp_tel,S_emp_email, E_name, E_relationship, E_nationality , E_ic , E_oldic , E_bd , E_bop , E_race, E_religion , E_weight , E_height, E_gender , E_address,c1name, c1bday, c1age, c1ic, c1cert, c1status, c1marriage, c1gender,c2name, c2bday, c2age, c2ic, c2cert, c2status, c2marriage, c2gender,c3name, c3bday, c3age, c3ic, c3cert, c3status, c3marriage, c3gender,c4name, c4bday, c4age, c4ic, c4cert, c4status, c4marriage, c4gender,c5name, c5bday, c5age, c5ic, c5cert, c5status, c5marriage, c5gender,c6name, c6bday, c6age, c6ic, c6cert, c6status, c6marriage, c6gender,c7name, c7bday, c7age, c7ic, c7cert, c7status, c7marriage, c7gender) VALUES ('$name', '$user_ic', '$user_national', '$user_oldic', '$date', '$user_bop' , '$user_gender', '$regDate','$user_race' ,'$user_religion', '$user_weight', '$user_height','$user_marriage', '$user_passno' , '$user_Issue', " . ($user_PassExp==NULL ? "NULL" : "'$user_PassExp'") . " ,'$user_EPFno', '$user_SOCSOno', '$user_incomeTax', '$user_Qualification', '$speak_malay', '$speak_english', '$speak_Cantonese', '$speak_language', '$speak_Others','$write_malay', '$write_english', '$write_cantonese', '$write_language', '$write_others', '$user_position', '$user_department', '$JDate', '$user_address', '$tel_1', '$tel_2', '$user_mobile', '$user_email', '$user_residence', '$company_detail', '$period', '$position', '$reason', '$salary', '$company_detail2', '$period2', '$position2', '$salary2', '$reason2', '$uni', '$uni_period', '$uni_qualification', '$uni2', '$uni_period2', '$uni_qualification2', '$S_name', '$S_relationship', '$S_nationality', '$S_ic', '$S_oldic', " . ($S_bd==NULL ? "NULL" : "'$S_bd'") . ", '$S_weight', '$S_height', '$S_race', '$S_religion', '$S_contact', '$S_postal', '$S_tel1', '$S_mobile', '$S_address', '$S_postal2', '$S_tel2', '$S_email', '$S_employer', '$S_emp_address', '$S_emp_postal', '$S_emp_tel','$S_emp_email', '$E_name','$E_relationship','$E_nationality', '$E_ic', '$E_oldic', '$E_bd', '$E_bop', '$E_race','$E_religion', '$E_weight', '$E_height', '$E_gender', '$E_address' ,'$c1name', " . ($c1bday==NULL ? "NULL" : "'$c1bday'") . ", '$c1age', '$c1ic', '$c1cert', '$c1status', '$c1marriage', '$c1gender','$c2name', " . ($c2bday==NULL ? "NULL" : "'$c2bday'") . ", '$c2age', '$c2ic', '$c2cert', '$c2status', '$c2marriage', '$c2gender','$c3name', " . ($c3bday==NULL ? "NULL" : "'$c3bday'") . ", '$c3age', '$c3ic', '$c3cert', '$c3status', '$c3marriage', '$c3gender','$c4name', " . ($c4bday==NULL ? "NULL" : "'$c4bday'") . ", '$c4age', '$c4ic', '$c4cert', '$c4status', '$c4marriage', '$c4gender','$c5name', " . ($c5bday==NULL ? "NULL" : "'$c5bday'") . ", '$c5age', '$c5ic', '$c5cert', '$c5status', '$c5marriage', '$c5gender','$c6name', " . ($c6bday==NULL ? "NULL" : "'$c6bday'") . ", '$c6age', '$c6ic', '$c6cert', '$c6status', '$c6marriage', '$c6gender','$c7name', " . ($c7bday==NULL ? "NULL" : "'$c7bday'") . ", '$c7age', '$c7ic', '$c7cert', '$c7status', '$c7marriage', '$c7gender')";



 

/*,c1name,  " . ($c7bday==NULL ? "NULL" : "'$c7bday'") . "
c1bday,
c1age,
c1ic,
c1cert, 
c1status,
c1marriage,
c1gender

'$c1name',
'$c1bday',
'$c1age',
'$c1ic',
'$c1cert', 
'$c1status',
'$c1marriage', 
'$c1gender'*/

  /*  $sql2 = "INSERT INTO j_staff (user_passno,user_Issue,user_PassExp,user_EPFno,user_SOCSOno,user_incomeTax,user_Qualification,speak_malay,speak_english,speak_Cantonese, speak_language, speak_Others, write_malay, write_english, write_cantonese, write_language, write_others) VALUES ('$user_passno', '$user_Issue', '$user_PassExp' ,'$user_EPFno', '$user_SOCSOno', '$user_incomeTax', '$user_Qualification', '$speak_malay', '$speak_english', '$speak_Cantonese', '$speak_language', '$speak_Others', '$write_malay', '$write_english', '$write_cantonese', '$write_language', '$write_others')";*/
  
    if(mysqli_query($link, $sql)){

       header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);

    ?>


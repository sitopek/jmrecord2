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
    $cert = mysqli_real_escape_string($link, $_REQUEST['cert']);
    $vessel = mysqli_real_escape_string($link, $_REQUEST['vessel']);
    $issued = mysql_real_escape_string($_POST['issued']);
    $annual = mysql_real_escape_string($_POST['annual']);
    $exp = mysql_real_escape_string($_POST['exp']);
    $regDate = mysql_real_escape_string($_POST['date']);
    
    // attempt insert query execution

    $sql = "INSERT INTO j_certificate (cert, vessel, issued, annual, exp, cert_registered ) VALUES ('$cert', '$vessel', '$issued','$annual','$exp','$regDate')";

  
    if(mysqli_query($link, $sql)){

       header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);

    ?>


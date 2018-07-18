    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "joombo");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }   
    // Escape user inputs for security

$password1 = mysqli_real_escape_string($link, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($link, $_POST['confirmPassword']);
$user_login = mysqli_real_escape_string($link, $_POST['user_login']);
$user_name = mysqli_real_escape_string($link, $_POST['user_name']);

    // attempt insert query execution
if ($password1 <> $password2)
{
    echo "your passwords do not match";
}
else if(mysqli_query($link,"UPDATE j_users SET user_pass='$password1', user_login='$user_login' WHERE user_name='$user_name'"))
   {
    echo "You have successfully changed your password.";
    }

else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    // close connection

    mysqli_close($link);

    ?>


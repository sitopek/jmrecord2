<?php
    require_once('load.php');
?>
<?php
if(isset($_POST['delete_id']) && !empty($_POST['delete_id'])) {
  $delete_id = mysql_real_escape_string($_POST['delete_id']);
  
  mysql_query("DELETE FROM j_staff WHERE `ID`=".$delete_id);
  header('Location: staffRecords.php');
}
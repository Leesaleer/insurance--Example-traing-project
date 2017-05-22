<?php
<?php require('include/db.php'); ?>
<?php require('include/session.php'); ?>
 admin_login_check();
require('include/db.php');

$get_id=$_GET['id'];

mysqli_query($conn,"delete from contactus where id='$get_id'")or die(mysql_error());
header('location:admin_messages.php');
?>
<?php
require('include/db.php');

$get_id=$_GET['id'];

mysqli_query($conn,"delete from policy_feature where id='$get_id'")or die(mysql_error());
header('location:policies.php');
?>

<?php
require('include/db.php');

$get_id=$_GET['id'];

mysqli_query($conn,"delete from policy_category where id='$get_id'")or die(mysql_error());
header('location:add_category.php');
?>

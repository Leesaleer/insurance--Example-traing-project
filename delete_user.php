<?php
require('include/db.php');

$get_id=$_GET['id'];

mysqli_query($conn,"delete from members where id='$get_id'")or die(mysql_error());
header('location:dashboard.php');
?>
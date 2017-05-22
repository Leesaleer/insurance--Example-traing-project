<?php
$servername='localhost';
$username='root';
$passwd='';
$dbname='db_life_insurance_manag';
$conn=mysqli_connect($servername,$username,$passwd,$dbname) or 	die('Could not connect: '.mysqli_error());
if(!$conn)
{
 echo 'Could not connect:';
}

?>
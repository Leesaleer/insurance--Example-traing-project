<?php 
require('../include/db.php');
$error="";
$id="";
	if(!empty($_REQUEST['id'])){
		$id=filter_data($_REQUEST['id']);
	}
	if(isset($_REQUEST['submit'])){
		$name=filter_data($_REQUEST['name']);
		$email=filter_data($_REQUEST['email']);
		$password=filter_data($_REQUEST['password']);
		
		if(empty($name)||empty($email)||empty($password))
		{
			$error.="Please fill Following Fields";
			if(empty($name)){
				$error.="<br> First Name";
			}
			if(empty($email)){
				$error.="<br> Email";
			}
			if(empty($password)){
				$error.="<br> Password";
			}
		}else{
				$sql="update users set name='$name',email='$email',password='$password'where id=$id";
				if(mysqli_query($conn,$sql)){
					$error= "User updated Sucessfully";
				}else{
					$error= "Somethig goes Wrong Try agian";
				}
		}
	}
	
function filter_data($data){
	$data=stripslashes($data);
	$data =trim($data);
	$data=htmlspecialchars($data);
	return $data;
}

$sql="SELECT * FROM users WHERE id='$id'";
$result= mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
<title>Update User</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include('../include/header.php'); ?>
<div id="wrapper">
<div id="main_body">

<div id="signup_form">
<br>


<br>
<?php echo $error;?>
<br>

<?php
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		
	?>
<form method="post" action="edit_user.php?id=<?php echo $row['id']; ?>">
<fieldset>
<legend>Edit Profile</legend>
<label> Name</label>
<input name="name" type="text"class="input" value="<?php echo $row['name']; ?>"></input>
<br>
<label>Email</label>
<input name="email" type="text" class="input" value="<?php echo $row['email']; ?>"></input>
<br>

<label>Password</label>
<input name="password" type="password"class="input" value="<?php echo $row['password']; ?>"></input>
<br>
<input name="submit" type="submit" Value="Update User" class="btn-primary"></input>
</fieldset>
</form>
<?php
}	
}else
{
	echo "No rows found";
}
mysqli_close($conn);
?>
</div>
</div>
</div>
<?php include('../include/footer.php'); ?>
</body>
</html>
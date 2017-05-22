
<?php 
session_start();
function admin_login_check()
{
if(!isset($_SESSION['adminid'])){
	header("location:login.php?m=please Login ith admin profile");
	exit();		
	}else{
		$uid=$_SESSION['adminid'];
		$username = $_SESSION['adminname'];
		$email = $_SESSION['adminemail'];
	}
}
function agent_login_check()
{
if(!isset($_SESSION['agentid'])){
	header('location:agentlogin.php?m="please Login"');
	exit();		
	}else{
		$uid=$_SESSION['agentid'];
		$username = $_SESSION['agentname'];
		$email = $_SESSION['agentemail'];
	}
}
function login_check()
{
if(!isset($_SESSION['id'])){
	header("location:adminlogin.php?m=please Login ");
	exit();		
	}else{
		$id=$_SESSION['id'];
		$username = $_SESSION['username'];
		$email = $_SESSION['email'];
	}
}
function login_register(){
	if(!isset($_SESSION['id'])){
	echo '<li><a href="register.php" class="">Register</a></li>
				<li><a href="login.php" class="">Login</a></li>';
	}else{
		echo '<li><a href="edit_profile.php" class="">Account</a></li>
				<li><a href="logout.php" class="">Logout</a></li>';
	}
	
}
function admin_login_register(){
	if(!isset($_SESSION['adminid'])){
	echo '
				<li><a href="adminlogin.php" class="">Login</a></li>';
	}else{
		echo '<li><a href="dashboard.php" class="">Dashboard</a></li>
				<li><a href="logout.php" class="">Logout</a></li>';
	}
	
}
function logout(){
	session_unset();
	session_destroy();
	header("location:login.php");
	
}

?>
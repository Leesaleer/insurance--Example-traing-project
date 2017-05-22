
<?php require('include/db.php'); ?>
<?php require('include/session.php'); ?>
<?php
if(isset($_GET['m'])){
	$m=$_GET['m'];
}else{
	$m="";
}

$errorMsg = '';
$email = '';
$pass = '';
$remember = '';
if ($_POST) {
	
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	
	if (isset($_POST['remember'])) {
		$remember = $_POST['remember'];
	}
	
	$email = test_input($email);
	$pass = test_input($pass);
	
	
	
	if ((!$email) || (!$pass)) { 

		$errorMsg = 'Please fill in both fields';

	} else { 	   
		//$pass = md5($pass);
      $res = mysqli_query($conn,"SELECT * FROM admin WHERE 	email='$email'and password='$pass' "); 
	$rowcount=mysqli_num_rows($res);
	
	if ($rowcount>0) {

while ($row = mysqli_fetch_assoc($res)) {
			
					$id = $row['uid'];   
					$_SESSION['adminid'] = $id;
					
					$username = $row["email"];
					$_SESSION['adminname'] = $username;
					
					$user_email = $row["email"];
					$_SESSION['adminemail'] = $user_email;

					//$mysqli->query("UPDATE users SET last_log_date=now() WHERE id='$id' LIMIT 1");
        
    			}    			
    			//if($remember == "yes"){
                //    $encryptedID = base64_encode("g4enm2c0c4y3dn3727553$id");
    	
		//setcookie("idCookie", $encryptedID, time()+60*60*24*100, "/"); 
		//setcookie("username", $username, time()+60*60*24*100, "/"); 
			       
    			//} 
    			
    			header("location: dashboard.php"); 
    			exit();
	
		} else { 
		    $errorMsg = "Incorrect login data, please try again";
		}


    } 

} 
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
      <?php include'include/adminnav.php'; ?>
<!-- ============================  Navigation End ============================ -->
 <?php include'admin_login_body.php'; ?>
   <?php include'include/footer.php'; ?>
</body>
</html>	
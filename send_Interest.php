<?php require('include/db.php'); ?>
<?php require('include/session.php');
 login_check();
 if(isset($_GET['id'])){$to_id=$_GET['id'];}else{
header("location:inbox.php");	 
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
      <?php include'include/nav.php'; ?>
<!-- ============================  Navigation End ============================ -->
 <?php 
$count=0;
$from_id=$_SESSION['id'];
$dt = date("Y-m-d h:i:s");
$rs=mysqli_query($conn,"select * from intrust where to_id='$to_id' and from_id='$from_id'" );
$count=mysqli_num_rows($rs);

if($count>0){
	echo "<div class='alert alert-info'>intrest  already send ,No need to send it again</div>";
}else{
if(mysqli_query($conn,"insert into  intrust(to_id,from_id,send_date)values('$to_id','$from_id','$dt')")){
	echo "<div class='alert alert-success'>intrest send Successfully</div>";
}
}

 ?>
   <?php include'include/footer.php'; ?>
</body>
</html>	
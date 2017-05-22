<?php function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 if($_POST){
	
	$gender=test_input($_POST['gender']);
	
	$marital_status=test_input($_POST['maritalstatus']);
	$country=test_input($_POST['country']);
	$state=test_input($_POST['state']);
	$city=test_input($_POST['city']);
	$religion=test_input($_POST['religion']);

	$mother_tongue=test_input($_POST['mothertongue']);
	
	$sql="select * from members where gender='$gender'
	and(
	marital_status like'$marital_status'
	or
	country like '$country'
	or
	state like '$state'
	or
	city like '$city'
	or
	religion like '$religion'
	or
	mother_tongue like '$mother_tongue')
	";
	 
 
$rs=mysqli_query($conn,$sql);
  if(mysqli_num_rows($rs)>0)
{

?>
<!--and 
	marital_status like'$marital_status'
	or
	country like '$country'
	or 
	state like '$state'
	or
	city like '$city'
	or
	religion like '$religion'
	or
	mother_tongue like '$mother_tongue'-->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">New Matches</li>
     </ul>
   </div>
   <div class="col-md-9 profile_left2">
   <?php while($row=mysqli_fetch_assoc($rs))
{
	?>
	 <div class="profile_top"><a href="view_profile.html">
      <h2><?php echo$row['id'] ?> | Profile Created By <?php echo$row['created_by'] ?></h2>
	    <div class="col-sm-3 profile_left-top">
	    	<img src="upload/<?php echo $row['image1'];?>"class="img-responsive" alt=""/>
	    </div>
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p><?php echo$row['aboutme'] ?></p></li>
		  </ul>
	    </div>
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
				<tr class="opened_1">
						<td class="day_label1">Name :</td>
						<td class="day_value"><?php echo$row['first_name'] ?>, <?php echo$row['middle_name'] ?> <?php echo$row['last_name'] ?></td>
					</tr>
	        		<tr class="opened_1">
						<td class="day_label1">Age / Height :</td>
						<td class="day_value"><?php echo$row['dob'] ?>, <?php echo$row['height'] ?>cm</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value"><?php echo$row['religion'] ?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value"><?php echo$row['marital_status'] ?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value"><?php echo$row['country'] ?></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Profile Created by :</td>
						<td class="day_value closed"><span><?php echo$row['created_by'] ?></span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span><?php echo$row['qualification'] ?></span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Send Mail</div>
			   <div class="vertical"><a href=send_interest.php?id=<?php echo$row['id'] ?>>Send Interest</a></div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
 <?php } } }?>
   
  </div>
  <div class="col-md-3 match_right">
    
   </div>
   <div class="clearfix"> </div>
  </div>
</div>
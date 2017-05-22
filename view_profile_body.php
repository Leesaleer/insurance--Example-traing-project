
<?php 
 
$rs=mysqli_query($conn,"select * from members where id=$id");
  if(mysqli_num_rows($rs)>0)
{
while($row=mysqli_fetch_assoc($rs)){

?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $row['id']; ?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="upload/<?php echo $row['image1'];?>">
							<img src="upload/<?php echo $row['image1'];?>" />
						</li>
						
					 </ul>
				  </div>
				  
			</div><div class="col-sm-8"><?php if(isset($_SESSION['id'])){if($_SESSION['id']==$id){echo"<a href='edit_profile.php' class='hvr-shutter-out-horizontal'>Update your Profile</a></div>";}}?>
			<div class="col-sm-12 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value"><?php echo $row['dob'];?>,<?php echo $row['height'];?>cm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Login :</td>
							<td class="day_value"><?php echo $row['last_login_date'];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $row['religion'];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $row['marital_status'];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Location :</td>
							<td class="day_value"><?php echo $row['country'];?></td>
						</tr>
					   
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $row['qualification'];?></span></td>
						</tr>
				

				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $row['name'];?> </td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $row['marital_status'];?></td>
								</tr>
							   
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $row['marital_status'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Height :</td>
									<td class="day_value"> <?php echo $row['height'];?>cm</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $row['physical_status'];?></span></td>
								</tr>

								<tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value closed"><span><?php echo $row['drinking'];?></span></td>
								</tr>
						  
				        		<tr class="opened_1">
									<td class="day_label">Dob :</td>
									<td class="day_value"><?php echo $row['dob'];?></td>
								</tr>
							   
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $row['weight'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $row['blood_group'];?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $row['diet'];?></span></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><?php echo $row['smoking'];?></span></td>
								</tr>
						  
				        
							    <tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value closed"><span><?php echo $row['dob'];?></span></td>
								</tr>
							   
							
				        
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo $row['religion'];?></td>
								</tr>
							   
						
				        		<tr class="opened">
									<td class="day_label">Education   :</td>
									<td class="day_value"><?php echo $row['qualification'];?></td>
								</tr>
				        		
							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span><?php echo $row['occupation'];?> </span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span><?php echo $row['income'];?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		
							    <tr class="opened">
									<td class="day_label">Spounce :</td>
									<td class="day_value closed"><span><?php ?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>
				 
		     </div>
		  </div>
	   </div>
   	 </div>
     
        	   
<?php }}else{echo "<div class=col-md-8 profile_left>
   	 	<h2>Profile Id :$id  Does not exists</h2></div>";} ?>
           
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>

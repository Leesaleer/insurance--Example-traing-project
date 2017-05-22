<div class="grid_3">
<?php
 if(isset($_GET['id'])){$id=$_GET['id'];}else{
	 header('location:dashboard.php');
	  }
$errorMsg="";
if($_POST){	
$name=test_input($_POST['name']);
$email=test_input($_POST['email']);
$dob=test_input($_POST['dob']);

$gender=test_input($_POST['gender']);
$state=test_input($_POST['state']);
$city=test_input($_POST['city']);
$address=test_input($_POST['address']);
$mobile=test_input($_POST['mobile']);
$dependents=test_input($_POST['dependents']);
$income=test_input($_POST['income']);
$policy_id=test_input($_POST['policy_id']);
$sum_assured=test_input($_POST['sum_assured']);
$payment_mode=test_input($_POST['payment_mode']);
$proof_name=test_input($_POST['proof_name']);
$reg_amount=test_input($_POST['reg_amount']);
	if ( (!$gender) || (!$name)|| (!$email) || (!$dob)||(!$sum_assured)|| (!$payment_mode)||(!$proof_name)|| (!$reg_amount)||
	(!$state) || (!$city)|| (!$address)  || (!$mobile) || (!$dependents)|| (!$income)|| (!$policy_id))
		 { $errorMsg = 'ERROR: You did not submit the following required information:<br /><br />';
	if(!$name){
		$errorMsg .= "*  Name<br>";
	}
	if(!$email){
		$errorMsg .= "* Email<br>";
	}
	
	if(!$dob){
		$errorMsg .= "* Day from date of birth<br>";
	}

	if(!$gender){
		$errorMsg .= "* Confirm your gender<br>";
	  } 
	  if(!$city){
		$errorMsg .= "* Day from city<br>";
	}
	if(!$state){
		$errorMsg .= "*state<br>";
	}
	if(!$address){
		$errorMsg .= "*address<br>";
	}
	if(!$policy_id){
		$errorMsg .= "* Day from Policy name<br>";
	}
	if(!$dependents){
		$errorMsg .= "*dependents<br>";
	}
	if(!$income){
		$errorMsg .= "*income<br>";
	}
		if(!$sum_assured){
		$errorMsg .= "*Sum Assured<br>";
	}
		if(!$payment_mode){
		$errorMsg .= "*Payment Mode<br>";
	}
		if(!$proof_name){
		$errorMsg .= "*proof name<br>";
	}
			if(!$reg_amount){
		$errorMsg .= "*registration amount<br>";
	}
  
		 }else {
			 
			 $dt=date('y-m-d');
			 $agent_id=$_SESSION['agentid'];
			  $flag =mysqli_query($conn,"update policy_applications set
name='$name' ,email='$email',state='$state',city='$city',address='$address',gender='$gender',mobile='$mobile',dependents='$dependents',status='policy',income='$income',policy_id='$policy_id',dob='$dob',sum_assured='$sum_assured',payment_mode='$payment_mode',proof_name='$proof_name',reg_amount='$reg_amount',issue_date='$dt',agent_id='$agent_id'");
				echo mysqli_error($conn);
				if($flag){
					$errorMsg .=" You Application submitted successfully.";
					header('location: agentdashboard.php');
					exit();					
				}else{
					$errorMsg .="Failed, Kindly check form again. ";
				}
		 }
}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$rs=mysqli_query($conn,"select * from policy_applications where id=".$id);
  if(mysqli_num_rows($rs)>0)
{
$arow=mysqli_fetch_assoc($rs);

?> 
 <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Apply for Policy</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	  <?php echo $errorMsg; ?>
	     <form method="post" action="agent_issue_policy.php?id=<?php echo $arow['id'];?>">
		 <div class="form-group">
		      <label for="edit-name">Policy Name <span class="form-required" title="This field is required.">*</span></label>
		       <select name="policy_id" class="form-text required">
		 <?php $cres=mysqli_query($conn,"select * from policy_feature");
	while ($row = mysqli_fetch_assoc($cres)) {
	
 ?>
	 <option value="<?php echo $row['id'];?>" ><?php echo $row['name'];?></option>
	<?php }?>
	</select>

			 <div class="form-group">
		      <label for="edit-name">Sum Assured <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="sum_assured" value="<?php echo $arow['sum_assured'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
			
<div class="form-group">
		      <label for="edit-name">Payment Mode <span class="form-required" title="This field is required.">*</span></label>
		     
                
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="payment_mode" value="male" checked> Yearly
				        </label>
						<label for="radio-02" class="label_radio">
				            <input type="radio" name="payment_mode" value="Half-Yearly"> Half Yearly
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="payment_mode" value="Quartly"> Quartly
				        </label>
	                <label for="radio-02" class="label_radio">
				            <input type="radio" name="payment_mode" value="Monthly"> Monthly
				        </label>
                <div class="clearfix"> </div>
             </div>
			  <div class="form-group">
		      <label for="edit-name">Registration Amount <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="reg_amount" value="<?php echo $arow['reg_amount'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-name">Proof Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="proof_name" value="<?php echo $arow['proof_name'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
		     <div class="form-group">
		      <label for="edit-name">Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="<?php echo $arow['name'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="<?php echo $arow['email'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="income" value="<?php echo $arow['income'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Date of Birth <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="dob" value="<?php echo $arow['dob'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
              </div>
			   <div class="form-group">
		      <label for="edit-name">No of Dependents <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="dependents" value="<?php echo $arow['dependents'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-name">Mobile Number <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="mobile" value="<?php echo $arow['mobile'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
              <div class="form-group">
		      <label for="edit-name">Gender <span class="form-required" title="This field is required.">*</span></label>
		     
                
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="gender" value="male" checked> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="gender" value="female"> Female
				        </label>
	                
                <div class="clearfix"> </div>
             </div>
			 <div class="form-group">
		      <label for="edit-name">State <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="state" value="<?php echo $arow['state'];?>" size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-name">City/distric <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="city" value="<?php echo $arow['city'];?>" size="60" maxlength="60" class="form-text required">
		    </div>

				 <div class="form-group">
		      <label for="edit-name">Address <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="address" value="<?php echo $arow['address'];?>" size="60" maxlength="60" class="form-text required">
		    </div>		
			               
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
<?php } ?>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

<div class="grid_3">
<?php
$errorMsg="";
if($_POST){	
$name=test_input($_POST['name']);
$email=test_input($_POST['email']);
$day=test_input($_POST['day']);
$month=test_input($_POST['month']);
$year=test_input($_POST['year']);
$gender=test_input($_POST['gender']);
$state=test_input($_POST['state']);
$city=test_input($_POST['city']);
$address=test_input($_POST['address']);
$mobile=test_input($_POST['mobile']);
$dependents=test_input($_POST['dependents']);
$income=test_input($_POST['income']);
$policy_id=test_input($_POST['policy_id']);
	if ( (!$gender) || (!$name)|| (!$email) || (!$day)|| (!$month)|| (!$year)||
	(!$state) || (!$city)|| (!$address)  || (!$mobile) || (!$dependents)|| (!$income)|| (!$policy_id))
		 { $errorMsg = 'ERROR: You did not submit the following required information:<br /><br />';
	if(!$name){
		$errorMsg .= "*  Name<br>";
	}
	if(!$email){
		$errorMsg .= "* Email<br>";
	}
	
	if(!$day){
		$errorMsg .= "* Day from dob<br>";
	}
	if(!$month){
		$errorMsg .= "*Month<br>";
	}
	if(!$year){
		$errorMsg .= "*Year<br>";
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

		 }else {
			 $dob=$year."-".$month."-".$day;
			 $dob=date('y-m-d',strtotime($dob));
			  $flag =mysqli_query($conn,"INSERT INTO  policy_applications(
name ,email,state,city,address,gender,mobile,dependents,income,policy_id,dob)
VALUES ('$name','$email','$state','$city','$address','$gender','$mobile','$dependents','$income','$policy_id','$dob')");
				 echo mysqli_error($conn);
				if($flag){
					$errorMsg .=" You Application submitted successfully.";
					header('location: apply_policy.php');
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
	     <form method="post" action="apply_policy.php">
		 <div class="form-group">
		      <label for="edit-name">Policy Name <span class="form-required" title="This field is required.">*</span></label>
		       <select name="policy_id" class="form-text required">
		 <?php $cres=mysqli_query($conn,"select * from policy_category");
	while ($row = mysqli_fetch_assoc($cres)) {
	
 ?>
	 <option value="<?php echo $row['id'];?>" ><?php echo $row['name'];?></option>
	<?php }?>
	</select>
	  	    <div class="form-group">
		      <label for="edit-name">Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		   
		    
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			
		    <div class="age_select">
		      <label for="edit-pass">D.O.B <span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="day">
	                    <option value="">Date</option>
	                     <?php for($i=1;$i<=31;$i++){
	                   echo"<option value=$i>$i</option>";
						 }
	                    ?> 
	                    
                    </select>
                  </div>
            </div>
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select name="month">
	                    <option value="">Month</option>
	                    <option value="1">January</option>
	                    <option value="2">February</option>
	                    <option value="3">March</option>
	                    <option value="4">April</option>
	                    <option value="5">May</option>
	                    <option value="6">June</option>
	                    <option value="7">July</option>
	                    <option value="8">August</option>
	                    <option value="9">September</option>
	                    <option value="10">October</option>
	                    <option value="11">November</option>
	                    <option value="12">December</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select name="year">
                    <option value="">Year</option>
                   <?php for($i=1920;$i<=2020;$i++){
	                   echo"<option value=$i>$i</option>";
						 }
	                   ?>
                    </select>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div>
			   <div class="form-group">
		      <label for="edit-name">No of Dependents <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="dependents" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-name">Mobile Number <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="mobile" value="" size="60" maxlength="60" class="form-text required">
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
		      <input type="text" id="edit-name" name="state" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			 <div class="form-group">
		      <label for="edit-name">City/distric <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="city" value="" size="60" maxlength="60" class="form-text required">
		    </div>
 <div class="form-group">
		      <label for="edit-name">Address <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="address" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

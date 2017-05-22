<?php

 if(isset($_GET['id'])){$id=$_GET['id'];}else{
	 header('location:dashboard.php');
	  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 if($_POST){
	 $name=test_input($_POST['name']);
	$password=test_input($_POST['password']);
	$mobile=test_input($_POST['mobile']);
	$gender=test_input($_POST['gender']);
	$father_name=test_input($_POST['fathername']);
$licence_exp_date=test_input($_POST['licence_exp_date']);
$licence_no=test_input($_POST['licence_no']);
$status=test_input($_POST['status']);
	$state=test_input($_POST['state']);
	$city=test_input($_POST['city']);
	$email=test_input($_POST['email']);
	$address=test_input($_POST['address']);
	$income=test_input($_POST['income']);
	$qualification=test_input($_POST['qualification']);
    $image = $_FILES["image"]["name"];
	$sql="UPDATE agents SET name='$name',password='$password',gender='$gender',
	father_name='$father_name',
	state='$state',
	email='$email',
	city='$city',
	address='$address',
	income='$income',
	licence_no='$licence_no',
		licence_exp_date='$licence_exp_date',
		status='$status',
	qualification='$qualification',
	mobile='$mobile',
	image='$image'
	 WHERE id=$id";
	 	move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
	
	 if(mysqli_query($conn,$sql)){
		 header('location:admin_agents.php');
	 echo "profile updated successfully";
	 
	 }else{
		echo mysqli_error($conn);
	 }
 }
$rs=mysqli_query($conn,"select * from agents where id=".$id);
  if(mysqli_num_rows($rs)>0)
{
$row=mysqli_fetch_assoc($rs);

?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Complete /Edit your Profile</li>
     </ul>
   </div>
   <!--<script type="text/javascript">
    $(function () {
     $('#btnRadio').click(function () {
          var checkedradio = $('[name="gr"]:radio:checked').val();
          $("#sel").html("Selected Value: " + checkedradio);
      });
    });
   </script>-->
<div class="col-md-9 search_left">
  <form method="post" action="admin_edit_agent.php?id=<?php echo $row['id'];?>" enctype="multipart/form-data">	
  <h2>Basics & Lifestyle</h2>
  <div class="clearfix"> </div>
   <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Name </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="edit-name" name="name" value="<?php echo $row['name'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
   <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Licence Number </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="edit-name" name="licence_no" value="<?php echo $row['licence_no'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
		    <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Licence Expire date </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="date" id="edit-name" name="licence_exp_date" value="<?php echo $row['licence_exp_date'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
		      <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Agent Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" name="status" value="application" class="radio_1" <?php if($row['status']=="application") echo "checked=checked";?>/> Application &nbsp;&nbsp;
		<input type="radio" name="status" value="agent" class="radio_1" <?php if($row['status']=="agent") echo "checked=checked";?> /> Agent
		<input type="radio" name="status" value="inactive" class="radio_1" <?php if($row['status']=="inactive") echo "checked=checked";?> /> Inactive
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
		       <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Password </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="password" id="password" name="password" value="<?php echo $row['password'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
					       <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Email </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="email" id="email" name="email" value="<?php echo $row['email'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
			<div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">Image </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="file" id="address" name="image" value="<?php echo $row['image'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
					
					
			<div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">Mobile </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="password" name="mobile" value="<?php echo $row['mobile'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
			<div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">Father Name </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="password" name="fathername" value="<?php echo $row['father_name'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
			   <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Qualification </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="edit-name" name="qualification" value="<?php echo $row['qualification'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
			<div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">Address </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="address" name="address" value="<?php echo $row['address'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
   <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Gender : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" name="gender" value="male" class="radio_1" <?php if($row['gender']=="male") echo "checked=checked";?>/> Male &nbsp;&nbsp;
		<input type="radio" name="gender" value="female" class="radio_1" <?php if($row['gender']=="female") echo "checked=checked";?> /> Female
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
 
  <div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">District / City : </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="city" name="city" value="<?php echo $row['city'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
<div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">State : </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="city" name="state" value="<?php echo $row['state'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>

   <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Date Of Birth </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="date" id="edit-name" name="dob" value="<?php echo $row['dob'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
  


  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Annual Income : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="income">
		<option value="<?php echo $row['income'];?>"><?php echo $row['income'];?></option>
            <option value="1">1 Lac</option>
            <option value="5">5 Lac</option>
            <option value="10">10 Lacr</option>
           
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  
		 <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">  </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="submit"  value="Update Profile"  class="btn_1 ">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>    
<?php } ?>    
 </form>

</div>

  </div>

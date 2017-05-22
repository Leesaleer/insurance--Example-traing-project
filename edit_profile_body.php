<?php
 login_check();
 $id=$_SESSION['id'];
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
	$marital_status=test_input($_POST['maritalstatus']);
	$country=test_input($_POST['country']);
	$state=test_input($_POST['state']);
	$city=test_input($_POST['city']);
	
	$address=test_input($_POST['address']);
	
	
	$occupation=test_input($_POST['occupation']);
	$income=test_input($_POST['income']);
	$smoking=test_input($_POST['smoking']);
	$drinking=test_input($_POST['drinking']);
	
	$height=test_input($_POST['height']);
	$weight=test_input($_POST['weight']);
	
	$physical_status=test_input($_POST['physicalstatus']);
	$blood_group=test_input($_POST['bloodgroup']);
	$diet=test_input($_POST['diet']);
	
	$religion=test_input($_POST['religion']);
	$qualification=test_input($_POST['qualification']);
	
    $image1 = $_FILES["image1"]["name"];
								
                               
	$sql="UPDATE members SET name='$name',password='$password',gender='$gender',
	father_name='$father_name',
	marital_status='$marital_status',
	country='$country',
	state='$state',
	city='$city',
	address='$address',
	occupation='$occupation',
	income='$income',
	smoking='$smoking',
	drinking='$drinking',
	height='$height',
	weight='$weight',
	physical_status='$physical_status',
	blood_group='$blood_group',
	diet='$diet',
	religion='$religion',
	qualification='$qualification',
	mobile_no='$mobile',
	image1='$image1'
	 WHERE id=$id";
	 	move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/" . $_FILES["image1"]["name"]);
	 if(mysqli_query($conn,$sql)){
	 echo "profile updated successfully";
	 
	 }else{
		echo mysqli_error($conn);
	 }
 }
$rs=mysqli_query($conn,"select * from members where id=".$id);
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
  <form method="post" action="edit_profile.php" enctype="multipart/form-data">	
  
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
		      <label for="edit-name" class="col-sm-5 control-lable1">Password </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="password" id="password" name="password" value="<?php echo $row['password'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
			<div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">Image1 </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="file" id="address" name="image1" value="<?php echo $row['image1'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
					
					
			<div class="form_but1">
		      <label for="mobile" class="col-sm-5 control-lable1">Mobile </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="password" name="mobile" value="<?php echo $row['mobile_no'];?>" size="60" maxlength="60" class="form-control has-dark-background">
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
	<label class="col-sm-5 control-lable1" for="sex">Marital Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" name="maritalstatus" class="radio_1" checked="checked" value=single /> Single &nbsp;&nbsp;
		<input type="radio" value="Divorced"name="maritalstatus" <?php if($row['marital_status']=="Divorced") echo "checked=checked";?> class="radio_1"  /> Divorced &nbsp;&nbsp;
		<input type="radio" value="widowed" name="maritalstatus"  <?php if($row['marital_status']=="widowed") echo "checked=checked";?> class="radio_1" value="widowed" /> Widowed &nbsp;&nbsp;
		
	</div>
	<div class="clearfix"> </div>
  </div>
    
    
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Country : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="country">
		<option value="<?php echo $row['country'];?>"><?php echo $row['country'];?></option>
            <option value="">Country</option>
            <option value="Japan">Japan</option>
            <option value="Kenya">Kenya</option>
            <option value="Dubai">Dubai</option>
            <option value="Italy">Italy</option>
            <option value="Greece">Greece</option> 
            <option value="Iceland">Iceland</option> 
			<option value="India">India</option> 
            <option value="China">China</option> 
            <option value="Doha">Doha</option> 
            <option value="Irland">Irland</option> 
            <option value="Srilanka">Srilanka</option> 
            <option value="Russia">Russia</option> 
            <option value="Hong Kong">Hong Kong</option> 
            <option value="Germany">Germany</option>
            <option value="Canada">Canada</option>  
            <option value="Mexico">Mexico</option> 
            <option value="Nepal">Nepal</option>
            <option value="Norway">Norway</option> 
            <option value="">Oman</option>
            <option value="Oman">Pakistan</option>  
            <option value="Kuwait">Kuwait</option> 
            <option value="Indonesia">Indonesia</option>  
            <option value="Spain">Spain</option>
            <option value="Thailand">Thailand</option>  
            <option value="Saudi Arabia">Saudi Arabia</option> 
            <option value="Poland">Poland</option> 
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">District / City : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="city">
            <option value="<?php echo $row['city'];?>"><?php echo $row['city'];?></option>
            <option value="amritsar">Amritsar</option>
            <option value="jalandhar">jalandhar</option>
            <option value="batala">batala</option>
            
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">State : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="state">
		<option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
            <option value="">State</option>
            <option value="punjab">Punjab</option>
            <option value="himachal">Himachal</option>
            <option value="tamilnadu">tamilnadu</option>


        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
   
    <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Height : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="height">
		<option value="<?php echo $row['height'];?>"><?php echo $row['height'];?></option>
		<?php for($i=100;$i<200;$i++){
			echo "<option value=$i>$i</option>";
		}?>
            
            
           
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
    <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Weight : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="weight">
		<option value="<?php echo $row['weight'];?>"><?php echo $row['weight'];?></option>
            <?php for($i=30;$i<100;$i++){
			echo "<option value=$i>$i</option>";
		}?>
           
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
 
   
   <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Diet : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" name="diet" class="radio_1" value="Vegetarian" checked="checked" /> Vegetarian &nbsp;&nbsp;
		<input type="radio" name="diet" class="radio_1" value="Non-Vegetarian" <?php if($row['diet']=="Non-Vegetarian") echo "checked=checked";?> /> Non-Vegetarian
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Drinking : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" name="drinking"  value="yes" class="radio_1" checked="checked" /> Yes &nbsp;&nbsp;
		<input type="radio" name="drinking"  value="no" <?php if($row['drinking']=="no") echo "checked=checked";?> class="radio_1"  /> No
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Smoking : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1"name="smoking"  value="yes" checked="checked" /> Yes&nbsp;&nbsp;
		<input type="radio" class="radio_1" name="smoking"  value="no" <?php if($row['smoking']=="no") echo "checked=checked";?> /> No
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  
   <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Physical Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1" name="physicalstatus"  value="Fit" checked="checked"/>Fit&nbsp;&nbsp;
		<input type="radio" class="radio_1" name="physicalstatus"  value="Handicap" <?php if($row['physical_status']=="Handicap") echo "checked=checked";?>/> Handicap
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
   <div class="form_but1">
		      <label for="edit-name" class="col-sm-5 control-lable1">Blood Group </label>
		      <div class="col-sm-7 form_radios">
		         <div class="select-block1">
		      
		      <input type="text" id="edit-name" name="bloodgroup" value="<?php echo $row['blood_group'];?>" size="60" maxlength="60" class="form-control has-dark-background">
		   </div>
		   </div>
		   <div class="clearfix"> </div>
		    </div>
		   
    <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Spounce : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="sisters">
        <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
           
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
 
 <div class="clearfix"> </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
		<option value="<?php echo $row['religion'];?>"><?php echo $row['religion'];?></option>
            <option value="Hindu">Hindu</option>
            <option value="Sikh">Sikh</option>
            <option value="Jain-All">Jain-All</option>
            <option value="Jain-Digambar">Jain-Digambar</option>
            <option value="Jain-Others">Jain-Others</option>
            <option value="Muslim-All">Muslim-All</option> 
            <option value="Muslim-Shia">Muslim-Shia</option> 
            <option value="Muslim-Sunni">Muslim-Sunni</option> 
            <option value="Muslim-Others">Muslim-Others</option> 
            <option value="Christian-All">Christian-All</option> 
            <option value="Christian-Catholic">Christian-Catholic</option> 
            <option value="Jewish">Jewish</option> 
            <option value="Inter-Religion">Inter-Religion</option> 
        </select>
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
    <label class="col-sm-5 control-lable1" for="sex">Education : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="qualification">
		<option value="<?php echo $row['qualification'];?>"><?php echo $row['qualification'];?></option>
            <option value="B.A">B.A</option>
            <option value="M.A">M.A</option>
            <option value="P.hd">P.hd</option>
            <option value="B.sc">B.sc</option>
            <option value="M.sc">M.sc</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Occupation : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="occupation">
		<option value="<?php echo $row['occupation'];?>"><?php echo $row['occupation'];?></option>
            <option value="Software Developer">Software Developer</option>
            <option value="Engineer">Engineer</option>
            <option value="Doctor">Doctor</option>
           
        </select>
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

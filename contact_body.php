<?php


$name="";
$email="";
$message="";
$mobile="";
$errorMsg="";
$dob="";
if($_POST){	
$name=test_input($_POST['name']);
$email=test_input($_POST['email']);
$message=test_input($_POST['message']);
$mobile=test_input($_POST['mobile']);
	if ((!$name) ||(!$email)  || (!$mobile) || (!$message))
		 { $errorMsg = 'ERROR: You did not submit the following required information:<br /><br />';
	
	if(!$name){
		$errorMsg .= "*  Name<br>";
	}
	if(!$email){
		$errorMsg .= "* Email<br>";
	}
	if(!$mobile){
		$errorMsg .= "* mobile<br>";
	}
	if(!$message){
		$errorMsg .= "* Message<br>";
	}
		 }
	else if (strlen($message)<50) {
	          $errorMsg .= "<u>ERROR:</u><br />Your Message is too short. 50 - 250 characters please.<br />"; 
     }  
	else {
			
			 $date=date('y-m-d');
			  $flag =mysqli_query($conn,"Insert into contactus(name,email,mobile,message,date)values('$name','$email','$mobile','$message','$date')");
				if($flag){
					$errorMsg .="Congratulations, You message delivered successfully.";
					
					header('location: contact.php');
					exit();
					
					
				}else{
					$errorMsg .="Failed to register. Kindly check form again. ";
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

<div class="about_middle">
  <div class="container">
  <?php echo $errorMsg ;?>
	 <h2>Contact Form</h2>
	  <form id="contact-form" class="contact-form" action="contact.php" method="post">
        <fieldset>
          <input type="text" name="name" class="text" placeholder="" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
          <input type="text" name="mobile" class="text" placeholder="" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
          <input type="text" name="email" class="text" placeholder="" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
          <textarea value="Message" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
          <input name="submit" type="submit" id="submit" value="Submit">
        </fieldset>
      </form>
  </div>
</div>

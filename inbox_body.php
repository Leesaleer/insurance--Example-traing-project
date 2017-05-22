
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Inbox</li>
     </ul>
   </div>
   
   <div class="col-md-9 members_box2">
   	   <h3>Inbox</h3>
   	   <p></p>
       <div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Recived</a></li>
				  <li role="presentation"><a href="#profile2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Not Accepted</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Accepted</a></li>
				  
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    
	                <div class="clearfix"> </div>
	                
	                <?php
	                $rs=mysqli_query($conn,"select * from intrust where from_id=$id");
	                while($row=mysqli_fetch_assoc($rs)){
	                 $to_id=$row['to_id'];
	                $mrs= mysqli_query($conn,"select * from members where id=".$to_id);
	               
	                while($mrow=mysqli_fetch_assoc($mrs)){
	                
	                
	                ?>
	                
	                <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="upload/<?php echo $mrow['image1'];?>" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html"><?php echo $mrow['first_name'];?>(<?php echo $mrow['id'];?>) </a></h6>
							
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description"><?php echo $mrow['dob'];?> years,<?php echo $mrow['height'];?> Cms | <span class="m_1">Reliogion</span> : <?php echo $mrow['religion'];?> | <span class="m_1">Education</span> :<?php echo $mrow['qualification'];?> | <span class="m_1">Occupation</span> :<?php echo $mrow['occupation'];?><br><a href='view_profile.php?id=<?php echo $mrow['id'];?>' class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	
					   	  
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					<?php }}?>
					
				  </div>
				 
					
				
				  
				  
				  				    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    
	                <div class="clearfix"> </div>
	                
	                <?php
	                $rs1=mysqli_query($conn,"select * from intrust where to_id=$id");
	                while($row1=mysqli_fetch_assoc($rs1)){
	                 $from_id=$row1['from_id'];
	                $mrs1= mysqli_query($conn,"select * from members where id=".$from_id);
	               
	                while($mrow1=mysqli_fetch_assoc($mrs1)){
	                
	                
	                ?>
	                
	                <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="upload/<?php echo $mrow['image1'];?>" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html"><?php echo $mrow1['first_name'];?>(<?php echo $mrow1['id'];?>) </a></h6>
							
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description"><?php echo $mrow1['dob'];?> years,<?php echo $mrow1['height'];?> Cms | <span class="m_1">Reliogion</span> : <?php echo $mrow1['religion'];?> | <span class="m_1">Education</span> :<?php echo $mrow1['qualification'];?> | <span class="m_1">Occupation</span> :<?php echo $mrow1['occupation'];?><br><a href='view_profile.php?id=<?php echo $mrow1['id'];?>' class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	 <div class="thumb_but"><a href="accept_interest.php?id=<?php echo $from_id;?>&a=no" class="photo_view">Reject Interest</a></div>
					   	  &nbsc
					   	   <div class="thumb_but"><a href="accept_interest.php?id=<?php echo $from_id;?>&a=yes" class="photo_view">Accept Interest</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					<?php }}?>
					
				  </div>
				 
					<div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab">
				    
	                <div class="clearfix"> </div>
	                
	                <?php
	                $rs1=mysqli_query($conn,"select * from intrust where from_id=$id and acceptence='no'");
	                while($row1=mysqli_fetch_assoc($rs1)){
	                 $to_id=$row1['to_id'];
	                $mrs1= mysqli_query($conn,"select * from members where id=".$to_id);
	               
	                while($mrow1=mysqli_fetch_assoc($mrs1)){
	                
	                
	                ?>
	                
	                <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="upload/<?php echo $mrow['image1'];?>" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html"><?php echo $mrow1['first_name'];?>(<?php echo $mrow1['id'];?>) </a></h6>
							
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description"><?php echo $mrow1['dob'];?> years,<?php echo $mrow1['height'];?> Cms | <span class="m_1">Reliogion</span> : <?php echo $mrow1['religion'];?> | <span class="m_1">Education</span> :<?php echo $mrow1['qualification'];?> | <span class="m_1">Occupation</span> :<?php echo $mrow1['occupation'];?><br><a href='view_profile.php?id=<?php echo $mrow1['id'];?>' class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					 
					   	   
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					<?php }}?>
					
				  </div>
				 <div role="tabpanel" class="tab-pane fade" id="profile2" aria-labelledby="profile-tab">
				    
	                <div class="clearfix"> </div>
	                
	                <?php
	                $rs1=mysqli_query($conn,"select * from intrust where from_id=$id and acceptence='yes'");
	                while($row1=mysqli_fetch_assoc($rs1)){
	                 $to_id=$row1['to_id'];
	                $mrs1= mysqli_query($conn,"select * from members where id=".$to_id);
	               
	                while($mrow1=mysqli_fetch_assoc($mrs1)){
	                
	                
	                ?>
	                
	                <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="view_profile.html"><img src="upload/<?php echo $mrow['image1'];?>" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="view_profile.html"><?php echo $mrow1['first_name'];?>(<?php echo $mrow1['id'];?>) </a></h6>
							
							<ul class="login_details1">
							  <li>Last Login : 5 days ago</li>
							</ul>
							<p class="description"><?php echo $mrow1['dob'];?> years,<?php echo $mrow1['height'];?> Cms | <span class="m_1">Reliogion</span> : <?php echo $mrow1['religion'];?> | <span class="m_1">Education</span> :<?php echo $mrow1['qualification'];?> | <span class="m_1">Occupation</span> :<?php echo $mrow1['occupation'];?><br><a href='view_profile.php?id=<?php echo $mrow1['id'];?>' class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  
					   	 
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					<?php }}?>
					
				  </div>
				  
				  
				  
				  
				   
    </div>
   <div class="clearfix"> </div>
  </div>
</div>

 <div class="navbar navbar-inverse navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>
						<?php login_register();?>
					</ul>
				</li>
			   </ul>
             </nav>
           </div>
           <a class="brand" href="index.php"><p>Online Insurance Management</p></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>
					
					<?php if(isset($_SESSION['id']))echo"<li><a href='view_profile.php'>Profile</a></li>"?>
		            <li><a href="apply_policy.php">Apply Policy</a></li>
					<li><a href="apply_agent.php">Agent Apply</a></li>
					<li><a href="about.php">About</a></li>
		    		<li><a href="adminlogin.php">Admin</a></li>
					<li><a href="agentlogin.php">Agent Login</a></li>
		            <li class="last"><a href="contact.php">Contacts</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
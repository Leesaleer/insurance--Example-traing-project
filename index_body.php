<div class="row">
                         
<div class="col-sm-6 col-md-8">           
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
         <img src="images/classified1.jpg" alt="Flower"style="width:600px;height:200px;">
     
    </div>

    <div class="item">
      <img src="images/classified2.jpg" alt="Flower"style="width:600px;height:200px;">
      
    </div>

    <div class="item">
      <img src="images/classified3.jpg" alt="Flower"style="width:600px;height:200px;">
      
    </div>

   
  </div>

  <!-- Left and right controls -->
  
</div>		  
				  
</div>		  
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>Zindagi ke saath bhi, Zindagi ke baad bhi</h1>
                <p>Zindagi ke saath bhi, Zindagi ke baad bhi</p>
            </div>
            <!-- /.col-md-4 -->
        </div>
		<div class="clearfix"> </div>
		        <div class="container"> 
 <div class="row">
           <?php $res=mysqli_query($conn,"select * from policy_feature");
while ($row = mysqli_fetch_assoc($res)) {
$image=$row['id']; 	
$image=$row['image']; 
$desc=$row['feature'];
$category=$row['name'];

?>
  <div class="col-lg-2 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="upload/<?php echo $image; ?>" alt=""style="width:100px;height:100px;">
				<p><?php echo substr($desc,0,50); ?></p>
			   <a href="classi.php?cat=<?php echo $category; ?>"><?php echo $category; ?></a>
               </div>
<?php }?>			   
            
			     
				</div> <!-- /.row -->
				<div class="clearfix"> </div>
				
				<div class="row">
				<?php include('include/services.php'); ?>
				</div>
				</div>
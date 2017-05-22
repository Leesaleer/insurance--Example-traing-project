 <div class="container">
	<div class="row alert alert-info">
	<form action="policiesbycategory.php" method="get" class="">
<div class="col-xs-4">
 
      <select id="buttondropdown" name="cat" class="form-control" placeholder="" >
	   <option value="" >Select Category</option>
     <?php $cres=mysqli_query($conn,"select * from policy_category");
	while ($row = mysqli_fetch_assoc($cres)) {
	
 ?>
	 <option value="<?php echo $row['id'];?>" ><?php echo $row['name'];?></option>
	<?php }?>
	 </select>

</div>

<div class="col-xs-2">
	
	<input type="submit" class="form-control" id="form-input-col-xs-4" placeholder="col-xs-2" />
</div>
</form>
</div>
<div class="row">
<?php
$cat="";
if(isset($_GET['cat'])){
	if($_GET['cat']){
	$cat=$_GET['cat'];
	}else{$cat='%';}
}else{
	$cat="%";
}
if(isset($_GET['keyword'])){
	$keyword=$_GET['keyword'];
}else{
	$keyword="%";
}
$res=mysqli_query($conn,"select * from policy_feature where cat_id='$cat' ");
while ($row = mysqli_fetch_assoc($res)) {
	?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo $row['image']; ?>" alt="image not available" style="width:200px;height:200px;">
      <div class="caption">
        <h3><?php echo $row['name'];; ?></h3>
        <p style="width:200px;height:50px;"><?php echo $row['feature'];; ?></p>

        <p><a href="detail.php?pid=<?php echo $row['id']; ?>" class="btn btn-primary" role="button">Detail</a> </p>
      </div>
    </div>
  </div>
<?php }?>
 
   

  </div>			
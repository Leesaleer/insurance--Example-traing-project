<?php 

require('include/db.php');

$error="";

//$sql="SELECT * FROM users";
//$result= mysqli_query($conn,$sql);

?>


<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add Category
                            </button>
							
						
                        </h1>
						<?php include ('add_category_modal.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Category Table</strong>
                                </div>
                                <thead>
                                    <tr>
									<th>Id</th>
                                        <th>Name</th>
										<th>detail</th>
										<th>image</th>
										<th>Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php 
									$sql="select * from policy_category";
									$result= mysqli_query($conn,$sql);
                                    
                                   while($row=mysqli_fetch_assoc($result))
	{
										$id=$row['id'];
                                        ?>
									
                                        <tr class="warning">
										<td width="150"><?php echo $row['id']; ?></td> 
                                            <td width="150"><?php echo $row['name']; ?></td> 
                                            <td width="150"><?php echo $row['description']; ?></td> 
                                            <td width="150" align="center"><img src="<?php echo $row['image']; ?>" class="img-rounded" width="50" height="40"></td> 
                                            
                                            <td width="160">
                                                <a href="#delete_category<?php echo $id; ?>" role="button"  data-target = "#delete_category<?php echo $id;?>"?id=".'<?php echo $id;?>'."data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a href="#edit_category<?php echo $id; ?>" data-target = "#edit_category<?php echo $id;?>"data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
<!-- product delete modal --> <?php include ('edit_category_modal.php');?>
                                   <?php include ('delete_category_modal.php');?>
                                    <!-- end delete modal -->
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 

</div>

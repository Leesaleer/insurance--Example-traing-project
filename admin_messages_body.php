<?php 


$error="";

?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add User
                            </button>					
                        </h1>
						
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                                </div>
                                <thead>
                                    <tr>
									<th>Id</th>
                                        <th>Name</th>
										<th>email</th>
										<th>message</th>
										<th>Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php 
									$sql="select * from contactus";
									$result= mysqli_query($conn,$sql);
                                    
                                   while($row=mysqli_fetch_assoc($result))
	{
										$id=$row['id'];
                                        ?>			
                                        <tr class="warning">
										<td width="150"><?php echo $row['id']; ?></td> 
                                            <td width="150"><?php echo $row['name']; ?></td> 
                                            <td width="150"><?php echo $row['email']; ?></td>
                                            <td width="150" align="center"><?php echo $row['message']; ?></td> 
                                            
                                            <td width="160">
                                                <a href="admin_delete_message.php?id=<?php echo $id; ?>"  class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                 </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 

</div>

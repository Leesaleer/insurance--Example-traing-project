<?php 


$error="";

?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           					
                        </h1>
						
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Policy Applications Table</strong>
                                </div>
                                <thead>
                                    <tr>
									<th>Id</th>
                                        <th>Name</th>
										<th>email</th>
										<th>mobile</th>
										<th>address</th>
										<th>state</th>
										<th>city</th>
										<th>Issue Policy</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php 
									$sql="select * from policy_applications where status='application'";
									$result= mysqli_query($conn,$sql);
                                    
                                   while($row=mysqli_fetch_assoc($result))
	{
										$id=$row['id'];
                                        ?>			
                                        <tr class="warning">
										<td width="150"><?php echo $row['id']; ?></td> 
                                            <td width="150"><?php echo $row['name']; ?></td> 
                                            <td width="150"><?php echo $row['email']; ?></td>
                                            <td width="150" align="center"><?php echo $row['mobile']; ?></td> 
                                            <td width="150" align="center"><?php echo $row['address']; ?></td> 
                                            <td width="150" align="center"><?php echo $row['state']; ?></td> 
                                            <td width="150" align="center"><?php echo $row['city']; ?></td> 
                                            
                                            <td width="160">
                                                <a href="agent_issue_policy.php?id=<?php echo $id; ?>" role="button" class="btn btn-danger"><i class="icon-user icon-large"></i>&nbsp;Issue Policy</a>
                                                </td>

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 

</div>

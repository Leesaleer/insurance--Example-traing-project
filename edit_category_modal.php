
<div class="modal fade" id="edit_category<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          Update Category </center></strong></div>
                                        
                                        <div class="modal-body">
                              <form  method="post" action="add_category.php" enctype="multipart/form-data">
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
										     <div class="controls">
                                           <input type="text" name="name" value="<?php echo $row['name']; ?>"class = "form-control" placeholder="Name">
                                           </div>
                                 </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description:</label>
                                    <div class="controls">
                                        <input type="text" value="<?php echo $row['description']; ?>"class = "form-control"  name="description"  placeholder="Description" >
                                    </div>
                                </div>
                                

                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 	
                                    </div>
                                </div>
</div>
								<div class = "modal-footer">
											 <button name = "update" class="btn btn-primary">Update</button>
											<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                           

								</div>
							
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  </form>  
									  
									   <?php
                            if (isset($_POST['update'])) {
								
								$get_id= $row['id']; 
  								$name = $_POST['name'];
								$description = $_POST['description'];
								
                               
                               
                                //$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                               // $image_name = addslashes($_FILES['image']['name']);
                                //$image_size = getimagesize($_FILES['image']['tmp_name']);
								
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $image = "upload/" . $_FILES["image"]["name"];
								if($image=="upload/")
								{ $image = $row['image'];  }
                                mysqli_query($conn,"update policy_category set name='$name',description='$description',image='$image' where id='$get_id'") or die();
                                header('location:add_category.php');
                            }
                            ?>	  
                                </div>
                            </div>
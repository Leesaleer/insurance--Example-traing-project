<?php


?>
<div class="modal fade" id="edit_user<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          Update User </center></strong></div>
                                            <div class="modal-body">
                              <form  method="post" action="user.php" enctype="multipart/form-data">
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                            <div class="controls">
                                           <input type="text" name="name" value="<?php echo $row['name']; ?>"class = "form-control" placeholder="Name">
                                           </div>
                                          
                                 </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="email">Email:</label>
                                    <div class="controls">
                                        <input type="text" value="<?php echo $row['email']; ?>"class = "form-control"  name="description"  placeholder="Email" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email">Password:</label>
                                    <div class="controls">
                                        <input type="text" value="<?php echo $row['password']; ?>"class = "form-control"  name="description"  placeholder="password" >
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 	
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
								$email = $_POST['email']; 
                                //$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                               // $image_name = addslashes($_FILES['image']['name']);
                                //$image_size = getimagesize($_FILES['image']['tmp_name']);
								
                                move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $image = "upload/" . $_FILES["image1"]["name"];
								if($image=="upload/")
								{ $image = $row['image1'];  }
                                mysqli_query($conn,"update members set first_name='$name',email='$email',image='$image' where id='$get_id'") or die();
                                header('location:user.php');
                            }
                            ?>
		                                </div>
                            </div>							  
									  


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Policy Features </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" action="policies.php" enctype="multipart/form-data">
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Name">
                                          
                                 </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Feature:</label>
                                    <div class="controls">
                                        <textarea  class = "form-control"  cols="500" rows="10"name="feature"  placeholder="Description" ></textarea>
                                    </div>
                                </div>
                                

                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 	
                                    </div>
                                </div>

								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary">Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

								</div>
							
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  </form>  
									  
									   <?php 
                            if (isset($_POST['go'])) {

                                $name = $_POST['name'];
                                $feature = $_POST['feature'];
                               // $category = $_POST['category'];
                                
                                //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"],$_FILES["image"]["name"]);
                                $location = $_FILES["image"]["name"];


                                mysqli_query($conn,"insert into policy_feature(name,feature,image)
                            	values ('$name','$feature','$location')
                                ") or die(mysql_error());

                                header('location:policies.php');
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>
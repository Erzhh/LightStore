<?php
									if(isset($_POST['title_ru'])){
											//test 
											print_r($_FILES);
											die;
											
											$time = time(); // 1977 - now time
											$random = mt_rand(10000,99999);
											$new_name = md5( $time.$random ); 
											$exp = explode('.',$_FILES['image']['name']);   // 123.jpg to [ 123 , jpg ]
											$format = $exp[1];
								
											$img_name = $new_name.'.'.$format;
										
                                            
									
										}
								?>
								<div class="card-body">
									<form method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label class="form-label">Title-ru</label>
											<input type="text" class="form-control" placeholder="title" name="title_ru">
										</div>
									
													<input type="file" class="form-control" placeholder="title" name="image">
										<button class="btn2">Отправить</button>
									</form>
								</div>
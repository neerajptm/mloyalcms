<main role="main" class="bg-grey">
		<div class="p-sm-3 p-md-5 px-0 py-2">
			<div class="d-flex align-items-center justify-content-center">
				<div class="container">
					<div class=" d-flex justify-content-center w-100">
                            
						<div class="col-lg-12 col-md-12 col-12">
                        <h4 class="align-items-center"> <?php echo session('uid'); ?> </h4>
						<div class="d-flex align-items-center justify-content-between flex-wrap bg-white">
							<div class="col-md-8 col-lg-8 col-12 bg-white d-flex align-items-center justify-content-center ">
                                
								<div class="bg-white p-3 p-lg-5 w-100">
									<form action="<?php echo base_url()  ?>/updtpost" method="post" name="mloyalcmslogin" onsubmit="return mlcmsvalidate()">
										<?php 
										 echo $validation->listErrors();

                                         echo $validation->listErrors();
										 if($dispflashmsg){ 
											echo '<p class="text-center text-danger">'.$dispflashmsg.'</p>';
										 } 
										if($dispmsg){ 
											echo '<p class="text-center text-danger">'.$dispmsg.'</p>';
										 } ?>
										<h3 class="font-weight-bold mb-3">Edit Post</h3>
                                       
										<div class="form-group mb-3">
											<label>Post Name</label>
											<input type="text" id="postname" name="postname" value="<?php echo $postData->post_name; ?>" placeholder="Post Name"  onkeydown="return alphanumOnly(event);" class="form-control login_input br-14">
                                            <span class="error" id="postname_error"></span>
											<div class="clearfix"></div>
										</div> 
										<div class="form-group mb-3">
											<label>Content</label>
											<textarea name="editor" id="editorck" rows="10" cols="200"><?php echo $postData->html; ?></textarea>
                                            <span class="error" id="editor_error"></span>
											<div class="clearfix"></div>
										</div>  

                                        <!-- <div class="adjoined-bottom">
                                            <div class="grid-container">
                                                <div class="grid-width-100">
                                                    <div id="editor">
                                                        <h1>Hello world!</h1>
                                                        <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <input type="hidden" name="pid" value="<?php echo base64_encode($postData->id); ?>"/>
                                          
										<?= csrf_field() ?>
										<button class="btn btn_primary login_btn br-14 w-100" type="submit" id="Submit" ><span class="btn__text-center">Update</span></button>    
										
									
									</div>
								</form>
							</div>
							<div class="col-md-6 p-3 ">
								<img src="assets/images/login_img.jpg" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
				</div>

			</div>
		</div>
</main>
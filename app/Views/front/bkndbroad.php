<main role="main" class="bg-grey">
		<div class="p-sm-3 p-md-5 px-0 py-2">
			<div class="d-flex align-items-center justify-content-center">
				<div class="container">
                
					<div class=" d-flex justify-content-center w-100">
                            
						<div class="col-lg-12 col-md-12 col-12">
                        
						<div class="d-flex align-items-center justify-content-between flex-wrap bg-white">
							<div class="col-md-6 col-lg-6 col-12 bg-white d-flex align-items-center justify-content-center ">
                                
								<div class="bg-white p-3 p-lg-5 w-100">
									<form action="<?php echo base_url()  ?>/bkendsave" method="post" name="mloyalcmslogin" onsubmit="return mlcmsvalidate()">
										<?php 
										 echo $validation->listErrors();                                         
										 if($dispflashmsg){ 
											echo '<p class="text-center text-danger">'.$dispflashmsg.'</p>';
										 } 
										if($dispmsg){ 
											echo '<p class="text-center text-danger">'.$dispmsg.'</p>';
										 } ?>
										<h3 class="font-weight-bold mb-3">Create Campaign Template</h3>
                                        
										<div 	class="form-group mb-3">
											<label>Campaign Id</label>
											<input type="text" id="campid" name="campid" placeholder="Campaign Id"  onkeydown="return alphanumOnly(event);" class="form-control login_input br-14">
                                            <span class="error" id="campid_error"></span>
											<div class="clearfix"></div>
										</div> 
										<div class="form-group mb-3">
											<label>Select post for Header Banner</label>
											<select id="selpostbanner" required name="selpostbanner" class="form-control login_input br-14">
                                                <option value="">Select post for Header Banner</option>
                                                <?php 
                                                    foreach($allPosts as $pst){ ?>
                                                        <option value="<?php echo $pst->id ?>"><?php echo $pst->post_name ?></option>
                                                    <?php   } ?>
                                                ?>
                                            </select>
                                            <span class="error" id="selpostbanner_error"></span>
											<div class="clearfix"></div>
										</div>  
                                        <div class="form-group mb-3">
											<label>Select post for Registration Info</label>
											<select id="selpostmobinp" name="selpostmobinp" class="form-control login_input br-14">
                                                <option value="">Select post for Registration Info</option>
                                                <?php 
                                                    foreach($allPosts as $pst){ ?>
                                                        <option value="<?php echo $pst->id ?>"><?php echo $pst->post_name ?></option>
                                                    <?php   } ?>
                                                ?>
                                            </select>
                                            <span class="error" id="selpostmobinp_error"></span>
											<div class="clearfix"></div>
										</div>  
                                        <div class="form-group mb-3">
											<label>Select post for Coupon Info</label>
											<select id="selpostdisbanner" name="selpostdisbanner" class="form-control login_input br-14">
                                                <option value="">Select post for Coupon Info</option>
                                                <?php 
                                                    foreach($allPosts as $pst){ ?>
                                                        <option value="<?php echo $pst->id ?>"><?php echo $pst->post_name ?></option>
                                                    <?php   } ?>
                                                ?>
                                            </select>
                                            <span class="error" id="selpostdisbanner_error"></span>
											<div class="clearfix"></div>
										</div> 
                                        <div class="form-group mb-3">
											<label>Select post for Shop Now Section</label>
											<select id="selpostshopnow" multiple name="selpostshopnow[]" class="form-control login_input br-14">
                                                <option value="">Select post for  Shop Now Section</option>
                                                <?php 
                                                    foreach($allPosts as $pst){ ?>
                                                        <option value="<?php echo $pst->id ?>"><?php echo $pst->post_name ?></option>
                                                    <?php   } ?>
                                                ?>
                                            </select>
                                            <span class="error" id="selpostshopnow_error"></span>
											<div class="clearfix"></div>
										</div>    
										<?= csrf_field() ?>
										<button class="btn btn_primary login_btn br-14 w-100" type="submit" id="Submit" ><span class="btn__text-center">Submit</span></button>    
										
									
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
<main role="main" class="bg-grey">
		<div class="p-sm-3 p-md-5 px-0 py-2">
			<div class="d-flex align-items-center justify-content-center">
				<div class="container">
				
					<div class=" d-flex justify-content-center w-100">
						
						<div class="col-lg-12 col-md-12 col-12">
                        <h4 class="align-items-center"> <?php echo session('uid'); ?> </h4>
						<div class="d-flex align-items-center justify-content-between flex-wrap bg-white">
							<div class="col-md-6 col-lg-6 col-12 bg-white d-flex align-items-center justify-content-center ">
                                
								<div class="bg-white p-3 p-lg-5 w-100">
									<form action="<?php echo base_url()  ?>/bkendupdt" method="post" name="mloyalcmslogin" onsubmit="return mlcmsvalidate()">
										<?php 
										 echo $validation->listErrors();

                                         echo $validation->listErrors();
										 if($dispflashmsg){ 
											echo '<p class="text-center text-danger">'.$dispflashmsg.'</p>';
										 } 
										if($dispmsg){ 
											echo '<p class="text-center text-danger">'.$dispmsg.'</p>';
										 } ?>
										<h3 class="font-weight-bold mb-3">Customize template</h3>
                                        
										<div class="form-group mb-3">
											<label>Campaign Id</label>
											<input type="text" id="campid" name="campid" placeholder="Campaign Id" value="<?php echo $frmd->campaign_id; ?>"  onkeydown="return alphanumOnly(event);" class="form-control login_input br-14">
                                            <span class="error" id="campid_error"></span>
											<div class="clearfix"></div>
										</div> 
										<div class="form-group mb-3">
											<label>Select post for Banner</label>
											<select id="selpostbanner" required name="selpostbanner" class="form-control login_input br-14">
                                                <option value="">Select post for Banner</option>
                                                <?php 
                                                    foreach($allPosts as $pst){ 
														$sel = '';
														if($frmd->banner_post_id == $pst->id){
															$sel = 'selected="selected"';
														}
														
														?>
                                                        <option value="<?php echo $pst->id ?>" <?php echo $sel; ?>><?php echo $pst->post_name ?></option>
                                                    <?php   } ?>
                                                ?>
                                            </select>
                                            <span class="error" id="selpostbanner_error"></span>
											<div class="clearfix"></div>
										</div>  
                                        <div class="form-group mb-3">
											<label>Select post for Mobile Input</label>
											<select id="selpostmobinp" name="selpostmobinp" class="form-control login_input br-14">
                                                <option value="">Select post for Mobile Input</option>
                                                <?php 
                                                    foreach($allPosts as $pst){ 
														$sel = '';
														if($frmd->mobile_input_post_id == $pst->id){
															$sel = 'selected="selected"';
														}
														?>
                                                        <option value="<?php echo $pst->id ?>" <?php echo $sel; ?> ><?php echo $pst->post_name ?></option>
                                                    <?php   } ?>
                                                ?>
                                            </select>
                                            <span class="error" id="selpostmobinp_error"></span>
											<div class="clearfix"></div>
										</div>  
                                        <div class="form-group mb-3">
											<label>Select post for Discount Banner</label>
											<select id="selpostdisbanner" name="selpostdisbanner" class="form-control login_input br-14">
                                                <option value="">Select post for Discount Banner</option>
                                                <?php 
                                                    foreach($allPosts as $pst){ 
														
														$sel = '';
														if($frmd->discount_post_id == $pst->id){
															$sel = 'selected="selected"';
														}

														?>
                                                        <option value="<?php echo $pst->id ?>" <?php echo $sel; ?> ><?php echo $pst->post_name ?></option>
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
                                                    foreach($allPosts as $pst){ 
														$shpnArr = explode('|',$frmd->shop_now_post_id);
														$sel = '';
														if(in_array($pst->id, $shpnArr)){
															$sel = 'selected="selected"';
														}

														?>
                                                        <option value="<?php echo $pst->id ?>" <?php echo $sel; ?> ><?php echo $pst->post_name ?></option>
                                                    <?php   } ?>
                                                ?>
                                            </select>
											<input type="hidden" name="pid" value="<?php echo  base64_encode($frmd->id); ?>"/>
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
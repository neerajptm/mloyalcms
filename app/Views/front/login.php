<main role="main" class="bg-grey">
		<div class="p-sm-3 p-md-5 px-0 py-2">
			<div class="d-flex align-items-center justify-content-center">
				<div class="container">
					<div class=" d-flex justify-content-center w-100">

						<div class="col-lg-12 col-md-12 col-12">
						<div class="d-flex align-items-center justify-content-between flex-wrap bg-white">
							<div class="col-md-6 col-lg-6 col-12 bg-white d-flex align-items-center justify-content-center ">
								<div class="bg-white p-3 p-lg-5 w-100">
									<form action="<?php echo base_url()  ?>/validate" method="post" name="mloyalcmslogin" onsubmit="return mlcmsvalidate()">
										<?php 
										 echo $validation->listErrors();
										 if($dispflashmsg){ 
											echo '<p class="text-center text-danger">'.$dispflashmsg.'</p>';
										 } 
										if($dispmsg){ 
											echo '<p class="text-center text-danger">'.$dispmsg.'</p>';
										 } ?>
										<h3 class="font-weight-bold mb-3">Login</h3>
										<div class="form-group mb-3">
											<label>Username</label>
											<input type="text" id="uid" name="uid" placeholder="Username"  onkeydown="return alphanumOnly(event);" class="form-control login_input br-14">
                                            <span class="error" id="uid_error"></span>
											<div class="clearfix"></div>
										</div> 
										<div id="pwd">
                                            <input class="form-control login_input br-14" name="pwd"  type="password">
                                            <span class="error" id="pwd_error"></span>
										</div>    
										<?= csrf_field() ?>
										<button class="btn btn_primary login_btn br-14 w-100" type="submit" id="logbutton" ><span class="btn__text-center">Login</span></button>    
										

										<!-- <div class="text-center">
											<p>Not registered yet? <a href="<?php echo base_url() ?>/apply-now" class="primary_link text-decoration-none">Create an Account</a></p>
										</div> -->
									
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
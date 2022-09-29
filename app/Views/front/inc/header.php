<!doctype html>
<html lang="en">

<head>
	<noscript>

		<style type="text/css">
			body {
				display: none;
			}
		</style>
	</noscript>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico">
	<meta name="theme-color" content="#74cbcb" />
	<!-- <link rel="manifest" href="<?php //echo base_url(); ?>/assets/manifest.json"> -->
	<link rel="manifest" href="<?php echo base_url(); ?>/manifest.json">


	<link rel="canonical" href="<?php echo base_url(); ?>">

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>/public/assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
	<link href="<?php echo base_url(); ?>/public/assets/css/stylefront.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/css/responsive.css" rel="stylesheet">
	<script type="text/javascript">
		var baseurl = '<?php echo base_url(); ?>';
		var csrf_token = '<?php echo  csrf_token(); ?>';
		var csrf_hash = '<?php echo  csrf_hash(); ?>';
	</script>

</head>

<body>
	<div id="loading"></div>
	<header>
		<nav class="navbar navbar-expand-lg home_header py-2">
			<div class="container position-relative">
				<div class="row w-100">
					<div class="d-flex align-items-center justify-content-between w-100">
						<div class="d-flex align-items-center justify-content-start">
							<button class="navbar-toggler navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                            <img src="<?php echo base_url() ?>/public/assets/img/menu_icon.png" class="img-fluid" alt="">
	                        </button>
							<h4 class="text-center text-light">Paytm mLoyal Campaign CMS </h4>
						</div>
						<div>
							<div class="top_navs">
								<div class="collapse navbar-collapse" id="navbarNav">
									<ul class="navbar-nav nav main_navs">
										<li class="nav-item active"><a class="nav-link" href="<?php echo base_url() ?>">All Campaigns</a></li>
										<?php 
									if(session('loggedin')){ ?>
										
										<li class="nav-item ">
											<a class="nav-link " href="<?php echo base_url() ?>/posts">All Posts</a>											
										</li>
										<li class="nav-item "><a class="nav-link" href="<?php echo base_url() ?>/logout">Log Out</a></li>
										
										<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>/brand/<?php echo session('uid'); ?>" target="_blank">Go To
												Shop</a></li>
										<li> <h4 class="text-center text-light"> <?php echo session('uid'); ?> </h4> </li>
										<?php  
									} ?>
									
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</nav>

	</header>
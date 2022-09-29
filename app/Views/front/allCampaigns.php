<main role="main" class="bg-grey">
		<div class="p-sm-3 p-md-5 px-0 py-2">
			<div class="d-flex align-items-center justify-content-center">
				<div class="container">
                <div class="text-right">
                    <button class="btn btn-light" type="button"><a href="<?php echo base_url() ?>/newcampaign">Add new Campaign</a></button>
                </div>
                <h3>All Campaign</h3>
                <?php 
                    echo $validation->listErrors();

                    if($dispflashmsg){ 
                    echo '<p class="text-center text-danger">'.$dispflashmsg.'</p>';
                    } 
                if($dispmsg){ 
                    echo '<p class="text-center text-danger">'.$dispmsg.'</p>';
                    } ?>
                <div class="table-responsive">
							<table class="table font-sm display dashboardTable d-md-table d-block table-responsive " id="dataTable" >
								<thead>
									<tr>
                                        <td>ID</td>                                        
                                        <td>Campaign Id</td>                                        
                                        <td>Created</td>
                                        <td>uid</td>
                                        <td>Action</td>
                                        <td>Shop Url</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    foreach($allCmpData as $post){ ?>
                                        <tr>
                                            <td> <?php echo $post->id;  ?> </td>                                            
                                            <td> <?php echo $post->campaign_id;  ?> </td> 
                                            <td> <?php echo $post->uid;  ?> </td>
                                            <td> <?php echo $post->created;  ?> </td>
                                            <td>  <a href="<?php echo base_url() ?>/editcampaign/<?php echo base64_encode( $post->id); ?>"> Edit </td>
                                            <td><a class="nav-link" href="<?php echo base_url() ?>/brand/<?php echo session('uid'); ?>/<?php echo $post->id; ?>" target="_blank">Go To
												Shop</a></td>
                                    </tr>
                                    <?php 
                                    }?>
                                    

                </div>
            </div>
        </div>
</main>

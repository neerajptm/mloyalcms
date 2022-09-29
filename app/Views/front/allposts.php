<main role="main" class="bg-grey">
		<div class="p-sm-3 p-md-5 px-0 py-2">
			<div class="d-flex align-items-center justify-content-center">
				<div class="container">
                <div class="text-right">
                    <button class="btn btn-light" type="button"><a href="<?php echo base_url() ?>/newpost">Create new Post</a></button>
                </div>
                <h3>All Posts</h3>
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
                                        <td>slug</td>
                                        <td>post_name</td>
                                        <!-- <td>html</td> -->
                                        <td>active</td>
                                        <td>created</td>
                                        <td>updated</td>
                                        <td>uid</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    foreach($allPosts as $post){ ?>
                                        <tr>
                                            <td> <?php echo $post->id;  ?> </td>                                            
                                            <td> <?php echo $post->slug;  ?> </td>
                                            <td> <?php echo $post->post_name;  ?> </td>
                                            <!-- <td> <?php //echo $post->html;  ?> </td> -->
                                            <td> <?php echo $post->active;  ?> </td>
                                            <td> <?php echo $post->created;  ?> </td>
                                            <td> <?php echo $post->updated;  ?> </td>
                                            <td> <?php echo $post->uid;  ?> </td>
                                            <td>  <a href="<?php echo base_url() ?>/editpost/<?php echo base64_encode( $post->id); ?>"> Edit </td>
                                    </tr>
                                    <?php 
                                    }?>
                                    

                </div>
            </div>
        </div>
</main>

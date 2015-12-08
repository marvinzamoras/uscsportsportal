<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Create Announcement</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('announcement_admin/createAnnouncement'); ?>
					 
					
						
							<br/>
							<?php echo form_error('ann_title');?>	
						    <label for="title">TITLE :</label>	
						    <input type="input" name="ann_title" /><br />
						    <br/>
						    <?php echo form_error('ann_content');?>	
						    <textarea name="ann_content" class= "textarea" id = "mytextarea"></textarea><br/>
						 <center>
						   	<input class="EButton" type="submit" name="submit" value="Post" />
						   
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
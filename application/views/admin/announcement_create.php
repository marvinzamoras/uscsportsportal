<input type="hidden" id="page-identifier" value="page-ann"/>
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
						    <label for="title">TITLE :</label>		
						    <input type="text" name="ann_title" size="50" class="focus" required/><br />
						    <div style="color:red;" align='center'><?php echo form_error('ann_title'); ?></div>
						    <br/>
						    <br/>
						<center> 
						    <textarea name="ann_content" class= "textarea" id = "mytextarea"></textarea><br/>
						    <div style="color:red;" align='center'><?php echo form_error('ann_content'); ?></div>
						   	<input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to post this?');"/>
						   	
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>


<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Edit Announcement</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">
					
					<?php echo form_open('announcement_admin/edit/'.$ann_item['slug']); ?>
					 
					
						
							<br/>
						    <label for="title">TITLE :</label>		
						    <input type="text" name="ann_title" value = "<?php echo $ann_item['ann_title'];?>" size="50" placeholder=":focus" class="focus"/><br />
						    <br/>
						    <br/>
						<center>
							<textarea name="ann_content" class= "textarea" id = "mytextarea"><?php echo $ann_item['ann_content'];?></textarea><br/></br>
						 	<?php echo form_hidden('slug',$ann_item['slug']); ?>
							<?php echo form_hidden('ann_id',$ann_item['ann_id']); ?>
						   	<input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to save this?');" />
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
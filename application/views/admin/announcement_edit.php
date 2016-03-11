<style type="text/css">
	p {color:red; margin-left: 100px; font-weight: bold; font-size: 120%;}
</style>
<input type="hidden" id="page-identifier" value="page-ann"/>

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
						    <input type="text" name="ann_title" value = "<?php echo $ann_item['ann_title'];?>" size="50" class="focus" required/><br />
						    <div style="color:red;" align='center'><?php echo form_error('ann_title'); ?></div>
						    <br/>
						    <br/>
						<center>
							<textarea name="ann_content" class= "textarea" id = "mytextarea"><?php echo $ann_item['ann_content'];?></textarea><br/></br>
							<div style="color:red;" align='center'><?php echo form_error('ann_content'); ?></div>
						 	<?php echo form_hidden('slug',$ann_item['slug']); ?>
						   	<input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to save this?');" />
						</center>
						<input type="hidden" name="ann_id" value="<?php echo $ann_item['ann_id']?>" />

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
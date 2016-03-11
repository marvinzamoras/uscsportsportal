<style type="text/css">
	p {color:red; margin-left: 100px; font-weight: bold; font-size: 120%;}
</style>
<input type="hidden" id="page-identifier" value="page-news"/>

<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Edit News And Updates</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">
					
					<?php echo form_open('news_admin/edit/'.$news_item['slug']); ?>
					 
					
						
							<br/>
						    <label for="title">TITLE :</label>		
						    <input type="text" name="news_title" value = "<?php echo $news_item['news_title'];?>" size="50" class="focus"/><br/>
						    <div style="color:red;" align='center'><?php echo form_error('news_title'); ?></div>
						    <br/>
						    <br/>
						<center>
							<textarea name="news_content" class= "textarea" id = "mytextarea"><?php echo $news_item['news_content'];?></textarea><br/>
						    <div style="color:red;" align='center'><?php echo form_error('news_content'); ?></div>
						 	<?php echo form_hidden('slug',$news_item['slug']); ?>
						   	<input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to save this?');"/>				   	
						</center>

						<input type="hidden" name="news_id" value="<?php echo $news_item['news_id'];?>" />

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>

	<style>
	.controls p {  color : red; }
</style>
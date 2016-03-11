<input type="hidden" id="page-identifier" value="page-news"/>

<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Create News And Updates</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('news_admin/createNews'); ?>
					 
					
						
							<br/>
						    <label for="title">TITLE :</label>		
						    <input type="text" name="news_title" size="50" required/><br/>
						    <div style="color:red;" align='center'><?php echo form_error('news_title'); ?></div>
						   <br/>
						    <br/>
						<center>    
						    <textarea name="news_content" class= "textarea" id = "mytextarea"></textarea><br/>
						    <div style="color:red;" align='center'><?php echo form_error('news_content'); ?></div>
						   	<input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to post this?');" />
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
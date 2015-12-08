

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
						    <input type="text" name="news_title" size="50" class="focus" class="required_notification" required/><br />
						    <br/>
						<center>    
						    <textarea name="news_content" class= "textarea" id = "mytextarea"></textarea><br/>
						   	<input class="EButton" type="submit" name="submit" value="Post" />
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
<input type="hidden" id="page-identifier" value="page-games"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Create Game</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('game_admin/createGame'); ?>
					 
					
							<br/>
						    <label for="title">GAME NAME :</label>		
						    <input type="text" name="game_name" size="50" class="focus" required/><br />
						    <div style="color:red;" align='center'><?php echo form_error('game_name'); ?></div>
						    <br/>
						    <br/>
						<center>   
						    <textarea name="game_desc" class= "textarea" id = "mytextarea"></textarea><br/>
						    <div style='color:red;' align='center'><center><?php echo form_error('game_desc'); ?></center></div>
						   	<input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to post this?');" />
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>


<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Edit Game</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">
					
					<?php echo form_open('game_admin/edit/'.$game_item['game_id']); ?>
					 
					
						
							<br/>
						    <label for="title">GAME NAME :</label>		
						    <input type="text" name="game_name" value = "<?php echo $game_item['game_name'];?>" size="50" placeholder=":focus" class="focus"/><br/>
						    <br/>
						    <br/>
						<center>
							<textarea name="game_desc" class= "textarea" id = "mytextarea"><?php echo $game_item['game_desc'];?></textarea><br/></br>
						 	
							<?php echo form_hidden('game_id',$game_item['game_id']); ?>
						   	<input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to save this?');"/>
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
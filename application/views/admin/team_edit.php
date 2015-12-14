

<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Edit Teams</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">
					
					<?php echo form_open('team_admin/edit/'.$team_item['team_id']); ?>
					 
					
						<br/>
						    <label for="title">TEAM CATEGORY :</label>	
						    <?php $options = array(
							        'Singles' => 'Singles',
							        'Doubles' => 'Doubles',
							        'Groups' => 'Groups',
							        
							); 
							echo form_dropdown('team_cat', $options, 'Singles');?>	

						    <BR>
						    
						    <label for="title">GAME CATEGORY :</label>	
						    <?php $options = array(
							        'Badminton' => 'Badminton',
							        'Tennis' => 'Tennis',
							        'Basketball' => 'Basketball',
							        
							); 
							echo form_dropdown('game_cat', $options, 'Singles');?>	
							<br/>
						    <label for="title">SCHOOL :</label>	
						    <?php $options = array(
							        'School of Arts and Sciences' => 'School of Arts and Sciences',
							        'School of Engineering'   => 'School of Engineering',
							        
							); 
							echo form_dropdown('school_id', $options, 'School of Arts and Sciences');?>
							<br/>
						    <label for="title">TITLE :</label>		
						    <input type="text" name="team_name" value = "<?php echo $team_item['team_name'];?>" size="50" placeholder=":focus" class="focus"/><br/>
						    <br/>
						    <br/>
						<center>
							
						   	<input class="EButton" type="submit" name="submit" value="Save" onclick = "javascript:return confirm('Are you sure you want to save this?');"/>
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
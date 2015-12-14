

<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Create Teams</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('team_admin/createTeam'); ?>
					 
					
						
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
						    <label for="title">TEAM NAME :</label>	
						<input type="text" name="team_name" size="50" class="focus" class="required_notification" required/><br />
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Post" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
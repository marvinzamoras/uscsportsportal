
<input type="hidden" id="page-identifier" value="page-teams"/>

<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Create Player</h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('player_admin/createPlayer'); ?>
					 <table style="width:75%">
					  <tr>
					  	
					  	<td><label for="title">PLAYER NAME :</label>	</td>
					  	<td><input type="text" name="player_name" size="52" placeholder="" class="focus" />	</td>
					  </tr>
					  <tr>
					  	<td></td>
					  	<td><div style="color:red;" align='center'><b><?php echo form_error('player_name'); ?></b></div></td>
					  </tr>
					   <tr>
					  	<td><label for="title">PLAYER PICTURE :</label>	</td>
			
					  	<td><textarea name="player_img" class= "playerarea" id = "mytextarea"></textarea><br/></td>
					  </tr>
					  <tr>
					  	<td></td>
					  	<td><div style="color:red;" align='center'><b><?php echo form_error('player_img'); ?></b></div></td>
					  </tr>
					  <tr>
					  	<td><label for="title">PLAYER BIO :</label>	</td>
					  	
					  	<td><textarea name="player_bio" class ="playerbio" id = "mytextarea"></textarea><br/></td>
					  </tr>
					  <tr>
					  	<td></td>
					  	<td><div style="color:red;" align='center'><b><?php echo form_error('player_bio'); ?></b></div></td>
					  </tr>
					  
					  <tr>
					    <td> <label for="title">SCHOOL :</label>	</td>
					    <td>  
					    	<?php echo form_error('player_school');?>
					    <?php 
					    $player_school = 1;
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
					    echo form_dropdown('player_school', $school_list, set_value('player_school', $player_school),$extra_attributes1); ?> 	
					    </td>		
					    
					  </tr>
					  <tr>
					    <td><label for="title">TEAM :</label>	</td>
					    <?php echo form_error('player_team');?>
					    <td>
					    <?php 
					    $player_team = 1;
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
							echo form_dropdown('player_team', $team_list, set_value('player_team', $player_team),$extra_attributes1);?></td>		
					    
					  </tr>
					 
					</table>
						
						  
						
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to edit this?');" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
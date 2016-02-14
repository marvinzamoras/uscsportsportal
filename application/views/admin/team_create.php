

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
					 <table style="width:75%">
					  <tr>
					    <td><label for="title">TEAM CATEGORY :</label>	</td>
					    <td><?php 
					    $cat_name = 1;
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
							echo form_dropdown('team_cat', $cat_list, set_value('cat_name', $cat_name),$extra_attributes1);?></td>		
					    
					  </tr>
					  <tr>
					    <td> <label for="title">GAME CATEGORY :</label></td>
					    <td>
					    	<?php 
					    $game_name = 1;
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
					    echo form_dropdown('game_cat', $game_list, set_value('game_cat', $game_name),$extra_attributes1); ?> 	
					    </td>		
					    </td>		
					    
					  </tr>
					  <tr>
					    <td> <label for="title">SCHOOL :</label>	</td>
					    <td>  
					    <?php 
					    $school_name = 1;
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
					    echo form_dropdown('FKschool_id', $school_list, set_value('FKschool_id', $school_name),$extra_attributes1); ?> 	
					    </td>		
					    
					  </tr>
					 <tr>
					    <td>  <label for="title">NAME :</label></td>
					    <?php echo form_error('team_name');?>
					    <td><input type="text" name="team_name" size="52" placeholder="" class="focus"/>	</td>		
					    
					  </tr>
					</table>
						
						  
						
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Post" onclick = "javascript:return confirm('Are you sure you want to edit this?');" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
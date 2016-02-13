<input type="hidden" id="page-identifier" value="page-teams"/>

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
					 
					<table style="width:75%">
					  <tr>
					    <td><label for="title">TEAM CATEGORY :</label>	</td>
					    <td><?php 
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
							echo form_dropdown('team_cat', $cat_list, $team_item['team_cat'],$extra_attributes1);?></td>		
					    
					  </tr>
					  <tr>
					    <td> <label for="title">GAME CATEGORY :</label></td>
					    <td>
					    	<?php 
					    
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
					    echo form_dropdown('game_cat', $game_list, set_value('game_cat', $team_item['game_cat']),$extra_attributes1); ?> 
					    </td>		
					    
					  </tr>
					  <tr>
					    <td> <label for="title">SCHOOL :</label>	</td>
					    <td> 
					    <?php 
					    
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
					    echo form_dropdown('FKschool_id', $school_list, set_value('FKschool_id', $team_item['FKschool_id']),$extra_attributes1); ?> 	   
					    </td>		
					    
					  </tr>
					 <tr>
					    <td>  <label for="title">NAME :</label></td>
					    <td><input type="text" name="team_name" value = "<?php echo $team_item['team_name'];?>" size="52" placeholder="<?php echo $team_item['team_name'];?>" class="focus"/>	</td>		
					    
					  </tr>
					</table>
						
						   <br>
						<center>
							
						   	<input class="EButton" type="submit" name="submit" value="Save" onclick = "javascript:return confirm('Are you sure you want to save this?');"/>
						</center>

					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>

<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $name; ?></h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('match_admin/createMatch'); ?>
					 <table style="width:75%">

					 <tr> <h2><?php  echo "Edit  Match";?></h2></tr>
					
					  <tr>
					    <td> <label for="title">SCHOOL 1:</label>	</td>
					    <td>  
					    <select name="school1" class="col-12" id="dropy"  style="background-color:#ffffff; color:black; height:45px; width:90%" placeholder="<?php echo $school1->school_name;?>">
               				<?php for($i=0; $i<sizeof($school); $i++)  { ?>
              				<option <?php echo ($school[$i]['school_id'] == $school1['school_id'])?'selected="selected"':''; ?> value="<?php echo $school[$i]['school_id'];?>"><?php echo $school[$i]['school_name'];?></option>
               				 <?php }?>
         				 </select>
					    </td>		
					    
					  </tr>
					 <tr>
					    <td>  <label for="title"> TEAM 1 :</label></td>
					    <td>
					    <select name="team1" class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%" placeholder="<?php echo $team1->team_name;?>">
               				<?php for($i=0; $i<sizeof($team); $i++)  { ?>
              				<option <?php echo ($team[$i]['team_id'] == $team1['team_id'])?'selected="selected"':''; ?> value="<?php echo $team[$i]['team_id'];?>"><?php echo $team[$i]['team_name'];?></option>
               				 <?php }?>
         				 </select>		
					    </td>
					  </tr>

					   <tr>
					    <td>  <label for="title"> SCHOOL 2 :</label></td>
					   		<td> <select name="school2" class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%" placeholder="<?php echo $school2->school_name;?>">
               				<?php for($i=0; $i<sizeof($school); $i++)  { ?>
              				<option <?php echo ($school[$i]['school_id'] == $school2['school_id'])?'selected="selected"':''; ?> value="<?php echo $school[$i]['school_id'];?>"><?php echo $school[$i]['school_name'];?>
               				 <?php }?>
         				 </select>	</td>		
					    
					  </tr>

					   <tr>
					    <td>  <label for="title"> TEAM 2 :</label></td>
					   <td> <select name="team2" class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%" placeholder="<?php echo $team2->team_name;?>">
               				<?php for($i=0; $i<sizeof($team); $i++)  { ?>
              				<option <?php echo ($team[$i]['team_id'] == $team2['team_id'])?'selected="selected"':''; ?> value="<?php echo $team[$i]['team_id'];?>"><?php echo $team[$i]['team_name'];?></option>
               				 <?php }?>
         				 </select>	</td> 	
					    
					  </tr>

					   <tr>
					    <td>  <label for="title"> CATEGORY :</label></td>
					   <td>  <select name="category"  class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%" placeholder="<?php echo $matchup->cat_name;?>">
               				<?php for($i=0; $i<sizeof($category); $i++)  { ?>
              				<option value="<?php echo $category[$i]['cat_id'];?>"><?php echo $category[$i]['cat_name'];?></option>
               				 <?php }?>
         				 </select>	</td> 	
					    
					  </tr>

					   <tr>
					    <td>  <label for="title"> TIME :</label></td>
					   <td>  <input  type="time" name="time" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:90%">
         				 </input>	</td> 	
					    
					  </tr>

					  <tr>
					    <td>  <label for="title"> DATE :</label></td>
					   <td>  <input  type="date" name="date" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:90%" min="<?php echo date("Y-m-d"); ?>" >
         				 </input>	</td> 	
					    
					  </tr>

					  <tr>
					    <td>  <label for="title"> Score 1 :</label></td>
					   <td>  <input  type="text" name="team1_score" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:90%" min="<?php echo date("Y-m-d"); ?>" >
         				 </input>	</td> 	
					    
					  </tr>

					  <tr>
					    <td>  <label for="title"> Score 2 :</label></td>
					   <td>  <input  type="text" name="team2_score" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:90%" min="<?php echo date("Y-m-d"); ?>" >
         				 </input>	</td> 	
					    
					  </tr>

					  <tr>
					    <td>  <label for="title"> Result 1 :</label></td>
					    <td>
         				 	<input type="radio" name="team_res1" value="W" checked> Win<br>
  							<input type="radio" name="team_res1" value="L"> Loss<br>	
					    </td>
					  </tr>

					  <tr>
					    <td>  <label for="title"> <br>Result 2 :</label></td>
					   <td> <br>
					   		<input type="radio" name="team_res2" value="W" checked> Win<br>
  							<input type="radio" name="team_res2" value="L"> Loss<br>	
         				</td> 	
					    
					  </tr>



					</table>
						
						  
						<?php echo form_hidden('team1_score',0); ?>
						<?php echo form_hidden('team2_score',0); ?>
						<?php echo form_hidden('team1_res',"Default"); ?>
						<?php echo form_hidden('team2_res',"Default"); ?>
						<?php echo form_hidden('game',$game_id); ?>
						<?php echo form_hidden('name',$name); ?>
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Edit" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
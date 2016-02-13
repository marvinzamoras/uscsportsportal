<input type="hidden" id="page-identifier" value="page-games"/>

<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $name; ?></h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('match_admin/edit'.'/'.$match_id,$name,$game_id); ?>
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
					    	<?php if (isset($same_team)){ 
							 echo $$same_team; }?>
					  </tr>

					   <tr>
					    <td>  <label for="title"> CATEGORY :</label></td>
					   <td>  <select name="category"  class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%" placeholder="<?php echo $matchup->cat_name;?>">
               				<?php for($i=0; $i<sizeof($category); $i++)  { ?>
              				<option <?php echo ($category[$i]['cat_id'] == $match['category'])?'selected="selected"':''; ?> value="<?php echo $category[$i]['cat_id'];?>"><?php echo $category[$i]['cat_name'];?></option>
               				 <?php }?>
         				 </select>	</td> 	
					    
					  </tr>

					   <tr>
					    <td>  <label for="title"> TIME :</label></td>
					   <td>  <input  type="time" name="time" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:60%" value="<?php echo $match['time']; ?>">
         					</td> 	
					    
					  </tr>

					  <tr>
					    <td>  <label for="title"> DATE :</label></td>
					   <td>  <input  type="date" name="date" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:60%" min="<?php echo date("Y-m-d"); ?>" value="<?php echo $match['date']; ?>" >
         					</td> 	
					 



					</table>
						
						 
						
						<?php echo form_hidden('match_id',$match_id); ?>
						<?php echo form_hidden('game',$game_id); ?>
						<?php echo form_hidden('name',$name); ?>
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Edit" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
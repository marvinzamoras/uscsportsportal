

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

					 <tr> <h2><?php  echo "Create ".$name." Match";?></h2></tr>
					

						 <tr>
					    <td>  <label for="title"> CATEGORY :</label></td>
					   <td>  <select name="category" id="category" class="col-12"  style="background-color:#ffffff; color:black; height:45px; width:90%">
               				<option value=" "><?php echo "Select:";?></option>
               				<?php for($i=0; $i<sizeof($category); $i++)  { ?>
              				<option value="<?php echo $category[$i]['cat_id'];?>"><?php echo $category[$i]['cat_name'];?></option>
               				 <?php }?>
         				 </select>	</td> 	
					    
					  </tr>

					  <tr>
					    <td> <label for="title">SCHOOL 1:</label>	</td>
					    <td>  
					    <select name="school1" class="col-12" id="school1" style="background-color:#ffffff; color:black; height:45px; width:90%" >
               				<option value=" "><?php echo "Select:";?></option>
               				<?php for($i=0; $i<sizeof($school); $i++)  { ?>
              				<option value="<?php echo $school[$i]['school_id'];?>"><?php echo $school[$i]['school_name'];?></option>
               				 <?php }?>
         				 </select>
					    </td>		
					    
					  </tr>
					 <tr>
					    <td>  <label for="title"> TEAM 1 :</label></td>
					    <td>
					    <select name="team1" class="col-12" id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%">
               				<option value=" "><?php echo "Select:";?></option>
               				<?php for($i=0; $i<sizeof($team); $i++)  { ?>
              				<option value="<?php echo $team[$i]['team_id'];?>"><?php echo $team[$i]['team_name'];?></option>
               				 <?php }?>
         				 </select>		
					    </td>
					  </tr>

					   <tr>
					    <td>  <label for="title"> SCHOOL 2 :</label></td>
					   		<td> <select name="school2" class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%">
               				<option value=" "><?php echo "Select:";?></option>
               				<?php for($i=0; $i<sizeof($school); $i++)  { ?>
              				<option value="<?php echo $school[$i]['school_id'];?>"><?php echo $school[$i]['school_name'];?>
               				 <?php }?>
         				 </select>	</td>		
					    
					  </tr>

					   <tr>
					    <td>  <label for="title"> TEAM 2 :</label></td>
					   <td> <select name="team2" class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%">
               				<option value=" "><?php echo "Select:";?></option>
               				<?php for($i=0; $i<sizeof($team); $i++)  { ?>
              				<option value="<?php echo $team[$i]['team_id'];?>"><?php echo $team[$i]['team_name'];?></option>
               				 <?php }?>
         				 </select>	</td> 	
					    <?php if (isset($same_team)){ ?>
							 <td><?php echo $same_team; }?></td>
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



					</table>
						
						  
						<?php echo form_hidden('team1_score',0); ?>
						<?php echo form_hidden('team2_score',0); ?>
						<?php echo form_hidden('team1_res',"Default"); ?>
						<?php echo form_hidden('team2_res',"Default"); ?>
						<?php echo form_hidden('game',$gameid); ?>
						<?php echo form_hidden('name',$name); ?>
						<br>
						<center><input class="EButton" type="submit" name="submit" value="ADD" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>

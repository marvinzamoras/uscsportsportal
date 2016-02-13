<input type="hidden" id="page-identifier" value="page-games"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $match['game_name']; ?></h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('match_admin/update'.'/'.$match_id); ?>
					 <table style="width:75%">

					 <tr> <h2><?php  echo "Update  Match";?></h2></tr>
					
					 <tr>
					    <td>  <label for="title"> Winner :</label></td>
					    <td>
         				 	<input type="radio" name="winner" value="team1"> <label for="title"><?php echo $team1['team_name'];?></label><br>
  							<input type="radio" name="winner" value="team2"> <label for="title"><?php echo $team2['team_name'];?></label><br>	
					    </td>
					  </tr>

					  <tr>
					    <td><label for="title"> <?php echo $school1['school_name'];?></label>	</td>
					    
					    
					  </tr>
					 <tr>
					    <td>  <label for="title"> <?php echo $team1['team_name'];?> score:</label></td>
					    <td><input  type="text" name="team1_score" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:90%"   ></td>
					  </tr>



					   <tr>
					    <td>  <label for="title"><?php echo $school2['school_name'];?>	</label></td>
					    
					    
					  </tr>
					 <tr>
					    <td>  <label for="title"> <?php echo $team2['team_name'];?> score:</label></td>
					    <td><input  type="text" name="team2_score" class="col-12" style="background-color:#ffffff; color:black; height:45px; width:90%"   ></td>
					  </tr>



					   
					  

					 



					</table>
						
						 
						
						<?php echo form_hidden('match_id',$match_id); ?>
						
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Update" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
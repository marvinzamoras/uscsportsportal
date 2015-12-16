

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
					    <td><?php $options = array(
							        'Singles' => 'Singles',
							        'Doubles' => 'Doubles',
							        'Groups' => 'Groups',
							        
							); 
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
							echo form_dropdown('team_cat', $options, 'Singles',$extra_attributes1);?></td>		
					    
					  </tr>
					  <tr>
					    <td> <label for="title">GAME CATEGORY :</label></td>
					    <td><?php $options = array(
							        'Badminton' => 'Badminton',
							        'Tennis' => 'Tennis',
							        'Basketball' => 'Basketball',
							        
							); 
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
							echo form_dropdown('game_cat', $options, 'Singles',$extra_attributes1);?>	</td>		
					    
					  </tr>
					  <tr>
					    <td> <label for="title">SCHOOL :</label>	</td>
					    <td>    <?php $options = array(
						''      								=> 'School',
				        'School of Arts and Sciences'       	=> 'School of Arts and Sciences',
				        'School of Engineering'         		=> 'School of Engineering',
				        'School of Education'        			=> 'School of Education',
				        'School of Healthcare Professions'  	=> 'School of Healthcare Professions',
				        'School of Business and Economics'  	=> 'School of Business and Economics',
				        'School of Law and Governance'      	=> 'School of Law and Governance',
				        'School of Architecture and Fine Arts'  => 'School of Architecture and Fine Arts'
				);
					    $extra_attributes1='class="col-12" id="dropy" style="background-color:#ffffff; color:black; height:45px; width:90%"';
							echo form_dropdown('school_id', $options, 'School of Arts and Sciences',$extra_attributes1);?>	</td>		
					    
					  </tr>
					 <tr>
					    <td>  <label for="title">NAME :</label></td>
					    <td><input type="text" name="team_name" size="52" placeholder="" class="focus"/>	</td>		
					    
					  </tr>
					</table>
						
						  
						
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Post" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
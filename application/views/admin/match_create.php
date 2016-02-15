<<<<<<< HEAD

<script type="text/javascript">
	$(document).ready(function() {
                
                $(".1 td").hide();
                $(".2 td").hide();
                $(".3 td").hide();

                $('#category').change(function () {
                    var val = $(this).val();
                    if (val == '1') {
                         $(".1 td").show();
                         $(".2 td").hide();
                         $(".3 td").hide();

                    } else if(val == '2') {
                         $(".1 td").hide();
                         $(".2 td").show();
                         $(".3 td").hide();
                    }else {
                         $(".1 td").hide();
                         $(".2 td").hide();
                         $(".3 td").show();
                    }
                    });
                });
    </script>
=======
<input type="hidden" id="page-identifier" value="page-games"/>
>>>>>>> bf1688afb62f7ca5297b732518d3723e5f15fae2
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $game['game_name']; ?></h1>
		</div>
	</section>
	<section>
        <div class="container">
            <div class="col-12">
                <div class="match">

					<?php echo form_open('match_admin/createMatch/'.$game['game_id']); ?>
					 <table style="width:75%">

					 <tr> <h2><?php  echo "Create ".$game['game_name']." Match";?></h2></tr>
					

						<tr>
						 	
					    <td>  <label for="title"> CATEGORY :</label></td>
					   <td>  <select name="category" id="category" class="col-12"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				<option value=" "><?php echo "Select:";?></option>
               				<?php for($i=0; $i<sizeof($category); $i++)  { ?>
              				<option value="<?php echo $category[$i]['cat_id'];?>"><?php echo $category[$i]['cat_name'];?></option>
               				 <?php }?>
         				 </select>	</td> 	
					    <?php echo validation_errors();?>
					  </tr>
					   <tr>
						<?php if (isset($err_team)){ ?>
						<td><?php echo $err_team;}?> </td> </tr>
					 
					 <tr class="1">
					    <td>  <label for="title"> TEAM 1 :</label></td>
					    <td>
					    <select name="team11" class="col-12"  id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				
               				<?php if($men!=False){  
               					$size=sizeof($men);
               					for($i=0; $i<$size; $i++){ ?>
              				<option value="<?php echo $men[$i]['team_id'];?>"><?php echo $men[$i]['team_name'];?></option>
               				 <?php }?>
               				 <?php }else { echo "<option>No men's team</option>";}?>
         				 </select>		
					    </td>
					  </tr>
					  
					   <tr class="2">
					    <td>  <label for="title"> TEAM 1 :</label></td>
					    <td>
					    <select name="team12" class="col-12"  id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				
               				<?php if($women!=False){ 
               					$size=sizeof($women);
               					for($i=0; $i<$size; $i++){ ?>
              				<option value="<?php echo $women[$i]['team_id'];?>"><?php echo $women[$i]['team_name'];?></option>
               				 <?php }?>
               				 <?php }else{ echo "<option>No women's team</option>";}?>
         				 </select>		
					    </td>
					  </tr>


					   <tr class="3">
					    <td>  <label for="title"> TEAM 1 :</label></td>
					    <td >
					    <select name="team13" class="col-12"  id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				
               				<?php  if($mixed!=False){ 
               					$size=sizeof($mixed);
               					for($i=0; $i<$size; $i++)  { ?>
              				<option value="<?php echo $mixed[$i]['team_id'];?>"><?php echo $mixed[$i]['team_name'];?></option>
               				 <?php }?>
               				 <?php }else { echo "<option>No mixed team</option>";}?>
         				 </select>		
					    </td>
					  </tr>

					   <tr class="1">
					    <td>  <label for="title"> TEAM 2 :</label></td>
					    <td>
					    <select name="team21" class="col-12"  id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				
               				<?php if($men!=False){  
               					$size=sizeof($men);
               					for($i=0; $i<$size; $i++){ ?>
              				<option value="<?php echo $men[$i]['team_id'];?>"><?php echo $men[$i]['team_name'];?></option>
               				 <?php }?>
               				 <?php }else { echo "<option>No men's team</option>";}?>
         				 </select>		
					    </td>
					  </tr>
					  
					   <tr class="2">
					    <td>  <label for="title"> TEAM 2 :</label></td>
					    <td>
					    <select name="team22" class="col-12"  id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				
               				<?php if($women!=False){ 
               					$size=sizeof($women);
               					for($i=0; $i<$size; $i++){ ?>
              				<option value="<?php echo $women[$i]['team_id'];?>"><?php echo $women[$i]['team_name'];?></option>
               				 <?php }?>
               				 <?php }else{ echo "<option>No women's team</option>";}?>
         				 </select>		
					    </td>
					  </tr>


					   <tr class="3">
					    <td>  <label for="title"> TEAM 2 :</label></td>
					    <td >
					    <select name="team23" class="col-12"  id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				
               				<?php  if($mixed!=False){ 
               					$size=sizeof($mixed);
               					for($i=0; $i<$size; $i++)  { ?>
              				<option value="<?php echo $mixed[$i]['team_id'];?>"><?php echo $mixed[$i]['team_name'];?></option>
               				 <?php }?>
               				 <?php }else { echo "<option>No mixed team</option>";}?>
         				 </select>		
					    </td>
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
						<?php echo form_hidden('game',$game['game_id']); ?>
						
						<br>
						<center><input class="EButton" type="submit" name="submit" value="ADD" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>



	
    
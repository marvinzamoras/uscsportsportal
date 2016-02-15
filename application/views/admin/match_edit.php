<<<<<<< HEAD
<script type="text/javascript">
	$(document).ready(function() {
                

      var cat=<?php echo json_encode($match['category']); ?>;
     
    
               if(cat== '1'){
               		$(".1 td").show();
                    $(".2 td").hide();
                    $(".3 td").hide();
                 } else if(cat == '2') {
                         $(".1 td").hide();
                         $(".2 td").show();
                         $(".3 td").hide();
                 }else {
                         $(".1 td").hide();
                         $(".2 td").hide();
                         $(".3 td").show();
                    }

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

					<?php echo form_open('match_admin/edit'.'/'.$match['match_id'].'/'.$game['game_id']); ?>
					 <table style="width:75%">

					 <tr> <h2><?php  echo "Edit ".$game['game_name']." Match";?></h2></tr>
					
					 
					<tr>
					    <td>  <label for="title"> CATEGORY :</label></td>
					   <td>  <select name="category"  class="col-12" id="category" style="background-color:#ffffff; color:black; height:45px; width:90%" placeholder="<?php echo $matchup->cat_name;?>">
               				<?php for($i=0; $i<sizeof($category); $i++)  { ?>
              				<option <?php echo ($category[$i]['cat_id'] == $match['category'])?'selected="selected"':''; ?> value="<?php echo $category[$i]['cat_id'];?>"><?php echo $category[$i]['cat_name'];?></option>
               				 <?php }?>
         				 </select>	</td> 	
					    
					  </tr> 


 					<tr class="1">
					    <td>  <label for="title"> TEAM 1 :</label></td>
					    <td>
					    <select name="team11" class="col-12"  id="droppy"  style="background-color:#ffffff; color:black; height:45px; width:90%;">
               				
               				<?php if($men!=False){  
               					$size=sizeof($men);
               					for($i=0; $i<$size; $i++){ ?>
              				<option 
              				<?php if ($men[$i]['team_id'] == $match['team1']) echo 'selected="selected"';?>value="<?php echo $men[$i]['team_id'];?>"><?php echo $men[$i]['team_name'];?></option>
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
              				<option <?php echo ($women[$i]['team_id']== $match['team1'])?'selected="selected"':'';?>value="<?php echo $women[$i]['team_id'];?>"><?php echo $women[$i]['team_name'];?></option>
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
              				<option <?php echo($mixed[$i]['team_id']== $match['team1'])?'selected="selected"':'';?>value="<?php echo $mixed[$i]['team_id'];?>"><?php echo $mixed[$i]['team_name'];?></option>
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
              				<option <?php echo ($men[$i]['team_id']== $match['team2'])?'selected="selected"':'';?>value="<?php echo $men[$i]['team_id'];?>"><?php echo $men[$i]['team_name'];?></option>
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
              				<option <?php echo ($women[$i]['team_id']== $match['team2'])?'selected="selected"':'';?>value="<?php echo $women[$i]['team_id'];?>"><?php echo $women[$i]['team_name'];?></option>
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
              				<option <?php echo ($mixed[$i]['team_id']== $match['team2'])?'selected="selected"':'';?>value="<?php echo $mixed[$i]['team_id'];?>"><?php echo $mixed[$i]['team_name'];?></option>
               				 <?php }?>
               				 <?php }else { echo "<option>No mixed team</option>";}?>
         				 </select>		
					    </td>
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
						
						 
						
						<?php echo form_hidden('match_id',$match['match_id']); ?>
						
						
						<br>
						<center><input class="EButton" type="submit" name="submit" value="Edit" /></center>
					<?php echo form_close(); ?>


                 </div>
            </div>
        </div>
	</section>
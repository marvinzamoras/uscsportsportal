<input type="hidden" id="page-identifier" value="page-games"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $game['game_name']; ?></h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container" style="width:100%">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab"><?php echo  $game['game_name']; ?> </div>
			<div class="match" >
<<<<<<< HEAD
				
				<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/match_admin/createMatch/'.$game['game_id']);?>">ADD MATCH</a></button>
				</div>
=======

				<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/match_admin/createMatch');?>">ADD MATCH</a></button>
				</div>

				<!-- <?php echo anchor('/match_admin/createMatch'. '/'.$name. '/'.$gameid , '<h3> <u> Add Match </u> </h3>' ); ?> -->

>>>>>>> bf1688afb62f7ca5297b732518d3723e5f15fae2

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt"  style="width:100%;">
						
<<<<<<< HEAD
					
=======
					 <thead>
						<tr class="tr-head">
							<td>School</td>
							<td>Score</td>
							<td>Team</td>
							<td>Date</td>
							<td>Time</td>
							<td>Team</td>
							<td>Score</td>
							<td>School</td>
							<td>Category</td>
							<td>Update Score</td>
							<td>Edit</td>
							
						</tr>
						</thead>

>>>>>>> bf1688afb62f7ca5297b732518d3723e5f15fae2

						<?php 

						if($match!=False){
							$size=sizeof($match);$j=0;
							for($i=0; $i< $size; $i++){?>
						    <?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
								<?php if($date>date('Y-m-d')  ){?>
								
								<?php if($j==0){ ?>
	 					
								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								<td>Category</td>
								<td>Update Score</td>
								<td>Edit</td>
								<td>Cancel</td>





								</tr>
						<?php $j++;} ?>
						</tbody>
						<tr>
							
							<td ><?php echo $match[$i]['team1_score'];?></td>
							<td ><?php echo $match[$i]['t1']['team_name'];?></td>
							<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
							<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
							<td ><?php echo $match[$i]['t2']['team_name'];?></td>
							<td ><?php echo $match[$i]['team2_score'];?></td>
							
							<td ><?php echo $match[$i]['cat_name'];?></td>
							
							
							<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
							
							<?php echo form_hidden('game_id',$game['game_id']); ?>
							<td><a href = "<?php echo base_url('/match_admin/update/'.$match[$i]['match_id']);?>" onclick = "javascript:return confirm('Are you sure you want to update this match?');"><input class='EButton' type ='button' value = 'Update'/></a></td>

							<td><a href = "<?php echo base_url('/match_admin/edit/'.$match[$i]['match_id']. '/'.$game['game_id']);?>" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><input class='DButton' type ='button' value = 'Edit'/></a></td>
							
							<td><a href = "<?php echo base_url('/match_admin/cancel/'.$match[$i]['match_id'].'/'.$game['game_id']);?>" onclick = "javascript:return confirm('Are you sure you want to cancel this match?');"><input class='<?php if($match[$i]['status']== "Official") {echo "DButton";}else {echo "EButton";}?>' type ='button'  value = '<?php if($match[$i]['status']== "Official") {echo "Cancel";}else {echo "Undo";}?>'/></a></td>
						</tr>
						</tbody>
						
						<?php } }}else{?>

								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								<td>Category</td>
								<td>Update Score</td>
								<td>Edit</td>
								<td>Cancel</td>





								</tr>
						<tbody><tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						</tbody>
						<?php }?>
					 </table>

					 <br></br>
					<table class="table-striped-dflt"  style="width:100%;">
						
					

						<?php 

						if($match!=False){ 
							$size=sizeof($match);$j=0;
							for($i=0; $i< $size; $i++){ ?>
						    <?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
								<?php if($date<date('Y-m-d')  ){?>
								
								<?php if($j==0){ ?>
	 					
								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								<td>Category</td>
								<td>Update Score</td>
								<td>Edit</td>
								<td>Cancel</td>





								</tr>
						<?php $j++;} ?>
						</tbody>
						<tr>
							
							<td ><?php echo $match[$i]['team1_score'];?></td>
							<td ><?php echo $match[$i]['t1']['team_name'];?></td>
							<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
							<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
							<td ><?php echo $match[$i]['t2']['team_name'];?></td>
							<td ><?php echo $match[$i]['team2_score'];?></td>
							
							<td ><?php echo $match[$i]['cat_name'];?></td>
							
							
							<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
							<?php echo form_hidden('status',$match[$i]['status']); ?>
							
							<?php echo form_hidden('game_id',$game['game_id']); ?>
							<td><a href = "<?php echo base_url('/match_admin/update/'.$match[$i]['match_id']);?>" onclick = "javascript:return confirm('Are you sure you want to update this match?');"><input class='EButton' type ='button' value = 'Update'/></a></td>

							<td><a href = "<?php echo base_url('/match_admin/edit/'.$match[$i]['match_id']. '/'.$game['game_id']);?>" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><input class='DButton' type ='button' value = 'Edit'/></a></td>

							<td><a href = "<?php echo base_url('/match_admin/cancel/'.$match[$i]['match_id'].'/'.$game['game_id']);?>" onclick = "javascript:return confirm('Are you sure you want to cancel this match?');"><input class='<?php if($match[$i]['status']== "Official") {echo "DButton";}else {echo "EButton";}?>' type ='button'  value = '<?php if($match[$i]['status']== "Official") {echo "Cancel";}else {echo "Undo";}?>'/></a></td>
						</tr>
						</tbody>
						
						<?php }}}?>
					 </table>
					
				

			</div>
			
		</div>
			
		</div>
	</section>
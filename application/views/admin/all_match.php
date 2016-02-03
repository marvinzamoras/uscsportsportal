<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $name; ?></h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab"><?php echo  $name; ?></div>
			<div class="match">
				<?php echo anchor('/match_admin/createMatch'. '/'.$name. '/'.$gameid , '<h3> <u> Add Match </u> </h3>' ); ?>

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt">
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
							<td>Edit</td>
							
							
						</tr>

						<?php 

						if($match!=False): 
							$size=sizeof($match);
							for($i=0; $i< $size; $i++){?>
						<tr>
							<td ><?php echo $school1[$i];?> </td>
							<td ><?php echo $match[$i]['team1_score'];?></td>
							<td ><?php echo $team1[$i];?></td>
							<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
							<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
							<td ><?php echo $team2[$i];?></td>
							<td ><?php echo $match[$i]['team2_score'];?></td>
							<td ><?php echo $school2[$i];?></td>
							<td ><?php echo $match[$i]['cat_name'];?></td>
							
							
							<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
							<?php echo form_hidden('game_name',$name); ?>
							<?php echo form_hidden('gameid',$gameid); ?>
							<td><a href = "<?php echo base_url('/match_admin/edit/'.$match[$i]['match_id']. '/'.$name. '/'.$gameid);?>" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><input class='DButton' type ='button' value = 'Edit'/></a></td>
							
						</tr>
						<?php };?>
						<?php else:?>
						<tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						<?php endif;?>
					 </table>
					 <p></p>
					<div class="pagination">
					<ul>
					
					</ul>
					</div>
					
				

			</div>
			
		</div>
			
		</div>
	</section>
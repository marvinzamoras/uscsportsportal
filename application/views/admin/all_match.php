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
				<?php echo anchor('/match_admin/createMatch', '<h3> <u> Add Match </u> </h3>' ); ?>

					
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

						<?php if(count($match)): foreach ($results as $data): ?>
						<tr>
							<td ><?php echo $data->school1;?></td>
							<td ><?php echo $data->team1_score;?></td>
							<td ><?php echo $data->team1;?></td>
							<td ><?php echo $data->date;?></td>
							<td ><?php echo $data->time;?></td>
							<td ><?php echo $data->team2;?></td>
							<td ><?php echo $data->team2_score;?></td>
							<td ><?php echo $data->school2;?></td>
							<td ><?php echo $data->category;?></td>
							
							
							<?php echo form_hidden('match_id',$data->match_id); ?>
							<td><a href = "<?php echo base_url('/match_admin/edit/'). '/'.$data->match_id ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><input class='DButton' type ='button' value = 'Edit'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						<?php endif;?>
					 </table>
					 <p></p>
					<div class="pagination">
					<ul>
					<?php echo $links; ?>
					</ul>
					</div>
					
				

			</div>
			
		</div>
			
		</div>
	</section>
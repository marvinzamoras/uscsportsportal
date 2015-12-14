<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Teams</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">teams</div>
			<div class="match">
				<?php echo anchor('/team_admin/createTeam', '<h3> <u> Add Team </u> </h3>' ); ?>

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt">
						<tr class="tr-head">
							<td>Team Name</td>
							<td>Team Category</td>
							<td>Game Category</td>
							<td>School</td>
							<td>Wins</td>
							<td>Losses</td>
							<td>Rank</td>
							<td>Edit</td>
						</tr>
						<?php if(count($teams)): foreach ($results as $data): ?>
						<tr> 
							<td class="td-head"><?php echo $data->team_name;?></td>
							<td><?php echo $data->team_cat;?></td>
							<td><?php echo $data->game_cat;?></td>
							<td><?php echo $data->school_id;?></td>
							<td><?php echo $data->wins;?></td>
							<td><?php echo $data->loss;?></td>
							<td><?php echo $data->rank;?></td>
							<?php echo form_hidden('team_id',$data->team_id); ?>
							<td><a href = "<?php echo base_url('/team_admin/delete/'). '/'.$data->team_id ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><input class='EButton' type ='button' value = 'Edit'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td colspan="3">We could not find any teams.</td>
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
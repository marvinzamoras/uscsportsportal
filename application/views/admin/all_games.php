<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Games</h1>
		</div>
	</section>

<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">games</div>
			<div class="match">
				<?php echo anchor('/game_admin/createGame', '<h3> <u> Add Game </u> </h3>' ); ?>

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt">
						<tr class="tr-head">
							<td>Game Name</td>
							<td>View</td>
							<td>Edit</td>
							
						</tr>

						<?php if(count($games)): foreach ($results as $data): ?>
						<tr>
							<td class="td-head"><?php echo $data->game_name;?></td>
							<?php echo form_hidden('game_id',$data->game_id); 
							$game =$data->game_id; ?>

							<td><a href = "<?php echo base_url('/match_admin/index/'). '/'.$game.'/'.$data->game_name;?>"><input class='EButton' type ='button' value = 'View'/></a></td>
							<td><a href = "<?php echo base_url('/game_admin/edit/'). '/'.$data->game_id ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><input class='DButton' type ='button' value = 'Edit'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td colspan="3">We could not find any games.</td>
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
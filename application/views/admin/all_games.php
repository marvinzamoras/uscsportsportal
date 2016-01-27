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
					 <table class="table-striped-dflt" id = "example">
					 <thead>
						<tr class="tr-head">
							<th>Game Name</th>
							<th>View</th>
							<th>Edit</th>
							
						</tr>
					</thead>
						<?php if(count($games)): foreach ($games as $d): ?>
						<tr>
							<td class="td-head"><?php echo $d['game_name'];?></td>
							<?php echo form_hidden('game_id',$d['game_id']); 
							$game =$d['game_id']; ?>

							<td><a href = "<?php echo base_url('/match_admin/index/'). '/'.$game.'/'.$d['game_name'];?>"><input class='EButton' type ='button' value = 'View'/></a></td>
							<td><a href = "<?php echo base_url('/game_admin/edit/'). '/'.$d['game_id'] ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><input class='DButton' type ='button' value = 'Edit'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td>We could not find any games.</td>
						</tr>
						<?php endif;?>
					 </table>
					 <p></p>
					
					
				

			</div>
			
		</div>
			
		</div>
	</section>
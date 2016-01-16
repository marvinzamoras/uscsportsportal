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
				<center>
				<?php if(count($games)): foreach ($results as $data): ?>
					<div class ="col-6">
					<a href = "<?php echo base_url('/game_admin/edit/'). '/'.$data->game_id ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');" class="btn btn-bordered"><?php echo $data->game_name;?></a>
					</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</center>
					
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
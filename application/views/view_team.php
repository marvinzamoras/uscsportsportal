<input type="hidden" id="page-identifier" value="page-teams"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Teams</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			
			<article class="blog-post">
				<div class="post-img"><?php echo $results['school_logo'];?>
				</div>
				<div class="col-12">
					<div class="post-title">
							<h1><?php echo $results['school'] ;?></h1>
							<p><?php echo $results['school_desc'] ;?></p>
					</div>
					<div class ="post-content">
						<?php foreach($results['games'] as $g):?>

					<!-- TABLE STRIPED -->
					<div class="col-12">
					  <table class = "table-striped-dflt">
					  <thead>
						<tr class="tr-head">
							<th><?php echo $g->game_name;?></th>
						</tr>
					   </thead>
					   <tbody>
						<?php foreach($results['team'] as $t):?>
						<tr>
						<td><?php if($g->game_id == $t->game_cat) echo $t->team_name." (".$t->cat_name.")";?></td>
						<tr>
					<?php endforeach;?>
						</tbody>
					 </table>
					 <p></p>
					</div>
				<?php endforeach;?>
					</div>
				</div>
						
			</article>
		</div>
			
		
	</section>
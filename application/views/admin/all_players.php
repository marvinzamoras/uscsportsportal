<input type="hidden" id="page-identifier" value="page-teams"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Players</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">players</div>
			<div class="match">
				
					<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/player_admin/createPlayer');?>">ADD A PLAYER</a></button>
				</div>
					<!-- TABLE STRIPED -->
					 <table id = "example" class = "table-striped-dflt">
					 <thead>
						<tr class="tr-head">
							<th>Player Name</th>
							<th>Team Name</th>
							<th>School</th>
							<th></th>
							<th></th>
						</tr>
					 </thead>
					 <tbody>
						<?php if(count($players)): foreach ($players as $d): ?>
						<tr> 
							<td class="td-head"><a href = "<?php echo base_url('/player_admin/edit/'). '/'.$d['player_id'] ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><?php echo $d['player_name'];?><a></td>
							<td><?php echo $d['team_name'];?></td>
							<td><?php echo $d['school_name'];?></td>
							<?php echo form_hidden('player_id',$d['player_id']); ?>
							<td><a href = "<?php echo base_url('/player_admin/edit/').'/'.$d['player_id'] ;?>" title="Edit Player" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><img src="<?php  echo base_url('/assets/css/images/edit.gif');?>" hspace="2" border="0" alt="Edit" /></a></td>							

							<td><a href = "<?php echo base_url('/player_admin/delete/').'/'.$d['player_id'] ;?>" title="Delete Player" onclick = "javascript:return confirm('Are you sure you want to delete this?');"><img src="<?php  echo base_url('/assets/css/images/delete.png');?>" hspace="2" border="0" alt="Edit" /></a></td>		
								
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td>We could not find any teams.</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<?php endif;?>
						</tbody>
					 </table>
					<p></p>
					
				

			</div>
			
		</div>
			
		</div>
	</section>
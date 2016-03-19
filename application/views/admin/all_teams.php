<input type="hidden" id="page-identifier" value="page-teams"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Teams</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<center>
				<?php
					$message = $this->session->flashdata('message');
					if (isset($message)) {
					echo '<div class="alert alert-info"><font size="5px"><font color="#a72121">' . $message . '</font></font></div>';
					$this->session->unset_userdata('message');
					}
				?>
			</center>
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">teams</div>
			<div class="match">
				
					<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/team_admin/createTeam');?>">ADD A TEAM</a></button>
				</div>
					<!-- TABLE STRIPED -->
					 <table id = "example" class = "table-striped-dflt">
					 <thead>
						<tr class="tr-head">
							<th>Team Name</th>
							<th>Team Category</th>
							<th>Game Category</th>
							<th>School</th>
							<th>Wins</th>
							<th>Losses</th>
							<th></th>
						</tr>
					 </thead>
					 <tbody>
						<?php if(count($teams)): foreach ($teams as $d): ?>
						<tr> 
							<td class="td-head"><a href = "<?php echo base_url('/team_admin/edit/'). '/'.$d['team_id'] ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><?php echo $d['team_name'];?><a></td>
							<td><?php echo $d['cat_name'];?></td>
							<td><?php echo $d['game_name'];?></td>
							<td><?php echo $d['school_name'];?></td>
							<td><?php echo $d['wins'];?></td>
							<td><?php echo $d['loss'];?></td>
							<?php echo form_hidden('team_id',$d['team_id']); ?>
						
							<td><a href = "<?php echo base_url('/team_admin/edit/').'/'.$d['team_id'] ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');" title="Edit Team"><img src="<?php  echo base_url('/assets/css/images/edit.gif');?>" hspace="2" border="0" alt="Edit" /></a></td>							
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td>We could not find any teams.</td>
							<td></td>
							<td></td>
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
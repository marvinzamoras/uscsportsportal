<input type="hidden" id="page-identifier" value="page-games"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Games</h1>
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
			<div class="tab">games</div>
			<div class="match">
				
				
				<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/game_admin/createGame');?>">ADD A GAME</a></button>
				</div>
					
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

							
							<td><a href = "<?php echo base_url('/match_admin/index/').'/'.$game;?>" title="View Game"><img src="<?php  echo base_url('/assets/css/images/view.gif');?>" hspace="2" border="0" alt="View" /></a></td>
							
							<td><a href = "<?php echo base_url('/game_admin/edit/').'/'.$d['game_id'] ;?>" title="Edit Game" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><img src="<?php  echo base_url('/assets/css/images/edit.gif');?>" hspace="2" border="0" alt="Edit" /></a></td>	
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
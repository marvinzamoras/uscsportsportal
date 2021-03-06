
<input type="hidden" id="page-identifier" value="page-games"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $game['game_name']; ?></h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container" style="width:100%">
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
			<div class="tab"><?php echo  $game['game_name']; ?> </div>
			<div class="match" >
			

			<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/match_admin/createMatch/'.$game['game_id']);?>">ADD MATCH</a></button>
			</div>

					
					<div id="tab" class="tabs">
						<ul class="clearfix">
			            <li><a href="#section-1" >Recent Matches</a></li>
			            <li><a href="#section-2" >Upcoming Matches</a></li>
						</ul>
					<!-- TABLE STRIPED -->
					<div id="section-2" class="tab-content ">
					 <table class="table-striped-dflt"  style="width:100%;">
						
					<tr class='tr-head'>
								<div><h2 style="color:black;">Upcoming Matches</h2></div>
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								<td>Category</td>
								<td></td>
								<td></td>
								<td></td>
					</tr>

						<?php 
						
						if($match!=False){
							$size=sizeof($match);$j=0;
							for($i=0; $i< $size; $i++){?>
						    <?php $d=date_create($match[$i]['date']); $date = date_format($d,'Y-m-d');?>
								<?php if($date>date('Y-m-d')){  $j++;?>
								
								
						
						<tr>
							
							<td ><?php echo $match[$i]['team1_score'];?></td>
							<td ><?php echo $match[$i]['t1']['team_name'];?></td>
							<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
							<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
							<td ><?php echo $match[$i]['t2']['team_name'];?></td>
							<td ><?php echo $match[$i]['team2_score'];?></td>
							
							<td ><?php echo $match[$i]['cat_name'];?></td>
							
							
							<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
							
							<?php echo form_hidden('game_id',$game['game_id']); ?>
							
							<td><a href="<?php echo base_url('/match_admin/update/'.$match[$i]['match_id']); ?>" title="Update Score" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><img src="<?php  echo base_url('/assets/css/images/update.gif');?>" hspace="2" border="0" alt="Update Score" /></a></td>
							
							<td><a href="<?php echo base_url('/match_admin/edit/'.$match[$i]['match_id']. '/'.$game['game_id']); ?>" title="Edit Match Details" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><img src="<?php  echo base_url('/assets/css/images/edit.gif');?>" hspace="2" border="0" alt="Edit" /></a></td>							
							
							<td><a href="<?php echo base_url('/match_admin/cancel/'.$match[$i]['match_id'].'/'.$game['game_id']); ?>"  title="<?php if($match[$i]['status']== "Official") {echo "Cancel";}else{echo "Undo";}?>" onclick = "javascript:return confirm('Are you sure you want to cancel this match?');"> <img src="<?php if($match[$i]['status']== "Official") {echo base_url('/assets/css/images/cancel.gif');}else{echo base_url('/assets/css/images/undo.gif');}?>" hspace="2" border="0"/></a></td>
						</tr>
						</tbody>
						
						<?php } }
						if($j==0){?>
							<tbody><tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						</tbody>
						<?php }
						}else{?>
								
								
						<tbody><tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						</tbody>
						<?php }?>
					 </table>
					</div>
					 
					<div id="section-1" class="tab-content ">
					<table class="table-striped-dflt"  style="width:100%;">
						
								<div><h2 style="color:black;">Recent Matches</h2></div>
								<tr class='tr-head'>

								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								<td>Category</td>
								<td></td>
								<td></td>
								<td></td>





								</tr>

						<?php 
						
						if($match!=False){ 
							$size=sizeof($match);$j=0;
							for($i=0; $i< $size; $i++){ ?>
						    <?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
								<?php if($date<=date('Y-m-d')  ){ $j++;?>
								
								
						</tbody>
						<tr>
							
							<td ><?php echo $match[$i]['team1_score'];?></td>
							<td ><?php echo $match[$i]['t1']['team_name'];?></td>
							<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
							<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
							<td ><?php echo $match[$i]['t2']['team_name'];?></td>
							<td ><?php echo $match[$i]['team2_score'];?></td>
							
							<td ><?php echo $match[$i]['cat_name'];?></td>
							
							
							<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
							<?php echo form_hidden('status',$match[$i]['status']); ?>
							
							<?php echo form_hidden('game_id',$game['game_id']); ?>
							<td><a href="<?php echo base_url('/match_admin/update/'.$match[$i]['match_id']); ?>" title="Update Score" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><img src="<?php  echo base_url('/assets/css/images/update.gif');?>" hspace="2" border="0" alt="Update Score" /></a></td>
							
							<td><a href="<?php echo base_url('/match_admin/edit/'.$match[$i]['match_id']. '/'.$game['game_id']); ?>" title="Edit Match Details" onclick = "javascript:return confirm('Are you sure you want to edit this match?');"><img src="<?php  echo base_url('/assets/css/images/edit.gif');?>" hspace="2" border="0" alt="Edit" /></a></td>							
							
							<td><a href="<?php echo base_url('/match_admin/cancel/'.$match[$i]['match_id'].'/'.$game['game_id']); ?>"  title="<?php if($match[$i]['status']== "Official") {echo "Cancel";}else{echo "Undo";}?>" onclick = "javascript:return confirm('Are you sure you want to cancel this match?');"> <img src="<?php if($match[$i]['status']== "Official") {echo base_url('/assets/css/images/cancel.gif');}else{echo base_url('/assets/css/images/undo.gif');}?>" hspace="2" border="0"/></a></td>
						</tr>
						</tbody>
						<?php } }
						if($j==0){?>
						<tbody><tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						</tbody>
						<?php }

						}else{?>
								
								
						<tbody><tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						</tbody>
						<?php }?>
					 </table>
					 </div>
					</div>

			</div>
			
		</div>
			
		</div>
	</section>
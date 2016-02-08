<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title"><?php echo $name; ?></h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab"><?php echo  $name; ?> </div>
			<div class="match">
				
			<div><h4><?php   echo $game['game_desc']; ?></h4></div>
					<!-- TABLE STRIPED -->
					
					<table   class="table-striped-dflt" >

						
						
						<?php 
						if($match!=False){ 
							$size=sizeof($match);
							for($j=0,$i=0; $i< $size; $i++){?>
							<?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
							<?php if($date<date('Y-m-d')  ){?>
							
							<?php if($j==0){ ?>
 					
							<tr class='tr-head'>
							<td>School</td>
							<td>Score</td>
							<td>Team</td>
							<td>Date</td>
							<td>Time</td>
							<td>Team</td>
							<td>Score</td>
							<td>School</td>
							<td>Category</td></tr>
							<?php $j++;} ?>
							
							
						<tr>
							<td ><?php echo $match[$i]['s1']['school_name'];?> </td>
							<td ><?php echo $match[$i]['team1_score'];?></td>
							<td ><?php echo $match[$i]['t1']['team_name'];?></td>
							<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
							<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
							<td ><?php echo $match[$i]['t2']['team_name'];?></td>
							<td ><?php echo $match[$i]['team2_score'];?></td>
							<td ><?php echo $match[$i]['s2']['school_name'];?> </td>
							<td ><?php echo $match[$i]['cat_name'];?></td>
							
							
							<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
							<?php echo form_hidden('game_name',$name); ?>
							<?php echo form_hidden('gameid',$gameid); ?>
							
						</tr>
						<?php }?>
						
						<?php }?>
						<?php }else{?>
							<tr class='tr-head'>
							<td>School</td>
							<td>Score</td>
							<td>Team</td>
							<td>Date</td>
							<td>Time</td>
							<td>Team</td>
							<td>Score</td>
							<td>School</td>
							<td>Category</td></tr>
						<tr>
							<td colspan="3">We could not find any matches.</td>
						</tr>
						<?php }?>
					 </table>

					 <p></p>
					<div class="pagination">
					<ul>
					
					</ul>
					</div>
					
				

			</div>

			<div class="match">
				

					<table    class="table-striped-dflt" >

					

						
					 	<?php 
						if($match!=False){
							$size=sizeof($match);
							for($j=0,$i=0; $i< $size; $i++){?>
							<?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
							<?php if($date>date('Y-m-d') ){?>

							<?php if($j==0){ ?>

							<h3>Up comming matches</h3>				
					 	<thead>
							<tr class='tr-head'>
							<td>School</td>
							<td>Score</td>
							<td>Team</td>
							<td>Date</td>
							<td>Time</td>
							<td>Team</td>
							<td>Score</td>
							<td>School</td>
							<td>Category</td></tr>
						</thead>	
							<?php $j++;} ?>

					</tbody>		
						<tr>
							<td ><?php echo $school1[$i];?> </td>
							<td ><?php echo $match[$i]['team1_score'];?></td>
							<td ><?php echo $team1[$i];?></td>
							<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
							<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
							<td ><?php echo $team2[$i];?></td>
							<td ><?php echo $match[$i]['team2_score'];?></td>
							<td ><?php echo $school2[$i];?></td>
							<td ><?php echo $match[$i]['cat_name'];?></td>
							
							
							<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
							<?php echo form_hidden('game_name',$name); ?>
							<?php echo form_hidden('gameid',$gameid); ?>
							
						</tr>
						</tbody>
						<?php }?>
					
						
						<?php }?>
						
					<?php }?>
					 </table>

					 <p></p>
					
					
				

			</div>
			
		</div>
			
		</div>
	</section>
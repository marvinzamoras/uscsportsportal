<input type="hidden" id="page-identifier" value="page-games"/>
<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('game/index','Game and Matches');?></li>
		</ul>
		
		<h1 class="blog-title">Game and Matches</h1>
		</div>
</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="club">
		<div class="container">
			<!-- POST -->
			<article class="club-post">
				<div class="club-content">
					<div class="img-wrap col-3">
						<div class="bot-name">
						<h3><?php echo $name; ?></h3>
						</div>
					</div>
					<div class="post-content">
					<p class="col-9">
					<?php echo $game['game_desc'];?>
					</p>
					</div>
				<!-- TABS -->
			<div id="tab" class="tabs">
				<ul class="clearfix">
	            <li><a href="#section-1" >Current Matches</a></li>
	            <li><a href="#section-2" >Upcoming Matches</a></li>
				</ul>
			
			
				<div id="section-1" class="tab-content ">
					<table  class="table-striped-dflt" >

							
							
							<?php 
							echo sizeof($match);
							if($match!=False){ 
								$size=sizeof($match);
								for($j=0,$i=0; $i< $size; $i++){?>
								<?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
								<?php if($date<date('Y-m-d')  ){?>
								
								<?php if($j==0){ ?>
	 					
								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								
								<td>Category</td></tr>
								<?php $j++;} ?>
								
								
							<tr>
								
								<td ><h3><b><?php echo $match[$i]['team1_score'];?><b></h3></td>
								<td ><?php echo $match[$i]['t1']['team_name'];?></td>
								<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
								<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
								<td ><?php echo $match[$i]['t2']['team_name'];?></td>
								<td ><h3><b><?php echo $match[$i]['team2_score'];?></b></h3></td>
								
								<td ><?php echo $match[$i]['cat_name'];?></td>
								
								
								<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
								<?php echo form_hidden('game_name',$name); ?>
								<?php echo form_hidden('gameid',$gameid); ?>
								
							</tr>
							<?php }?>
							
							<?php }?>
							<?php }else{?>
								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								
								<td>Category</td></tr>
							<tr>
								<td colspan="3">We could not find any matches.</td>
							</tr>
							<?php }?>
						 </table>

				</div>
				<div id="section-2" class="tab-content "><table    class="table-striped-dflt" >

						

							
						 	<?php 
						 
							if($match!=False){
								$size=sizeof($match);
								for($j=0,$i=0; $i< $size; $i++){?>
								<?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
								<?php if($date>date('Y-m-d') ){?>

								<?php if($j==0){ ?>

											
						 	<thead>
								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								
								<td>Category</td></tr>
							</thead>	
								<?php $j++;} ?>

						</tbody>		
							<tr>
								
								<td ><h3><b><?php echo $match[$i]['team1_score'];?></b></h3></td>
								<td ><?php echo $team1[$i];?></td>
								<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
								<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
								<td ><?php echo $team2[$i];?></td>
								<td ><h3><b><?php echo $match[$i]['team2_score'];?></b></h3></td>
								
								<td ><?php echo $match[$i]['cat_name'];?></td>
								
								
								<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
								<?php echo form_hidden('game_name',$name); ?>
								<?php echo form_hidden('gameid',$gameid); ?>
								
							</tr>
							</tbody>
							<?php }?>
						
							
							<?php }?>
							
						<?php }else{?>
								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								
								<td>Category</td></tr>
							<tr>
								<td colspan="3">We could not find any matches.</td>
							</tr>
							<?php }?>
						 </table>
				</div>
				</div>
			</div>
			</article>
		</div>
	</section>
	

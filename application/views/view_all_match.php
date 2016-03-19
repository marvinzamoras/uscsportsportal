



<input type="hidden" id="page-identifier" value="page-games"/>
<script type="text/javascript" src="<?php  echo base_url('/assets/js/tablesorter-master/jquery-latest.js');?>"></script> 
<script type="text/javascript" src="<?php  echo base_url('/assets/js/tablesorter-master/jquery.tablesorter.js');?>"></script> 
<script type="text/javascript">
$(document).ready(function() 
    { 
        $('#men').tablesorter({sortList: [[0,0], [1,0]]}); 
    } 
); 

 </script>
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
						<h3><?php echo  $game['game_name']; ?>
						</h3>
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
	            <li><a href="#section-1" >Recent Matches</a></li>
	            <li><a href="#section-2" >Upcoming Matches</a></li>
				</ul>
			
			
				<div id="section-1" class="tab-content ">
					
					
						<table  class="table-striped-dflt" >	
							
	 					
								<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								<td>Category</td>
								<td>Status</td></tr>
								
								
							
								<?php $j=0;?>
							<tr>

							<?php 
							
							if($match!=False){ 
							 $size=sizeof($match);
							 for($i=0; $i< $size; $i++){?>
								<?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
								<?php if($date<=date('Y-m-d')){ $j=1;?>
								
								
								
								<td ><h3><b><?php echo $match[$i]['team1_score'];?><b></h3></td>
								<td ><?php echo $match[$i]['t1']['team_name'];?></td>
								<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
								<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
								<td ><?php echo $match[$i]['t2']['team_name'];?></td>
								<td ><h3><b><?php echo $match[$i]['team2_score'];?></b></h3></td>
								
								<td ><?php echo $match[$i]['cat_name'];?></td>
								<td ><?php echo $match[$i]['status'];?></td>
								
								
								<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
								
								<?php echo form_hidden('gameid',$game['game_id']); ?>
								
							</tr>
							<?php }?>
							
							<?php }?>
							<?php }elseif($j==0){?>
							<tr>
								<td colspan="3">We could not find any matches.</td>
							</tr>
							<?php }?>
						 </table>

				</div>
				<div id="section-2" class="tab-content ">
				
						

						<table  class="table-striped-dflt" >

											
						 		<tr class='tr-head'>
								
								<td>Score</td>
								<td>Team</td>
								<td>Date</td>
								<td>Time</td>
								<td>Team</td>
								<td>Score</td>
								<td>Category</td>
								<td>Status</td></tr>
								<?php $k=0;?>
							<tr>
								
						 	<?php 
						    
							if($match!=False){
								$size=sizeof($match);
								for($i=0; $i< $size; $i++){?>
								<?php $d=date_create($match[$i]['date']); $date = date_format($d, 'Y-m-d');?>
								<?php if($date>date('Y-m-d') ){ $k=1;?>

							
								
								<td ><h3><b><?php echo $match[$i]['team1_score'];?></b></h3></td>
								<td ><?php echo $match[$i]['t1']['team_name'];?></td>
								<td ><?php $date=date_create($match[$i]['date']); echo date_format($date, 'm/d/Y');?></td>
								<td ><?php $date=date_create($match[$i]['time']); echo date_format($date, 'g:i A');?></td>
								<td ><?php echo $match[$i]['t2']['team_name'];?></td>
								<td ><h3><b><?php echo $match[$i]['team2_score'];?></b></h3></td>
								
								<td ><?php echo $match[$i]['cat_name'];?></td>
								<td ><?php echo $match[$i]['status'];?></td>
								
								
								<?php echo form_hidden('match_id',$match[$i]['match_id']); ?>
								
								<?php echo form_hidden('gameid',$game['game_id']); ?>
								
							</tr>
							
							<?php } }?>
						
							
							
							
						<?php }elseif($k==0){?>
								
							<tr>
								<td colspan="3">We could not find any matches.</td>
							</tr>
							
							<?php }?>
						 </table>
				</div>
				<div>
					<?php if($men!= false){?>
					<div class="col-4" style="padding-right:5px; ">
							<h3 style="color: black;"><b>Men</b></h3>
							<table  id="men" class="table-striped-dflt" >
							<thead>
											
						 		<tr class='tr-head'>
								
								<td>Team</td>
								<td>Wins</td>
								<td>Loss</td>
								<td>Avg</td>
								</tr>
							</thead>
								<?php foreach($men as $m){?>
								<tbody>
								<td ><?php echo $m['team_name'];?></td>
								<td ><?php echo $m['wins'];?></td>
								<td ><?php echo $m['loss'];?></td>
								<td ><?php echo ($m['wins']!=0?$m['wins']/($m['wins']+$m['loss']):0) ;?></td>
								</tbody>
								
								<?php }?>
								</table>
					</div><?php }if($women!= false){?>
					<div class="col-4" style="padding-right:5px;padding-left:5px; ">
							<h3 style="color: black;"><b>Women</b></h3>
							<table  id="women" class="table-striped-dflt" >
								
							<thead>	
											
						 		<tr class='tr-head'>
								
								<td>Team</td>
								<td>Wins</td>
								<td>Loss</td>
								<td>Avg</td>
								</tr>
							</thead>	
								
								<?php foreach($women as $women){?>
								<tbody>
								<td ><?php echo $women['team_name'];?></td>
								<td ><?php echo $women['wins'];?></td>
								<td ><?php echo $women['loss'];?></td>
								<td ><?php echo ($women['wins']!=0?$women['wins']/($women['wins']+$women['loss']):0);?></td>
								</tbody>
								
								<?php }?>
								</table>
								
					</div><?php }if($mixed!= false){?>
					<div class="col-4" style="padding-left:5px; ">
							<h3 style="color: black;"><b>Mixed</b></h3>
							<table  id="mixed" class="table-striped-dflt" >

								<thead>		
						 		<tr class='tr-head'>
								
								<td>Team</td>
								<td>Wins</td>
								<td>Loss</td>
								<td>Avg</td>
								</tr>
								</thead>
								<?php foreach($mixed as $mixed){?>
								<tbody>
								<td ><?php echo $mixed['team_name'];?></td>
								<td ><?php echo $mixed['wins'];?></td>
								<td ><?php echo $mixed['loss'];?></td>
								<td ><?php echo ($mixed['wins']!=0?$mixed['wins']/($mixed['wins']+$mixed['loss']):0);?></td>
								</tbody>
								
								<?php }?>
								</table>
					</div><?php }?>
				</div>
				</div>
				
			</div>
			</article>
		</div>
	</section>
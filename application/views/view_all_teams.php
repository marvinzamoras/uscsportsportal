
<!-- Breadcrumb and title -->
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('team','Teams');?></li>
		</ul>
		
		<h1 class="blog-title">Teams</h1>
		</div>
	</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
				<div class="tab">Teams</div>
				<div class="match">
					
						<center>
						<?php foreach($results['school'] as $school):?>
							
						    <table id = "example" class = "table-striped-dflt">
						    <col>
							  <colgroup span="3"></colgroup>
							  <colgroup span="3"></colgroup>
							  <tr class="tr-head">
							    <td rowspan="2"></td>
							    <th colspan="3" scope="colgroup"><?php echo $school->school_name;?></th>
							    
							  </tr>
							  <tr>
							  <?php $cat=array();?>
							  <?php foreach($results['category'] as $cats):?>
							    <th scope="col"><?php echo $cats->cat_name;?></th>
							   <?php $cat[]=$cats->cat_id;?>
							   <?php endforeach;?>
							  
							  </tr>
							   <?php foreach($results['games'] as $game):?>
							  <tr>
							 
							    <th scope="row"><?php echo $game->game_name;?></th>
							   <?php foreach($results['team'] as $team):?>
							  
							   <?php if($team->FKschool_id == $school->school_id && $team->game_cat == $game->game_id):?>
							   <?php echo "<td>".$team->team_name."</td>";?>

							    <?php endif;?>
							   
							   <?php endforeach;?>
							  </tr>
							  <?php endforeach;?>
							  
						    </table>
						 	<br>
						<?php endforeach;?>
						</center>
						<?php print_r($cat);?>
					
				</div>
			
			</div>
			
		</div>
	</section>

	
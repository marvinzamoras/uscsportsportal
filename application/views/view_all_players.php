
<!-- Breadcrumb and title -->
<input type="hidden" id="page-identifier" value="page-teams"/>

	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('team','Teams');?></li>
		</ul>
		
		<h1 class="blog-title">Players of <?php echo $results['team'];?></h1>
		</div>
	</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
				<div class="tab">Players</div>
				
				<div class="team-pl">
					<?php foreach($results['player'] as $player):?>
					<div class="col-2">
						<img src="
						<?php $string = $player->player_img;
						preg_match('@src="([^"]+)"@', $string, $match);
						$src = array_pop($match);
						if(empty($src)){
						 echo base_url("source/game.png");
						}
						else{
						echo $src;
					    }
					;?>"/>
					
						<div class="player-name"><b><p><a href="<?php echo base_url('player/view_player/'). '/'.$player->player_id;?>"><?php echo $player->player_name;?></a></p></b></div>
					</div>
					<?php endforeach;?>
				
				
				
				
			</div>
			
		</div>
	</section>

	
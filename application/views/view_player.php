<!-- Breadcrumb and title -->
<input type="hidden" id="page-identifier" value="page-acc"/>
	<section id="bc-t">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('profile/view','My Profile');?></li>
			</ul>
		
			<h1 class="blog-title"><?php echo $title;?></h1>
		</div>
	</section>

	<section id="blog-grid">
		<div class="container">
			<div class="col-12 cinfo">
				<div class="di-wrap">
					<center><img src="
						<?php $string = $player_item['player_img'];
						preg_match('@src="([^"]+)"@', $string, $match);
						$src = array_pop($match);
						if(empty($src)){
						 echo base_url("source/game.png");
						}
						else{
						echo $src;
					    }
					;?>"/>
					</center>
					<table>
						
						<tr>
							<td><p color="red"><span>Name</span></p></td>
							<td><p><?php echo $player_item['player_name'];?></p></td>
						</tr>
						<tr>
							<td><p><span>Bio</span></p></td>
							<td><p><?php echo $player_item['player_bio'];?></p></td>
						</tr>
						

					</table>
				</div>

				
				
			</div>
			
		</div>
	</section>

	<section id="map">
		<div id="map_canvas"></div>
	</section>

<!-- Breadcrumb and title -->
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('game','Games');?></li>
		</ul>
		
		<h1 class="blog-title">Games</h1>
		</div>
	</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
				<div class="tab">Games</div>
				<div class="match">
				<?php if(count($games)): foreach ($games as $d): ?>
						
					<?php echo form_hidden('game_id',$d['game_id']); ?>
					<?php $game =$d['game_id']; ?>
					<div class="col-6">
					<center><a href="<?php echo base_url('/match/index/'). '/'.$game.'/'.$d['game_name'];?>" class="btn btn-bordered"><?php echo $d['game_name'];?></a></center>
					</div>
				<?php endforeach;?>
			<?php endif;?>
				
				
			</div>
			
		</div>
	</section>

	
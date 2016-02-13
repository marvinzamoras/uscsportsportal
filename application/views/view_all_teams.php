<!-- Breadcrumb and title -->
<input type="hidden" id="page-identifier" value="page-teams"/>
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
				<?php foreach($results['school'] as $school):?>
					<div class="col-6">
					<center><a href="<?php echo base_url('team/view/'.$school->school_id) ;?>" class="btn btn-bordered"><?php echo $school->school_name;?></a></center>
					</div>
				<?php endforeach;?>
				
				
			</div>
			
		</div>
	</section>

	
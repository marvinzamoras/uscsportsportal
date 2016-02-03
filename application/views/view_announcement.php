<!-- Breadcrumb and title -->
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('announcement','News and Updates');?></li>
		</ul>
		
		<h1 class="blog-title">Announcement</h1>
		</div>
	</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<article class="blog-post">
				<div class="col-3">
					<aside class="sidebar-right">
						<div class="a-name">
							<h3><span><?php echo $author_item['fname']?></span> <?php echo $author_item['lname']?></h3>
						</div>
						<ul class="date-a">
							<li><span><i class="fa fa-calendar"></i>Date Posted:</span><br><?php echo date("M d Y h:i A",strtotime($ann_item['ann_pub'])); ?></li>
							
						</ul>			
					</aside>
					<br>
					<div class="col-3">
					<div class="social-icon">

					<ul id="social">
					<center><li><a href="javascript: history.back()"><img src="http://localhost/uscsportsportal/assets/css/images/back.png" alt=""/></a></li></center>

					</ul>
					</div>
					</div>
				</div>
				<div class="col-9">
					<div class="post-title">
						<h1><span><?php echo $title;?></h1>
					</div>
					<div class="post-content">
						<?php echo html_entity_decode($ann_item['ann_content']);?>
					</div>
						<!-- ######################################################################################################## -->
						
						
				</div>
			</article>
			
		</div>
	</section>
	
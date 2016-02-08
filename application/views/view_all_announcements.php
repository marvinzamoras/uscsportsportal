<!-- Breadcrumb and title -->
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('announcement ','Announcements');?></li>
		</ul>
		
		<h1 class="blog-title">Announcements</h1>
		</div>
	</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">announcements</div>
			<div class="match">
				<div class="r-box-n">
				<?php if(count($announcements)): foreach ($results as $data): ?>
					<article>
						<h3><a href="<?php echo site_url('announcement/'.$data->slug); ?>"><?php echo $data->ann_title; ?></a></h3>
						<p>
						<?php 

						$excerpt = explode(' ', strip_tags($data->ann_content), 51);
					   	 if(count($excerpt) >= 50){
					        array_pop($excerpt);
					    }

					    $excerpt = implode(' ', $excerpt);

						echo $excerpt . '...';
						echo "</p>";
						echo "<a href=";
						echo site_url('announcement/'.$data->slug); 
						echo '>Read More</a>';
						 ?>
						<span class="date-n"><?php echo date("M d Y",strtotime($data->ann_pub)); ?></span>
					</article>
				<?php endforeach; ?>
				<?php else:?>
					<article><p>We could not find any announcements.</p></article>
						
						
						<?php endif;?>
				</div>
				<p></p>
				<div class="pagination">
				<ul>
					<?php echo $links; ?>
				</ul>
				</div>

			</div>
			
		</div>
			
		</div>
	</section>

	
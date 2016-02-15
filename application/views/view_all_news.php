<!-- Breadcrumb and title -->
<input type="hidden" id="page-identifier" value="page-news"/>
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('news','News and Updates');?></li>
		</ul>
		
		<h1 class="blog-title">News Archive</h1>
		</div>
	</section>
    <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">news and updates</div>
			<div class="match">
				<div class="r-box-n">
				<?php if(count($news)): foreach ($results as $data): ?>
					<article>
						<h3><a href="<?php echo site_url('news/'.$data->slug); ?>"><?php echo $data->news_title; ?></a></h3>
						<p>
						<?php 

						$excerpt = explode(' ', strip_tags($data->news_content), 51);
					   	 if(count($excerpt) >= 50){
					        array_pop($excerpt);
					    }

					    $excerpt = implode(' ', $excerpt);

						echo $excerpt . '...';
						echo "</p>";
						echo "<b><a href=";
						echo site_url('news/'.$data->slug); 
						echo '>Read More</a></b>';
						 ?>
						<span class="date-n"><?php echo date("M d Y",strtotime($data->news_pub)); ?></span>
					</article>
				<?php endforeach; ?>
				<?php else:?>
					<article><p>We could not find any news and or updates.</p></article>
						
						
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

	
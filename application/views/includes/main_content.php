 <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
 <div class="slider">
		<div class="flexslider">
			<ul class="slides">
				<li> 
					<img src="<?php  echo base_url('/assets/css/images/slider.jpg');?>" alt=""/>
					<div class="caption">
						<div class="container">
							<h1><span>USC Sports Portal</span></h1>
						</div>
					</div>
				</li>
				<li>
					<img src="<?php  echo base_url('/assets/css/images/slider2.jpg');?>" alt=""/>
					<div class="caption">
						<div class="container">
							<h1><span>USC Sports Portal</span></h1>
						</div>
					</div>
				</li>
				<li>
					<img src="<?php  echo base_url('/assets/css/images/slider3.jpg');?>" alt=""/>
					<div class="caption">
						<div class="container">
							<h1><span>USC Sports Portal</span></h1>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

    <section id="m-a-n">
	<div class="container">

<!-- N E W S -->
		<div class="col-8">
			<div class="tab">News and Updates</div>
			<div class="tab-small"><?php echo anchor('news','see all news');?></div>
			<div class="r-box-m">
				
					<?php if(count($news)): foreach ($results as $data): ?>

					<article>
						<h3><a href="<?php echo site_url('news/'.$data->slug); ?>"><?php echo $data->news_title; ?></a></h3>
						<p><?php 

						$excerpt = explode(' ', strip_tags($data->news_content), 11);
					   	 if(count($excerpt) >= 10){
					        array_pop($excerpt);
					    }

					    $excerpt = implode(' ', $excerpt);

						echo $excerpt . '...';

						 ?></p>
						<span class="date-n"><?php echo date("M d Y",strtotime($data->news_pub)); ?></span>
					</article>
					<?php endforeach; ?>
					<?php else:?>
					<article><p>We could not find any news and or updates.</p></article>
						
					<?php endif;?>
				
			</div>
			<!--<div class="a-games">
				<ul class="clearfix">
					<li><span class="text-right">FC Bayern München</span><span class="d-g">14 Apr 21:45</span><span class="text-left">Borussia M'gladbach</span></li>
					<li><span class="text-right">Eintracht Frankfurt</span><span class="d-g">14 Apr 21:45</span><span class="text-left">FC Bayern München</span></li>
					<li><span class="text-right">FC Bayern München</span><span class="d-g">14 Apr 21:45</span><span class="text-left">Hoffenheim</span></li>
					<li><span class="text-right">FC Bayern München</span><span class="d-g">14 Apr 21:45</span><span class="text-left">VfB Stuttgart</span></li>
				</ul>
			</div>-->
		</div>

<!-- R A N K I N G -->
		<div class="col-4">
			
					<div class="tab"><h3>ranking</h3></div>
					
					<table class="table-striped">
						<tr class="t-h"><td class="t-c">Pos</td><td>School</td><td class="t-c">Pts</td></tr>
						<tr><td class="t-c">1</td><td>School of Arts and Sciences</td><td class="t-c">81</td></tr>
						<tr><td class="t-c">2</td><td>School of Engineering</td><td class="t-c">76</td></tr>
						<tr><td class="t-c">3</td><td>School of Architecture and Fine Arts</td><td class="t-c">74</td></tr>
						<tr><td class="t-c">4</td><td>School of Healthcare Professions</td><td class="t-c">70</td></tr>
						<tr><td class="t-c">5</td><td>School of Business and Economics</td><td class="t-c">69</td></tr>
						<tr><td class="t-c">6</td><td>School of Law and Governance</td><td class="t-c">66</td></tr>
						<tr><td class="t-c">7</td><td>School of Education</td><td class="t-c">60</td></tr>
					</table>
					
			</div>
    </div>
	</section>


<!-- A N N O U N C E M E N T S -->

	<section id="ttb">
	<div class="container">
	<div class="col-12">
				<div class="blog-s">
					<div class="bl-title"><h3>announcements</h3></div>
					<?php if(count($announcement)): foreach ($results_ann as $data): ?>
					<div class="s-post">
						<div class="post-img"><img src="<?php echo  base_url('/assets/css/images/slider2.jpg');?>" alt=""/></div>
						<h3><a href="<?php echo site_url('announcement/'.$data->slug); ?>"><span><?php echo $data->ann_title; ?></span></a></h3>
					</div>

					<?php endforeach; ?>
					<?php else:?>
					<article><p>We could not find any announcement.</p></article>
							
					<?php endif;?>		
				</div>
			</div>
		</div>
	</section>

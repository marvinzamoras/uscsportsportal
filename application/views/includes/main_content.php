 <!-- Content Section. If need sidebars use the tag: <aside>. If articles use tag: <article> -->
    <section id="m-a-n">
	<div class="container">
		<div class="col-8">
			<div class="tab">matches</div>
			<div class="match">
				<div class="col-6">
					<div class="m-img"><img src="<?php echo  base_url('/assets/css/images/bayern.jpg');?>" alt=""/></div>
				</div>
				<div class="col-6">
					<div class="m-img"><img src="<?php  echo base_url('/assets/css/images/arsenal.jpg');?>" alt=""/></div>
				</div>
				<div class="m-result">
				<div class="logo-club col-3"><img src="<?php echo  base_url('/assets/css/images/logo-bayern.png');?>" alt=""/></div>
				<span class="result col-6">0 <b>:</b> 3</span>
				<div class="logo-club col-3"><img src="<?php base_url('/assets/css/images/logo-arsenal.png');?>" alt=""/></div>
				<div class="club-name col-12">
				<span class="col-3">Bayern</span>
				<div class="match-name col-6">Champions League <br> Semi-final <br> <b>25 May 23:00</b></div>
				<span class="col-3">Arsenal</span>

				</div>
				</div>
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
		<div class="col-4">
			<div class="tab">news</div>
			<div class="tab-small"><?php echo anchor('news','see all news');?></div>
			<div class="r-box-n">
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
		</div>
    </div>
	</section>
	<!-- section for teaser -->
	<section >
	  <div class="container">
		<div id="teaser">
		<h2>There are many variations of passages
<span>of Lorem Ipsum available</span></h2>
<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
<a href="club.html" class="btn btn-red">read more</a>
	    </div>
	  </div>
	</section>
	<section id="video">
	<div class="container">
		
			<div id="v-tabs">
			
			<ul class="clearfix col-4">
            <li><i class="fa fa-play"></i><a href="#section-1" >The title hunt in Europe's top leagues<span>14:59  |  Press conference</span></a></li>
            <li><i class="fa fa-play"></i><a href="#section-2" >West Brom took a significant step towards survival by beating ...
<span>14:59  |  Press conference</span></a></li>
            <li><i class="fa fa-play"></i><a href="#section-3" >The title hunt in Europe's top leagues<span>14:59  |  Press conference</span></a></li>
            <li><i class="fa fa-play"></i><a href="#section-4" >The title hunt in Europe's top leagues<span>14:59  |  Press conference</span></a></li>
			</ul>
			
			
			<div id="section-1" class="tab-content col-8"><iframe width="560" height="329" style="border:0;" src="http://www.youtube.com/embed/HHnsO_TnXPs"  allowfullscreen></iframe></div>
			<div id="section-2" class="tab-content col-8"><iframe width="560" height="329" style="border:0;" src="http://www.youtube.com/embed/l_9zB6xEOMI"  allowfullscreen></iframe></div>
			<div id="section-3" class="tab-content col-8"><iframe width="560" height="329" style="border:0;" src="http://www.youtube.com/embed/S4XXhMydY8o"  allowfullscreen></iframe></div>
			<div id="section-4" class="tab-content col-8"><iframe width="560" height="329" style="border:0;" src="http://www.youtube.com/embed/0o29f4-qh5U"  allowfullscreen></iframe></div>
			
			</div>
		<div class="players">
			<div class="col-4">
				<div class="our">
					<h3><span>our</span> players</h3>
				</div>
				<div class="all-team">
					<a href="team.html">View all team ›</a>
				</div>
			</div>
			<div class="col-8">
				<div class="slider1">
				  <div class="slide col-4"><img src="<?php echo  base_url('/assets/css/images/player1.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Jan Kirchhoff</a><p>Defender</p></div></div>
				  <div class="slide col-4"><img src="<?php echo  base_url('/assets/css/images/player2.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Jerome Boateng</a><p>Defender</p></div></div>
				  <div class="slide col-4"><img src="<?php  echo base_url('/assets/css/images/player3.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Tom Starke</a><p>Goalkeeper</p></div></div>
				  <div class="slide col-4"><img src="<?php  echo base_url('/assets/css/images/player4.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Philipp Lahm</a><p>Defender</p></div></div>
                <div class="slide col-4"><img src="<?php  echo base_url('/assets/css/images/player1.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Jan Kirchhoff</a><p>Defender</p></div></div>
                <div class="slide col-4"><img src="<?php  echo base_url('/assets/css/images/player2.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Jerome Boateng</a><p>Defender</p></div></div>
                <div class="slide col-4"><img src="<?php  echo base_url('/assets/css/images/player3.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Tom Starke</a><p>Goalkeeper</p></div></div>
                <div class="slide col-4"><img src="<?php  echo base_url('/assets/css/images/player4.jpg');?>" alt=""/><div class="player-name"><a href="team.html">Philipp Lahm</a><p>Defender</p></div></div>
                </div>
			</div>
		</div>
		
	</div>
	</section>
	<!-- twiter, blog, table -->
	<section id="ttb">
		<div class="container">
			<div class="col-4">
				<div class="twiter">
					<div class="tw-title"><h3>Latest twits</h3></div>
					<ul class="clearfix t-post">
						<li>The generated Lorem Ipsum is therefore always free from repetition, injected humour
							<a href="#">@Equipo<span> 1 day ago</span></a></li>
						<li>The generated Lorem Ipsum is therefore always free from repetition, injected humour
							<a href="#">@Equipo<span> 1 day ago</span></a></li>
						<li>The generated Lorem Ipsum is therefore always free from repetition, injected humour
							<a href="#">@Equipo<span> 1 day ago</span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="blog-s">
					<div class="bl-title"><h3>Blog &nbsp; <a href="blog.html">\ &nbsp; Open blog ›</a></h3></div>
					<div class="s-post">
						<div class="post-img"><img src="<?php echo  base_url('/assets/css/images/post1.jpg');?>" alt=""/></div>
						<h3><a href="blog-single.html"><span>Rangers review presents stark picture</span></a></h3>
					</div>
					<div class="s-post">
						<div class="post-img"><img src="<?php echo  base_url('/assets/css/images/post2.jpg');?>" alt=""/></div>
						<h3><a href="blog-single.html"><span>Police probe Rangers cash statements</span></a></h3>
					</div>
					<div class="s-post">
						<div class="post-img"><img src="<?php echo  base_url('/assets/css/images/post3.jpg');?>" alt=""/></div>
						<h3><a href="blog-single.html"><span>Check out the latest bundes liga news </span></a></h3>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="liga-t">
					<div class="bu-title"><h3>Bundes Liga</h3></div>
					<table class="table-striped">
						<tr class="t-h"><td class="t-c">Pos</td><td>Club</td><td>Pld</td><td>Pts</td></tr>
						<tr><td class="t-c">1</td><td>FC Bayern München</td><td>36</td><td>81</td></tr>
						<tr><td class="t-c">2</td><td>Borussia Dortmund</td><td>36</td><td>76</td></tr>
						<tr><td class="t-c">3</td><td>FC Schalke 04</td><td>34</td><td>74</td></tr>
						<tr><td class="t-c">4</td><td>Bayer 04 Leverkusen</td><td>35</td><td>70</td></tr>
						<tr><td class="t-c">5</td><td>VfL Wolfsburg</td><td>36</td><td>69</td></tr>
						<tr><td class="t-c">6</td><td>FSV Mainz</td><td>36</td><td>66</td></tr>
						<tr><td class="t-c">7</td><td>Borussia M.</td><td>35</td><td>60</td></tr>
						<tr><td class="t-c">8</td><td>FC Augsburg</td><td>35</td><td>52</td></tr>
						<tr><td class="t-c">9</td><td>1899 Hoffenheim</td><td>35</td><td>46</td></tr>
						<tr><td class="t-c">10</td><td>Hertha Berlin</td><td>35</td><td>44</td></tr>
					</table>
				</div>
			</div>
		</div>
	</section>
	
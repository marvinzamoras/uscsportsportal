
    <header>
		<div class="top">
			<div class="container">
				<div class="col-12">
				  <div class="col-2">
					<div class="logo"><img src="<?php  echo base_url('/assets/css/images/logo2.png');?>" alt=""/></div>
				  </div>
					<nav id="top-menu">
						<ul class="clearfix">
							<li><a href="<?php echo base_url('site/home');?>">Home</a></li>
							<li><a href="<?php echo base_url('home/index');?>">Team</a></li>
							<li><a href="video.html">video</a></li>
							<li class="dropdown"><a href="blog.html">blog</a>
								<ul class="dropdown-menu">
									<li><a href="<?php  echo base_url('/assets/blog-single.html');?>">Single post</a></li>
									<li><a href="#">Drop down 2</a></li>
									<li><a href="#">Drop down 3</a></li>
									<li><a href="#">Drop down 4</a></li>
								</ul>
							</li>
							<li><a href="club.html">club</a></li>
							<li><a href="gallery.html">gallery</a>
							</li>
							<li><a href="contact.html">contacts</a></li>
							<li class="dropdown"><a href="blog.html">Blog</a>
								<ul class="dropdown-menu">
									<li><a href="blog-single.html">Single post</a></li>
									<li><a href="#">Drop down 2</a></li>
									<li><a href="#">Drop down 3</a></li>
									<li><a href="<?php echo base_url('login/logout');?>">logout</a></li>
								</ul>
							</li>
							
						</ul>
						<a href="#" id="pull">Menu</a>
					</nav>
                    <nav class="mobilemenu">
                        <select>
                            <option value="index.html">Home</option>
                            <option value="team.html">Team</option>
                            <option value="video.html">Video</option>
                            <option value="blog.html">Blog</option>
                            <option value="club.html">Club</option>
                            <option value="gallery.html">Gallery</option>
                            <option value="contact.html">Contact</option>
                        </select>
                    </nav>
					
				</div>
			</div>
		</div>
    </header>
	 <header>
		<div class="top">
			<div class="container">
				<div class="col-12">
				  <div class="col-2">
					<div class="logo"><a href="<?php echo base_url('site/home');?>"><img src="<?php  echo base_url('/assets/css/images/logo1.png');?>" alt=""/></a></div>
				  </div>
					<nav id="top-menu">
						<ul class="clearfix">
							<li class="active"><a href="<?php echo base_url('site/home');?>">Home</a></li>
							<li><a href="<?php echo base_url('team/index');?>">Teams</a></li>
							<li><a href="video.html">Games</a></li>
							<li><a href="<?php echo base_url('news');?>">News and Updates</a></li>
							<li><a href="<?php echo base_url('announcement');?>">Announcements</a></li>
							
							<li class="dropdown"><a href=""><i class="fa fa-user"></i> Account</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('profile/view');?>">View Profile</a></li>
									<?php
										$this->load->model('membership_model');
										if($this->membership_model->check_if_admin()){
											echo '<li><a href="';
											echo base_url('admin/home');
											echo '">Admin Panel</a></li>';
										}
									;?>
									<li><a href="<?php echo base_url('login/logout');?>">logout</a></li>
								</ul>
							</li>
							</div>
						</ul>
						<a href="#" id="pull">Menu</a>
					</nav>
                    <nav class="mobilemenu">
                        <select>
                             <option value="<?php echo base_url('site/home');?>">Home</option>
                            <option value="<?php echo base_url('users_admin');?>">Users</option>
                            <option value="video.html">Teams</option>
                            <option value="<?php echo base_url('news_admin');?>">News and Updates</option>
                            <option value="<?php echo base_url('announcement_admin');?>">Announcements</option>
                        </select>
                    </nav>
					
				</div>
			</div>
		</div>
    </header>

    
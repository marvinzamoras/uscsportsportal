<header>
		<div class="top">
			<div class="container">
				<div class="col-12">
				  <div class="col-2">
					<div class="logo"><a href="<?php echo base_url('site/home');?>"><img src="<?php  echo base_url('/assets/css/images/logo1.png');?>" alt=""/></a></div>
				  </div>
					<nav id="top-menu">
						<ul class="clearfix">
							<li id="page-users"><a href="<?php echo base_url('users_admin');?>">Users</a></li>
							<li id="page-teams"><a href="<?php echo base_url('team_admin');?>">Teams</a></li>
							<li id="page-games"><a href="<?php echo base_url('game_admin');?>">Games</a></li>
							<li id="page-news"><a href="<?php echo base_url('news_admin');?>">News and Updates</a></li>
							<li id="page-ann"><a href="<?php echo base_url('announcement_admin');?>">Announcements</a></li>
							<li id="page-acc" class="dropdown"><a href="">Account</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('profile/view');?>">View Profile</a></li>
									<?php
										$this->load->model('membership_model');
										if($this->membership_model->check_if_admin()){
											echo '<li><a href="';
											echo base_url('users_admin');
											echo '">Admin Panel</a></li>';
										}
									;?>
									<li><a href="<?php echo base_url('login/logout');?>">logout</a></li>
								</ul>
							</li>
							
						</ul>
						<a href="#" id="pull">Menu</a>
					</nav>
                   <nav class="mobilemenu">
                        <select>
                            <option value="<?php echo base_url('site/home');?>">Home</option>
                            <option value="<?php echo base_url('users_admin/index');?>">Users</option>
                            <option value="video.html">Teams</option>
                            <option value="<?php echo base_url('news_admin');?>">News and Updates</option>
                            <option value="<?php echo base_url('announcement_admin');?>">Announcements</option>
                            
                        </select>
                    </nav>
					
				</div>
			</div>
		</div>
    </header>

<script type="text/javascript">
  $(document).ready(function () {
     var page = $('#page-identifier').val();
      $('input[type=radio]').change(function() {
          $('input[type=radio]:checked').not(this).prop('checked', false);
      });
      $('#'+page).addClass('active')

  });
</script>
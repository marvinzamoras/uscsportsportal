<section id="f-o-r-m">
<div class="container">
	<div class="col-2">
	<section id="f-o-r-m">
		<div class="logo"><img src="<?php echo base_url('/assets/css/images/logo1.png');?>" alt=""/></div>		  
	</section>
	</div>
	<div class="class col-6">
	<section id="f-o-r-m">
	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as</p>
	</section>
	</div>
	<div class="class col-4">
		<div class="contact-form">
			<center><h3>WELCOME TO USC SPORTS PORTAL</h3></center>
			<?php if (isset($account_created)){ ?>
			<center><h4><?php echo $account_created;?></h4></center>
			<?php }elseif (isset($account_deleted)){ ?>
			<center><h4><?php echo $account_deleted;?></h4></center>
			<?php }elseif (isset($account_incorrect)){ ?>
			<center><h4><?php echo $account_incorrect;?></h4></center>
			<?php } else{ ?>
			<center><h4>Login, please.</h4></center>
			<?php } ?>
			<?php
				echo form_open('login/validate_credentials');
				echo form_input('stud_id',set_value('stud_id',''),'class="col-12" placeholder="id number" type="text"');
				echo form_password('password','','class="col-12" placeholder="password" type="password"');
				echo '<div class ="bottom-form">';
				echo '<center>';
				echo form_submit('submit','Sign me in!','type="submit"');
				echo '</center></br>';
				echo validation_errors();
				echo '<br>';
				echo '<p>';
				echo 'Dont have an account yet?';
				echo '</p>';
				echo '<p>';
				echo anchor('login/signup','Sign Up');
				echo '</p>';
				echo '</div>';
				echo form_close();
			?>	
		</div>
	</div>
</div>
</section>
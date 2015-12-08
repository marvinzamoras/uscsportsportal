<!-- Breadcrumb and title -->
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('users_admin/view','My Profile');?></li>
		</ul>
		
		<h1 class="blog-title"><?php echo $title;?></h1>
		</div>
	</section>
	 <section id="blog-grid">
		<div class="container">
			<div class="col-12 cinfo">
				
				<div class="di-wrap">
					<p class="detinfo"><span>Name</span><?php echo $user_item['fname'] . ' ' . $user_item['lname'];?></p>
					<p class="detinfo"><span>Contact No.</span><?php echo $user_item['contact_no'];?></p>
					<p class="detinfo"><span>Email Adress</span><?php echo $user_item['email_address'];?></p>
					<p class="detinfo"><span>Home Adress</span><?php echo $user_item['home_address'];?></p>
					<p class="detinfo"><span>Stud ID</span><?php echo $user_item['stud_id'];?></p>
					<p class="detinfo"><span>School</span><?php echo $user_item['school'];?></p>
				</div>
				<p><a href = "<?php echo base_url('users_admin/index') ;?>"><input class='EButton' type ='button' value = 'Back'/></a></p>
			</div>
			
	</div>
	</section>
	<section id="map">
		<div id="map_canvas"></div>
	</section>

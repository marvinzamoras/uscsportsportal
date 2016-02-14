<!-- Breadcrumb and title -->
<input type="hidden" id="page-identifier" value="page-acc"/>
	<section id="bc-t">
		<div class="container">
		<ul class="breadcrumb">
			<li><a href="#">Homepage</a></li><li><span class="sep">   →   </span></li><li><?php echo anchor('profile/view','My Profile');?></li>
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
				</div>
				<p><a href = "<?php echo base_url('profile/edit/'.$user_item['stud_id']) ;?>"><input class='EButton' type ='button' onclick = "javascript:return confirm('Are you sure you want to edit this?');" value = 'Edit'/></a></p>
			</div>
			
	</div>
	</section>
	<section id="map">
		<div id="map_canvas"></div>
	</section>

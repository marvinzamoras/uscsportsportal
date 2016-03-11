<input type="hidden" id="page-identifier" value="page-acc"/>
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
					<table>
							<tr>
								<td><p color="red"><span>Name</span></p></td>
								<td><p class="detinfo"><?php echo $user_item['fname'] . ' ' . $user_item['lname'];?></p></td>
							</tr>
							<tr>
								<td><p><span>Contact No.</span></p></td>
								<td><p class="detinfo"><?php echo $user_item['contact_no'];?></p></td>
							</tr>
							<tr>
								<td><p><span>Email Adress</span></p></td>
								<td><p class="detinfo"><?php echo $user_item['email_address'];?></p></td>
							</tr>
							<tr>
								<td><p><span>Home Adress</span></p></td>
								<td><p class="detinfo"><?php echo $user_item['home_address'];?></p></td>
							</tr>
							<tr>
								<td><p><span>Stuudent ID</span></p></td>
								<td><p class="detinfo"><?php echo $user_item['stud_id'];?></p></td>
							</tr>
							<tr>
								<td><p><span>School</span></p></td>
								<td><p class="detinfo"><?php echo $user_item['school_name'];?></p></td>
							</tr>

					</table>
				</div>

				<p><a href = "<?php echo base_url('users_admin/index') ;?>"><input class='EButton' type ='button' value = 'Back'/></a></p>
			</div>
			
	</div>
	</section>
	<section id="map">
		<div id="map_canvas"></div>
	</section>

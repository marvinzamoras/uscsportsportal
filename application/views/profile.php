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
					<!--
					<p class="detinfo"><span>Name</span></p><p><?php echo $user_item['fname'] . ' ' . $user_item['lname'];?></p>
					<p class="detinfo"><span>Contact No.</span></p><p><?php echo $user_item['contact_no'];?></p>
					<p class="detinfo"><span>Email Adress</span></p><p><?php echo $user_item['email_address'];?></p>
					<p class="detinfo"><span>Home Adress</span></p><p><?php echo $user_item['home_address'];?></p>
					-->
					<table>
						<tr>
							<td><p><span>Name</span></p></td>
							<td><p><?php echo $user_item['fname'] . ' ' . $user_item['lname'];?></p></td>
						</tr>
						<tr>
							<td><p><span>Contact No.</span></p></td>
							<td><p><?php echo $user_item['contact_no'];?></p></td>
						</tr>
						<tr>
							<td><p><span>Email Adress</span></p></td>
							<td><p><?php echo $user_item['email_address'];?></p></td>
						</tr>
						<tr>
							<td><p><span>School</span></p></td>
							<td><p><?php echo $user_item['school'];?></p></td>
						</tr>
						<tr>
							<td><p><span>Home Adress</span></p></td>
							<td><p><?php echo $user_item['home_address'];?></p></td>
						</tr>

					</table>
				</div>

				<p><a href = "<?php echo base_url('profile/edit/'.$user_item['stud_id']) ;?>"><input class='EButton' type ='button' onclick = "javascript:return confirm('Are you sure you want to edit this?');" value = 'Edit'/></a></p>
				
			</div>
			
		</div>
	</section>

	<section id="map">
		<div id="map_canvas"></div>
	</section>


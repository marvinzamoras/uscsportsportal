<section id="f-o-r-m">
<div class="container">
	<div class="class col-4">
		<div class="contact-form">
			<center><h4>PERSONAL INFORMATION</h4></center>
			<?php
				echo form_open('profile/edit/'.$profile_item['stud_id']);
				echo form_input('fname',set_value('fname',$profile_item['fname']),'class="col-12" placeholder="First Name" type="text"');
				echo form_error('fname');
				echo form_input('lname',set_value('lname',$profile_item['lname']),'class="col-12" placeholder="Last Name" type="text"');
				echo form_error('lname');
				echo form_input('contact_no',set_value('contact_no',$profile_item['contact_no']),'class="col-12" placeholder="Contact No." type="text"');
				echo form_error('contact_no');
				echo form_input('email_address',set_value('email_address',$profile_item['email_address']),'class="col-12" placeholder="Email Address" type="text"');
				echo form_error('email_address');
				echo form_input('home_address',set_value('home_address',$profile_item['home_address']),'class="col-12" placeholder="Home Address" type="text"');
				echo form_error('home_address');
				$extra_attributes1='class="col-12" id="dropy" style="background-color:#f4ab25; color:black; height:50px"';
				echo form_dropdown('school', $school_list, set_value('school',$profile_item['school']), $extra_attributes1);
				echo form_error('school');
				echo '<div class ="bottom-form">';
				
				echo '</div>';	
		echo "</div>";
	echo "</div>";
	echo '<div class="class col-4">';
		echo '<div class="contact-form">';
			echo '<center><h4>LOGIN CREDENTIALS</h4></center>';
			echo '<form>';
				//echo form_input('stud_id',set_value('stud_id',''),'class="col-12" placeholder="ID Number" type="text"');
				echo form_input('username',set_value('username',$profile_item['username']),'class="col-12" placeholder="Username" type="text"');
				echo form_error('username');
				echo form_password('password',set_value('password',''),'class="col-12" placeholder="New Password" type="password"');
				echo form_error('password');
				echo form_password('password_confirm',set_value('password',''),'class="col-12" placeholder="Confirm New Password" type="password"');
				echo form_error('password_confirm');
				echo '<div class ="bottom-form">';
				echo '<center>';
				
				echo '<p>For other concerns regarding your account, you may contact or approach any USC Sports Portal administrator.</p>';
				echo form_submit('submit','Submit Information', 'onclick="javascript:return confirm(\'Are you sure you want to save this?\')"');  
				echo form_close();
				echo '<br>';
				echo '<br>';
				
				echo '<button class="btn-dflt btn-red"><a href = "';
				echo site_url('/profile/view');
				echo '">Cancel</a></button>';
				echo '</center>';
				echo '</div>';
				
			?>	
		</div>
	</div>
</div>
</section>
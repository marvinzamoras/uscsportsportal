<section id="f-o-r-m">
<div class="container">
	<div class="class col-6">
		<div class="contact-form">
			<center><h4>PERSONAL INFORMATION</h4></center>
			<?php
				echo form_open('login/create_member');
				echo form_input('fname',set_value('fname',''),'class="col-12" placeholder="First Name" type="text"');
				echo form_error('fname');
				echo form_input('lname',set_value('lname',''),'class="col-12" placeholder="Last Name" type="text"');
				echo form_error('lname');
				echo form_input('contact_no',set_value('contact_no',''),'class="col-12" placeholder="Contact No." type="text"');
				echo form_error('contact_no');
				echo form_input('email_address',set_value('email_address',''),'class="col-12" placeholder="Email Address" type="text"');
				echo form_error('email_address');
				echo form_input('home_address',set_value('home_address',''),'class="col-12" placeholder="Home Address" type="text"');
				echo form_error('home_address');
				echo form_input('school',set_value('school',''),'class="col-12" placeholder="School" type="text"');
				echo form_error('school');
				echo '<div class ="bottom-form">';
				
				echo '</div>';	
		echo "</div>";
	echo "</div>";
	echo '<div class="class col-6">';
		echo '<div class="contact-form">';
			echo '<center><h4>LOGIN CREDENTIALS</h4></center>';
			echo '<form>';
				echo form_input('stud_id',set_value('stud_id',''),'class="col-12" placeholder="ID Number" type="text"');
				echo form_error('stud_id');
				echo form_input('username',set_value('username',''),'class="col-12" placeholder="Username" type="text"');
				echo form_error('username');
				echo form_password('password','','class="col-12" placeholder="Password" type="password"');
				echo form_error('password');
				echo form_password('password_confirm','','class="col-12" placeholder="Confirm Password" type="password"');
				echo form_error('password_confirm');
				echo '<div class ="bottom-form">';
				echo '<center>';
				echo '<br>';
				echo form_submit('submit','Submit Information');
				echo form_close();
				echo '<br>';
				echo '<br>';
				echo '<button class="btn-dflt btn-red"><a href = "';
				echo site_url('/login');
				echo '">Cancel</a></button>';
				echo '</center>';
				echo '</div>';
				
			?>	
		</div>
	</div>
</div>
</section>
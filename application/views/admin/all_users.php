<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Users</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">users</div>
			<div class="match">
				

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt">
						<tr class="tr-head">
							<td>Student ID</td>
							<td>Name</td>
							<td>School</td>
							<td>View</td>
							<td>Delete</td>
						</tr>

						<?php if(count($users)): foreach ($results as $data): ?>
						<tr>
							<td class="td-head"><?php echo $data->stud_id;?></td>
							<td><?php echo $data->lname.", ".$data->fname;?></td>
							<?php echo form_hidden('status',$data->status); ?>
							<?php echo form_hidden('user_id',$data->user_id); ?>
							<td><?php echo $data->school;?></td>
							<td><a href = "<?php echo base_url('/users_admin/view/'). '/'.$data->user_id;?>"  ><input class='EButton' type ='button' value = 'View'/></a></td>
							<td><a href = "<?php echo base_url('/users_admin/delete/'). '/'.$data->user_id .'/'. $data->status ;?>" onclick = "javascript:return confirm('Are you sure you want to <?php echo $data->status;?> this?');"><input class='<?php echo $data->button;?>' type ='button' value = '<?php echo $data->status;?>'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td colspan="3">We could not find any users.</td>
						</tr>
						<?php endif;?>
					 </table>
					 <p></p>
					<div class="pagination">
					<ul>
					<?php echo $links; ?> 
					</ul>
					</div>
					
				

			</div>
			
		</div>
			
		</div>
	</section>
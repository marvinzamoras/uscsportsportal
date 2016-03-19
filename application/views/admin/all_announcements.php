<input type="hidden" id="page-identifier" value="page-ann"/>
<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Announcements</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<center>
				<?php
					$message = $this->session->flashdata('message');
					if (isset($message)) {
					echo '<div class="alert alert-info"><font size="5px"><font color="#a72121">' . $message . '</font></font></div>';
					$this->session->unset_userdata('message');
					}
				?>
			</center>
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">announcements</div>
			<div class="match">
				<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/announcement_admin/createAnnouncement');?>">ADD ANNOUNCEMENT</a></button>
				</div>
				
					
					<!-- TABLE STRIPED -->
					  <table id = "example2" class = "table-striped-dflt">
					  <thead>
						<tr class="tr-head">
							<th>News and Updates Title</th>
							<th>Date Published</th>
							<th></th>
							<th></th>
						</tr>
					   </thead>
					   <tbody>
						<?php if(count($announcements)): foreach ($announcements as $d): ?>
						
						<tr> 
							<?php echo form_hidden('slug',$d['slug']); ?>
							<?php echo form_hidden('ann_id',$d['ann_id']); ?>
							<td class="td-head"><a href = "<?php echo base_url('/announcement_admin/edit/'). '/'.$d['slug'] ;?>" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><?php echo $d['ann_title'];?></a></td>
							<td>
							<?php 
							echo date("M d Y h:i:s A",strtotime($d['ann_pub']));?>
							</td>
							
							<td><a href = "<?php echo base_url('/announcement_admin/edit/').'/'.$d['slug'] ; ?>" title="Edit Announcement" onclick = "javascript:return confirm('Are you sure you want to edit this?');"><img src="<?php  echo base_url('/assets/css/images/edit.gif');?>" hspace="2" border="0" alt="Edit" /></a></td>							

							<td><a href = "<?php echo base_url('/announcement_admin/delete/').'/'.$d['ann_id'] ;?>" title="Delete Announcement" onclick = "javascript:return confirm('Are you sure you want to delete this?');"><img src="<?php  echo base_url('/assets/css/images/delete.png');?>" hspace="2" border="0" alt="Edit" /></a></td>		
								
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>

							<td>We could not find any announcements.</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<?php endif;?>
						</tbody>
					 </table>
					<p></p>
					
				

			</div>
			
		</div>
			
		</div>
	</section>
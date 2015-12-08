<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">Announcements</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">announcements</div>
			<div class="match">
				<?php echo anchor('/announcement_admin/createAnnouncement', '<h3> <u> Add Announcement </u> </h3>' ); ?>

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt">
						<tr class="tr-head">
							<td>News and Updates Title</td>
							<td>Date Published</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
						<?php if(count($announcements)): foreach ($results as $data): ?>
						<tr> 
							<td class="td-head"><?php echo $data->ann_title;?></td>
							<td>
							<?php 
							echo date("M d Y h:i:s A",strtotime($data->ann_pub));?>
							</td>
							<?php echo form_hidden('slug',$data->slug); ?>
							<?php echo form_hidden('ann_id',$data->ann_id); ?>
							<td><a href = "<?php echo base_url('/announcement_admin/edit/'). '/'.$data->slug ;?>"><input class='EButton' type ='button' value = 'Edit'/></a></td>
							<td><a href = "<?php echo base_url('/announcement_admin/delete/'). '/'.$data->ann_id ;?>" onclick = "javascript:return confirm('Are you sure you want to delete this?');"><input class='DButton' type ='button' value = 'Delete'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td colspan="3">We could not find any announcements.</td>
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
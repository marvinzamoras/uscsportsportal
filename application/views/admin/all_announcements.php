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
					  <table id = "example2" class = "table-striped-dflt">
					  <thead>
						<tr class="tr-head">
							<th>News and Updates Title</th>
							<th>Date Published</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					   </thead>
					   <tbody>
						<?php if(count($announcements)): foreach ($announcements as $d): ?>
						
						<tr> 
							<td class="td-head"><?php echo $d['ann_title'];?></td>
							<td>
							<?php 
							echo date("M d Y h:i:s A",strtotime($d['ann_pub']));?>
							</td>
							<?php echo form_hidden('slug',$d['slug']); ?>
							<?php echo form_hidden('ann_id',$d['ann_id']); ?>
							<td><a href = "<?php echo base_url('/announcement_admin/edit/'). '/'.$d['slug'] ;?>"><input class='EButton' type ='button' value = 'Edit'/></a></td>
							<td><a href = "<?php echo base_url('/announcement_admin/delete/'). '/'.$d['ann_id'] ;?>" onclick = "javascript:return confirm('Are you sure you want to delete this?');"><input class='DButton' type ='button' value = 'Delete'/></a></td>
							
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
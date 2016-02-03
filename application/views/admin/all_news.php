<section id="bc-t">
		<div class="container">
		
		
		<h1 class="blog-title">News and Updates</h1>
		</div>
	</section>
<section id="blog-single">
		<div class="container">
			<!-- BLOG POST SINGLE -->
			<div class="col-12">
			<div class="tab">news and updates</div>
			<div class="match">
				<div class ="bottom-form">
				&nbsp&nbsp&nbsp<button class="btn-dflt btn-red"><a href = "<?php echo base_url('/news_admin/createNews');?>">ADD NEWS AND UPDATES</a></button>
				</div>

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt" id = "example1">
					 <thead>
						<tr class="tr-head">
							<th>News and Updates Title</th>
							<th>Date Published</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($news)): foreach ($news as $data): ?>
					
						<tr>
							<td class="td-head"><?php echo $data['news_title'];?></td>
							<td><?php echo date("M d Y h:i:s A",strtotime($data['news_pub']));?></td>
							<?php echo form_hidden('slug',$data['slug']); ?>
							<?php echo form_hidden('news_id',$data['news_id']); ?>

							<td><a href = "<?php echo base_url('/news_admin/edit/'). '/'.$data['slug'] ;?>"><input class='EButton' type ='button' value = 'Edit'/></a></td>
							<td><a href = "<?php echo base_url('/news_admin/delete/'). '/'.$data['news_id'] ;?>" onclick = "javascript:return confirm('Are you sure you want to delete this?');"><input class='DButton' type ='button' value = 'Delete'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td>We could not find any news and or updates.</td>
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
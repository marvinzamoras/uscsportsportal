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
				<?php echo anchor('/news_admin/createNews', '<h3> <u> Add News and Updates </u> </h3>' ); ?>

					
					<!-- TABLE STRIPED -->
					 <table class="table-striped-dflt">
						<tr class="tr-head">
							<td>News and Updates Title</td>
							<td>Date Published</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>

						<?php if(count($news)): foreach ($results as $data): ?>
						<tr>
							<td class="td-head"><?php echo $data->news_title;?></td>
							<td><?php echo date("M d Y h:i:s A",strtotime($data->news_pub));?></td>
							<?php echo form_hidden('slug',$data->slug); ?>
							<?php echo form_hidden('news_id',$data->news_id); ?>

							<td><a href = "<?php echo base_url('/news_admin/edit/'). '/'.$data->slug ;?>"><input class='EButton' type ='button' value = 'Edit'/></a></td>
							<td><a href = "<?php echo base_url('/news_admin/delete/'). '/'.$data->news_id ;?>" onclick = "javascript:return confirm('Are you sure you want to delete this?');"><input class='DButton' type ='button' value = 'Delete'/></a></td>
							
						</tr>
						<?php endforeach;?>
						<?php else:?>
						<tr>
							<td colspan="3">We could not find any news and or updates.</td>
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
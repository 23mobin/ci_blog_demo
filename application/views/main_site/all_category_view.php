
<div class="w3agile-1">
	<div class="welcome">
		<?= $category_nav;?>
	</div>
	<div class="team">
		<h3 class="team-heading">টপ ১২ </h3>
		<div class="team-grids">
			<?php $count = 0;
			foreach($posts as $r):
				$count++;?>
				<div class="col-md-4 team-grid">
					<div class="team-grid1">
						<img src="<?= base_url().$r->blog_image;?>" alt=" " class="img-responsive">
						<div class="p-mask">
							<p><a href="<?= base_url().'welcome/view_article/'.$r->blog_id?>" style="color:white;text-decoration:none;"><?= readmore(10,$r->blog_title);?></a></p>
						</div>
					</div>
				</div>
				<?php if($count % 3 == 0):?>
					<div class="clearfix"> </div>
				<?php endif;?>
			<?php endforeach;
			$count = 0;?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

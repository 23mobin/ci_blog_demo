<?php $error="";
     $error = $this->session->userdata('page_not_found');?>
<div class="w3agile-1">
	<div class="welcome">
		<?= $category_nav;?><?= ((!empty($error))?$error:"")?>
	</div>
	<div class="team">
		<h3 class="team-heading"><?= (($this->uri->segment(2) == "blog_by_all_categories")?"টপ ১২":$this->welcome_model->category_by_category_id($this->uri->segment(3)));?> </h3>
		<?php $this->session->unset_userdata('page_not_found');
		  $error="";?>
		<div class="team-grids">
			<?php $count = 0;
			foreach($posts as $r):
				$count++;?>
				<div class="col-md-4 team-grid">
					<div class="team-grid1">
            <a class="label pull-left text-left" href="<?= base_url().'welcome/view_article/'.$r->blog_id?>" style="background-color:#FA4B2A;text-decoration:none;"><h4> Total views: <?= $r->blog_view_counts;?> </h4></a>
						<a  href="<?= base_url().'welcome/view_article/'.$r->blog_id?>"><img  src="<?= base_url().$r->blog_image;?>" alt=" " class="img-responsive">
						<div class="p-mask">
							<p><a href="<?= base_url().'welcome/view_article/'.$r->blog_id?>" style="color:white;text-decoration:none;"><?= readmore(30,$r->blog_title);?></a></p>
						</div>
            </a>
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
<script type="text/javascript">
$("#hideit").delay(1000).fadeOut(300);

</script>

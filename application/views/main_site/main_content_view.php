<!-- pin post start -->

<div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
  <div class="tch-img">
    <a href="<?= base_url('welcome/view_article/'.$pinned_blogs->blog_id);?>"><img src="<?= base_url($pinned_blogs->blog_image);?>" class="img-responsive" alt=""></a>
  </div><?= $pinned_blogs->blog_id;?>
  <h3><a href="<?= base_url('welcome/view_article/'.$pinned_blogs->blog_id);?>"><?= $pinned_blogs->blog_title;?></a></h3>
  <h6>BY <a href="#"><?= $this->welcome_model->authore_name_by_id($pinned_blogs->blog_authore_id);?></a>
    <?= pretty_date($pinned_blogs->blog_date);?>
    <a class="span_link" href="#">
      <span class="glyphicon glyphicon-eye-open"></span><?= $pinned_blogs->blog_view_counts;?>
    </a>
    <a class="span_link" href="#">
      <span class="glyphicon glyphicon-comment"></span>3
    </a>
  </h6>

  <p><?= readmore(100,$pinned_blogs->blog_body);?></p>

  <div class="bht1">
    <a href="<?= base_url('welcome/view_article/'.$pinned_blogs->blog_id);?>">Continue Reading</a>
  </div>
  <div class="soci">
    <ul>
      <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
      <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
      <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
      <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
      <li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
    </ul>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<!-- pin post end -->

<?php foreach($published_blogs as $p_blog):?>

  <div class="wthree">
    <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
      <div class="tch-img">
        <a href="<?= base_url('welcome/view_article/'.$p_blog->blog_id);?>"><img src="<?= base_url($p_blog->blog_image);?>" class="img-responsive" alt=""></a>
      </div>
    </div>
    <div class="col-md-6 wthree-right wow fadeInLeft"  data-wow-duration=".8s" data-wow-delay=".2s">
      <h3><a href="<?= base_url('welcome/view_article/'.$p_blog->blog_id);?>"><?= $p_blog->blog_title;?></a></h3>
      <h6>BY <a href="<?= base_url('welcome/view_article/'.$p_blog->blog_id);?>"><?= $this->welcome_model->authore_name_by_id($p_blog->blog_authore_id);?> </a><?= pretty_date($p_blog->blog_date);?></h6>
      <p><?= readmore(30,$p_blog->blog_body);?></p>
      <div class="bht1">
        <a href="<?= base_url('welcome/view_article/'.$p_blog->blog_id);?>">Read More</a>
      </div>
      <div class="soci">
        <ul>
          <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
          <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
<?php endforeach;?>
<div>
  <?= $homepage_paginations;?>
</div>

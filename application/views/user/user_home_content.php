<div class="technology">
  <div class="container">
    <div class="col-md-9 technology-left">
      <div class="blog">
        <h2 class="w3"><?= $u_name;?> এর লেখা ব্লগ সমূহ </h2><?= $authore_home_paginations;?>
        <div class="blog-grids1">
          <?php
          $count = 0;
          foreach($authore_blogs as $a_blog): $count++;?>
          <!-- <?= $count;?> -->
          <div class="col-md-6 blog-grid ">
            <div class="blog-grid-left1 wow fadeInDown">
              <a href="<?= base_url('welcome/view_article/'.$a_blog->blog_id);?>"><img src="<?= base_url($a_blog->blog_image);?>" alt=" " class="img-responsive"></a>
            </div>
            <div class="blog-grid-right1 wow fadeInDown">
              <a href="<?= base_url('welcome/view_article/'.$a_blog->blog_id);?>"><?= $a_blog->blog_title?></a>
              <h4><?= pretty_date($a_blog->blog_date);?></h4>
              <p class="more"></p>
            </div>
            <!-- <div class="clearfix"> </div> -->
            <span class="more ">
              <a  href="<?= base_url('welcome/view_article/'.$a_blog->blog_id);?>"><?= readmore(20,$a_blog->blog_body);?>  [ বিস্তারিত... ] </a>
            </span>
            <div style="margin-top:50px;width:100%;"><hr></div>
            <div class="clearfix"> </div>
            <div class="clearfix"> </div>
          </div>
          <?php
          if($count%2 == 0){ echo '<div class="clearfix"> </div><div class="clearfix"> </div>';}
        endforeach;
        $count = 0;?>
        <?= $authore_home_paginations;?>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- technology-right -->
</div>
</div>

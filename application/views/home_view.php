<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="<?= base_url('css/bootstrap.css');?>" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?= base_url('css/style.css');?>" rel='stylesheet' type='text/css' />
  <script src="<?= base_url('js/jquery-1.11.1.min.js');?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js');?>"></script>
  <!-- animation-effect -->
  <link href="<?= base_url('css/animate.min.css');?>" rel="stylesheet">
  <script src="<?= base_url('js/wow.min.js');?>"></script>
  <script>
  new WOW().init();
  </script>
  <!-- //animation-effect -->
</head>
<body>

  <div class="header" id="ban">
    <?= $navbar;?>
  </div>
  <?php if($logo_on == true):?>
    <div class="container">
      <div class="logo wow fadeInDown animated" data-wow-duration=".8s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInDown;">
        <h1><a href="index.html">Mobins BLOG</a></h1>
        <p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
      </div>
    </div>
  <?php endif;?>
  <!-- homepage wrapper start-->
  <div class="container-fluid bg-danger">
    <!-- Carousel wrapper start-->
    <?php if($carosul_on == true):?>
      <?= $carosul;?>
    <?php elseif($carosul_404==false):?>
      <?= "";?>
    <?php else:?>
      <div class="banner-1"></div>
    <?php endif?>
    <!-- Carousel wrapper end -->
    <!-- contetns start  -->
    <div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay="1s">
      <div class="col-md-12 logo"style="width:100%:height:200px;"></div>
    </div>
    <!-- top 3 start -->
    <?php if($top3_on == true):?>
      <?= $top3;?>
    <?php endif?>
    <!-- top 3 ends -->

    <!-- technology-left -->
    <div class="technology">
      <div class="container">
        <div class="col-md-9 technology-left">
          <div class="tech-no">
            <!-- technology-top -->
            <?= $homepage_content;?>

          </div>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right">
          <div class="blo-top1">
            <div class="tech-btm">
              <div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <form action="#" method="post">
                  <input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                  <input type="submit" value=" ">
                </form>
              </div>
              <h4>Popular Posts </h4>
              <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="blog-grid-left">
                  <a href="singlepage.html"><img src="<?= base_url('');?>images/t2.jpg" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                  <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="blog-grid-left">
                  <a href="singlepage.html"><img src="<?= base_url('');?>images/m2.jpg" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                  <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="blog-grid-left">
                  <a href="singlepage.html"><img src="<?= base_url('');?>images/f2.jpg" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                  <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="blog-grid-left">
                  <a href="singlepage.html"><img src="<?= base_url('');?>images/t3.jpg" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                  <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="blog-grid-left">
                  <a href="singlepage.html"><img src="<?= base_url('');?>images/m3.jpg" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                  <h5><a href="singlepage.html">Pellentesque dui Maecenas male</a> </h5>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <h4>Instagram</h4>
                <ul>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/t1.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/m1.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/f1.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/m2.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/f2.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/t2.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/f3.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/t3.jpg" class="img-responsive" alt=""></a></li>
                  <li><a href="singlepage.html"><img src="<?= base_url('');?>images/m3.jpg" class="img-responsive" alt=""></a></li>
                </ul>
              </div>
              <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
              <div class="twt">
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->
      </div>
    </div><!--  contetns ends-->
  </div><!-- homepage wrapper -->

  <div class="footer">
    <div class="container">
      <div class="col-md-4 footer-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <h4>About Me</h4>
        <p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
        <img src="<?= base_url('');?>images/t4.jpg" class="img-responsive" alt="">
        <div class="bht1">
          <a href="singlepage.html">Read More</a>
        </div>
      </div>
      <div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <h4>Latest Tweet</h4>
        <div class="mid-btm">
          <p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
          <a href="https://w3layouts.com/">https://w3layouts.com/</a>
        </div>

        <p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
        <a href="https://w3layouts.com/">https://w3layouts.com/</a>

      </div>
      <div class="col-md-4 footer-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <h4>Newsletter</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        <div class="name">
          <form action="#" method="post">
            <input type="text" placeholder="Your Name" required="">
            <input type="text" placeholder="Your Email" required="">
            <input type="submit" value="Subscribed Now">
          </form>

        </div>

        <div class="clearfix"> </div>

      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <script>
  $('.carousel').carousel({
    interval: 3000
  })
  </script>
</body>
</html>

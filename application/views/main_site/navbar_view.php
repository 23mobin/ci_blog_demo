<?php $u_id = $this->session->userdata('u_id');?>
<?php $u_name = $this->session->userdata('u_name');?>


<div class="container">
  <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
    <div class="header-search">
      <div class="search">
        <input class="search_box" type="checkbox" id="search_box">
        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
        <div class="search_form">
          <form action="#" method="post">
            <input type="text" name="Search" placeholder="Search...">
            <input type="submit" value="Send">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
    <nav class="navbar navbar-default ">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
        <nav class="link-effect-7" id="link-effect-7">
          <ul class="nav navbar-nav">
            <li class="active act"><a href="<?= base_url();?>"><h3>প্রথমপাতা</h3></a></li>
            <li><a href="#"><h3>নির্বাচিত পোস্ট</h3></a></li>
            <li><a href="<?= base_url('welcome/blog_by_all_categories');?>"><h3>বিষয়ভিত্তিক ব্লগ</h3></a></li>
            <!-- <li><a href="travel.html">Travel</a></li>
            <li><a href="fashion.html">Fashion</a></li> -->
            <!-- <li><a href="music.html">Music</a></li> -->
            <!-- <li><a href="codes.html">Codes</a></li> -->
            <?php if ($u_id == NULL):?>
            <li><a id ="myBtn" data-toggle="modal" data-target="#myModal">Sign in</a></li>
          <?php else:?>
            <li><a href="<?= base_url('user_home');?>"><h3><?= $u_name."'s ব্লগ ";?> <i class="glyphicon glyphicon-user text-success"></i></h3></a></li>
            <?php endif;?>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" backdrop="static" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </div>
  <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
    <ul>
      <li><a href="#"> </a></li>
      <li><a href="#" class="pin"> </a></li>
      <li><a href="#" class="in"> </a></li>
      <li><a href="#" class="be"> </a></li>
      <li><a href="#" class="vimeo"> </a></li>
    </ul>
  </div>
  <div class="clearfix"> </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Enter Your Credintials</h4>
        </div>
        <div class="modal-body">
          <?php $u_id = $this->session->userdata('u_id');
        	echo (($u_id != NULL)?" you are already looged in":$user_loging_form);
          ?>
        </div>

      </div>
    </div>
  </div>
</div>

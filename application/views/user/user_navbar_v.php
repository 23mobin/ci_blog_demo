<!-- <div class="navbar">
  <a href="<?= base_url('user_home');?>">Home</a>
  <a href="<?= base_url('user_home/page1');?>">Profile</a>
  <a href="<?= base_url('user_home/logout');?>">logout</a>
</div> -->
<div class="header" id="ban">
  <div class="container">
    <div class="head-left">
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
    <div class="header_right ">
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
              <li><a href="#"><h3>বিষয়ভিত্তিক ব্লগ</h3></a></li>
              <!-- <li><a href="travel.html">Travel</a></li>
              <li><a href="fashion.html">Fashion</a></li> -->
              <li><a href="<?= base_url('user_home');?>"><h3>হোমপেজ</h3></a></li>
              <!-- <li><a href="codes.html">Codes</a></li> -->
              <!-- <li><a id ="myBtn" data-toggle="modal" data-target="#myModal">Sign in</a></li> -->
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" backdrop="static" class="dropdown-toggle"><h3>প্রোফাইল <i class="glyphicon glyphicon-user text-success"></i></h3></a>
                <ul class="dropdown-menu">
                  <li><a class="text-info" href="#">পাসওয়ার্ড চেঞ্জ</a></li>
                  <li><a class="text-info" href="<?= base_url('user_home/logout');?>">লগ আউট</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>
    <div class="nav navbar-nav navbar-right social-icons">
      <ul>
        <li><a href="#"> </a></li>
        <li><a href="#" class="pin"> </a></li>
        <li><a href="#" class="in"> </a></li>
        <li><a href="#" class="be"> </a></li>
        <li><a href="#" class="vimeo"> </a></li>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- category -->

<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <?php foreach($category_name as $cn):?>

  <!-- <button type="button" id="<?= $cn->c_name;?>" class="btn btn-default"><?= $cn->c_name;?></button> -->

  <!-- <button type="button" class="btn btn-default">2</button> -->

  <div class="btn-group" role="group">
    <button id="btnGroupDrop<?= $cn->c_id;?>" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?= $cn->c_name;?>
    </button>
    <?php

    $sub_category = $this->user_model->get_category_child_by_id($cn->c_id);



    ?>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop<?= $cn->c_id;?>">
      <?php foreach($sub_category as $pn):
        ?>
      <li><a class="dropdown-item" href="#"><?= $pn->c_name;?></a></li>
      <!-- <li><a class="dropdown-item" href="#">Dropdown link</a></li> -->
    <?php endforeach;?>
    </div>
  </div>
  <?php endforeach;?>
</div>

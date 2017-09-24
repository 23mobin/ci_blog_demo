<!-- single page wrapper ends-->
<div class="wthree">
  <!-- directed blogs -->
  <h2 class="w3"><?= $pb_b_id->blog_title?></h2>
  <div class="single">
    <img src="<?= base_url($pb_b_id->blog_image);?>" class="img-responsive" alt=""><hr>
    <div class="b-bottom">
      লিখেছেন <span class="text-danger text-bold top"><?= $this->welcome_model->authore_name_by_id($pb_b_id->blog_authore_id);?></span>
      <p class="sub text-justify"><?= sanitize($pb_b_id->blog_body);?></p>
      <p><?= pretty_date($pb_b_id->blog_date);?><a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span><?= $pb_b_id->blog_view_counts;?> </a></p>
    </div>
  </div>
  <!-- directed blogs ends -->


  <div class="response"><!--  start of commented reply-->



    <h4>Responses</h4>
    <!-- first comment and reply -->
    <div class="media response-info">
      <div class="media-left response-text-left">
        <a href="#">
          <img src="<?= base_url();?>images/sin1.jpg" class="img-responsive" alt="">
        </a>
      </div>
      <div class="media-body response-text-right">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <ul>
          <li>Jun 21, 2016</li>
          <li><a href="#">Reply</a></li>
        </ul>
        <div class="media response-info">
          <div class="media-left response-text-left">
              <a href="#">
                <img src="<?= base_url();?>images/sin2.jpg" class="img-responsive" alt="">
              </a>
            </div>
          <div class="media-body response-text-right">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <ul>
                <li>July 17, 2016</li>
                <li><a href="#">Reply</a></li>
              </ul>
            </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>  <!-- first comment and reply -->



    <!-- second comment and reply -->
    <div class="media response-info">
      <div class="media-left response-text-left">
        <a href="#">
          <img src="<?= base_url();?>images/sin1.jpg" class="img-responsive" alt="">
        </a>
      </div>
      <div class="media-body response-text-right">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <ul>
          <li>Jul 22, 2016</li>
          <li><a href="#">Reply</a></li>
        </ul>
        <div class="media response-info">
            <div class="media-left response-text-left">
              <a href="#">
                <img src="<?= base_url();?>images/sin2.jpg" class="img-responsive" alt="">
              </a>
            </div>
            <div class="media-body response-text-right">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <ul>
                  <li>Aug 01, 2016</li>
                  <li><a href="#">Reply</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
          </div>
      </div>
      <div class="clearfix"> </div>
    </div><!-- second comment and reply -->





  </div><!--  end of commented reply-->











  <div class="coment-form">
    <h4>Leave your comment</h4>
    <form action="#" method="post">
      <input type="text" value="Name " name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
      <input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
      <input type="text" value="Website" name="websie" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
      <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
      <input type="submit" value="Submit Comment">
    </form>
  </div>
  <div class="clearfix"></div>


</div> <!-- single page wrapper ends-->

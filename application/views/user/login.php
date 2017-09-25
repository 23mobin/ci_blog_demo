<?php
$errors="";
if(!empty($this->session->userdata('error'))){
  $errors = $this->session->userdata('error');
  $this->session->unset_userdata('error');
}
?>
<div >
  <?= $errors;?>
  <form action="<?= base_url('welcome/login_check');?>" method="post">
    <input type="text" class="form-control" placeholder="Email Address" name="u_email"  >
    <input type="text" class="form-control" placeholder="Password" name="u_password">
    <input type="submit" class="btn btn-block btn-primary" name="signin" value="login">
  </form>
</div>

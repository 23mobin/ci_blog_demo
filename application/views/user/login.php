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
    <input type="text" name="u_email" class="form-control" placeholder="Email Address">
    <input type="text" name="u_password"  placeholder="Password">
    <input type="submit" name="signin" value="login">
  </form>
</div>

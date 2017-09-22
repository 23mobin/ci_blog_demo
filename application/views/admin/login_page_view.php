<?php
  $errors="";
  if(!empty($this->session->userdata('error'))){
    $errors = $this->session->userdata('error');
    $this->session->unset_userdata('error');
  }
?>
<div>
  <form action="<?= base_url('admin/login_check');?>" method="post">
    <?php if($errors != ""):?>
      <div><?= $errors;?></div>
    <?php endif;?>
    <label for="email">email</label>
    <input  type="text" name="email" >
    <label for="password">password</label>
    <input  type="text" name="password"><br>
    <button type="submit" name="signin">sign in</button>
  </form>
  <br>
</div>

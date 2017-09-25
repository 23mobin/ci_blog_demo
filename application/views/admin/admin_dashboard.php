<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link href="<?= base_url();?>css/style.css" rel="stylesheet"> -->

</head>
<body>


  <h3>HI <?= $admin_name;?> !</h3>
  <a href="<?= base_url();?>super_admin/logout">Logout</a>
  <br>
  <div >
    <?= $admin_home_content;?>
  </div>

</body>
</html>

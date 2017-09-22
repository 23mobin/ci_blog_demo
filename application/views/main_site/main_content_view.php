<div>
<h2>this is home page main content</h2>

<div>
  <?php foreach($published_blogs as $l):?>
    <p>
      <span><?= $l->d_writter." ---- ".$l->d_content;?></span>
    </p>
  <?php endforeach;?>
  <?= $homepage_paginations;?>
</div>
</div>

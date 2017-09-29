<div class="container">
  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <?php foreach($category_name as $cn):?>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop<?= $cn->c_id;?>" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $cn->c_name;?>
      </button>
      <?php $sub_category = $this->user_model->get_category_child_by_id($cn->c_id);?>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop<?= $cn->c_id;?>">
        <?php foreach($sub_category as $pn):?>
        <li><a class="dropdown-item" href="<?= base_url('user_home/blogs/'.$pn->c_id)?>"><?= $pn->c_name;?></a></li>
        <?php endforeach;?>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</div>

<div class="container">
  <div class="row text-center text-bold"><?= $u_name?> এর ক্যাটাগরি </div>
  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <?php foreach($category_name as $category):?>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop<?= $category->c_id;?>" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $this->user_model->get_category_name_by_id($category->c_parent_id);?>
      </button>
      <?php $sub_category = $this->user_model->get_category_child_by_id($category->c_parent_id,$u_id);?>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop<?= $category->c_parent_id;?>">
        <?php foreach($sub_category as $child):?>

        <li><a class="dropdown-item " href="<?= base_url('user_home/blogs/'.$child->c_id)?>"><?= $child->c_name;?></a></li>

        <?php endforeach;?>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</div>

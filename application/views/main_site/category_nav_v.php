<div class="container">
  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <?php foreach($category_name as $category):?>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop<?= $category->c_id;?>" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $category->c_name;?>
      </button>
      <?php $sub_category = $this->welcome_model->get_child_parent_id($category->c_id);?>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop<?= $category->c_parent_id;?>">
        <?php foreach($sub_category as $child):?>

        <li><a class="dropdown-item " href="<?= base_url('welcome/blog_by_category/'.$child->c_id)?>"><?= $child->c_name;?></a></li>

        <?php endforeach;?>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</div>

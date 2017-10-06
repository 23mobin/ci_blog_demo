<div class="col-md-9 technology-left">
  <div class="blog">
    <form action="<?= base_url();?>user_home/do_upload" method="post" enctype="multipart/form-data">

      <div class="form-group col-md-12">
        <span   for="title">Blog's Title:</span>
        <input type="text" class=" form-control" name="blog_title" id="title" value="">
      </div>
      <div class="form-group col-md-3">
        <span   for="title">Authore name:</span><h4><?= $u_name;?></h4>
        <input type="hidden" class=" form-control" name="blog_title" id="title" value="<?= $u_id;?>">
      </div>
      <div class="form-group col-md-3">
        <span   for="title">ক্যাটাগরি</span>
      <select class="selectpicker form-control ">

        <?php $c = $this->user_model->get_child_category_name();?>
        <?php foreach($c as $child_c):?>
        <option value="<?= $child_c->c_id;?>"><?= $child_c->c_name;?></option>
      <?php endforeach;?>

      </select>
    </div>
    <div class="input-group col-md-6">
      <span >ছবি সংযুক্ত করুন </span><br>
    <label class="btn btn-primary " for="my-file-selector">Upload</label>
    <input id="my-file-selector" name="userfile" type="file" style="display:none" onchange="$('#upload-file-info').html(this.files[0].name)">

  <span class=' form-control' id="upload-file-info"></span>
  </div>


      <input class="btn btn-primary" type="submit">

    </form>

  </div>
</div>

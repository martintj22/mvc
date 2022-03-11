<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="spacelib">

  <a href="<?php echo URLROOT; ?>/newsportal/show/" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Add news articel</h2>
    <p>Fill this form</p>
    <form action="<?php echo URLROOT; ?>/newsportal/add" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="submit">UPLOAD</button>
    </form>
    
    
    <form action="<?php echo URLROOT; ?>/newsportal/add" method="post">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg " value="">
        <input type="text" name="title" class="form-control form-control-lg " value="">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg>"> </textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>

   
  </div>
</div>
<script src="<?php echo URLROOT; ?>/js/upload.js"></script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
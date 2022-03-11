<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="spacelib">

  <?php flash('post_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6" >
      <h1 style="color:White;">Recent news</h1>
    </div>
   
  </div>
  <?php foreach($data['news'] as $news) : ?>
    <div class="card card-body mb-3">
      <!-- <h4 class="card-title"><?php echo $news->title; ?></h4> -->
      <div class="bg-light p-2 mb-3">
        Written by <?php echo $news->name; ?> on <?php echo $news->created_at; ?>
      </div>
      <p class="card-text"><?php echo $news->body; ?></p>
      <a href="<?php echo URLROOT; ?>/newsportal/show/<?php echo $news->id; ?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>


</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
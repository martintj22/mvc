<!-- Det her er informationsiden til enheder/spaceships  -->

<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Spacelib centre siden  -->
<div class="spacelib">

  <!-- Tilbage knap  -->
  <a href="<?php echo URLROOT; ?>/spaceships" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <br>
  <!-- Enhed overskrift  -->
  <div class="card mb-3" style="max-width: 1940px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://qph.fs.quoracdn.net/main-qimg-723e0df7fac0ce49043deb76e303c6d3-c" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h2 class="card-title"><?php echo $data['spaceships']->tittle; ?></h2>
          <p class="spaceship_full_text"><?php echo $data['spaceships']->body; ?></p>
          <br>
          <div class="list-group">
          <!-- højde  -->
          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="<?php echo URLROOT; ?>/images/height.png" alt="twbs" class="rounded-circle flex-shrink-0" width="32" height="32">
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h4 class="mb-0">Height</h4>
                <p class="mb-0 opacity-75"> </p>
              </div>
              <small class="opacity-50 text-nowrap"> <p class="spaceship_detail"> <?php echo $data['spaceships']->height; ?> Meters </p></small>
            </div>
          </a>  
          <!-- Brede  -->
          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="<?php echo URLROOT; ?>/images/width.png" alt="twbs" class="rounded-circle flex-shrink-0" width="32" height="32">
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h4 class="mb-0">width</h4>
                <p class="mb-0 opacity-75"> </p>
              </div>
              <small class="opacity-50 text-nowrap"> <p class="spaceship_detail"> <?php echo $data['spaceships']->height; ?> Meters </p></small>
            </div>
          </a>
          
  </div>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
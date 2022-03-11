<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Katalog side -->
<div class="spacelib">
  <!-- Filterings box -->
    <div class="spacetool"> 
      <div class="range-slider">
      <input class="range-slider__range" type="range" value="100" min="0" max="500">
      <span class="range-slider__value">0</span>
        
        </div>
    </div>

</div>
    </div>
    <!-- Bruger row til at lave grid  -->
    <div class="row">
        <?php foreach($data['spaceships'] as $spaceships) : ?>
        <!-- For hver enhder i databasen skal der oprettes et card-->
        <div class="col">
          <div class="card spaceship">
            <img src="https://qph.fs.quoracdn.net/main-qimg-723e0df7fac0ce49043deb76e303c6d3-c" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $spaceships->tittle; ?></h5>
                <p class="card-text"> Manufacturer: <?php echo $spaceships->manufacturer; ?></p>
                <p class="card-text"><?php echo $spaceships->launches; ?> Launces </p>
                <p class="card-text"><?php echo $spaceships->landing; ?> Landing </p>
              </div>
              <a href="<?php echo URLROOT; ?>/spaceships/show/<?php echo $spaceships->RocketID; ?>" class="btn btn-dark">More</a>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>



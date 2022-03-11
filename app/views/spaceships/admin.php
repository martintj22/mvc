<!-- Login boostrap -->
<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        
        <center>
        <h2>Admin panel</h2>

        </center>

        <br>

        <a href="<?php echo URLROOT; ?>/newsportal/add" class="btn btn-primary pull-right">
        <i class="fa fa-pencil"></i> Create news article 
        </a>    
        <br>
        <a href="<?php echo URLROOT; ?>/newsportal/add" class="btn btn-primary pull-right">
        <i class="fa fa-pencil"></i> Create Spaceships
        </a> 

      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
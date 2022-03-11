
<?php require APPROOT . '/views/inc/header.php'; ?>

  <body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="submit">UPLOAD</button>
    </form>
    
  </body>


<?php require APPROOT . '/views/inc/footer.php'; ?>

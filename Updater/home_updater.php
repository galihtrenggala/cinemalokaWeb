<!DOCTYPE html>
<html>
<head>
  <title>CINEMALOKA - Updater Mode</title>
</head>
<body class="backgroundlogin">
  <?php include 'header_updater.php'; 
  $f = count($films);
  $i = 0;

  while ($i <= $f-1) {
    # code...
  $film = fopen("$films[$i]", "r");
  ?>
  <div class="card mt-3">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <?php echo fgets($film);?>
        </div>
        <div class="col-md-3">
          <div class="text-center">
            <button class="btn buton">DELETE</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="text-center">
            <button class="btn buton">EDIT</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  $i++;
  }
  ?>
</body>
</html>

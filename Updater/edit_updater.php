<!DOCTYPE html>
<html>
<head>
  <title>C.Updater</title>
</head>
<?php include 'header_updater.php';?>
<?php

  if (isset($_GET['film'])) {
    $kode = $_GET['film'];
    $film = fopen("$films[$kode]", "r");
    $judul = fgets($film);
    $genre = fgets($film);
    fgets($film);
    $sinopsis = fgets($film);
  }
?>
<body class="backgroundlogin">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4"></div>
      <div class="col-md-4 square">
        <form action="simpanFilm.php" method="POST" enctype="multipart/form-data">
          <h1 class="text-center mb-3 mt-3">INPUT DATA FILM</h1>
          <div class="mb-3">
            <h6>Judul Film</h6>
            <input type="text" class="form-control" name="jfilm" required  <?php if (isset($kode)){echo 'value='.$judul;} ?>>
          </div>
          <div class="mb-3">
            <h6>Sinopsis</h6>
            <input type="text" class="form-control" name="sinopsis" required <?php if (isset($kode)){echo 'value='.$sinopsis;} ?>>
          </div>
          <div class="mb-3">
            <h6>Genre</h6>
            <input type="text" class="form-control" name="genre" required <?php if (isset($kode)){echo 'value='.$genre;} ?>>
          </div>

          <div class="form-group" <?php if (isset($kode)){echo 'hidden';} ?>>
            <h6>Poster Photo</h6>
            <input type="file" class="form-control-file" name="poster" <?php if (!isset($kode)){echo 'required';} ?>>
          </div>

          <div hidden><input type="text" name="isEdit?" <?php if (isset($kode)){echo 'value=true';} ?> ></div>
          
          <?php if (isset($kode)){ ?>
          <div hidden><input type="text" name="kode" value="<?php echo $kode ?>"></div>
          <?php } ?>

          <h6>Nilai</h6>
          <select class="form-control form-control-sm mb-5" name='rating' required>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
          </select>
          <div class="row">
            <div class="col-md-6">
              <div class="text-center mb-5">
                <button class="btn buton" onclick="window.location.href='home_updater.php'">BATAL</button>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center mb-5">
                <button type="submit" class="btn buton" onclick="window.location.href='simpanFilm.php'">SELESAI</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</body>
</html>

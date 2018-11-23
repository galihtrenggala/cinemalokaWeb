<!DOCTYPE html>
<html>
  <head>
    <title>CINEMALOKA - <?php echo $_GET['film'] ?></title>
  </head>
  <body>
    <?php include 'header.php';
    
    $f = $detil[$_GET['film']];
    $film = fopen("$f", "r") or die("film doesn't exist");
    $link = 'pilih_kursi.php?film='.$_GET['film'];
    ?>

    <header>
    <section class="content">
      <div class="detilfilm">
      <!-- judul -->
      <h1><?php echo fgets($film);  ?></h1>
      <!-- genre -->
      <h6><?php echo fgets($film);  ?></h6>
      <!-- rating -->
      <p>Rating <?php echo fgets($film);  ?>/5</p>
      <img src="<?php echo $films[$_GET['film']];?>"  alt="">
      <!-- sinopsis -->
      <h6>Sinopsis</h6>
      <p><?php echo fgets($film);  ?></p>
      <button class="btn btn-dark" onclick="window.location.href='<?php echo $link?>'">BOOKING SEKARANG</button>
      </div>
    </section>
  </header>
    <footer>
      <p class="lf ml-3">Copyright &copy; 2018 <a href="#">Cinemaloka</a> - All Rights Reserved</p>
      <p class="rf mr-3">Design by Cinemaloka</a></p>
      <div style="clear:both;"></div>
    </footer>
  </body>
  <?php
  fclose($film)
  ?>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>CINEMALOKA</title>
  </head>

  <body>
    <?php include 'header.php'; 
      
      //echo var_dump($films);

    ?>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php
          $i = 0;
          while ($i < count($header)) {
          ?>
          
          <li data-target="#carouselExampleIndicators" data-slide-to="$i" <?php if ($i==0) {echo "class='active'";} ?>></li>

          <?php
          $i++;
          } 
          ?>
        </ol>
        <div class="carousel-inner">
        <?php
        $i = 0;
        foreach ($header as $gambar) {
        ?>
          <div class="carousel-item <?php if ($i==0) {echo "active";} ?> " style="overflow: hidden; max-height:400px">
            <img class="d-block w-100"src="<?php echo $gambar ?>">
          </div>
        <?php
        $i++;
        }
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <section id="text">
        <div class="container">
          <h1>Booking Tiket Filmnya Sekarang!</h1>
          <p>Halo #MovieMania, pilih film yang ingin Anda tonton</p>
        </div>
    </section>

    <?php
    $i = 0;
    $n = 0;
    $max = 2;
    while ($n <= 3) {
    

    ?>

    <section class="section1 mt-5">
      <div class="container">
        <div class="row">
          <?php
          while ($i <= $max && isset($films[$i])) {
          
          ?>

          <div class="col-md-4">
            <a target="_blank" href="detil_film.php?film=<?php echo $i; ?>">
            <div class="card animated animatedFadeInUp fadeInUp">
              <center> <img class="card-image-top" src="<?php echo $films[$i]; ?>" alt="Card image"> <div class="overlay">
                <div class="text">BOOKING SEKARANG</div>
              </div></center>
            </div>
            </a>
          </div>

          <?php
          $i++;
          }
          ?>

        </div>
      </div>
    </section>

    <?php
    $max = $max + 3;
    $n++;
    }
    ?>

    <footer>
      <p class="lf ml-3">Copyright &copy; 2018 <a href="#">Cinemaloka</a> - All Rights Reserved</p>
      <p class="rf mr-3">Design by Cinemaloka</a></p>
      <div style="clear:both;"></div>
    </footer>
  </body>
</html>
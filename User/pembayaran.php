<!DOCTYPE html>
<html>
  <head>
    <title>CINEMALOKA - Pembayaran</title>
  </head>
  <body>
    <?php include 'header.php';
    echo $_POST['Tanggal'];
    echo ", ";
    echo $_POST['Jam'];
    echo ", ";
    foreach ($_POST['kursi'] as $kursi) {
      echo $kursi.", ";
    }
    echo $_POST['kodeFilm'];
    ?>
    <header>
      <div class="container mt-3 mb-3">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 square">
            <form action='buat_tiket.php' method='POST'>
              <div class="text-center mb-3 mt-5">
                <h4>Alamat Email</h4>
                <input type="text" class="form-control" placeholder="example@gmail.com" required name="email">
              </div>
              <div class="mb-5 mt-5">
                  <h4 class="text-center">Metode Pembayaran</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="metode" id="mMandiri" value="Mandiri">
                  <label class="form-check-label" for="mMandiri">
                    Transfer Mandiri
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="metode" id="mBCA" value="BCA">
                  <label class="form-check-label" for="mBCA">
                    Transfer BCA
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="metode" id="mBNI" value="BNI">
                  <label class="form-check-label" for="mBNI">
                    Transfer BNI
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="metode" id="mGP" value="GO-PAY">
                  <label class="form-check-label" for="mGP">
                    GO-PAY
                  </label>
                </div>
              </div>

              <div hidden><input type="text" name="tanggal" value="<?php echo $_POST['Tanggal'];?>"></div>
              <div hidden><input type="text" name="jam" value="<?php echo $_POST['Jam'];?>"></div>
              <?php
                foreach ($_POST['kursi'] as $kursi) {
              ?>
              <div hidden><input type="text" name="kursi[]" value="<?php echo $kursi;?>"></div>
              <?php
                }
              ?>
              <div hidden><input type="text" name="kodeFilm" value="<?php echo $_POST['kodeFilm'];?>"></div>
              <div hidden><input type="text" name="rdm" value="<?php echo rand(1,999);?>"></div>

              <div class="text-center mb-5">
                <button type="submit" class="btn btn-dark">LANJUT</button>
              </div>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    <footer>
      <p class="lf ml-3">Copyright &copy; 2018 <a href="#">Cinemaloka</a> - All Rights Reserved</p>
      <p class="rf mr-3">Design by Cinemaloka</a></p>
      <div style="clear:both;"></div>
    </footer>
  </body>
</html>

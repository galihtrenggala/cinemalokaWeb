<!DOCTYPE html>
<html>
  <head>
    <title>CINEMALOKA - Pilih Kursi</title>
  </head>
  <body>
  <?php include 'header.php';
    $jmlTiket = count($tiket);
    for ($i=0; $i < $jmlTiket; $i++) {
      $t = fopen($tiket[$i], 'r');

      $kodeT = (int)fgets($t);
      $kode = $_GET['film']."\r\n";
      if ($_GET['film']==$kodeT){
        fgets($t);
        fgets($t);
        $terpesan[$i] = explode(" ", str_replace('kursi : ', '', fgets($t)));
      }
      fclose($t);
    }
    if (isset($terpesan)){
      $pesan = array_reduce($terpesan, 'array_merge', array());
    }

  ?>

    <header>
      <div class="container mt-3 mb-3">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 square">
            <form action='pembayaran.php' method='POST'>
              <div class="mb-3 mt-3">
                <h4>Pilih Jadwal Nonton</h4>
              </div>
                <p>Pilih Tanggal</p>
              <?php
              for ($i=25; $i < 30; $i++) { 
              
              ?>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Tanggal" id="inlineRadio<?php echo $i?>" value="<?php echo $i?>">
                <label class="form-check-label" for="inlineRadio<?php echo $i?>"><?php echo $i?></label>
              </div>

              <?php
              }
              ?>
              <p class="mt-3">JAM</p>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Jam" id="inlineRadio1" value="11.30">
                <label class="form-check-label" for="inlineRadio1">11:30</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Jam" id="inlineRadio2" value="15.45">
                <label class="form-check-label" for="inlineRadio2">15.45</label>
              </div>
              <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="radio" name="Jam" id="inlineRadio3" value="20.30">
                <label class="form-check-label" for="inlineRadio3">20.30</label>
              </div>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4 square mt-4">
              <div class="mb-3 mt-3">
                <h4>Pilih Kursi <h6>(1 Kursi Rp20.000,-)</h6></h4> <!-- beresin ini -->
              </div>
              <?php 
              $A = 'A';
              while ($A != 'D') {
              ?>

              <div>
                <div class="form-check form-check-inline"><?php echo $A;?></div>
                <?php 
                for ($i=1; $i <= 4; $i++) {
                ?>
                <div class="form-check form-check-inline col-md-2">
                  <?php
                    $kursi = $A.$i;
                  ?>
                  <input class="form-check-input" type="checkbox" id="kursi<?php echo $kursi;?>" value="<?php echo $kursi;?>" name="kursi[]"
                  <?php 
                  if (isset($pesan)){
                    foreach ($pesan as $disable) {
                      if ($kursi==$disable){
                        echo 'disabled';
                      }
                    }
                  }
                  ?>
                  >
                  <label class="form-check-label" for="kursi<?php echo $kursi;?>"><?php echo $kursi;?></label>
                </div>  
                <?php
                }
                ?>
              </div>
              <?php
                $i = 1;
                $A++;
              }
              ?>
              <input hidden type="text" name="kodeFilm" value="<?php echo $_GET['film'];?>">

              <div class="text-center mb-3">
                <button type="submit" class="mt-3 btn btn-dark" onclick="window.location.href='pembayaran.html'">LANJUT</button>
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
<!-- ignore
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">A1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">A2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label" for="inlineCheckbox3">A3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox4">B1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox5">B2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label" for="inlineCheckbox6">B3</label>
              </div>
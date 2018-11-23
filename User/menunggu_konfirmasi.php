<!DOCTYPE html>
<html>
  <head>
    <title>CINEMALOKA - Konfirmasi</title>
  </head>
  <body>
    <?php include 'header.php';
    echo $_POST['tanggal'].", ";
    echo $_POST['jam'].", ";
    foreach ($_POST['kursi'] as $kursi) {
      echo $kursi.", ";
    }
    echo $_POST['email'].", ";
    echo $_POST['metode'];
    ?>
    <header>
      <div class="container mt-3 mb-3">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 square">
            <form action=”” method=”POST”>
              <div class="text-center mb-3 mt-5">
                <h4>Instruksi Pembayaran</h4>
                <p>Transfer tepat sesuai nominal berikut</p>
                <h2>Rp <?php echo count($_POST['kursi'])*20000+$_POST['rdm'];?></h2>
                <div class="square2 mt-3 mb-3 text-left">
                  <p class="pt-2 pl-2 pr-2"><b>PENTING!</b> Mohon transfer tepat sampai 3 angka terakhir agar donasi Anda dapat diproses</p>
                </div>
                <p>Transfer ke rekening <b> <?php echo $_POST['metode'] ?> </b>a/n <b>PT. Cinemaloka</b> berikut ini :</p>
                <h3>892 838 419 37317</h3>
                <p>Transfer sebelum <b>2 Nov 2018 14:51 WIB</b> atau tiket Anda otomatis dibatalkan oleh sistem</p>
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

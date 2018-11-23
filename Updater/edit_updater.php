<!DOCTYPE html>
<html>
<head>
  <title>C.Updater</title>
</head>
<?php include 'header_updater.php';?>
<body class="backgroundlogin">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4"></div>
      <div class="col-md-4 square">
        <form action=”” method=”POST”>
          <h1 class="text-center mb-3 mt-3">INPUT DATA FILM</h1>
          <div class="mb-3">
            <h6>Judul Film</h6>
            <input type="text" class="form-control" name="jfilm" required>
          </div>
          <div class="mb-3">
            <h6>Sinopsis</h6>
            <input type="text" class="form-control" name="sinopsis" required>
          </div>
          <div class="mb-3">
            <h6>Genre</h6>
            <input type="text" class="form-control" name="genre" required>
          </div>
          <div class="form-group">
            <h6>Poster Photo</h6>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
          </div>
          <h6>Rating</h6>
          <select class="form-control form-control-sm mb-5" required>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <div class="row">
            <div class="col-md-6">
              <div class="text-center mb-5">
                <button class="btn buton">CANCEL</button>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center mb-5">
                <button type="submit" class="btn buton">PUBLISH</button>
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

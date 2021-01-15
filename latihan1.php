<?php 

$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rest Api</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" width = "120" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home </a>
        <a class="nav-item nav-link" href="#">Features</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row mt-3">
    <div class="col">
      <h2>All Menu</h2>
    </div>  
  </div>
  <div class="row">
    <?php foreach($menu as $row) :?>
      <div class="col-md-4">
        <div class="card mb-3" style="width: 18rem;">
          <img class="card-img-top" src="img/menu/<?= $row["gambar"]?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?= $row["nama"]?></h5>
            <p class="card-text"><?= $row["deskripsi"]?></p>
            <h5 class="card-title"><?= $row["harga"]?></h5>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

</body>
</html>

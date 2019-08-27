<?php 
    $data = file_get_contents('data/pizza.json');

    // menjadikan data json menjadi array
    $menu = json_decode($data, true);

    //mengeluarkan key menu
    $menu = $menu['menu'];


 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CodeKita - Hut</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">All Menu <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Pizza</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>

        <div class="row">
            <?php foreach($menu as $row) : ?>
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                  <img src="img/pizza/<?= $row["gambar"]  ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $row["nama"]  ?></h5>
                        <p class="card-text"><?= $row["deskripsi"]  ?></p>
                        <h5 class="card-title"><?= $row["harga"]  ?></h5>
                        <a href="#" class="btn btn-primary">Pesan Sekarang!</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>    
    </div>


    
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
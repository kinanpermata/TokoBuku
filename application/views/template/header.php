<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- style css -->
    <style>
    .badge{
      margin-left: 3px;
    }
    </style>
    
    <!-- <title>Hello, world!</title> -->
    <title><?= $title ?></title>

  </head>
  <body>

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
  <a class="navbar-brand" href="#">Toko Buku</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link" href="<?= base_url(); ?>transaksi">Transaksi</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>pembeli">Data Pembeli</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>buku">Data Buku</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>pegawai">Data Pegawai</a>
    </div>
  </div>
  </div>
</nav>
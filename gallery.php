<?php
$title = "Johnnyswim Photo Gallery";
require 'includes/header.html';
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Johnnyswim Photos">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title><?php echo $title?></title>
</head>
<body>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide pointer-event" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/collab.jpg" alt="Behind the scenes">
        <div class="carousel-caption d-none d-md-block">
          <h3>Johnnyswim Behind the Scenes</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/fam.jpg" alt="Family">
        <div class="carousel-caption d-none d-md-block">
          <h3>Family</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/sudano.jpg" alt="Amanda Sudano"> 
        <div class="carousel-caption d-none d-md-block">
          <h3>Amanda Sudano</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/ramirez.jpg" alt="Abner Ramirez">
        <div class="carousel-caption d-none d-md-block">
          <h3>Abner Ramirez</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br><br><br>

<img src="images/flower.jpg" alt="Flower" width="100%">

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>




<?php
include('includes/footer.html');
?>
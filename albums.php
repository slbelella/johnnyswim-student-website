<?php
$title = "Johnnyswim Albums";
require 'includes/header.html';
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Johnnyswim Albums">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="includes/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title><?php echo $title?></title>
</head>
<body>
<h1>Listen Now on Spotify</h1><br>

<div class="card-deck">
  <div class="card">
  <a href="https://open.spotify.com/album/7ijL8KF5a1FTAmXU8X33Y3?autoplay=true">
    <img class="card-img-top" src="images/johnnyswimchristmas.jpg" alt="A Johnnyswim Christmas" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">A Johnnyswim Christmas (2014)</h3></a>
    </div>
  </div>

  <div class="card">
    <a href="https://open.spotify.com/album/7ijL8KF5a1FTAmXU8X33Y3?autoplay=true">
    <img class="card-img-top" src="images/georgica.jpg" alt="Georgica Pond">
    <div class="card-body">
      <h3 class="card-title">Georgica Pond (2016)</h3></a>
    </div>
  </div>
  
  <div class="card">
    <a href="https://open.spotify.com/album/3ZU0AW8kgxxyR48yUFUiK5?autoplay=true">
    <img class="card-img-top" src="images/moonlight.jpg" alt="Moonlight">
    <div class="card-body">
      <h3 class="card-title">Moonlight (2019)</h3></a>
    </div>
  </div>

  <div class="card">
    <a href="https://open.spotify.com/album/2VVRIyJ52TT55WJYfHZNNt?autoplay=true">
    <img class="card-img-top" src="images/songswithstrangers.jpg" alt="Songs with Strangers">
    <div class="card-body">
      <h3 class="card-title">Songs with Strangers (2020)</h3></a>
    </div>
  </div>

  <div class="card">
  <a href="https://open.spotify.com/album/57e14lgvP2bOfvHGKUt1Cd">
    <img class="card-img-top" src="images/anotherchristmas.jpg" alt="Another Johnnyswim Christmas">
    <div class="card-body">
      <h3 class="card-title">Another Johnnyswim Christmas (2020)</h3></a>
    </div>
  </div>
</div>
<br><br><br><br>

        <img src="images/firsttry.jpg" alt="First Try" width="100%" class="first">


        <?php
include('includes/footer.html');
?>

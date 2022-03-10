<?php
$title = "Band Biographies";
require 'includes/header.html';
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Johnnyswim Band Biographies">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="includes/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title><?php echo $title?></title>
</head>
<body>

<div class="box">
      <div class="card">
        <div class="imgBx">
            <img src="images/Amanda.jpg" alt="Amanda Sudano">
        </div>
        <div class="details">
            <h2>Amanda Sudano<br><span>Singer-songwriter</span></h2>
        </div>
      </div>
    
       <div class="card">
         <div class="imgBx">
            <img src="images/JS.jpg" alt="Johnnyswim-The Band">
         </div>
         <div class="details">
            <h2>Johnnyswim<br><span>Formed in 2005</span></h2>
          </div>
       </div>

       <div class="card">
         <div class="imgBx">
            <img src="images/abner.jpg" alt="Abner Ramirez">
         </div>
         <div class="details">
            <h2>Abner Ramirez<br><span>Singer-songwriter</span></h2>
          </div>
       </div>
 
  </div>
  <div class="johnnyswim">
  <img src="images/family.jpg" alt="Johnnyswim Family" width="100%" class="family">
  <div class="text-block">
    <h1>About the Band</h1>
    <p>Johnnyswim is an American folk, soul, blues, pop music duo, consisting of singer-songwriters Amanda Sudano and Abner Ramirez.
        The duo formed in 2005 in Nashville, Tennessee, United States.

        Ramirez and Sudano first met after Sunday service at a church in Nashville, Tennessee.
        Four years later, in 2005, Sudano attended a songwriting workshop held by Ramirez and became interested in writing songs with him.

        In 2009, Sudano and Ramirez married.</p>
  </div>
</div>

<?php
include('includes/footer.html');
?>
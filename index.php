<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
$title = "Johnnyswim Homepage";
require 'includes/header.html';
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Johnnyswim Homepage">
<link href="includes/style.css" rel="stylesheet">
<title><?php echo $title?></title>
</head>
<body>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome!</h1>
    <p>
        <a href="reset-password.php" class="btn">Reset Your Password</a><br>
        <a href="logout.php" class="btn">Sign Out</a>
    </p>

<div class="container">
  <img src="images/johnnyswim.jpg" width="100%" alt="Johnnyswim">
  <a href="https://www.amazon.com/gp/product/B09M93M142/ref=dm_ws_sp_ps_dp"><button class="btn">Buy New Music</button></a>
</div>
</body>

<img src="images/pool.jpg" width="100%" alt="Pool">

<?php
include('includes/footer.html');
?>
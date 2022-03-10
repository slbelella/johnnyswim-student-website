<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Follow Johnnyswim">
<?php
global $title;
?>
<link href="includes/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/coq4ztn.css">
<title><?php echo $title?></title>
</head>
<body>
        <header>
          <div class="logo">
        <a href=index.php><img src="images/swimlogo.jpg" class="logo" width="25%"></a>
          </div>
        <nav>
        <a href="index.php">Home</a>
        <a href="news.php">News</a>
        <a href="bios.php">Bios</a>
        <a href="albums.php">Albums</a>
        <a href="gallery.php">Pics</a>
        <a href="events.php">Tour</a><br><br>
        <?php
        if (isset($_SESSION["useruid"])) {
          echo "<a href='logout.php'>Logout</a>";
        }
        else {
          echo "<a href='register.php'>Sign up</a>";
          echo "<a href='login.php'>Login</a>";
        }
      ?>
	</nav>
        </header>

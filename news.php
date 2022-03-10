<?php
$title = "Johnnyswim News";
require 'includes/header.html';
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="News About Johnnyswim">
<title><?php echo $title?></title>
</head>
<body>

<div class="article">
<h1>'Devastating' Release</h1>

<div class="news">
<iframe class="responsive-iframe" src="https://www.youtube.com/embed/WJHB7Sqf_So" title="YouTube video player" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<h2>Johnnyswim, the husband and wife singer-songwriter duo of Amanda Sudano–Ramirez and Abner Ramirez, have released their latest love song and music video, “Devastating.” 

But the new track isn’t just about the high points of love; it explores love in all its forms, including the difficulties and hardships of being in love. The duo sings 
“I wanna love you till it’s devastating / Until the dirt cries and my grave is waiting / Is it even worth it if there ain’t heartbreak waiting?”<br><br>

In a statement about the song, the couple explained, “As a married duo it’s easy to write songs about the pleasures of love and romance, 
but in ‘Devastating’ we explore the depth of love that at its best, isn’t just sweet, but, if all goes right, will be touched by some level of tragedy and hardship. 
This ‘ring on my finger and a tag on my toe’ kind of love is the soul of the song. Love can be pretty, but you’re lucky, it’s devastating too.”<br><br>

The new song comes out during an exciting time for Johnnyswim, as the couple has recently premiered the new season of their series, 
The JOHNNYSWIM Show, on Discovery+, released their first book Home Sweet Road: Finding love, Making Music, and Building a Life One City at a Time, 
and is gearing up to head on tour this fall. All while releasing new music from their upcoming album. It’s a good time to be a Johnnyswim fan.</h2>
</div>

<div class="magnolia">
    <h1>New Magnolia Series, 'At Home With Johnnyswim'</h1>
<h2>The Magnolia television family is fixin' to expand.

<img src="images/magnolia.jpg" alt="Johhnyswim Magnolia Series" class="friends">
Chip and Joanna Gaines' Magnolia Network has added a second original series with the musical duo Abner Ramirez and Amanda Sudano Ramirez of Johnnyswim, 
titled At Home With Johnnyswim, the couples announced in today's episode of the network's digital series Road to Launch.<br><br>

In an exclusive clip from that episode, which you can watch above, the Ramirezes talk about their experience filming the new series, 
which will document the musicians' life at home with their kids following the cancellation of Johnnyswim's 2020 tour due to the COVID-19 pandemic. 
"With [our first series] Home on the Road, there's so much going on on the road — there's shows, there's kids, there's trying to film stuff, 
and do we have what we need — there's so much that goes into it," Amanda says. "But [with At Home With Johnnyswim] we had nothing better to do. 
We were quarantined. We were trying to figure out how do we have fun with the kids when they can't leave and how do we make music? So it was just, 
I don't know, let's get the cameras, let's do this, let's have some fun. So for me, that was more fun."<br><br>

Added Abner, "Trying to find a way to be ourselves and express ourselves and get some energy out the way that I think is unique to us — 
I think you get to see that on At Home With Johnnyswim."

The eight-episode series joins the growing slate of original programming coming to Magnolia Network, which is set to launch July 15 on Discovery+ 
and in the forthcoming Magnolia app. At Home With Johnnyswim is produced by Chip and Joanna Gaines' production company Blind Nil.<br><br>

The full season of the duo's first docu-series, Fixer Upper: Welcome Home, is produced by Left/Right and is currently available to stream on Discovery+ 
as part of the Magnolia Network Preview. That series follows their three-month, cross-country tour while juggling their growing family and 
finding new adventures in each city along the way.</h2>
</div>



<?php

// Print some introductory text:
print '<h1>Johnnyswim News</h1>
<p>Register to follow the latest from Johnnyswim</p>';

// Check if the form has been submitted:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $problem = false; // No problems so far.

        //Check for each value...
        if (empty($_POST['first_name'])) {
            $problem = true;
            print '<p class="text--
            error">Please enter your first name</p>';
        }

        if (empty($_POST['last_name'])) {
            $problem = true;
            print '<p class="text--
            error">Please enter your last name</p>';
        }

        if (empty($_POST['email']) || 
        (substr_count($_POST['email'], '@') != 1) ) {
            $problem = true;
            print '<p class="text--
            error">Please enter your email address</p>';
        }

        if (!$problem) { // If there weren't any problems...
        
            // Print a message:
            print '<p class="text--success">Thank you for following The Midnight!</p>';

            // Send the email:
            $body = "Thank you, {$_POST['first_name']}, for registering to receive the latest from The Midnight'.";
            mail($_POST['email'],
            'Registration Confirmation',
            $body, 'From: admin@example.com');

            // Clear the posted values:
            $_POST = [];
        } else{ // Forgot a field.

            print '<p class="text--error">Please try again!</p>';

        }
    } // End of handle form IF.

    // Create the form:
        ?>
        <form action="news.php" method="post" class="form--inline">

        <p><label for="first_name">First Name: </label><input type="text"
        name="first_name" size="30"
        value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>"></p>

        <p><label for="last_name">Last Name: </label><input type="text"
        name="last_name" size="30"
        value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } ?>"></p>

        <p><label for="email">Email: </label><input type="email"
        name="email" size="40"
        value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>"></p>

        <p><input type="submit" name="submit" value="Register" class="submit"></p>

    </form>

    <img src="images/johnnyswim2.jpg" width="100%" alt="Johnnyswim">

<?php
include('includes/footer.html');
?>
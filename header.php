<?php
    session_start();
    require_once "includes/functions.inc.php";
    require_once "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>
<body>
<div class="div-nav">
    <header>
        <img class="logo" onclick="window.location.href='index.php'" src="images/logo.png" alt="">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="">Costumers/Creators</a></li>
            <li><a href="">About us</a></li>
        </ul>
        <?php
        $expected_url = "/MusicSocialMedia/index.php";
        $expected_url2 = "/MusicSocialMedia/index2.php";
        $current_url = $_SERVER["REQUEST_URI"];
        if ($current_url == $expected_url OR $current_url == $expected_url2) {
            echo "<div class='dropdown'>";
            echo "<button class='dropbtn'>Sections</button>";
            echo "<div class='dropdown-content'>";
            echo "<a href='#reg'>Register</a>
                            <a href='#collection'>Collection</a>
                            <a href=''#'>Link 3</a>";
            echo "</div></div>";
        }
        ?>
        <form action="search.php" method="post">
            <input placeholder="Search..." style="margin-right: 30px;" type="text" name="searchbar">
        </form>
        <ul class="login-ul">
            <?php

                if (isset($_SESSION["useruid"])) {
                    $pfpid = $_SESSION["userid"];
                    echo "<li class='login-button'><a href='includes/logout.inc.php'>Log out</a></li>";
                    $sqlImg = "SELECT * FROM profileimg WHERE userid = '$pfpid';";
                    $resultImg = mysqli_query($conn, $sqlImg);
                    while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                        if ($rowImg["status"] == 0) {
                            $sessionid = $_SESSION["userid"];
                            $filename = "data/profile" . $sessionid . "*";
                            $fileinfo = glob($filename);
                            $fileExt = explode(".", $fileinfo[0]);
                            $fileactualext = $fileExt[1];
                            $pfp = 'data/profile' . $pfpid . '.' . $fileactualext . '?' . mt_rand();
                        } else {
                            $pfp = 'images/nopfp.png';
                        }


                    }
                    echo "<li class='indexpfp'><img onclick='window.location.href=\"profile.php\"' class='indexpfp' style='width: 50px; height: 50px; border-radius: 50%; margin-left: 5px; object-fit: cover' src='$pfp'></li>";
                }
                else {
                    echo "<li class='login-button'><a href='login.php'>Log in</a></li>";
                    echo "<li class='login-button'><a href='signup.php'>Register</a></li>";
                }
            ?>
        </ul>

    </header>
</div>

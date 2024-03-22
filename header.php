<?php
    session_start();
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
            <li><a href="">Costumers</a></li>
            <li><a href="">Creators</a></li>
            <li><a href="">Sections</a></li>
            <li><a href="">About us</a></li>
        </ul>
        <?php
        $expected_url = "/MusicSocialMedia/index.php";
        $expected_url2 = "/MusicSocialMedia/index2.php";
        $current_url = $_SERVER["REQUEST_URI"];
        if ($current_url == $expected_url OR $expected_url2) {
            echo "<div class='dropdown'>";
            echo "<button class='dropbtn'>Sections</button>";
            echo "<div class='dropdown-content'>";
            echo "<a href='#'>Link 1</a>
                            <a href='#'>Link 2</a>
                            <a href=''#'>Link 3</a>";
            echo "</div></div>";
        }
        ?>
        <ul class="login-ul">
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li class='login-button'><a href='includes/logout.inc.php'>Log out</a></li>";
                    echo "<li class='login-button'><a href='profile.php'>Profile</a></li>";
                }
                else {
                    echo "<li class='login-button'><a href='login.php'>Log in</a></li>";
                    echo "<li class='login-button'><a href='signup.php'>Register</a></li>";
                }
            ?>
        </ul>

    </header>
</div>

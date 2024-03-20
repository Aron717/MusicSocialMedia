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
            <li><a href="">About us</a></li>
        </ul>
        <ul class="login-ul">
            <li class="login-button"><a href="login.php">Login</a></li>
            <li class="login-button"><a href="signup.php">Register</a></li>
        </ul>

    </header>
</div>

<?php
include_once 'footer.php';
?>
<?php
include_once "header.php";

if (!isset($_SESSION["useruid"])) {
    header("location: login.php?error=login");
    exit();
}
?>

<div style="margin: auto; background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex; align-items: center; flex-direction: column">
    <div style="background-color: #774fc5; width: 200px; height: 200px; border-radius: 50%; margin-top: 30px"></div>
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<h1>" . $_SESSION["userfullname"] . "</h1>";
    }
    ?>

</div>

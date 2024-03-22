<?php
include_once "header.php";
if (!isset($_SESSION["useruid"])) {
    header("location: login.php?error=login");
    exit();
}

?>
<div style="margin: auto; background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex; align-items: center; flex-direction: column">
    <?php
    if (isset($_SESSION["useruid"])) {
        search($conn, $_POST["searchbar"]);
    }
    ?>

</div>

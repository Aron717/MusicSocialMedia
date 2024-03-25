<?php
include_once "header.php";
if (!isset($_SESSION["useruid"])) {
    header("location: login.php?error=login");
    exit();
}

?>
<div style="margin: auto; background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex; justify-content: space-evenly; flex-direction: row">
    <div style="width: 100vw; height: 100%; background-color: rgba(0,0,0,0.52); color: white">
        <h1>Friend list:</h1>
    </div>

    <div style="height: 100%; background-color: rgba(135,5,241,0.44); width: 60%; display: flex; flex-direction: column; align-items: center">
        <?php
        if (isset($_SESSION["useruid"])) {
            search($conn, $_POST["searchbar"]);
        }
        ?>
    </div>
    <div style="width: 100vw; height: 100%; background-color: rgba(0,0,0,0.52); color: white">
        <h1>Recommended:</h1>
    </div>


</div>

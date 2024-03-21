<?php
include_once "header.php";
if (!isset($_SESSION["useruid"])) {
    header("location: index.php");
    exit();
}
?>


    <section style="width: 100vw; height: 700px">
        <div style="background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex; justify-content: flex-start; flex-direction: column; align-items: center">
            <?php
                echo "<h1>Welcome " . $_SESSION["useruid"] . "</h1>";
            ?>
            <img src="" alt="">
        </div>
    </section>


<?php
include_once "footer.php";
?>
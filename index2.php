<?php
include_once "header.php";
if (!isset($_SESSION["useruid"])) {
    header("location: index.php");
    exit();
}
?>
    <section style="width: 100vw; height: 700px; background-image: url('images/bg.jpg')">
        <div style="background-color: rgba(0,0,0,0.51); width: 100vw; height: 700px; display: flex; flex-direction: row; align-items: center; justify-content: space-around; backdrop-filter: blur(3px) hue-rotate(200deg)">
            <div style="display: flex; flex-direction: column; align-items: center">
                <?php
                echo "<h1>Welcome " . $_SESSION["useruid"] . "!</h1>";
                ?>
                <h1 style="font-size: xx-large" class="index-h1">Start checking out our collection!</h1>
                <button class="register-button" onclick="window.location.href='products.php'">Click here!</button>
            </div>
            <img src="images/index2-img1.jpg" alt="Music Production" style="width: 40%; margin-top: 20px" draggable="false">
        </div>
    </section>


<?php
include_once "footer.php";
?>
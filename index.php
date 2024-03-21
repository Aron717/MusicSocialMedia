<?php
    include_once 'header.php';


?>


<div style="background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex; justify-content: flex-start; flex-direction: column; align-items: center">
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<h1>Welcome " . $_SESSION["useruid"] . "</h1>";
    }
    else {
        echo "<h1 class='index-h1'>You want to sell/buy music? You are in the right place!</h1>";
        echo "<button class='register-button' onclick='window.location.href=\"signup.php\"'>Register to see more</button>";
    }

    ?>
</div>


<?php
include_once 'footer.php';


?>
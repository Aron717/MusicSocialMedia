<?php
include_once 'header.php';
?>
<div style="margin: auto; background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex">
    <div class="sign-up-div">
        <div class="sign-up-div2">
            <h2 style="color: black;">Log in</h2>
            <div>
                <form style="display: flex; flex-direction: column; align-items: center" action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username/Email...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button class="button-log-reg" style="margin-top: 10px" type="submit" name="submit">Log in</button>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p style='color: purple; font-weight: bold'>Fill in all fields</p>";
                        }

                        else if ($_GET["error"] == "wronglogin") {
                            echo "<p style='color: purple; font-weight: bold''>Incorrect log in!</p>";
                        }
                        else if ($_GET["error"] == "login") {
                            echo "<p style='color: purple; font-weight: bold''>Log in first to see more!</p>";
                        }
                    }
                    ?>
                    <a style="color: black; margin-top: 10px" href="signup.php">Not registered yet?</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>
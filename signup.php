<?php
include_once 'header.php';
?>
<div style="margin: auto; background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex">
    <div class="sign-up-div">
        <div class="sign-up-div2">
            <h2 style="color: black;">Sign up</h2>
            <div>
                <form style="display: flex; flex-direction: column; align-items: center" action="includes/signup.inc.php" method="post">
                    <input type="text" name="name" placeholder="Full name...">
                    <input type="text" name="email" placeholder="Email...">
                    <input type="text" name="uid" placeholder="Username...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                    <button class="button-log-reg" style="margin-top: 10px" type="submit" name="submit">Sign up</button>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p style='color: purple; font-weight: bold'>Fill in all fields</p>";
                        }

                        else if ($_GET["error"] == "invaliduid") {
                            echo "<p style='color: purple; font-weight: bold''>Choose a proper username</p>";
                        }
                        else if ($_GET["error"] == "invalidemail") {
                            echo "<p style='color: purple; font-weight: bold'>Choose a proper email</p>";
                        }
                        else if ($_GET["error"] == "pwddontmatch") {
                            echo "<p style='color: purple; font-weight: bold''>Password don't match</p>";
                        }
                        else if ($_GET["error"] == "stmtfailed") {
                            echo "<p style='color: purple; font-weight: bold''>Something went wrong, try again!</p>";
                        }
                        else if ($_GET["error"] == "usernametaken") {
                            echo "<p style='color: purple; font-weight: bold''>Choose another username</p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p style='color: purple; font-weight: bold''>You have signed up</p>";
                        }

                    }
                    ?>
                    <a style="color: black; margin-top: 10px" href="signup.php">Already registered?</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>
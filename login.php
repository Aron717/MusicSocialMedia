<?php
include_once 'header.php';
?>
<div style="margin: auto; background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex">
    <div class="sign-up-div">
        <div class="sign-up-div2">
            <h2 style="color: black;">Log in</h2>
            <div>
                <form style="display: flex; flex-direction: column; align-items: center" action="includes/login.inc.php" method="post">
                    <input type="text" name="name" placeholder="Username/Email...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button style="margin-top: 10px" type="submit" name="submit">Log in</button>
                </form>
            </div>
        </div>
    </div>
</div>
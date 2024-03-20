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
                    <button style="margin-top: 10px" type="submit" name="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>
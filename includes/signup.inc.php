<?php

    if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdrepeat"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if  (emptyInputSignup($name, $email, $pwd, $pwdRepeat, $username) !== false) {
            header("location: ../sign-up.php?error=emptyinput");
            exit();
        }
        if  (invalidUid($username) !== false) {
            header("location: ../sign-up.php?error=emptyinput");
            exit();
        }

    }
    else {
        header("location: ../sign-up.php");
        exit();
    }
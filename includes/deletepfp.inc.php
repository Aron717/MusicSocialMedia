<?php
    session_start();
    include_once "dbh.inc.php";
    include_once "functions.inc.php";
    $sessionid = $_SESSION["userid"];

    $filename = "../data/profile".$sessionid."*";
    $fileinfo = glob($filename);
    $fileExt = explode(".", $fileinfo[0]);
    $fileactualext = $fileExt[1];


    $file = "../data/profile".$sessionid.".".$fileactualext;

    if (!unlink($file)) {
        header("Location: ../profile.php?error=notdeleted");
    }

    $sql = "UPDATE profileimg SET status = 1 WHERE userid='$sessionid';";
    mysqli_query($conn, $sql);

    header("Location: ../profile.php?error=deleted");
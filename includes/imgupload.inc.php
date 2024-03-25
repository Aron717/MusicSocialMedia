<?php

session_start();
include_once "dbh.inc.php";
include_once "functions.inc.php";
$id = $_SESSION["userid"];

if (isset($_POST["submit"])) {
    $file = $_FILES["file"];
    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png");
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = "../data/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status = 0 WHERE userid = '$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: ../profile.php?error=successful");
            }
            else {
                echo "Your image is too big!";
            }
        }
        else {
            echo "There was an error uploading your image!";
        }
    }
    else {
        header("Location: ../profile.php?error=wrongfile");
    }
}
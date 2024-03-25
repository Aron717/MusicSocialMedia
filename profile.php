<?php
include_once "header.php";

if (!isset($_SESSION["useruid"])) {
    header("location: login.php?error=login");
    exit();
}
$userid = $_GET["id"] ?? $_SESSION["userid"];
$query = mysqli_query($conn, "SELECT * FROM users WHERE usersId = " . mysqli_real_escape_string($conn, $userid));

?>

<div style="margin: auto; background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh; display: flex; align-items: center; flex-direction: column">
    <?php
    if ($row = mysqli_fetch_assoc($query)) {
        $un = "<h1>" . $row["usersName"] . "</h1>";
        $ui = "<h2>" . $row["usersUid"] . "</h2>";
        $id = $row["usersId"];
        $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
        $resultImg = mysqli_query($conn, $sqlImg);
        while ($rowImg = mysqli_fetch_assoc($resultImg)) {
            echo "<div>";
                if ($rowImg["status"] == 0) {
                    $pfp = 'data/profile'.$id.'.jpg?'.mt_rand();
                }
                else {
                    $pfp = 'images/nopfp.png';
                }
            echo "</div>";
        }
    }
    else {
        echo "<h1>No profile exists like that!</h1>";
    }

    ?>
    <?php
    $expected_url = "/MusicSocialMedia/profile.php";
    $expected_url2 = "/MusicSocialMedia/profile.php?error=wrongfile";
    $expected_url3 = "/MusicSocialMedia/profile.php?error=successful";
    $current_url = $_SERVER["REQUEST_URI"];
    if ($current_url == $expected_url OR $current_url == $expected_url2 OR $current_url == $expected_url3) {
        echo  "<img src='$pfp' style='background-color: rgba(119,79,197,0.57); width: 200px; height: 200px; border-radius: 50%; margin-top: 30px'>
    <form action='includes/imgupload.inc.php' method='post' enctype='multipart/form-data' style='margin-top: 20px'>
        Select image to upload:
        <input type='file' name='file' style='width: 200px'><br>
        <button type='submit' name='submit' style='border-radius: 20px'>Upload</button></form>";
    } else {
        echo "<img src='$pfp' style='background-color: rgba(119,79,197,0.57); width: 200px; height: 200px; border-radius: 50%; margin-top: 30px; object-fit: cover'>";
        echo "<button style='margin-top: 20px; border-radius: 20px; background-color: #8705f1; color: white'>Add as a friend</button>";
    }
    echo $un;
    echo $ui;
    ?>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "successful") {
                echo "<p style='color: white; font-weight: bold'>The image is uploaded</p>";
            }
            elseif ($_GET["error"] == "wrongfile") {
                echo "<p style='color: white; font-weight: bold'>The image is not in the correct file extension!</p>";
            }
        }
        function addFriend($newId, $friendid) {
            $friendid = $_GET["id"];
            $newId = mysqli_insert_id($conn);
            $sql = "INSERT INTO firends (userid, friendid) VALUES ($newId, $friendid)";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($query));


    }
        ?>


</div>

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
        echo "<h1>" . $row["usersName"] . "</h1>";
        echo "<h2>" . $row["usersUid"] . "</h2>";
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
    <img src="<?=$pfp; ?>" style="background-color: rgba(119,79,197,0.57); width: 200px; height: 200px; border-radius: 50%; margin-top: 30px">
    <form action="includes/imgupload.inc.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="file">
        <button type="submit" name="submit">Upload Image</button>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "successful") {
                echo "<p style='color: white; font-weight: bold'>The image is uploaded</p>";
            }
        }
        ?>
    </form>

</div>

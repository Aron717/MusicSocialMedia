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
    <div style="background-color: #774fc5; width: 200px; height: 200px; border-radius: 50%; margin-top: 30px"></div>
    <?php
    if ($row = mysqli_fetch_assoc($query)) {
        echo "<h1>" . $row["usersName"] . "</h1>";
    }
    else {
        echo "<h1>No profile exists like that!</h1>";
    }

    ?>

</div>

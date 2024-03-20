<?php
    include_once 'header.php';


?>
<?php
if (isset($_SESSION["useruid"])) {
    echo "<h1>Welcome " . $_SESSION["useruid"] . "</h1>";
}

?>

<div style="background-color: rgba(0,0,0,0.51); width: 100vw; height: 100vh"></div>


<?php
include_once 'footer.php';


?>
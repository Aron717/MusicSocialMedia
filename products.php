<?php
include_once 'header.php';
if (!isset($_SESSION["useruid"])) {
    header("location: login.php?error=login");
    exit();
}

?>

    <div style="display: flex; justify-content: space-evenly; background-color: rgba(0,0,0,0.51)">
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: space-evenly; background-color: rgba(0,0,0,0.51)">
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: space-evenly; background-color: rgba(0,0,0,0.51)">
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: space-evenly; background-color: rgba(0,0,0,0.51)">
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
        <div class="cards">
            <div class="cards-product">
                <img src="" alt="">
                <div class="card-description"><span><a class="description-button" href="">Product</a></span></div>
            </div>
        </div>
    </div>
<?php
include_once 'footer.php';


?>
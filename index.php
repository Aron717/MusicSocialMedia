<?php
    include_once 'header.php';
    if (isset($_SESSION["useruid"])) {
        header("location: index2.php");
        exit();
    }


?>


    <section style="width: 100vw; height: 700px; background-image: url('images/bg.jpg')">
        <div style="background-color: rgba(0,0,0,0.51); width: 100vw; height: 700px; display: flex; flex-direction: row; align-items: center; justify-content: space-around; backdrop-filter: blur(3px) hue-rotate(200deg)">
            <div style="display: flex; flex-direction: column; align-items: center">
                <h1 style="font-size: xx-large" class="index-h1">You want to sell/buy music? You are in the right place!</h1>
                <button class="register-button" onclick="window.location.href='signup.php'">Register to start browsing!</button>
            </div>
            <img src="images/index-img1.jpg" alt="Music Production" style="width: 40%; margin-top: 20px" draggable="false">
        </div>
    </section>
    <section style="width: 100vw; height: 700px; background-image: url('images/bg.jpg')">
        <div style="background-color: rgba(133,83,187,0.51); width: 100vw; height: 700px; display: flex; flex-direction: row-reverse; align-items: center; justify-content: space-around; backdrop-filter: blur(3px) hue-rotate(200deg)">
            <div style="display: flex; flex-direction: column; align-items: center">
                <h1 style="font-size: xx-large" class="index-h1">Check our collection of other's production freely with easy navigation!</h1>
                <button class="register-button" onclick="window.location.href='products.php'">Check it out here!</button>
            </div>
            <img src="images/index-img2.jpg" alt="Music Production" style="width: 40%; margin-top: 20px" draggable="false">
        </div>
    </section>
    <section style="width: 100vw; height: 700px; background-image: url('images/bg.jpg')">
        <div style="background-color: rgba(0,0,0,0.51); width: 100vw; height: 700px; display: flex; flex-direction: row; align-items: center; justify-content: space-around; backdrop-filter: blur(3px) hue-rotate(200deg)">
            <div style="display: flex; flex-direction: column; align-items: center">
                <h1 style="font-size: xx-large" class="index-h1">You want to sell/buy music? You are in the right place!</h1>
                <button class="register-button" onclick="window.location.href='signup.php'">Register to start browsing!</button>
            </div>
            <img src="images/index-img1.jpg" alt="Music Production" style="width: 40%; margin-top: 20px" draggable="false">
        </div>
    </section>
    <section style="width: 100vw; height: 700px; background-image: url('images/bg.jpg')">
        <div style="background-color: rgba(133,83,187,0.51); width: 100vw; height: 700px; display: flex; flex-direction: row-reverse; align-items: center; justify-content: space-around; backdrop-filter: blur(3px) hue-rotate(200deg)">
            <div style="display: flex; flex-direction: column; align-items: center">
                <h1 style="font-size: xx-large" class="index-h1">Check our collection of other's production freely with easy navigation!</h1>
                <button class="register-button" onclick="window.location.href='products.php'">Check it out here!</button>
            </div>
            <img src="images/index-img2.jpg" alt="Music Production" style="width: 40%; margin-top: 20px" draggable="false">
        </div>
    </section>
    <section style="width: 100vw; height: 400px; background-image: url('images/bg.jpg')">
        <div style="background-color: rgb(133,83,187); width: 100vw; height: 400px; display: flex; flex-direction: row; align-items: flex-start; justify-content: space-around; backdrop-filter: blur(3px) hue-rotate(200deg)">
            <div style="display: flex; flex-direction: row; align-items: center">
                <p style="padding: 9px">Kezdőlap</p>
                <p style="padding: 9px">Section 1</p>
                <p style="padding: 9px">Section 2</p>
                <p style="padding: 9px">Section 3</p>
            </div>
            <img src="images/index-img2.jpg" alt="Music Production" style="width: 35%; margin-top: 20px" draggable="false">
        </div>
    </section>


<?php
include_once 'footer.php';


?>
<?php
  include 'header.php';
?>

    <div class="video-container">
        <video class="video" preload="auto" autoplay muted loop poster="./img/poster.png">
            <source src="./img/video-compressed.mp4" type="video/mp4">
        </video>
    </div>
    <div class="overlay">
        <img src="./img/newlogobg.png" alt="logo" class="overlay-img">
        <p>Arki's Bakery</p>
    </div>
    <div class="bttm-home">
        <section class="box">
            <div class="imgbox">
                <img src="img/box1.jpg">
            </div>
            <div class="boxtext">
                <p>Lorem ipsum dolor sit amet, co   nsectetur adipiscing elit. Sed libero urna, cursus in hendrerit sed, pretium in diam. Nulla lobortis turpis vel neque fringilla, non faucibus diam fringilla. Curabitur eleifend nisi id venenatis eleifend. Vestibulum semper euismod augue sollicitudin egestas. Vestibulum vitae purus tincidunt, eleifend ipsum in, placerat tellus.</p>
            </div>
        </section>
        <section class="box">
            <div class="imgbox">
                <img src="img/box2.jpg">
            </div>
            <div class="boxtext">
                <p>Lorem ipsum dolor sit amet, co   nsectetur adipiscing elit. Sed libero urna, cursus in hendrerit sed, pretium in diam. Nulla lobortis turpis vel neque fringilla, non faucibus diam fringilla. Curabitur eleifend nisi id venenatis eleifend. Vestibulum semper euismod augue sollicitudin egestas. Vestibulum vitae purus tincidunt, eleifend ipsum in, placerat tellus.</p>
            </div>
        </section>
    </div>

<?php
    include 'footer.php'
?>

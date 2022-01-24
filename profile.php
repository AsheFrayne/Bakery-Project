<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8e42a01d1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
</head>

<body>
    <div class="navbarContainer">
        <div class="navbar">
            <a href="./index.html">
                <img src="img/newlogobg.png" alt="Arki's Bakery Logo">
            </a>
            <button class="dropdown">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
            <div class="navmenu">
                <a href="./index.php">Home</a>
                <a href="">About</a>
                <a href="./offers.html">Offers</a>
                <a href="./gallery.html">Gallery</a>
                <?php
                if (isset($_SESSION["uname"])) {
                    $a = $_SESSION["uname"];
                    echo '<a href="./profile.php">Profile Page</a>';
                    echo '<a href="./includes/logout.inc.php">Log out</a>';
                }
                ?>
            </div>
        </div>
    </div>
    <main>
        <div class="box">
            <div class="user-box">
                <img src="./img/default-profile.png" alt="profile picture" class="user-profile-pic">
                <div class="uname-box">Dexter Axel <i class="fas fa-edit"></i></div>
                <div class="info-box-container">
                    <h3>Email</h3>
                    <div class="info-box">Example@gmail.com</div>
                    <h3>Date Joined</h3>
                    <div class="info-box">01/02/03</div>
                </div>
            </div>
            <div class="user-reviews">
                <h3>Recent Reviews</h3>
                <div class="review-box">
                    <div class="date-review">September 19 2020</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur mollitia illum voluptatem voluptatibus, laboriosam autem labore eligendi officiis aliquid, maiores iusto tenetur natus quod cumque accusamus laborum facilis molestias sit!
                </div>
                <div class="review-box">
                    <div class="date-review">September 19 2020</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur mollitia illum voluptatem voluptatibus, laboriosam autem labore eligendi officiis aliquid, maiores iusto tenetur natus quod cumque accusamus laborum facilis molestias sit!
                </div>
                <div class="review-box">
                    <div class="date-review">September 19 2020</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur mollitia illum voluptatem voluptatibus, laboriosam autem labore eligendi officiis aliquid, maiores iusto tenetur natus quod cumque accusamus laborum facilis molestias sit!
                </div>
                <div class="review-box">
                    <div class="date-review">September 19 2020</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur mollitia illum voluptatem voluptatibus, laboriosam autem labore eligendi officiis aliquid, maiores iusto tenetur natus quod cumque accusamus laborum facilis molestias sit!
                </div>
            </div>
        </div>
    </main>
</body>

</html>
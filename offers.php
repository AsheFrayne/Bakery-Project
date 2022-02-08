<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=GFS Didot' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/b5a9e83033.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="offers.css">
    <title>Arki's Bakery - Offers</title>
</head>

<body>
    <?php
    include 'header.php';
    include 'includes/dbh.inc.php';
    include 'includes/functions.inc.php';
    ?>
    <div class="headerContainer">
        <div class="header">
            <h2>Our Offers</h2>
            <p>Treat yourselves with our delicious offers.</p>
        </div>
    </div>
    <!-- Start of first line offers -->
    <div class="item-section">
        <div class="item-header">
            <div class="item-title">
                <?php
                if (isset($_SESSION['usersType'])) {
                    if ($_SESSION['usersType'] == 'admin') {
                        echo '<a href="addOffers.php"><i class="fas fa-plus"></i>Add Offers</a>';
                    }
                }
                ?>
                <h1>Products</h1>
            </div>
        </div>
        <div class="item-contents cake-contents">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM products");
            while ($products = mysqli_fetch_assoc($result)) {
                echo '<div class="hover item cake-item">
                            <div class="item-img">
                                <img src="img/Products/' . $products['productsFilename'] . '" alt="">
                            </div>
                            <div class="item-name">
                                <h3>' . $products['productsName'] . '</h3>
                                <input type="hidden" value=' . $products['productsID'] . '>
                            </div>
                            <div class="item-description">
                                <p>' . $products['productsDescription'] . '</p><br>
                            </div>
                            <div class="item-price">
                                <span>Php</span>
                                <span>' . $products['productsPrice'] . '</span>
                            </div>
                        </div>';
            }
            ?>
        </div>
    </div>
    <?php
    if (isset($_SESSION["usersID"])) {
        if ($_SESSION["usersType"] == 'admin') {
            include "admin_modal.php";
        } else {
            include "modal.php";
        }
    } else {
        include "modal.php";
    }
    ?>

    <div class="footer-container">
        <img src="img/newlogobg.png" alt="Arki's Bakery Logo">
        <div class="socmed-container">
          <a href="https://www.facebook.com/arkicakesph/" class="fa fa-facebook"></a>
          <a href="" class="fa fa-twitter"></a>
          <a href="" class="fa fa-instagram"></a>
          <a href="" class="fa fa-pinterest"></a>
        </div>
    </div>
</body>
<script src="script.js" defer></script>
<?php
if (isset($_GET['modal'])) {
    if ($_GET['modal'] == 1) {
        echo "<script>

    const modal = document.querySelector('.modal');
    modal.style.display = 'flex';

    </script>";
    }
}
?>

</html>

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
            <a href="index.php">Home</a>
            <a href="./offers.php">Offers</a>
            <?php
            if (isset($_SESSION["usersID"])) {
                echo '<a href="./view-profile.php">Profile Page</a>';
                echo '<a href="./includes/logout.inc.php">Log out</a>';
            } else {
                echo '<a href="./login.php">Log in</a>';
                echo '<a href="./signup.php">Sign up</a>';
            }
            ?>

        </div>
    </div>
</div>

<!-- Modal start -->

<div class="modal">
    <div class="modal-exit hover">
        <i class="fa fa-times" style="color: white"></i>
    </div>
    <div class="modal-content">
        <div class="modal-img-container">
            <label class="offer-upload hover" for="offer-img">
                <img class="modal-img" src="" alt="">
            </label>
            <form class="" action="includes/editDeleteOffers.inc.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="productsID" value="<?php echo $_GET['productID']; ?>">
            <input id="offer-img" type="file" style="display: none;" name="filename">
            <button class="offer-submit hover" type="submit" name="submit" style="display: none"><i class="fas fa-check"></i></button>
        </div>
        <div class="modal-review">
            <div class="modal-title-container admin-modal-title-container">
                <h1 class="modal-title"></h1>
                <button class="hover admin-title-edit">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="hover admin-title-check-edit" style="display: none" name="title">
                    <i class="fas fa-check"></i>
                </button>
            </div>
            <div class="modal-comments">
                <?php
                $productID = $_GET['productID'];
                $result = mysqli_query($conn, "SELECT * FROM reviews WHERE productsID = '$productID';");
                if ($reviews = mysqli_fetch_assoc($result)) {
                    while ($reviews = mysqli_fetch_assoc($result)) {
                        if (empty($reviews["reviewsCom"])) {
                            continue;
                        }
                        echo '<div class="comment">
                            <div class="img-comment">';
                        echo    '<a href="view-profile.php?userName=' . $reviews["usersName"] . '"><img src="img/profilePics/' . getFilename($conn, $reviews["usersName"]) . '" alt=""></a>';
                        echo '</div>
                            <div class="comment-content">';
                        echo    '<a href="view-profile.php?userName=' . $reviews["usersName"] . '"><span class="name-comment">' . $reviews["usersName"] . '</span></a>';
                        echo '    <span class="text-comment">' . $reviews["reviewsCom"] . '</span>
                            </div>';
                        echo  '</div>';
                    }
                }
                ?>
            </div>
            <?php
            $countheart = 0;
            $res = mysqli_query($conn, "SELECT * FROM heart WHERE productsID = '$productID';");
            while ($heart = mysqli_fetch_assoc($res)) {
                $countheart++;
            }
            ?>
            <div class="modal-description-container">
                <div class="admin-modal-description">
                    <p class="modal-description"></p>
                    <button class="hover admin-description-edit">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="hover admin-description-check-edit" style="display: none" name="description">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
                <div class="admin-modal-price">
                    <p class="modal-price"></p>
                    <button class="hover admin-price-edit">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="hover admin-price-check-edit" style="display: none" name="price">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
                <div class="description-buttons" style="display: none;">
                    <button class="heart-button" type="button">
                        <i class="far fa-heart hover"></i>
                    </button>
                    <button>
                        <i class="far fa-comment hover"></i>
                    </button>
                </div>
                <div class="bottom-description">
                    <span class="heart-number"><?php echo $countheart; ?> like/s</span>
                    <button class="offer-delete hover" name="delete"><i class="fa fa-times"></i></button>
                </div>
                </form>
            </div>
            <form class="" action="includes/review.inc.php" method="POST" style="display: none;">
                <div class="modal-comment-box">
                    <input id="heart" type="hidden" value="0" name="heart">
                    <input id="productsID" type="hidden" value="<?php echo $_GET['productID']; ?>" name="productsID">

                    <?php
                    if (isset($_SESSION['usersName'])) {
                        echo '<input type="hidden" name="userID" value="' . $_SESSION['usersName'] . '">';
                    } else {
                        echo '<input type="hidden" name="userID" value="Guest">';
                    }
                    ?>
                    <input type="text" placeholder="Add a comment..." name="comment">
                    <button class="hover" type="submit" name="post">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="adminscript.js"></script>

<!-- Modal end -->

<!-- Modal start -->
<div class="modal">
    <div class="modal-exit hover">
        <i class="fa fa-times" style="color: white"></i>
    </div>
    <div class="modal-content">
        <div class="modal-img-container">
            <img class="modal-img" src="" alt="">
        </div>
        <div class="modal-review">
            <div class="modal-title-container">
                <h1 class="modal-title"></h1>
            </div>
            <div class="modal-comments">
                <div class="comment">
                  <?php
                  $result = mysqli_query($conn, "SELECT * FROM reviews");
                  if ($reviews = mysqli_fetch_assoc($result)) {
                    while ($reviews = mysqli_fetch_assoc($result)) {
                      if (empty($reviews["reviewsCom"])) {
                        continue;
                      }
                      echo '<div class="img-comment">
                                <img src="img/'.getFilename($reviews["usersName"]).'" alt="">
                            </div>
                            <div class="comment-content">
                                <span class="name-comment">'.$reviews["usersName"].'</span>
                                <span class="text-comment">'.$reviews["reviewsCom"].'</span>
                            </div>';
                    }
                  }
                  else {
                    echo "<p>No comments in this propduct.</p>";
                  }
                    ?>
                </div>
            </div>
            <div class="modal-description-container">
                <p class="modal-description"></p><br>
                <p class="modal-price"></p><br>
                <button class="heart-button" type="button">
                    <i class="far fa-heart hover"></i>
                </button>
                <i class="far fa-comment hover"></i>
            </div>
            <form class="" action="includes/review.inc.php" method="post">
            <div class="modal-comment-box">
                <!-- palagyan event lisnter ung heart pag na click heart button ung value mag change from 0 to 1 -->
                <input id="heart" type="hidden" value="0" name="heart">
                <input id="productsID" type="hidden" value="0" name="productsID">
                <input type="hidden" name="userID" value="<?php echo $_SESSION['usersName'];?>">
                <input type="text" placeholder="Add a comment..." name="comment">
                <button class="hover" type="submit" name="post">Post</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal end -->

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
              <?php
              $usersName = $_SESSION['usersName'];
              $res = mysqli_query($conn, "SELECT * FROM heart WHERE productsID = '$productID' AND usersName = '$usersName';");
              if ($heart = mysqli_fetch_assoc($res)) {
                echo '<i class="fas fa-heart hover"></i>';
              } else {
                echo '<i class="far fa-heart hover"></i>';
              }
              ?>
            </button>
          </form>
          <button class="user-comment">
            <i class="far fa-comment hover"></i>
          </button>
        </div>
        <span class="heart-number"><?php echo $countheart; ?> like/s</span>
      </div>
      <form class="" action="includes/review.inc.php" method="POST">
        <div class="modal-comment-box">
          <input id="productsID" type="hidden" value="<?php echo $_GET['productID']; ?>" name="productsID">
          <?php
          if (isset($_SESSION['usersName'])) {
            echo '<input type="hidden" name="userID" value="' . $_SESSION['usersName'] . '">';
          } else {
            echo '<input type="hidden" name="userID" value="Guest">';
          }
          ?>
          <input class="comment-box" type="text" placeholder="Add a comment..." name="comment">
          <button class="hover" type="submit" name="post">Post</button>
        </div>
    </div>
</div>

<!-- Modal end -->

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
        $productID = $_GET['productID'];
        $result = mysqli_query($conn, "SELECT * FROM reviews WHERE productsID = '$productID';");
        while ($reviews = mysqli_fetch_assoc($result)) {
          if (empty($reviews["reviewsCom"])) {
            continue;
          }
          echo '<div class="comment">
                  <div class="img-comment">';
          echo  '<a href="view-profile.php?userName=' . $reviews["usersName"] . '"><img src="img/profilePics/' . getFilename($conn, $reviews["usersName"]) . '" alt=""></a>';
          echo  '</div>
                  <div class="comment-content">';
          echo  '<a href="view-profile.php?userName=' . $reviews["usersName"] . '"><span class="name-comment">' . $reviews["usersName"] . '</span></a>';
          echo  '<span class="text-comment">' . $reviews["reviewsCom"] . '</span>
                  </div>';
          if ($_SESSION["usersName"] == $reviews["usersName"]) {
            echo  '<div class="delete-comment">
                    <form action="includes/editDeleteComment.inc.php" method="post">
                      <input type="hidden" class="comment-input" name="reviewsCom" value="">
                      <input type="hidden" name="productID" value="' . $productID . '">
                      <input type="hidden" name="reviewsID" value="' . $reviews["reviewsID"] . '">
                      <button type="submit" name="delete" class="hover user-comment-delete">
                          <i class="fa fa-times"></i>
                      </button>
                      <button type="button" class="hover user-comment-edit">
                          <i class="fas fa-edit"></i>
                      </button>
                      <button type="submit" name="edit" class="hover check-edit" style="display: none">
                          <i class="fas fa-check"></i>
                      </button>
                    </form>
                  </div>';
          }
          echo  '</div>';
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
        <p class="modal-description"></p>
        <p class="modal-price"></p>
        <div class="description-buttons">
          <form class="" action="includes/heart.inc.php" method="post">
            <input type="hidden" value="<?php echo $_GET['productID']; ?>" name="productsID">
            <input type="hidden" value="<?php echo $_SESSION["usersName"]; ?>" name="usersName">
            <button class="heart-button" type="submit" name="heart">
              <?php
<<<<<<< HEAD
                  $productID = $_GET['productID'];
                  $result = mysqli_query($conn, "SELECT * FROM reviews WHERE productsID = '$productID';");
                    while ($reviews = mysqli_fetch_assoc($result)) {
                      if (empty($reviews["reviewsCom"])) {
                        continue;
                      }
                      echo '<div class="comment">
                            <div class="img-comment">';
                      echo    '<a href="view-profile.php?userName='.$reviews["usersName"].'"><img src="img/profilePics/'.getFilename($conn,$reviews["usersName"]).'" alt=""></a>';
                      echo '</div>
                            <div class="comment-content">';
                      echo    '<a href="view-profile.php?userName='.$reviews["usersName"].'"><span class="name-comment">'.$reviews["usersName"].'</span></a>';
                      echo '    <span class="text-comment">'.$reviews["reviewsCom"].'</span>
                            </div>';
                      if(isset($_SESSION["usersName"])){
                        if ($_SESSION["usersName"] == $reviews["usersName"]) {
                          echo  '<div class="delete-comment">
                                  <form action="includes/editDeleteComment.inc.php" method="post">
                                    <input type="hidden" class="comment-input" name="reviewsCom" value="">
                                    <input type="hidden" name="productID" value="'.$productID.'">
                                    <input type="hidden" name="reviewsID" value="'.$reviews["reviewsID"].'">
                                    <button type="submit" name="delete" class="hover user-comment-delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <button type="button" class="hover user-comment-edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="submit" name="edit" class="hover check-edit" style="display: none">
                                        <i class="fas fa-check"></i>
                                    </button>
                                  </form>
                                </div>';
                        }
                      }
                      echo  '</div>';
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
                <p class="modal-description"></p>
                <p class="modal-price"></p>
                <div class="description-buttons">
                  <form class="" action="includes/heart.inc.php" method="post">
                    <input type="hidden" value="<?php echo $_GET['productID']; ?>" name="productsID">
                      <?php
                      if (isset( $_SESSION['usersName'])) {
                        echo '<input type="hidden" name="usersName" value="'.$_SESSION['usersName'].'">';
                        $usersName = $_SESSION['usersName'];
                        $res = mysqli_query($conn, "SELECT * FROM heart WHERE productsID = '$productID' AND usersName = '$usersName';");
                          if ($heart = mysqli_fetch_assoc($res)) {
                            echo '<button class="heart-button" type="submit" name="heart">
                                    <i class="fas fa-heart hover"></i>
                                  </button>';
                          }
                          else{
                            echo '<button class="heart-button" type="submit" name="heart">
                                    <i class="far fa-heart hover"></i>
                                  </button>';
                          }
                      }
                      else{
                        echo '<input type="hidden" name="usersName" value="Guest">';
                        echo '<button class="heart-button" type="submit" name="heart" disabled>
                                <i class="far fa-heart hover"></i>
                              </button>';
                      }
                      ?>

                  </form>
                  <button>
                    <i class="far fa-comment hover"></i>
                  </button>
                </div>
                <span class="heart-number"><?php echo $countheart;?>likes</span>
            </div>
            <form class="" action="includes/review.inc.php" method="POST">
                <div class="modal-comment-box">
                        <input id="productsID" type="hidden" value="<?php echo $_GET['productID']; ?>" name="productsID">
                        <?php
                        if (isset($_SESSION['usersName'])) {
                          echo '<input type="hidden" name="userID" value="'.$_SESSION['usersName'].'">
                                <input type="text" placeholder="Add a comment..." name="comment">
                                <button class="hover" type="submit" name="post">Post</button>';
                        }
                        else {
                          echo '<input type="hidden" name="userID" value="Guest">
                                <input type="text" placeholder="Add a comment..." name="comment">
                                <button class="hover" type="submit" name="post" disabled>Post</button>';
                        }
                        ?>
                </div>
            </form>
=======
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
          <button>
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
          <input type="text" placeholder="Add a comment..." name="comment">
          <button class="hover" type="submit" name="post">Post</button>
>>>>>>> b02622975fd0969bf9b9263cc947f11f8af05dfa
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal end -->
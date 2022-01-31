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
                  if ($reviews = mysqli_fetch_assoc($result)) {
                    while ($reviews = mysqli_fetch_assoc($result)) {
                      if (empty($reviews["reviewsCom"])) {
                        continue;
                      }
                      echo '<div class="comment">
                            <div class="img-comment">';
                      if ($reviews["usersName"] !== "Guest") {
                          echo    '<a href="view-profile.php?userName='.$reviews["usersName"].'"><img src="img/profilePics/'.getFilename($conn,$reviews["usersName"]).'" alt=""></a>';
                      }else {
                          echo    '<img src="img/profilePics/'.getFilename($conn,$reviews["usersName"]).'" alt="">';
                      }

                      echo '</div>
                            <div class="comment-content">';
                      if ($reviews["usersName"] !== "Guest") {
                        echo    '<a href="view-profile.php?userName='.$reviews["usersName"].'"><span class="name-comment">'.$reviews["usersName"].'</span></a>';
                      }else {
                        echo    '<span class="name-comment">'.$reviews["usersName"].'</span>';
                      }
                      echo '    <span class="text-comment">'.$reviews["reviewsCom"].'</span>
                            </div>
                            <div class="delete-comment">
                              <button class="hover user-comment-delete">
                                  <i class="fa fa-times"></i>
                              </button>
                              <button class="hover user-comment-edit">
                                  <i class="fas fa-edit"></i>
                              </button>
                              <button class="hover check-edit" style="display: none">
                                  <i class="fas fa-check"></i>
                              </button>
                            </div>
                            </div>';
                    }
                  }
                    ?>
            </div>
            <div class="modal-description-container">
                <p class="modal-description"></p><br>
                <p class="modal-price"></p><br>
                <button class="heart-button" type="button">
                    <i class="far fa-heart hover"></i>
                </button>
                <i class="far fa-comment hover"></i>
            </div>
            <form class="" action="includes/review.inc.php" method="POST">
                <div class="modal-comment-box">
                        <input id="heart" type="hidden" value="0" name="heart">
                        <input id="productsID" type="hidden" value="<?php echo $_GET['productID']; ?>" name="productsID">

                        <?php
                        if (isset($_SESSION['usersName'])) {
                          echo '<input type="hidden" name="userID" value="'.$_SESSION['usersName'].'">';
                        }
                        else {
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

<!-- Modal end -->

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
                    <div class="img-comment">
                        <img src="img/brownies.jpg" alt="">
                    </div>
                    <div class="comment-content">
                        <span class="name-comment">johnson</span>
                        <span class="text-comment">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Recusandae at nisi aliquid sed neque, magni blanditiis omnis mollitia facilis
                            error.</span>
                    </div>
                    <div class="delete-comment">
                        <button class="hover user-comment-delete">
                            <i class="fa fa-times hover user-comment-delete"></i>
                        </button>
                        <button class="hover user-comment-edit">
                            <i class="fas fa-edit hover user-comment-edit"></i>
                        </button>
                        <button class="hover check-edit" style="display: none">
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
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
            <div class="modal-comment-box">
              <form class="" action="includes/review.inc.php" method="get">
                <input id="heart" type="hidden" value="0" name="heart">
                <input id="productsID" type="hidden" value="0" name="productsID">
                <input type="hidden" name="userID" value="<?php echo $_SESSION['usersID'];?>">
                <input type="text" placeholder="Add a comment..." name="comment">
                <button class="hover" type="submit" name="post">Post</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal end -->
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
                        <i class="fa fa-times hover user-comment-delete"></i>
                        <i class="fas fa-edit hover user-comment-edit"></i>
                        <i class="fas fa-check hover check-edit" style="display: none"></i>
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
            <form class="" action="includes/review.inc.php" method="post">
                <div class="modal-comment-box">
                    <<<<<<< HEAD <form class="" action="includes/review.inc.php" method="get">
                        =======
                        <!-- palagyan event lisnter ung heart pag na click heart button ung value mag change from 0 to 1 -->
                        >>>>>>> d780e0110379b29090f110f9445ac46b3c67469b
                        <input id="heart" type="hidden" value="0" name="heart">
                        <input id="productsID" type="hidden" value="0" name="productsID">
                        <input type="hidden" name="userID" value="<?php echo $_SESSION['usersName']; ?>">
                        <input type="text" placeholder="Add a comment..." name="comment">
                        <button class="hover" type="submit" name="post">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal end -->
window.onload = function() {
    const dropdown = document.querySelector(".dropdown");
    const navmenu = document.querySelector(".navmenu");
    const bar1 = document.querySelector(".bar1");
    const bar2 = document.querySelector(".bar2");
    const bar3 = document.querySelector(".bar3");

    dropdown.onmouseover = function() {
        bar1.style.backgroundColor = "#ffc107";
        bar2.style.backgroundColor = "#ffc107";
        bar3.style.backgroundColor = "#ffc107";
    }

    dropdown.onmouseleave = function() {
        bar1.style.backgroundColor = "black";
        bar2.style.backgroundColor = "black";
        bar3.style.backgroundColor = "black";
    }

    dropdown.onclick = function() {
        if (window.getComputedStyle(navmenu, null).display == "none") {
            navmenu.style.display = "flex";
            bar1.style.transform = "rotate(-45deg) translate(-6px, 6px)";
            bar2.style.opacity = "0";
            bar3.style.transform = "rotate(45deg) translate(-6px, -6px)";
        } else if (window.getComputedStyle(navmenu, null).display == "flex") {
            navmenu.style.display = "none";
            bar1.style.transform = "rotate(0deg) translate(0, 0)";
            bar2.style.opacity = "100";
            bar3.style.transform = "rotate(0deg) translate(0, 0)";
        }
    }

    const item = document.querySelectorAll('.item');
    const modal = document.querySelector('.modal');
    const modalImgContainer = document.querySelector('.modal-img-container');
    const modalReview = document.querySelector('.modal-review');
    const modalExit = document.querySelector('.modal-exit');
    const modalImg = document.querySelector('.modal-img');
    const modalTitle = document.querySelector('.modal-title');
    const modalDescription = document.querySelector('.modal-description');
    const modalPrice = document.querySelector('.modal-price');
    const modalHeart = document.querySelector('.fa-heart');
    let productID;
    const modalID = document.querySelector('#productsID');
    const heart = document.querySelector('#heart');

    item.forEach(element => {
        element.onclick = () => {
            // productID = element.children[1].children[1].value;
            // modalID.value = productID;
            console.log(modalID.value);
            modal.style.display = 'block';
            modalImg.src = element.children[0].children[0].src;
            modalTitle.innerHTML = element.children[1].children[0].textContent;
            modalDescription.innerHTML = element.children[2].children[0].textContent;
            modalPrice.innerHTML = element.children[3].children[0].textContent;
        }
    });

    modalExit.onclick = () => {
        modal.style.display = 'none';
    }

    window.onclick = (e) => {
        if (modal.contains(e.target) && !modalImgContainer.contains(e.target) && !modalReview.contains(e.target)) {
            modal.style.display = 'none';
        }
    }

    modalHeart.onclick = () => {
        if (modalHeart.className == 'far fa-heart hover') {
            heart.value = 1;
            modalHeart.className = 'fas fa-heart hover'
            modalHeart.style.color = 'red';
            modalHeart.style.animation = 'like 500ms';
            setTimeout(function() {
                modalHeart.style.animation = 'none';
            }, 200);
        } else if (modalHeart.className == 'fas fa-heart hover') {
            heart.value = 0;
            modalHeart.className = 'far fa-heart hover'
            modalHeart.style.color = 'black';
            modalHeart.style.animation = 'like 500ms';
            setTimeout(function() {
                modalHeart.style.animation = 'none';
            }, 200);
        }
    }

    const userCommentEdit = document.querySelector('.user-comment-edit');
    const textComment = document.querySelector('.text-comment');
    const checkEdit = document.querySelector('.check-edit');

    userCommentEdit.onclick = () => {
        textComment.style.border = '1px solid black'
        textComment.setAttribute('contenteditable', 'true');
        checkEdit.style.display = 'block';
        userCommentEdit.style.display = 'none';
    }

    checkEdit.onclick = () => {
        textComment.style.border = 'none';
        textComment.setAttribute('contenteditable', 'false');
        checkEdit.style.display = 'none';
        userCommentEdit.style.display = 'block';
    }
}
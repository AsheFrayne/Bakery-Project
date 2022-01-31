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
    let productID;
    const modalID = document.querySelector('#productsID');

    item.forEach(element => {
        element.onclick = () => {
            productID = element.children[1].children[1].value;
            modalID.value = productID;
            window.location = `offers.php?modal=1&productID=${productID}`
            localStorage.setItem("img", element.children[0].children[0].src);
            localStorage.setItem("title", element.children[1].children[0].textContent);
            localStorage.setItem("description", element.children[2].children[0].textContent);
            localStorage.setItem("price", element.children[3].children[0].textContent);
        }
    });

    if (modalExit != null) {
        modalExit.onclick = () => {
            modal.style.display = 'none';
        }
    }

    window.onclick = (e) => {
        if (modal.contains(e.target) && !modalImgContainer.contains(e.target) && !modalReview.contains(e.target)) {
            modal.style.display = 'none';
        }
    }

    const comment = document.querySelectorAll('.comment');

    comment.forEach(comment => {
        if (comment.children[2] != null || comment.children[2] != undefined) {
            const editButton = comment.children[2].children[0].children[4];
            const checkButton = comment.children[2].children[0].children[5];
            const textComment = comment.children[1].children[1];
            const commentInput = comment.children[2].children[0].children[0];

            editButton.onclick = () => {
                textComment.style.border = '1px solid black'
                textComment.setAttribute('contenteditable', 'true');
                checkButton.style.display = 'block';
                editButton.style.display = 'none';
            }
            checkButton.onclick = () => {
                textComment.style.border = 'none'
                textComment.setAttribute('contenteditable', 'false');
                checkButton.style.display = 'none';
                editButton.style.display = 'block';
                commentInput.value = textComment.textContent;
            }
        }
    });

    const userComment = document.querySelector('.user-comment');
    const commentBox = document.querySelector('.comment-box');

    if (userComment != null) {
        userComment.onclick = () => {
            commentBox.focus();
        }
    }
}
window.onload = function () {
    const dropdown = document.querySelector(".dropdown");
    const navmenu = document.querySelector(".navmenu");
    const bar1 = document.querySelector(".bar1");
    const bar2 = document.querySelector(".bar2");
    const bar3 = document.querySelector(".bar3");

    dropdown.onmouseover = function () {
        bar1.style.backgroundColor = "#ffc107";
        bar2.style.backgroundColor = "#ffc107";
        bar3.style.backgroundColor = "#ffc107";
    }

    dropdown.onmouseleave = function () {
        bar1.style.backgroundColor = "black";
        bar2.style.backgroundColor = "black";
        bar3.style.backgroundColor = "black";
    }

    dropdown.onclick = function () {
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


    const itemWidth = 284;

    var cakeDirection;
    const cakeLeft = document.querySelector(".cake-left");
    const cakeRight = document.querySelector(".cake-right");
    const cakeContents = document.querySelector(".cake-contents");

    var browniesDirection;
    const browniesLeft = document.querySelector(".brownies-left");
    const browniesRight = document.querySelector(".brownies-right");
    const browniesContents = document.querySelector(".brownies-contents");

    var cupcakesDirection;
    const cupcakesLeft = document.querySelector(".cupcakes-left");
    const cupcakesRight = document.querySelector(".cupcakes-right");
    const cupcakesContents = document.querySelector(".cupcakes-contents");

    cakeLeft.onclick = function () {
        cakeDirection = 'left';
        cakeContents.style.transform = `translateX(${itemWidth}px)`
    }

    cakeRight.onclick = function () {
        cakeDirection = 'right';
        cakeContents.style.transform = `translateX(-${itemWidth}px)`
    }

    cakeContents.addEventListener("transitionend", () => {
        if (cakeDirection == 'left') {
            cakeContents.prepend(cakeContents.lastElementChild);
        } else if (cakeDirection == 'right') {
            cakeContents.append(cakeContents.firstElementChild);
        }
        cakeContents.style.transition = 'none';
        cakeContents.style.transform = 'translateX(0px)';
        setTimeout(function () {
            cakeContents.style.transition = 'transform 500ms';
        });
    })

    browniesLeft.onclick = function () {
        browniesDirection = 'left';
        browniesContents.style.transform = `translateX(${itemWidth}px)`
    }

    browniesRight.onclick = function () {
        browniesDirection = 'right';
        browniesContents.style.transform = `translateX(-${itemWidth}px)`
    }

    browniesContents.addEventListener("transitionend", () => {
        if (browniesDirection == 'left') {
            browniesContents.prepend(browniesContents.lastElementChild);
        } else if (browniesDirection == 'right') {
            browniesContents.append(browniesContents.firstElementChild);
        }
        browniesContents.style.transition = 'none';
        browniesContents.style.transform = 'translateX(0px)';
        setTimeout(function () {
            browniesContents.style.transition = 'transform 500ms';
        });
    })

    cupcakesLeft.onclick = function () {
        cupcakesDirection = 'left';
        cupcakesContents.style.transform = `translateX(${itemWidth}px)`
    }

    cupcakesRight.onclick = function () {
        cupcakesDirection = 'right';
        cupcakesContents.style.transform = `translateX(-${itemWidth}px)`
    }

    cupcakesContents.addEventListener("transitionend", () => {
        if (cupcakesDirection == 'left') {
            cupcakesContents.prepend(cupcakesContents.lastElementChild);
        } else if (browniesDirection == 'right') {
            cupcakesContents.append(cupcakesContents.firstElementChild);
        }
        cupcakesContents.style.transition = 'none';
        cupcakesContents.style.transform = 'translateX(0px)';
        setTimeout(function () {
            cupcakesContents.style.transition = 'transform 500ms';
        });
    })

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

    item.forEach(element => {
        element.onclick = () => {
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
        if(modalHeart.className == 'far fa-heart hover') {
            modalHeart.className = 'fas fa-heart hover'
            modalHeart.style.color = 'red';
            modalHeart.style.animation = 'like 500ms';
            setTimeout(function() {
                modalHeart.style.animation = 'none';
            }, 200);
        } else if (modalHeart.className == 'fas fa-heart hover') {
            modalHeart.className = 'far fa-heart hover'
            modalHeart.style.color = 'black';
            modalHeart.style.animation = 'like 500ms';
            setTimeout(function() {
                modalHeart.style.animation = 'none';
            }, 200);
        }
    }
}

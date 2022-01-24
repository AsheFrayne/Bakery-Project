window.onload = function() {
    const dropdown = document.querySelector(".dropdown");
    const navmenu = document.querySelector(".navmenu");
    const bar1 = document.querySelector(".bar1");
    const bar2 = document.querySelector(".bar2");
    const bar3 = document.querySelector(".bar3");


    const itemWidth = 284;    

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
        if(window.getComputedStyle(navmenu, null).display == "none") {
            navmenu.style.display = "flex";
            bar1.style.transform = "rotate(-45deg) translate(-6px, 6px)";
            bar2.style.opacity = "0";
            bar3.style.transform = "rotate(45deg) translate(-6px, -6px)";
        } else if(window.getComputedStyle(navmenu, null).display == "flex") {
            navmenu.style.display = "none";
            bar1.style.transform = "rotate(0deg) translate(0, 0)";
            bar2.style.opacity = "100";
            bar3.style.transform = "rotate(0deg) translate(0, 0)";
        }
    }

    const cakeLeft = document.querySelector(".cake-left");
    const cakeRight = document.querySelector(".cake-right");
    const cakeContents = document.querySelector(".cake-contents");
    var cakeX= 0;
    var cakeCounter = 0;

    const browniesLeft = document.querySelector(".brownies-left");
    const browniesRight = document.querySelector(".brownies-right");
    const browniesContents = document.querySelector(".brownies-contents");
    var browniesX= 0;
    var browniesCounter = 0;

    const cupcakesLeft = document.querySelector(".cupcakes-left");
    const cupcakesRight = document.querySelector(".cupcakes-right");
    const cupcakesContents = document.querySelector(".cupcakes-contents");
    var cupcakesX= 0;
    var cupcakesCounter = 0;
    
    
    removeCakeLeft();
    removeCakeRight();
    removeBrowniesLeft();
    removeBrowniesRight();
    removeCupcakesLeft();
    removeCupcakesRight();

    cakeLeft.onclick = function() {
        if(cakeCounter != 0) {
            cakeCounter--;
            cakeX = itemWidth * cakeCounter;
            cakeContents.style.transform = `translateX(-${cakeX}px)`
            removeCakeLeft();
            removeCakeRight();
        }
    }

    cakeRight.onclick = function() {
        if(cakeCounter != 2) {
            cakeCounter++;
            cakeX = itemWidth * cakeCounter;
            cakeContents.style.transform = `translateX(-${cakeX}px)`
            removeCakeLeft();
            removeCakeRight();
        }
    }

    browniesLeft.onclick = function() {
        if(browniesCounter != 0) {
            browniesCounter--;
            browniesX = itemWidth * browniesCounter;
            browniesContents.style.transform = `translateX(-${browniesX}px)`
            removeBrowniesLeft();
            removeBrowniesRight();
        }
    }

    browniesRight.onclick = function() {
        if(browniesCounter != 2) {
            browniesCounter++;
            browniesX = itemWidth * browniesCounter;
            browniesContents.style.transform = `translateX(-${browniesX}px)`
            removeBrowniesLeft();
            removeBrowniesRight();
        }
    }

    cupcakesLeft.onclick = function() {
        if(cupcakesCounter != 0) {
            cupcakesCounter--;
            cupcakesX = itemWidth * cupcakesCounter;
            cupcakesContents.style.transform = `translateX(-${cupcakesX}px)`
            removeCupcakesLeft();
            removeCupcakesRight();
        }
    }

    cupcakesRight.onclick = function() {
        if(cupcakesCounter != 2) {
            cupcakesCounter++;
            cupcakesX = itemWidth * cupcakesCounter;
            cupcakesContents.style.transform = `translateX(-${cupcakesX}px)`
            removeCupcakesLeft();
            removeCupcakesRight();
        }
    }

    function removeCakeLeft() {
        if(cakeCounter == 0) {
           cakeLeft.style.opacity = 0; 
           cakeLeft.classList.remove("hover");
        } else {
            cakeLeft.style.opacity = 100; 
            cakeLeft.classList.add("hover");
        }
    }

    function removeCakeRight() {
        if(cakeCounter == 2) {
            cakeRight.style.opacity = 0; 
            cakeRight.classList.remove("hover");
        } else {
            cakeRight.style.opacity = 100; 
            cakeRight.classList.add("hover");
        }
    }

    function removeBrowniesLeft() {
        if(browniesCounter == 0) {
            browniesLeft.style.opacity = 0; 
            browniesLeft.classList.remove("hover");
        } else {
            browniesLeft.style.opacity = 100; 
            browniesLeft.classList.add("hover");
        }
    }

    function removeBrowniesRight() {
        if(browniesCounter == 2) {
            browniesRight.style.opacity = 0; 
            browniesRight.classList.remove("hover");
        } else {
            browniesRight.style.opacity = 100; 
            browniesRight.classList.add("hover");
        }
    }

    function removeCupcakesLeft() {
        if(cupcakesCounter == 0) {
            cupcakesLeft.style.opacity = 0; 
            cupcakesLeft.classList.remove("hover");
        } else {
            cupcakesLeft.style.opacity = 100; 
            cupcakesLeft.classList.add("hover");
        }
    }

    function removeCupcakesRight() {
        if(cupcakesCounter == 2) {
            cupcakesRight.style.opacity = 0; 
            cupcakesRight.classList.remove("hover");
        } else {
            cupcakesRight.style.opacity = 100; 
            cupcakesRight.classList.add("hover");
        }
    }
}

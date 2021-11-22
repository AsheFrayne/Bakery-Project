window.onload = function() {
    var dropdown = document.querySelector(".dropdown");
    var navmenu = document.querySelector(".navmenu");
    var bar1 = document.querySelector(".bar1");
    var bar2 = document.querySelector(".bar2");
    var bar3 = document.querySelector(".bar3");
    
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
}
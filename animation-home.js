const activeScroll =  document.querySelector(".navbarContainer");
const vidCon = document.querySelector(".video-container");

const navScrolledOptions = {
  rootMargin: "-100px 0px 0px 0px"
};

const navScrolledObserver = new IntersectionObserver(function(
  entries,
  navScrolledObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      activeScroll.classList.add("navbar-scroll");
    } else {
      activeScroll.classList.remove("navbar-scroll");
    }
  });
},
navScrolledOptions);

navScrolledObserver.observe(vidCon);
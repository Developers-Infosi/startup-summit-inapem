/* Template Name: Qexal - Responsive Bootstrap 4 Landing Page Template
   Author: Themesbrand
   Version: 1.0.0
   Created: Jan 2019
   File Description: Main js file
*/



//  Window scroll sticky class add
function windowScroll() {
    const navbar = document.getElementById("navbar");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar.classList.add("nav-sticky");
    } else {
        navbar.classList.remove("nav-sticky");
    }
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
})


// Smooth scroll
var scroll = new SmoothScroll('#navbar-navlist a', {
    speed: 500
});

// feather icon

feather.replace();

// Combined JavaScript for both scroll header and hamburger menu functionality

document.addEventListener('DOMContentLoaded', function() {
    // Header scroll hide/show functionality
    let lastScrollTop = 0;
    const header = document.querySelector("header");
    
    window.addEventListener("scroll", () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop) {
            header.classList.add("hidden");
        } else {
            header.classList.remove("hidden");
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Hamburger menu functionality
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('.nav-link');
    
    hamburgerMenu.addEventListener('click', function(event) {
        // Prevent the click from propagating to document
        event.stopPropagation();
        
        // Toggle active class for hamburger animation
        this.classList.toggle('active');
        
        // Toggle active class for nav menu
        navLinks.classList.toggle('active');
        
        // Prevent scrolling when menu is open
        document.body.classList.toggle('menu-open');
        
        // When menu is open, make sure header is visible
        if (navLinks.classList.contains('active')) {
            header.classList.remove('hidden');
        }
    });
    
    // Close menu when clicking on a link
    const links = document.querySelectorAll('.nav-link a');
    links.forEach(link => {
        link.addEventListener('click', () => {
            hamburgerMenu.classList.remove('active');
            navLinks.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideMenu = navLinks.contains(event.target);
        const isClickOnHamburger = hamburgerMenu.contains(event.target);
        
        if (navLinks.classList.contains('active') && !isClickInsideMenu && !isClickOnHamburger) {
            hamburgerMenu.classList.remove('active');
            navLinks.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    });
});
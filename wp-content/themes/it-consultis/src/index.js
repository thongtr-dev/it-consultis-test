import "./css/index.css";
import "./asset/img/achievement-1.png";
import "./asset/img/achievement-2.png";
import "./asset/img/Innovation.png";

// Owl carousel for executive slidings
(function ($) {
    $(".about-us_executive-slidings").owlCarousel({
        loop: true,
        items: 1,
        nav: true,
        dots: false
    });
}(jQuery));

// Handles toggling the navigation menu for small screens and enables TAB key navigation support for dropdown menus.
(function () {
   const siteNavigation = document.getElementById('site-navigation');

   // Return early if the navigation doesn't exist.
   if (!siteNavigation) {
       return;
   }

   const button = document.querySelector('.menu-toggle');

   // Return early if the button doesn't exist.
   if (typeof button === undefined) {
       return;
   }

   const menu = siteNavigation.getElementsByTagName('ul')[0];

   // Hide menu toggle button if menu is empty and return early.
   if (typeof menu === undefined) {
       button.style.display = 'none';
       return;
   }

   if (!menu.classList.contains('nav-menu')) {
       menu.classList.add('nav-menu');
   }

   // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
   button.addEventListener('click', function () {
       siteNavigation.classList.toggle('toggled');
       
       if (button.getAttribute('aria-expanded') === 'true') {
           button.setAttribute('aria-expanded', 'false');
       } else {
           button.setAttribute('aria-expanded', 'true');
       }
   });

   // Get all the link elements within the menu.
   const links = menu.getElementsByTagName('a');

   // Get all the link elements with children within the menu.
   const linksWithChildren = menu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

   // Toggle focus each time a menu link is focused or blurred.
   for (const link of links) {
       link.addEventListener('focus', toggleFocus, true);
       link.addEventListener('blur', toggleFocus, true);
   }

   // Toggle focus each time a menu link with children receive a touch event.
   for (const link of linksWithChildren) {
       link.addEventListener('touchstart', toggleFocus, false);
   }

   /**
    * Sets or removes .focus class on an element.
    */
   function toggleFocus() {
       if (event.type === 'focus' || event.type === 'blur') {
           let self = this;
           // Move up through the ancestors of the current link until we hit .nav-menu.
           while (!self.classList.contains('nav-menu')) {
               // On li elements toggle the class .focus.
               if ('li' === self.tagName.toLowerCase()) {
                   self.classList.toggle('focus');
               }
               self = self.parentNode;
           }
       }

       if (event.type === 'touchstart') {
           const menuItem = this.parentNode;
           event.preventDefault();
           for (const link of menuItem.parentNode.children) {
               if (menuItem !== link) {
                   link.classList.remove('focus');
               }
           }
           menuItem.classList.toggle('focus');
       }
   }
}());

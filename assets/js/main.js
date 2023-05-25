// scrolled

window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    const navbar = document.querySelector('.nav');

    if (window.scrollY > 0) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }

});

/** 
 * Evento para desplegar mobile-navbar
*/
const menuHamburguer = document.getElementById('icon-hamburguer');

menuHamburguer.addEventListener('click', function() {
    const mobileNavbar = document.querySelector('.mobile-navbar');

    const icon = document.querySelector('#icon-hamburguer');

    if (icon.getAttribute('name') == 'reorder-four-outline') {
        mobileNavbar.style.left = '0px';
        icon.setAttribute('name','close-outline');
    }else{
        mobileNavbar.style.left = '-260px';
        icon.setAttribute('name','reorder-four-outline');
    }
});

/**
 * Evento para desplegar submenu de mobile-navbar
 */
const submenuItems = document.querySelectorAll('.mobile-navbar .mobile-menu');

submenuItems.forEach(function(item) {
  item.addEventListener('click', function() {
    const submenu = this.querySelector('.mobile-submenu');
    const isExpanded = submenu.style.maxHeight;
    const icon = this.querySelector('ion-icon');

    submenuItems.forEach(function(item) {
      item.querySelector('.mobile-submenu').style.maxHeight = null;
    });
    
    if (isExpanded) {
      submenu.style.maxHeight = null;
      icon.setAttribute('name', 'caret-down-outline');
    } else {
      submenu.style.maxHeight = submenu.scrollHeight + 'px';
      icon.setAttribute('name', 'caret-up-outline');
    }
  });
});
// scrolled

window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const navbar = document.querySelector('.nav');

    if (window.scrollY > 0) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }

});


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
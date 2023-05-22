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
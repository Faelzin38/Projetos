let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

let backToTopBtn = document.querySelector('.back-to-top-btn');

window.onscroll = () => {
    if (window.scrollY > 100) { 
        backToTopBtn.classList.add('active');
    } else {
        backToTopBtn.classList.remove('active');
    }
}

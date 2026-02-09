let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

document.querySelectorAll('.navbar a').forEach(link => {
    link.onclick = () => {
        navbar.classList.remove('active');
    }
});

let backToTopBtn = document.querySelector('.back-to-top-btn');

window.onscroll = () => {
    navbar.classList.remove('active');
    if (window.scrollY > 100) { 
        backToTopBtn.classList.add('active');
    } else {
        backToTopBtn.classList.remove('active');
    }
}

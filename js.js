// Aparezco el Go Top
window.onscroll = function(){
    if(document.documentElement.scrollTop > 100) {
        document.querySelector('.go-top').classList.add('show');
    } else {
        document.querySelector('.go-top').classList.remove('show');
    }
}

// Nav toggler

function toggleNav() {
    document.querySelector('body').classList.toggle('nav-open');
}


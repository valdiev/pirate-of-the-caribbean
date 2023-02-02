function scrollToSlide() {
    if(window.innerWidth > 1024) {
        if(document.querySelector(".listFilm") || document.querySelector(".homepage") && window.matchMedia("(min-width: 1024px)").matches) {
            var offsetStart = 0;
            var offsetEnd = 0;
        
            window.addEventListener('scroll', () => {
                document.documentElement.style.setProperty('--scroll', (window.pageYOffset - offsetStart) / (document.body.offsetHeight - offsetStart - offsetEnd - window.innerHeight));
            }, false);
        }
    }
}

function menu() {
    let burgerBtn = document.querySelector(".header_burger-btn");
    let menu = document.querySelector(".header_menu");

    burgerBtn.addEventListener('click', () => {
        burgerBtn.classList.toggle('active');
        menu.classList.toggle('active');
    })
}

scrollToSlide();
menu();
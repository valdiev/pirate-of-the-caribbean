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

scrollToSlide();
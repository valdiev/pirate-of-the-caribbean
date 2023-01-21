if(document.querySelector(".listFilm") || document.querySelector(".homepage")) {
    var offsetStart = 0;
    var offsetEnd = 0;

    window.addEventListener('scroll', () => {
        document.documentElement.style.setProperty('--scroll', (window.pageYOffset - offsetStart) / (document.body.offsetHeight - offsetStart - offsetEnd - window.innerHeight));
    }, false);
}
document.addEventListener('DOMContentLoaded', function() {
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const carouselContainer = document.querySelector('.carousel-container');
    const slides = document.querySelectorAll('.carousel-slide');
    let currentIndex = 0;


    function updateCarousel() {
        const slideWidth = slides[0].clientWidth;
        carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }


    prevBtn.addEventListener('click', function() {
        currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
        updateCarousel();
    });


    nextBtn.addEventListener('click', function() {
        currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
        updateCarousel();
    });


    window.addEventListener('resize', function() {
        updateCarousel();
    });
});


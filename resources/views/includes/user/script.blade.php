<script>
    document.addEventListener('DOMContentLoaded', () => {

        function aos_init() {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
            })
        }

        window.addEventListener('load', () => {
            aos_init();
        })

        const mobileNavToogle = document.querySelector('.mobile-nav-toggle');
        if (mobileNavToogle) {
            mobileNavToogle.addEventListener('click', function(event) {
                event.preventDefault();

                document.querySelector('body').classList.toggle('mobile-nav-active');

                this.classList.toggle('bi-list');
                this.classList.toggle('bi-x');
            });
        };

        var mySwiper = new Swiper('.swiper-container', {
            speed: 400,
            spaceBetween: 100,
            initialSlide: 1,
            //truewrapper adoptsheight of active slide
            autoHeight: false,
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            autoplayStopOnLast: true, // loop false also

            // Navigation arrows
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',

            // And if we need scrollbar
            //scrollbar: '.swiper-scrollbar',
            // "slide", "fade", "cube", "coverflow" or "flip"
            effect: 'slide',
            // Distance between slides in px.
            spaceBetween: 120,
            //
            slidesPerView: 2,
            //
            centeredSlides: true,

            breakpoints: {
                768: {
                    slidesPerView: 1,
                    centeredSlides: true,
                },

                992: {
                    slidesPerView: 1,
                    centeredSlides: true,
                }
            },
            //
            slidesOffsetBefore: 0,
            //
            grabCursor: true,
        });
    });
</script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

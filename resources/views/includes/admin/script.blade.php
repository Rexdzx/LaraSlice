<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/stisla.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>

<script type="text/javascript">
    //flash message
    @if (session()->has('success'))
        Swal.fire({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
    @elseif (session()->has('error'))
        Swal.fire({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
    @endif
</script>

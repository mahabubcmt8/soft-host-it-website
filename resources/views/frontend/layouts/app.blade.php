<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/fav.svg') }}" type="image/x-icon">
    <title>Soft Host IT | Domain Registration, & Web Hosting, Online Accounting Software, Website Design & Development, Web App Development Services, POS Software</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software" />
    <meta name="author" content="Soft Host IT, POS Software" />
    <!-- Bootstrap CSS & font awsome -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- vendor css -->
    <link href="{{ asset('frontend/css/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/keyframes.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>
    <!-- ====================== Navbar ====================== -->
    @include('frontend.layouts.menubar')

    @yield('content')

    @include('frontend.layouts.footer')

    <button class="backToTopBtn"><i class="fas fa-angle-up"></i></button>
    <!-- ======================================= Scripts ======================================= -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://billing.softhostit.com/public/support-cdn/liveChat.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script>
        var thisYear = new Date().getFullYear();
        document.getElementById("year").innerHTML = thisYear;
        $(document).ready(function () {
            $(".search-box, .search-input").on('focus', function () {
                $(".search-input").attr("placeholder", "");
            });
            $(".search-box, .search-input").on('focusout', function () {
                $(".search-input").attr("placeholder", "Search your domain...");
            });

            $("#startLiveChat img").attr('alt', '');
            $("#startLiveChat img").attr('title', '');
        });
        AOS.init();
        $(function () {
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                loop: true,
                autoplay: true,
                nav: true,
                responsive: {
                    0: {            // X-Small devices (portrait phones, less than 576px)
                        items: 1,
                        margin: 5
                    },
                    576: {         // Small devices (landscape phones, 576px and up)
                        items: 2,
                        margin: 10
                    },
                    768: {         // Medium devices (tablets, 768px and up)
                        items: 3,
                        margin: 10
                    },
                    992: {         // Large devices (desktops, 992px and up)
                        items: 4,
                        margin: 10
                    },
                    1200: {        // X-Large devices (large desktops, 1200px and up)
                        items: 4,
                        margin: 10
                    }
                }
            });
        });
    </script>
    <script>
        $('.table-three__cell-button').on('click', function () {
            window.location.href = 'https://billing.softhostit.com/hosting-request';
        });
        $(document).ready(function(){
            // Initially display only the first 4 items
            let itemsToShow = 4;
            let $galleryItems = $('.galary-card');
            $galleryItems.slice(0, itemsToShow).removeClass('d-none');

            $('.load-more-btn').on('click', function(){
                itemsToShow += 4;
                $galleryItems.slice(0, itemsToShow).removeClass('d-none');
                if($galleryItems.length <= itemsToShow){
                    $(this).hide(); // Hide the button if all items are shown
                }
            });
        });
        $(document).ready(function(){
            $('.header-software img').hover(
                function() {
                    $(this).attr('src', $(this).data('hover'));
                },
                function() {
                    $(this).attr('src', $(this).attr('src').replace('.png', '-bw.png'));
                }
            );
        });
    </script>
</body>

</html>

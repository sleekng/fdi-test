<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-light.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-solid.css') }}">
    <link rel="stylesheet" href="{{ asset('js/vegas/vegas.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700;800&display=swap"
        rel="stylesheet">


           <!-- Styles -->
           <link rel="stylesheet" href="{{ asset('css/app.css') }}">

           <!-- Scripts -->
           <script src="{{ asset('js/app.js') }}" defer></script>


<body class="font-sans antialiased relative">

 
       @yield('content')
   



    {{-- All js files --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },


        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var id = "{{ $id }}";
            var element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    </script>

    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 3000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations

        });
    </script>

    <script>
        $modal = $('.subscription-modal');
        $MediaModal = $('.mediakit-modal');

        $subscribeBtn = $('.subscribe-btn');
        $mediakitBtn = $('.mediakit-btn');
        $closeModal = $('.close-modal');
        $wrap = $('.wrap');

        $subscribeBtn.click(function() {
            $modal.toggleClass('active');
        })

        $mediakitBtn.click(function() {
            $MediaModal.toggleClass('active');
        })

        $closeModal.click(function() {

            $modal.removeClass('active');
            $MediaModal.removeClass('active');
        })
        $closeNewsLetter = $('.closeNewsLetter');
        $closeNewsLetter.click(function() {
            $wrap.addClass('closeNewsletter-active')

        })
    </script>



    {{--  End All Js File --}}

</body>

</html>

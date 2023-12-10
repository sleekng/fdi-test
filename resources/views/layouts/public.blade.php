<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-light.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-solid.css') }}">
    <link rel="stylesheet" href="{{ asset('js/vegas/vegas.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100;1,200;1,300;1,400;1,600&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
    <body class=" relative">
        @include('layouts.socialMedia')

        @include('layouts.navigation')
        <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>


        @yield('content')



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

</body>

</html>
    
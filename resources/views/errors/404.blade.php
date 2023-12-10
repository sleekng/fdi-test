<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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
</head>

<body id="contact" class=" relative">
    @include('layouts.socialMedia')






    @include('layouts.navigation')
    <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>

    {{-- Newsletter Modal --}}


    <main>
    <div class=" emag-header pt-10 h-screen  fixed w-full">
    

        <!--EXPLORE-->
        <section id="explore" class="explore h-screen items-center  overflow-hidden relative flex  ">

            <div class=" container px-4 w-[1200px] xl:px-24 mx-auto">
                <div class="section-header overflow-hidden relative flex justify-center text-center">
                    <div class="container py-4">
                        <h1 class="text-4xl">404 Page Not Found</h1>
                        <p>The page you are looking for does not exist.</p>
                    </div>
                </div>
                <div class=" grid grid-cols-2 lg:grid-cols-4 lg:gap-4 gap-2 lg:space-x-4 justify-center">
                    <a href="/showcases"
                        class=" place-self-center card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="/storage/img/Explore/Articles.png" alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">Showcases</span>
                        </div>
                    </a>
                    <a href="/articles"
                        class=" place-self-start card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="/storage/img/Explore/Showcases.png" alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">Articles</span>
                        </div>
                    </a>
                    <a href="/testimonials"
                        class=" place-self-start card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="/storage/img/Explore/Testimonials.png"
                            alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">Testimonials</span>
                        </div>
                    </a>
                    <a href="/emagazine"
                        class=" place-self-start card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="/storage/img/Explore/E-Magazine.png"
                            alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">E-Magazine</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!--End EXPLORE-->
    </div>
  

    </main>



    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('/js/particles.js') }}"></script>
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



</body>

</html>

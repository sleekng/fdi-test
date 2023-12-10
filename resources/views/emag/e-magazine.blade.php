<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Magazine</title>

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .swiper {

            height: 100%;
        }

        .swiper-pagination-bullet {

            width: 16px;
            height: 16px;
            background-color: white !important;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-button-prev {
            left: -50px;
        }

        .swiper-button-next {
            right: -50px;

        }

        @media (min-width: 1024px) {
            .swiper-button-prev {
                left: -150px;
            }

            .swiper-button-next {
                right: -150px;

            }

        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            background: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;


        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 16px !important;
            font-weight: bolder
        }

        .swiperbody {
            min-height: 450px;

        }



        /*   swiper-slide {
                           text-align: center;
                           font-size: 18px;
                           background: #fff;
                           display: flex;
                           justify-content: center;
                           align-items: center;
                       }
               
                       swiper-slide img {
                           display: block;
                           width: 100%;
                           height: 100%;
                           object-fit: cover;
                       } */
    </style>

</head>


<body id="emag" class=" relative">
    @include('layouts.socialMedia')

    @include('layouts.navigation')
    <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>


    <div class=" emag-header pt-10 h-[250px] lg:h-[400px] relative">
        <div class="blend absolute left-0 top-0 w-full h-full bg-primarycolor">
        </div>
        <div class="container relative mx-auto px-10 py-10 flex items-center w-full h-full justify-center">
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl "> <span class="font-bold ">VIEW
                    OUR</span> Digital Edition</h1>
        </div>
    </div>





    <main class=" relative">





        <section
            class="magazine py-20 z-30 bg-primarycolor relative  overflow-hidden flex-col justify-center space-y-10 flex items-center ">
            <video class="absolute w-full opacity-10 z-0 left-0 h-full object-cover " loop autoplay muted>
                <source src="storage/img/fdi/mag-filter2.mp4" type="video/mp4">
            </video>
            <!-- Swiper -->
            <div class="swiper mySwiper   w-full">

                <div class="swiper-wrapper   ">


                    @foreach ($emags as $emag)
                    
                        <div class="swiper-slide pb-20 flex justify-center " space-between="30" pagination="true"
                            pagination-clickable="true">
                            <div class="flex justify-center flex-col items-center text-center space-y-6  ">
                                <div>
                                    <h2 class=" text-2xl font-bold">{{ $emag->e_header }}</h2>
                                </div>
                                <div class="card  swiper-slide">
                                    <div class="content">
                                        <div class="card__side card__side--front-1"
                                            style="filter: drop-shadow(5px 5px 10px #000);">
                                            <img class="w-80 drop-shadow-xl shadow-xl"
                                                src="storage/emag/front/{{ $emag->e_front }}" alt="">
                                        </div>

                                        <div
                                            class=" {{ $emag->e_back ? '' : 'hidden' }}  card__side card__side--back card__side--back-1">
                                            <img class="w-80 drop-shadow-xl shadow-xl"
                                                src="storage/emag/back/{{ $emag->e_back }}" alt="">
                                        </div>
                                        <div
                                            class=" {{ $emag->e_back ? 'hidden' : '' }} relative  card__side card__side--back card__side--back-1">
                                            <div
                                                class=" h-full w-full view flex z-50 justify-center absolute space-y-8 flex-col items-center">

                                                <p class="w-1/2"><img src="/storage/img/fdi_logo.png"
                                                        alt=""></p>
                                                <div class=" flex space-x-1 items-center">
                                                    <span>View</span>
                                                    <a href="{{ $emag->e_url }}" target="_blank"
                                                        class="text-secondarycolor  rounded-xl">Magazine</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class=" flex justify-center space-y-8 flex-col items-center">
                                    <div class="w-5/6">{!! $emag->e_body !!}</div>
                                    <div>
                                        <a href="{{ $emag->e_url }}" target="_blank"
                                            class=" bg-secondarycolor rounded-xl p-4 px-12"
                                            style=" color: white !important;">View</a>
                                    </div>
                                    <div class=" {{ Auth::user() ? '' : 'hidden' }}  flex space-x-4">
                                        <a href="{{ route('emagazine.edit', $emag->id) }}" type="submit"
                                            class="bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                            <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                                        </a>

                                        <form method="POST" action="{{ route('emagazine.destroy', $emag->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                                <i class="fa-sharp fa-light fa-trash"></i>
                                            </button>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach




                </div>


                <div class="swiper-pagination "></div>
            </div>


        </section>

    
        <div class="info  "
            style="background-image: url('storage/img/Sliders/ParallaxBackground.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;     background-attachment: fixed;">

            <div class="text-white ">
                <div class=" container px-4 mx-auto">
                    <div class=" grid xl:grid-cols-2 grid-cols-1 gap-10 py-20">
                        <div data-aos="fade-up">
                            <div class=" flex flex-col items-center text-center">
                                <h1 class=" lg:text-2xl font-bold">INFO</h1>
                                <p class=" text-[12px]">For more information on all our <br> services, please contact:
                                </p>
                            </div>
                            <div class=" flex justify-center space-x-4 items-center py-4">
                                <i class="fa-light text-xl fa-phone-volume"></i> <a href="tel:+442082424531"
                                    class=" hover:text-white lg:text-xl font-bold ">+44 208 242 4531</a>
                            </div>
                            <div class=" flex justify-center space-x-4 items-center lg:py-4">
                                <i class="fa-light text-xl fa-envelope"></i><a href="mailto:info@fdiallianceint.com"
                                    class=" hover:text-white  lg:text-xl font-bold ">info@fdiallianceint.com</a>
                            </div>
                        </div>
                        <div class=" " data-aos="fade-up">

                            <div
                                class=" flex justify-center pt-4 px-12 w-full lg:w-1/2 items-center h-full text-center">
                                <span>Please contact a member of our team to access our Media Kit. We will be in touch
                                    in due
                                    course.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <!--FOOTER-->
    @include('layouts.footer')
    <!--End FOOTER-->



    {{-- Flash Messages --}}


    @if (session('success'))
        <div class="wrap  fixed w-full flex  items-center justify-center p-4 h-full top-0 left-0 z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">
            <button class=" fixed z-50 top-10 right-10 text-white text-4xl closeNewsLetter"><i
                    class="fa-sharp fa-light fa-xmark"></i></button>


            <div class="newsletter  lg:w-[600px] w-full overflow-hidden rounded-md bg-primarycolor  relative"
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                <div class=" grid xl:grid-cols-2 grid-cols-1">
                    <div class=" flex items-center space-y-10 flex-col justify-center text-center p-4 text-white ">
                        <div>
                            <h1 class=" text-2xl font-bold text-secondarycolor">Thank you!</h1>
                            <p>

                                Thank you for signing up! Check your inbox soon for special offers from us</p>
                        </div>
                        <div>
                            <a href="$">
                                <p class=" text-2xl">VIEW OUR LATEST DIGITAL EDITION </p>
                                <i class="fa-sharp text-xl fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        @foreach ($emags as $emag)
                        <img src="storage/emag/front/{{ $emag->e_front }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    @endif

    @if ($errors->any())
        <div class="wrap  fixed w-full flex  items-center justify-center p-4 h-full top-0 left-0 z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">
            <button class=" fixed z-50 top-10 right-10 text-white text-4xl closeNewsLetter"><i
                    class="fa-sharp fa-light fa-xmark"></i></button>


            <div class="newsletter  lg:w-[600px] w-full overflow-hidden rounded-md bg-primarycolor  relative"
                style="background-image: url('{{ asset('img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                <div class=" grid grid-cols-1">
                    <div class=" flex items-center space-y-10 flex-col justify-center text-center p-4 text-white ">
                        <div>
                            <h1 class=" text-xl font-bold text-red-500">Oops!</h1>
                            <ul class=" text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>


                            <div class=" p-8 w-full ">
                                <div class="font-bold underline">
                                    Follow us on:
                                </div>

                                <div class="flex items-center space-x-4  mt-4">
                                    <a href="https://www.linkedin.com/company/fdi-alliance-international" class=" social-media1 px-4" href="">
                                        <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a  href="https://www.facebook.com/fdiallianceinternational" class=" social-media2 px-4" href="">
                                        <i class="  text-2xl text-white fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class=" social-media3 px-4" href="">
                                        <a href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i class="fa-brands fa-instagram"></i></a>


                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    @endif

    </main>






    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/vegas/vegas.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/emag.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 3000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations

        });
    </script>
    <script>
        /*  $seeMore = document.querySelector('.see-more');
                $seeMore.addEventListener('click',function(){
                    
                }) */

        $('.see-more').click(function() {
            $('#emagazine').toggleClass('active')
            console.log($('#emagazine'))
        })

        $('.close-mag').click(function() {
            $('#emagazine').removeClass('active')
        })
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

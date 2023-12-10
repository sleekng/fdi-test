<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>

    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        .swiper {

            height: 100%;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-button-prev {
            left: -2px;
        }

        .swiper-button-next {
            right: -2px;

        }

        @media (min-width: 1024px) {
            .swiper-button-prev {
                left: 50px;
            }

            .swiper-button-next {
                right: 50px;

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



        swiper-slide {
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
        }
    </style>

</head>


<body id="team" class=" relative">
    <div
        class="social-media active lg:top-40 lg:fixed lg:right-4 items-end py-8 justify-center  lg:bg-transparent bg-primarycolor lg:justify-normal lg:flex lg:items-center z-20  lg:h-auto lg:p-8 ">
        <div class=" space-x-12 lg:space-x-0 relative  flex lg:flex-col lg:space-y-4 ">
            <a href="https://www.linkedin.com/company/fdi-alliance-international" class=" opacity-0 social-media1 px-4"
                href="">
                <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://www.facebook.com/fdiallianceinternational" class=" opacity-0 social-media2 px-4"
                href="">
                <i class="  text-2xl text-white fa-brands fa-facebook-f"></i>
            </a>
            <a class=" opacity-0 social-media3 px-4" href="">
                <a href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i
                        class="fa-brands fa-instagram"></i></a>


            </a>



        </div>
    </div>


    @include('layouts.navigation')
    <div class="nav-overlay hidden absolute top-0 left-0 h-full w-full  z-40"></div>

    <div class=" team-header pt-10  text-center h-[400px] relative">
        <div class="blend absolute left-0 top-0 w-full h-full bg-primarycolor">
        </div>
        <div class="container relative mx-auto px-10 py-10 flex flex-col items-center w-full h-full justify-center">
            <h1 class="text-white text-center font-bold text-2xl md:text-2xl ">Testimonials</h1>
            <p class=" text-white text-xl">Here's what some clients are saying about us</p>
        </div>
    </div>
    <main>

        <!--Testimonial-->

        <section id="" class=" px-4 lg:px-20 bg-primarycolor z-40 py-20 relative  block"
            style="background-image: url('storage/img/pattern.png');background-size: cover; background-repeat: no-repeat;background-position: center;">

            <!-- Swiper -->
            <div class="swiper mySwiper  w-full">

                <div class="swiper-wrapper   ">
                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“As an experienced economic developer, I have worked with numerous publications over
                                    the years. I began working with FDI Alliance just a few years ago and have been
                                    blown away by the consistent caliber of their publication in terms of content and
                                    look and feel. Their team consistently provides world-class customer service,
                                    pointed feedback, and is emerging as the economic development magazine to watch. I
                                    look forward to seeing where this publication goes as each edition seems better than
                                    the last. FDI Alliance is already impacting the industry and I am certain that the
                                    best is yet to come.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/rodrick.jpg" alt="">
                                </div>
                                <div class=" flex flex-col items-start">
                                    <span class=" font-bold">Rodrick T. Miller,</span>
                                    <span>President and CEO</span>
                                    <span>Ascendant Global</span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“The City of Xenia, Ohio is in the midst of an economic revitalization effort that
                                    includes burgeoning industrial and retail opportunities. The City’s industrial
                                    promotional efforts have included professionally designed display graphics and
                                    advertisements created by, and placed in, FDI Alliance International magazine. When
                                    the need arose to more aggressively promote our rapidly growing retail opportunities
                                    in the city, we turned to FDI Alliance to help us create high quality, well-designed
                                    brochures used in print, electronic and other mediums. We have been very pleased
                                    with their graphic design and service, Thank You.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/leewarren.jpg" alt="">
                                </div>
                                <div class=" flex flex-col items-start">
                                    <span class=" font-bold">Lee Warren</span>
                                    <span>Public Relations Director</span>
                                    <span>The City of Xenia, Ohio</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“Dear Courtney: As an economic developer focused on investment attraction, I greatly
                                    appreciated the way the folks at FDI Alliance International have delivered for our
                                    organization. They have under-promised and over-achieved on their customer service
                                    from idea generation to final product. No matter the time of day or day of week, I
                                    always felt like their most important client. Their publication and digital issue
                                    has continually exceeded our expectations and impressed our Council members as well
                                    as residents in the community. I have no hesitation in recommending the FDI Alliance
                                    International Team to colleagues in the industry. Sincerely“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/chathamkent.png" alt="">
                                </div>
                                <div class=" flex flex-col items-start">
                                    <span class=" font-bold">Michael F. Burton</span>
                                    <span class=" text-left">Director, Investment Attraction and Government
                                        Relations</span>
                                    <span>Invest Chatham-Kent</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody  bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“I have worked with FDI Alliance for several years as I needed a quality advertiser
                                    in the European Market to showcase Dayton Texas and the diversity that we provide in
                                    the Houston MSA. FDI Alliances has done a phenomenal job for us. FDI Alliance has
                                    help us with great Ad placements and in the creation of various looks that I know
                                    are attracting businesses to Dayton. I feel that Dayton Texas obtained the services
                                    of a high quality professional staff that helps me do a job better in bringing
                                    industrial and manufacturing businesses to my community.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/dayton.jpg" alt="">
                                </div>
                                <div class=" flex flex-col items-start text-left">
                                    <span class=" font-bold">Courtland Holman</span>
                                    <span>Executive Director</span>
                                    <span>Dayton Community Development Corporation</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“As a fledgling economic developer, I have greatly appreciated the way the folks at
                                    FDI Alliance International have treated me and my organization. They have
                                    under-promised and over-delivered on their customer service from idea generation to
                                    final product. No matter the time of day or day of week, I always felt like their
                                    most important client. Their publication and digital has continually exceeded our
                                    expectations and impressed those around our community.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/portage.jpg" alt="">
                                </div>
                                <div class=" flex flex-col items-start text-left">
                                    <span class=" font-bold">Todd Kuckkahn</span>
                                    <span>Executive Director</span>
                                    <span>Portage County Business Council, Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“As a fledgling economic developer, I have greatly appreciated the way the folks at
                                    FDI Alliance International have treated me and my organization. They have
                                    under-promised and over-delivered on their customer service from idea generation to
                                    final product. No matter the time of day or day of week, I always felt like their
                                    most important client. Their publication and digital has continually exceeded our
                                    expectations and impressed those around our community.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/obrian.jpg" alt="">
                                </div>
                                <div class=" flex flex-col items-start">
                                    <span class=" font-bold">Rob O'Brian</span>
                                    <span>President & CEO</span>
                                    <span>O'Brian & Associates</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“Jacksboro Economic Development Corporation has Partnered with FDI Alliance
                                    International for almost a year now. This has been a very productive association and
                                    has increased our area's exposure in foreign platform. As we bring our business park
                                    to the market, I am confident that FDI will be a strategic partner in attracting
                                    companies. We hope to continue this relationship in the future, Regards.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/jacksboro.jpg" alt="">
                                </div>
                                <div class=" flex flex-col items-start text-left">
                                    <span class=" font-bold">Lynda Pack</span>
                                    <span>PCED, BREP, Executive Director</span>
                                    <span>Jacksboro</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“FDI Alliance Magazine is an attractive, well-done publication. I’ve found the
                                    Executive Publisher, Courtney Margetson, to be professional, imaginative and
                                    hard-working. He has delivered on everything he has promised. All-in-all, I have had
                                    a positive experience with Courtney and FDI Alliance.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">
                                <div class=" w-24 flex justify-center items-center ">
                                    <img src="/storage/img/testimonial/watauga.jpg" alt="">
                                </div>
                                <div class=" flex flex-col items-start text-left">
                                    <span class=" font-bold">Joseph A. Furman,</span>
                                    <span>AICP Director</span>
                                    <span>Watauga County Planning & Inspections and Economic Development.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“Courtney, The FDI Alliance is the best magazine for decision makers and site
                                    consultants. Your service is impeccable and totally responsive to your clients. As
                                    always this issue is top shelf. Keep up the good work.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">


                                <div class=" flex justify-center space-x-4">
                                    <div class=" w-24 flex justify-center items-center ">
                                        <img src="/storage/img/testimonial/stmary.jpg" alt="">
                                    </div>
                                    <div class=" flex flex-col items-start">
                                        <span class=" font-bold">Frank Fink</span>
                                        <span>Economic Development Director</span>
                                        <span>St.Marys Parrish LA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="item flex justify-between flex-col swiperbody bg-white rounded-xl p-4 relative">

                            <div class=" py-8">
                                <p>“It has been a great experience to work with FDI Alliance. They have a very
                                    professional staff and creative team, and they have guided us every step of the
                                    way.“</p>
                            </div>
                            <div class=" flex justify-center space-x-4">


                                <div class=" flex justify-center space-x-4">
                                    <div class=" w-24 flex justify-center items-center ">
                                        <img src="/storage/img/testimonial/Ruston.jpg" alt="">
                                    </div>
                                    <div class=" flex flex-col items-start text-left">
                                        <span class=" font-bold">Ronny Walker</span>
                                        <span>Mayor</span>
                                        <span>City of Ruston, LA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="swiper-button-next  z-50 border-primarycolor border-2"></div>
            <div class="swiper-button-prev z-50 border-primarycolor border-2"></div>
            <div class="swiper-pagination"></div>

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



        <!--FOOTER-->
        @include('layouts.footer')
        <!--End FOOTER-->



        {{-- Flash Messages --}}


        <div class=" subscription-modal fixed w-full hidden items-center justify-center p-4 h-full top-0 left-0 z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">
            <div class=" bg-white lg:w-[600px] w-full rounded-md p-4 py-10 relative">
                <button class="close-modal absolute right-2 top-2 "><i class="fa-light fa-xmark text-xl"></i></button>
                <div class=" mb-10">
                    <span class=" text-xl"><span class=" font-bold">SUBSCRIBE</span> NOW!</span>
                </div>
                <form action="{{ route('subscription.store') }}" method="POST">
                    @csrf
                    <div class="mt-8 ">
                        <input type="text" name="name"
                            class=" pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"
                            placeholder="Name">
                    </div>
                    <div class="mt-8 ">
                        <input type="email" name="email"
                            class=" pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"
                            placeholder="Email">
                    </div>
                    <div class="mt-8 ">

                        <select name="subscription"
                            class="pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"
                            id="">
                            <option value="" disabled selected>Subscription Period</option>
                            <option value="3 Month">3 Month</option>
                            <option value="1 Year">1 Year</option>
                            <option value="2 Years">2 Years</option>
                        </select>

                    </div>
                    <div class="mt-4 flex items-center space-x-2">
                        <input name="terms" value="confirmed" type="checkbox"> <span class=" text-[10px]">I agree
                            that all content subscribed to is owned and is the intellectual property of FDI Alliance
                            International LTD </span>
                    </div>

                    <div>
                        <button type="submit"
                            class=" p-4 bg-primarycolor text-white w-full rounded-md mt-4 px-12 hover:bg-primarycolorhover hover:text-white transition-all duration-300">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </div>


        <div class=" mediakit-modal fixed w-full hidden items-center justify-center p-4 h-full top-0 left-0 z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">

            <div class=" bg-white lg:w-[600px] w-full rounded-md p-4 py-10 relative">
                <button class="close-modal absolute right-2 top-2 "><i class="fa-light fa-xmark text-xl"></i></button>
                <div class=" mb-10">
                    <span class=" lg:text-xl"><span class=" font-bold">Mediakit</span> Request </span>
                </div>
                <form action="{{ route('mediakit.store') }}" method="POST">
                    @csrf
                    <div class="mt-8 ">
                        <input type="text" name="company_name"
                            class=" text-[10px] lg:text-[16px] pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"
                            placeholder="Enter Company Name">
                    </div>
                    <div class="mt-8 ">
                        <input type="email" name="company_email"
                            class=" text-[10px] lg:text-[16px] pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"
                            placeholder="Email">
                    </div>
                    <div>
                        <button type="submit"
                            class="text-[12px] lg:text-[16px] p-4 bg-primarycolor text-white w-full rounded-md mt-4 px-12 hover:bg-primarycolorhover hover:text-white transition-all duration-300">Send
                            Request</button>
                    </div>
                </form>
            </div>
        </div>


        @if (session('success'))
            <div class="wrap  fixed w-full flex  items-center justify-center p-4 h-full top-0 overflow-y-auto overflow-x-hidden left-0 z-50"
                style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">


                <div class="newsletter overflow-y-auto min-h-[80vh] lg:max-h-[80vh] lg:min-h-[49vh]  lg:w-[600px] w-full overflow-hidden rounded-md bg-primarycolor  relative"
                    style="background-image: url('{{ asset('img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <button class=" absolute z-50 top-8 right-8 text-white text-2xl closeNewsLetter"><i
                            class="fa-sharp fa-light fa-xmark"></i>
                    </button>

                    <div class=" grid xl:grid-cols-2 grid-cols-1 mt-10">
                        <div class=" hidden   lg:block">
                            @foreach ($emags as $emag)
                            <img src="storage/emag/front/{{ $emag->e_front }}" alt="">
                            @endforeach
                        </div>
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
                        <div class=" lg:hidden  flex justify-center w-full">
                            <div class=" w-[60vw]">
                                @foreach ($emags as $emag)
                                <img src="storage/emag/front/{{ $emag->e_front }}" alt="">
                                @endforeach
                            </div>
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
                                        <a href="https://www.linkedin.com/company/fdi-alliance-international"
                                            class=" social-media1 px-4" href="">
                                            <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://www.facebook.com/fdiallianceinternational"
                                            class=" social-media2 px-4" href="">
                                            <i class="  text-2xl text-white fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-media3 px-4" href="">
                                            <a href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i
                                                    class="fa-brands fa-instagram"></i></a>


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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,


            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },

            breakpoints: {
                "@0.00": {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                "@0.75": {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                "@1.00": {
                    slidesPerView: 3,
                    spaceBetween: 4,
                },
                "@1.50": {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            },



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

    <script src="{{ asset('js/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/testimonial.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 3000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations

        });
    </script>


    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,

            responsiveClass: true,
            margin: 10,
            stagePadding: 10,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: true,

                }
            }
        })



        var owl = $('.owl-carousel');
        owl.owlCarousel();
        // Go to the next item
        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
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

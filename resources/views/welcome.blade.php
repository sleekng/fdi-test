@extends('layouts.app')

@section('content')

    @include('layouts.socialMedia')


    @include('layouts.navigation')


    <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>
    <main>

        <!--Home-->
        <section class="home  bg-primarycolor lg::h-screen relative">


            <div class=" h-full relative z-30">

                <div class="grid grid-cols-1 xl:grid-cols-12 h-full  ">
                    <div class="container   px-4 mx-auto h-full overflow-hidden  w-full col-span-5 home-left relative"
                        style="border-bottom: solid 0.1px rgba(255, 255, 255, 0.216);">

                        <!--DESKTOP-->
                        <a href="#about"
                            class="hidden absolute z-50 text-white text-4xl lg:flex justify-center w-full bottom-10 pr-8">
                            <i class="fa-thin fa-chevron-down"></i>
                        </a>
                        <!--End DESKTOP-->

                        <!--Mobile-->
                        <a href="#vegasslider"
                            class="lg:hidden absolute z-50 text-white text-4xl flex justify-center w-full bottom-10 pr-8">
                            <i data-aos="fade-up" class="fa-thin fa-chevron-down"></i>
                        </a>
                        <!--End Mobile-->


                        <div class=" absolute z-20 flex  justify-center items-center h-full">
                            <img class=" globe scale-90 " src="storage/img/globe.png" alt="">


                        </div>
                        <div data-aos="zoom-in"
                            class=" h-full w-full flex items-center relative justify-center space-y-8 flex-col z-40">
                            <img class=" w-40" src="storage/img/fdi_logo.png" alt="">
                            <div class=" text-center flex flex-col justify-center items-center">
                                <img class=" w-80" src="storage/img/text-logo.png" alt="">
                                <p id="typewriter" class="text-white h-[100px]   mt-2 text-[16px]"></p>
                            </div>

                        </div>
                        <!--   <div class="text-white absolute z-50 bottom-4  hidden center xl:flex  overflow-hidden w-full">
                            <div class="space-x-4 flex ">
                                <span class="home_left-button active home_left-button0 relative cursor-pointer">
                                    <span class=" ">01</span>
                                    <span class="line w-full bg-white  absolute bottom-0 left-0"></span>
                                </span>
                                <span class="home_left-button home_left-button1 cursor-pointer relative">
                                    <span class=" ">02</span>
                                    <span class="line w-full bg-white  absolute bottom-0 left-0"></span>
                                </span>
                                <span class="home_left-button home_left-button2 cursor-pointer relative">
                                    <span class=" ">03</span>
                                    <span class="line w-full bg-white  absolute bottom-0 left-0"></span>
                                </span>
                            </div>
                            <div class="w-full flash overflow-hidden  mr-10  ">
                                <span class="flash-0 opacity-0 z-50 absolute">FDI Alliance International April Issue now
                                    Live <a class=" font-bold text-secondarycolor" href="#">Click Here</a></span>



                                <span class="flash-1 opacity-0  z-50 absolute">FDI Alliance News Update2</span>


                                <span class="flash-2 opacity-0  z-50 absolute">FDI Alliance News Update3</span>

                            </div>

                        </div> -->

                    </div>
                    <!--DESKTOP-->
                    <div class="vegasslider hidden lg:block col-span-7 w-full relative home-left">
                        <div class="  overflow-hidden  w-full h-full ">
                            <div class="vegas-text1 hidden absolute z-50 bottom-4 flex-col text-white text-right right-20">
                                <h1 class=" uppercase text-4xl">TOMBALL, TEXAS</h1>
                                <p class=" uppercase">WORKING TOGETHER AND OPEN FOR BUSINESS IN TOMBALL, TEXAS</p>
                            </div>
                            <div class="vegas-text2 hidden absolute z-50 bottom-4 flex-col text-white text-right right-20">
                                <h1 class=" text-4xl">Myrtle Beach</h1>
                                <p class=" uppercase">More than just a vacation destination</p>
                            </div>

                            <div class="vegas-text3 hidden absolute z-50 bottom-4 flex-col text-white text-right right-20">
                                <h1 class=" text-4xl">Sierra Vista Arizona
                                </h1>

                            </div>

                            <div class="vegas-text4 hidden absolute z-50 bottom-4 flex-col text-white text-right right-20">
                                <h1 class=" text-4xl">Huntington County</h1>
                                <p class=" uppercase">175 Years and still growing stronger</p>
                            </div>

                            <div class=" z-50 absolute bottom-4 left-10 h-[20px] items-center flex space-x-4">
                                <span
                                    class="vegas_slide-icon slide-1-icon  h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                                <span
                                    class="vegas_slide-icon  slide-2-icon h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                                <span
                                    class="vegas_slide-icon  slide-3-icon h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                                <span
                                    class="vegas_slide-icon  slide-4-icon h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                            </div>

                        </div>

                        <div class=" absolute z-30 bg-primarycolor opacity-50 h-full w-full"></div>



                        <div class=" absolute z-40  h-full w-full"
                            style="background-image: url('storage/img/pattern.png')' background-position: center; background-repeat: no-repeat; background-size: cover;">
                        </div>

                    </div>
                    <!--End DESKTOP-->



                    <!--Mobile-->
                    <div id="vegasslider" class="vegasslider lg:hidden block col-span-7 w-full relative home-left">

                        <div class="  overflow-hidden  w-full h-full ">
                            <div class="vegas-text1 hidden absolute z-50 bottom-20 flex-col text-white text-left left-4">
                                <h1 class=" uppercase text-4xl font-bold">TOMBALL, TEXAS</h1>
                                <p class=" uppercase">WORKING TOGETHER AND OPEN FOR BUSINESS IN TOMBALL, TEXAS</p>
                            </div>
                            <div class="vegas-text2 hidden absolute z-50 bottom-20 flex-col text-white text-left left-4">
                                <h1 class="uppercase text-4xl font-bold">Myrtle Beach</h1>
                                <p class=" uppercase">More than just a vacation destination</p>
                            </div>

                            <div class="vegas-text3 hidden absolute z-50 bottom-20 flex-col text-white text-left left-4">
                                <h1 class=" uppercase text-4xl font-bold">Sierra Vista Arizona
                                </h1>

                            </div>

                            <div class="vegas-text4 hidden absolute z-50 bottom-20 flex-col text-white text-left left-4">
                                <h1 class=" uppercase text-4xl font-bold">Huntington County</h1>
                                <p class=" uppercase">175 Years and still growing stronger</p>
                            </div>

                            <div class=" z-50 absolute bottom-4 left-4 h-[20px] items-center flex space-x-4">
                                <span
                                    class="vegas_slide-icon slide-1-icon  h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                                <span
                                    class="vegas_slide-icon  slide-2-icon h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                                <span
                                    class="vegas_slide-icon  slide-3-icon h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                                <span
                                    class="vegas_slide-icon  slide-4-icon h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>
                            </div>

                        </div>

                        <div class=" absolute z-30 bg-primarycolor opacity-50 h-full w-full"></div>



                        <div class=" absolute z-40  h-full w-full"
                            style="background-image: url('storage/img/pattern.png') background-position: center; background-repeat: no-repeat; background-size: cover;">
                        </div>

                    </div>
                    <!--End Mobile-->
                </div>
            </div>


            </div>

        </section>
        <!--End Home-->

        <!--About-->
        <section id="about"
            class="about-us py-20  bg-gray-100 text-gray-700 overflow-hidden relative flex items-center ">
            <!-- <video  class="absolute w-full opacity-30 left-0 h-full object-cover " loop autoplay muted>
                                <source src="{{ asset('img/vid/hero2-video.mp4') }}" type="video/mp4">
                    </video>   -->
            <div class="  container px-4 h-full xl:px-60 mx-auto">
                <div class="  grid grid-cols-1 lg:grid-cols-2 h-full">
                    <div class=" hidden  col-span-1 lg:p-4 lg:grid grid-rows-6 grid-flow-col gap-4">
                        <div class="relative overflow-hidden rounded-xl row-span-4 h-full "
                            style="background-image: url('storage/img/fdi/background-1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">

                        </div>
                        <div class="relative overflow-hidden rounded-xl row-span-2 h-[100px] lg:h-full "
                            style="background-image: url('storage/img/fdi/background-3.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">

                        </div>

                        <div class="relative overflow-hidden rounded-xl row-span-6 h-full">
                            <video class="absolute left-0 h-full object-cover opacity-70" loop autoplay muted>
                                <source src="/storage/img/vid/hero2-video.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class=" col-span-1 lg:p-4 mb-10 lg:mb-0 lg:mt-10">
                        <div class=" relative mb-4">
                            <h1 class="p-0 m-0">ABOUT US</h1>
                            <span class="h-[1px] bottom-0 w-full absolute bg-gray-400 inline-block"></span>
                        </div>
                        <p data-aos="fade-left" class="lg:text-justify ">We showcase the most attractive business
                            destinations in North America and Canada to Site Selectors and CEOs from Europe and the UK.
                            FDI Alliance is a platform strictly aimed at decision makers. We present easily digestible
                            yet detailed information on the most attractive locations in North America and Canada. Our
                            specialised team collect the relative information and data needed for evaluating and
                            analysing prime locations for business attraction. </p>
                    </div>
                    <div class=" lg:hidden col-span-1 lg:p-4 grid grid-rows-6 grid-flow-col gap-4">
                        <div class="relative overflow-hidden rounded-xl row-span-4 h-full "
                            style="background-image: url(storage/img/fdi/background-1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">

                        </div>
                        <div class="relative overflow-hidden rounded-xl row-span-2 h-[100px] lg:h-full "
                            style="background-image: url('storage/img/fdi/background-3.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">

                        </div>

                        <div class="relative overflow-hidden rounded-xl row-span-6 h-full">
                            <video class="absolute left-0 h-full object-cover opacity-70" loop autoplay muted>
                                <source src="storage/img/vid/hero2-video.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About-->

        <!--Services-->
        <section id="services" class="services py-20 lg:pb-0 bg-primarycolor z-30 overflow-hidden relative flex  ">

            <div class=" container px-4  xl:px-24 mx-auto">
                <div class="section-header overflow-hidden relative flex justify-center text-center">
                    <h1 class=" border-b mb-10">OUR SERVICES</h1>
                </div>
                <div class=" grid grid-cols-1 text-[12px] xl:text-base lg:grid-cols-4 gap-4">
                    <div
                        class="text-center relative h-[250px]  service-box1  flex flex-col items-center justify-center col-span-1 overflow-hidden p-4 rounded-xl bg-tertiary">
                        <div class=" flex justify-center relative z-20">

                            <img class=" scale-75" src="storage/img/Services/WebsiteIcon.png" alt="">
                        </div>
                        <div data-aos="fade-up" class=" mt-4 z-20 relative">
                            <h4 class=" text-xl font-bold">Website</h4>
                            <p>A portal for Site Selectors and those involved in International Trade.</p>
                        </div>
                        <img class="img-bg object-cover opacity-0 w-full h-full z-10 absolute"
                            src="storage/img/Services/Website_Image.png" alt="">
                    </div>
                    <div
                        class="text-center relative  h-[250px]  service-box2  flex flex-col items-center justify-center col-span-1 overflow-hidden p-4 rounded-xl bg-secondarycolor">
                        <div class=" flex justify-center relative z-20">

                            <img class=" scale-75" src="storage/img/Services/Mobileapp_icon.png" alt="">
                        </div>
                        <div data-aos="fade-up" class=" mt-4 z-20 relative">
                            <h4 class=" text-xl font-bold">Mobile App</h4>
                            <p>In development - location data and detailed industry information. </p>
                        </div>
                        <img class="img-bg object-cover opacity-0 h-full w-full z-10 absolute"
                            src="storage/img/Services/Mobile_image.png" alt="">
                    </div>
                    <div
                        class="text-center relative  h-[250px]  service-box3  flex flex-col items-center justify-center col-span-1 overflow-hidden p-4 rounded-xl bg-tertiary">
                        <div class=" flex justify-center relative z-20">
                            <img class=" scale-75" src="storage/img/Services/Publicationicon.png" alt="">
                        </div>
                        <div data-aos="fade-up" class=" mt-4 z-20 relative">
                            <h4 class=" text-xl font-bold">Publication</h4>
                            <p>Distributed across Europe into the hands of CEOs and decision makers.</p>
                        </div>
                        <img class="img-bg object-cover opacity-0 h-full w-full z-10 absolute"
                            src="storage/img/Services/Publication_image.png" alt="">
                    </div>
                    <div
                        class="text-center relative  h-[250px]  service-box4  flex flex-col items-center justify-center col-span-1 overflow-hidden p-4 rounded-xl bg-secondarycolor">
                        <div class=" flex justify-center relative z-20">
                            <img class=" scale-75" src="storage/img/Services/DigitalIcon.png" alt="">
                        </div>
                        <div data-aos="fade-up" class=" mt-4 z-20 relative">
                            <h4 class=" text-xl font-bold">Digital</h4>
                            <p>Interactive applications for your Fdi research requirements.</p>
                        </div>
                        <img class="img-bg object-cover w-full opacity-0 h-full z-10 absolute"
                            src="storage/img/Services/Digital_Image2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--End Services-->

        <!--Clients-->
        <section class="Clients bg-primarycolor z-30  overflow-hidden relative flex py-20 items-center ">
            <video class="absolute w-full opacity-30 z-30 left-0 h-full object-cover " loop autoplay muted>
                <source src="storage/img/vid/hero2-video.mp4" type="video/mp4">
            </video>



            <div class=" container px-4 relative z-40  xl:px-24 mx-auto">
                <div class="section-header overflow-hidden relative flex justify-center text-center">
                    <h1 class=" border-b mb-10 font-bold">OUR CLIENTS & PARTNERS</h1>
                </div>
                <div data-aos="fade-up" class=" grid gap-4 grid-cols-2 lg:flex lg:space-x-4 justify-center items-center ">
                    <div
                        class=" hover:scale-110 transition-all shadow-xl  lg:w-[100px] w-h-[120px] h-[150px]  md:w-[170px] md:h-[170px] lg:h-[100px] flex items-center bg-white p-2 overflow-hidden rounded-xl justify-center">
                        <img class="lg:w-[100px]  w-full" src="storage/img/logo/huntinton.png" alt="">
                    </div>

                    <div
                        class=" hover:scale-110 transition-all shadow-xl  lg:w-[100px] w-full  h-[150px] md:w-[170px] md:h-[170px] lg:h-[100px] flex items-center bg-white p-2 overflow-hidden rounded-xl justify-center">
                        <img class="lg:w-[100px]  w-full" src="storage/img/logo/tomball.webp" alt="">
                    </div>
                    <div
                        class=" hover:scale-110 transition-all shadow-xl  lg:w-[100px] w-full h-[150px]  md:w-[170px] md:h-[170px] lg:h-[100px] flex items-center bg-white p-2 overflow-hidden rounded-xl justify-center">
                        <img class="lg:w-[100px]  w-full" src="storage/img/logo/clyde.jpg" alt="">
                    </div>
                    <div
                        class=" hover:scale-110 transition-all shadow-xl  lg:w-[100px] w-full h-[150px]  md:w-[170px] md:h-[170px] lg:h-[100px] flex items-center bg-white p-2 overflow-hidden rounded-xl justify-center">
                        <img class="lg:w-[100px]  w-full" src="storage/img/logo/TeamKentucky-white.png" alt="">
                    </div>
                    <div
                        class=" hover:scale-110 transition-all shadow-xl  lg:w-[100px] w-full h-[150px]  md:w-[170px] md:h-[170px] lg:h-[100px] flex items-center bg-white p-2 overflow-hidden rounded-xl justify-center">
                        <img class="lg:w-[100px]  w-full" src="storage/img/logo/dickinson.png" alt="">
                    </div>
                    <div
                        class=" hover:scale-110 transition-all shadow-xl  lg:w-[100px] w-full h-[150px]  md:w-[170px] md:h-[170px] lg:h-[100px] flex items-center bg-white p-2 overflow-hidden rounded-xl justify-center">
                        <img class="lg:w-[100px]  w-full" src="storage/img/logo/vista.png" alt="">

                    </div>

                    <div
                        class=" hover:scale-110 transition-all shadow-xl  lg:w-[100px] w-full h-[150px]  md:w-[170px] md:h-[170px] lg:h-[100px] flex items-center bg-white p-2 overflow-hidden rounded-xl justify-center">
                        <img class="lg:w-[100px]  w-full" src="storage/img/logo/jefferson.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--End Clients-->

        <!--INVESTMENT-->
        <section class="investment bg-white overflow-hidden py-20  relative flex items-center ">
            <div class=" container px-4 h-ful   mx-auto">
                <div class=" mb-10 text-center w-full flex flex-col space-y-2 justify-center items-center">

                    <div class="section-header pb-4 overflow-hidden relative flex justify-center text-center">
                        <h1 class=" border-b text-black "><span class="font-bold">INVESTMENT</span> DESTINATIONS</h1>
                    </div>
                    <p class=" lg:w-1/2 text-gray-700">As well as showcasing locations across America, our platform
                        includes articles by
                        FDI and industrial development officials,
                        providing practical advice and International trade information</p>
                </div>

                <div class=" grid grid-cols-1 w-full lg:grid-cols-4 gap-4 h-full  lg:px-24">
                    @foreach ($showcases as $key => $showcase)
                        <div data-aos="fade-up"
                            class="filter {{ $showcase->category }}  showcase-card  lg:col-span-1   rounded-lg relative overflow-hidden">
                            <div data-modal="#modal{{ $showcase->id }}"
                                class="modal__trigger flex z-30 overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full  justify-center">
                                <div class=" flex flex-col space-y-4">
                                    <h4 class="font-bold">{{ $showcase->location }}</h4>
                                    <p class="  text-[12px]">{{ $showcase->showcase }}</p>
                                </div>
                                <div>
                                    <i class="fa-sharp fa-solid fa-link"></i><br>
                                    <a class=" text-secondarycolor" href="">Read More</a>
                                </div>
                            </div>




                            <img class=" object-cover w-full h-full z-20 absolute"
                                src="storage/showcase/{{ $showcase->image_url }}" alt="">


                        </div>

                        <div class="{{ Auth::user() ? '' : 'hidden' }}  flex space-x-4">
                            <a href="{{ route('showcase.edit', $showcase->id) }}" type="submit"
                                class="  bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                            </a>

                            <form method="POST" action="{{ route('showcase.destroy', $showcase->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                    <i class="fa-sharp fa-light fa-trash"></i>
                                </button>

                            </form>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--  End Investement  -->

        <!--MAGAZINE-->
        <section id="magazine" class="magazine z-30 bg-primarycolor py-20  overflow-hidden relative flex items-center ">
            <video class="absolute w-full opacity-10 z-30 left-0 h-full object-cover " loop autoplay muted>
                <source src="storage/img/fdi/mag-filter2.mp4" type="video/mp4">
            </video>
            <div class=" container px-4 relative z-40   xl:px-24 mx-auto">
                <div class="section-header overflow-hidden relative flex justify-center text-center">
                    <h1 class=" border-b mb-10"> <span class="font-bold">VIEW OUR</span> DIGITAL EDITION</h1>
                </div>
                <div class=" flex items-center space-y-4 text-center flex-col justify-center w-full">
                    <div>
                        <h2 class=" text-2xl font-bold">April 2023</h2>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="card__side card__side--front-1 ">
                                <img class="w-80 drop-shadow-xl shadow-xl"
                                    src="storage/img/magazine/FDI-COVER-WINTER-2023-Cover-1.png" alt="">
                            </div>
                            <div>

                            </div>
                            <div class="card__side card__side--back card__side--back-1">
                                <img class="w-80 drop-shadow-xl shadow-xl" src="storage/img/magazine/back.png"
                                    alt="">
                            </div>

                        </div>
                    </div>
                    <div class=" flex justify-center space-y-8 flex-col items-center">
                        <p class="w-5/6">Winter interactive issue 2023 sponsored by The <a href="#"
                                class="text-secondarycolor font-bold">Kentucky Cabinet</a> For Economic Development</p>
                        <div>
                            <a href="#" class=" bg-secondarycolor rounded-xl p-4 px-12"
                                style=" color: white !important;">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Magazine-->

        <!--OUTREACH-->
        <section id="outreach"
            class="   text-gray-700  outreach bg-white py-20 overflow-hidden relative flex  items-center ">

            <div class=" container px-4  xl:px-24 mx-auto">
                <div class=" overflow-hidden relative flex justify-center text-center">
                    <div class=" relative mb-4">
                        <span class="font-bold  text-[18px] lg:text-2xl">OUTREACH AND DIGITAL READERSHIP</span>
                        {{--    <span class="h-[1px] mt-10 bottom-0 w-full left-0 absolute bg-gray-600 inline-block"></span> --}}
                    </div>
                </div>
                <div data-aos="fade-in"
                    class=" grid grid-cols-2 lg:grid-cols-4 lg:gap-40 py-4 lg:border-t border-b border-gray-600">
                    <div data-aos="fade-right"
                        class=" lg:row-span-1 row-span-3  text-xl lg:text-2xl font-bold flex items-center justify-center">
                        <h3 class="text-primarycolor">Outreach</h3>
                    </div>
                    <div class=" flex flex-col space-y-1 items-start justify-center">
                        <i data-aos="fade-up" class="  text-2xl text-secondarycolor pb-4  fa-brands fa-linkedin-in"></i>
                        <h4 class="  text-2xl font-bold  hover:scale-125 text-secondarycolor transition-all duration-500">
                            1.8M+</h4>
                        <p class="leading-relaxed">Over 3 Million LinkedIn <br>Outreach</p>
                    </div>
                    <div
                        class=" flex flex-col space-y-1 lg:mt-0 lg:my-0 my-8 lg:border-t-0 lg:border-b-0 border-t border-b lg:py-0 py-4 items-start justify-center">
                        <i data-aos="fade-up" class="    text-2xl text-secondarycolor pb-4 fa-brands fa-facebook-f"></i>
                        <h4 class="  text-2xl text-secondarycolor font-bold hover:scale-125 transition-all duration-500">
                            1.4M+</h4>
                        <p class="leading-relaxed">Over 15k Facebook <br>Outreach</p>
                    </div>
                    <div class=" flex flex-col space-y-1 items-start justify-center">
                        <i data-aos="fade-up" class="  text-2xl text-secondarycolor pb-4  fa-brands fa-instagram"></i>
                        <h4 class="  text-2xl font-bold hover:scale-125 transition-all text-secondarycolor duration-500">
                            1.8M+</h4>
                        <p class="leading-relaxed">Over 600+ Instagram <br>Outreach</p>
                    </div>
                </div>
                <div data-aos="fade-in"
                    class=" grid grid-cols-2 lg:grid-cols-4 lg:gap-40 py-4 border-t border-b border-gray-600">
                    <div data-aos="fade-right"
                        class=" lg:row-span-1 row-span-3  text-lg lg:text-2xl font-bold flex items-center justify-center">
                        <h3 class="text-primarycolor">Digital <br>
                            Readership</h3>
                    </div>
                    <div class=" flex flex-col space-y-1 items-start justify-center">
                        <i data-aos="fade-up"
                            class="block  lg:hidden  text-2xl text-secondarycolor pb-4  fa-brands fa-linkedin-in"></i>
                        <h4 id="linkedin"
                            class="hover:scale-125 transition-all text-secondarycolor duration-500  text-2xl font-bold">
                            0.5M+
                        </h4>
                        <p class="leading-relaxed">Over 2.5 Million LinkedIn <br>
                            Digital Readership</p>
                    </div>
                    <div
                        class=" flex flex-col space-y-1 lg:mt-0 lg:my-0 my-8 lg:border-t-0 lg:border-b-0 border-t border-b lg:py-0 py-4 items-start justify-center">
                        <i data-aos="fade-up"
                            class="block  lg:hidden    text-2xl text-secondarycolor pb-4 fa-brands fa-facebook-f"></i>
                        <h4 id="facebook"
                            class="hover:scale-125 transition-all text-secondarycolor duration-500  text-2xl font-bold">
                            1.4M+
                        </h4>
                        <p class="leading-relaxed">Over 45 Thousand Facebook <br>
                            Digital Readership</p>
                    </div>
                    <div class=" flex flex-col space-y-1 items-start justify-center">
                        <i data-aos="fade-up"
                            class="block lg:hidden  text-2xl text-secondarycolor pb-4  fa-brands fa-instagram"></i>
                        <h4 id="instagram"
                            class="hover:scale-125 transition-all text-secondarycolor duration-500  text-2xl font-bold">
                            500+
                        </h4>
                        <p class="leading-relaxed">Over 1800 Instagram <br>
                            Digital Readership</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End OUTREACH-->

        <!--EXPLORE-->
        <section id="explore" class="explore  items-center bg-primarycolor overflow-hidden relative flex  ">

            <div class=" container px-4 w-[1200px] xl:px-24 mx-auto">
                <div class="section-header overflow-hidden relative flex justify-center text-center">
                    <h1 class=" border-b mb-10">Explore</h1>
                </div>
                <div class=" grid grid-cols-2 lg:grid-cols-4 lg:gap-4 gap-2 lg:space-x-4 justify-center">
                    <a href="/showcases"
                        class=" place-self-center card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="storage/img/Explore/Articles.png" alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">Showcases</span>
                        </div>
                    </a>
                    <a href="/articles"
                        class=" place-self-start card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="storage/img/Explore/Showcases.png" alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">Articles</span>
                        </div>
                    </a>
                    <a href="/testimonials"
                        class=" place-self-start card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="storage/img/Explore/Testimonials.png" alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">Testimonials</span>
                        </div>
                    </a>
                    <a href="/emagazine"
                        class=" place-self-start card relative w-full  h-[180px] lg:h-[250px] lg:w-[200px] overflow-hidden rounded-lg">
                        <img class=" absolute  h-full w-full" src="storage/img/Explore/E-Magazine.png" alt="">
                        <div class=" flex items-center p-4 bg-white w-full absolute bottom-0">
                            <span
                                class=" text-primarycolor text-md whitespace-nowrap text-center w-full lg:text-xl font-semibold">E-Magazine</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!--End EXPLORE-->



        <div class=" articleHover-modal fixed w-full  hidden p-4 h-full top-0 left-0  z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">

        </div>

        <!---MODAL--->
        @foreach ($showcases as $showcase)
            <div id="modal{{ $showcase->id }}" class="modal modal__bg " role="dialog" aria-hidden="true">

                <div class="modal__dialog   lg:min-w-[748px] lg:p-5 w-full px-4 ">

                    <div class="modal__content p-4 lg:p-10 py-20 overflow-y-auto max-h-[90vh] lg:max-h-[80vh] rounded-lg">
                        <div
                            class="font-bold text-lg lg:text-xl pb-4 overflow-hidden relative flex justify-left space-x-4 items-center ">

                            <h1 class=" border-b "><span class="font-bold"> {{ $showcase->issue }}
                                </span>{{ $showcase->issue_year }}
                            </h1>
                            <a href=""><i class="fa-light fa-link"></i></a>
                        </div>
                        <div>
                            <div class=" relative h-[350px] rounded-lg "
                                style="background-image: url('storage/showcase/{{ $showcase->image_url }}'); background-attachment: fixed; background-size:cover; background-position:center center;">

                                <h1 class=" absolute z-50 bottom-0 p-4  w-full"
                                    style="background-color: rgba(10, 5, 63, 0.5);">
                                    <span class=" font-bold lg:text-xl">{{ $showcase->showcase }}</span>
                                </h1>
                                <div
                                    class=" absolute top-4 right-4 text-xl  drop-shadow-lg flex space-x-4 items-center justify-center">
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                                </div>
                            </div>

                            <div class="mt-8">
                                <p class="  text-light">
                                    {!! $showcase->content !!}...
                                <div class=" flex mt-4">
                                    <a href="" class=" text-secondarycolor underline ">
                                        Read More
                                    </a>
                                </div>
                                </p>

                                <div class="mt-10 flex space-x-2 ">
                                    <div class="  h-full  relative">
                                        <div class="h-20 w-20  overflow-hidden rounded-full">
                                            <img class=" "
                                                src="storage/showcase/contact/{{ $showcase->contact_pic }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class=" flex flex-col space-y-2">
                                        <div class=" flex flex-col pb-1">
                                            <span class=" text-secondarycolor font-bold">{{ $showcase->contact }}</span>
                                            <span class=" text-[12px] text-gray-400">{{ $showcase->title }}</span>
                                        </div>

                                        <div class="border-b pb-2">
                                            <span class="text-[12px]"> {{ $showcase->address }}</span>
                                        </div>

                                        <div class=" mt-4 flex ">

                                            <a class="{{ $showcase->phone ? 'block' : 'hidden' }} pr-4" href="#"
                                                onclick="window.location.href = 'tel:{{ $showcase->phone }}'"><i
                                                    class="fa-light fa-phone"></i></a>


                                            <a class="{{ $showcase->email ? 'block' : 'hidden' }} pr-4" href="#"
                                                onclick="window.location.href = 'mailto:{{ $showcase->email }}'"><i
                                                    class="fa-light fa-envelope"></i></a>
                                            <a class="{{ $showcase->website ? 'block' : 'hidden' }} pr-4" href="#"
                                                onclick="window.open('{{ $showcase->website }}', '_blank')"><i
                                                    class="fa-light fa-globe"></i></a>
                                            <a class="{{ $showcase->url ? 'block' : 'hidden' }} pr-4" href="#"
                                                onclick="window.open('{{ $showcase->url }}', '_blank')"
                                                class=" text[10px] font-bold"><i class="fa-light fa-link"></i>Anyflip</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- modal close button -->
                        <a href="" class="modal__close demo-close">
                            <svg class="" viewBox="0 0 24 24">
                                <path
                                    d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
                                <path d="M0 0h24v24h-24z" fill="none" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach



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
                    style="background-image: url('{{ asset('img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

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
                            <img src="storage/img/magazine/FDI-COVER-WINTER-2023-Cover-1.png" alt="">
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
                                        <a class=" social-media1 px-4" href="">
                                            <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a class=" social-media2 px-4" href="">
                                            <i class="  text-2xl text-white fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-media3 px-4" href="">
                                            <i class="text-2xl text-white  fa-brands fa-instagram"></i>

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

@endsection

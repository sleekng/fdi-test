<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcases</title>

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

<body id="team" class=" relative">
    @include('layouts.socialMedia')


    @include('layouts.navigation')
    <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>

    <div class="grid grid-cols-1  h-full  ">

        <!--Featured-->
        <div class="featured-vegasslider hidden lg:block  w-full relative ">
            <div class="  overflow-hidden  w-full h-full ">

                @php
                    $serialNumber = 1;
                @endphp

                @foreach ($featureds as $featured)
                    <div
                        class="vegas-text{{ $serialNumber }} absolute z-50 bottom-1/3 left-20  hidden  text-white text-left  overflow-hidden">

                        <div class=" flex items-center space-x-4">

                            <div>
                                <h4
                                    class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">
                                    Featured Showcase </h4>
                                <h1 class="pt-8 pb-2 uppercase font-bold text-4xl">{{ $featured->location }}</h1>
                                <p class=" uppercase"> <span class="   font-bold">{{ $featured->showcase }}</span>
                                </p>

                                <div class="pt-8">
                                    <a href=""
                                        class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor"
                                        style="line-height:40px !important;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>


                    </div>
                    @php
                        $serialNumber++;
                    @endphp
                @endforeach

                <div class=" z-40 absolute bottom-4 right-28 h-[20px] items-center flex space-x-4">
                    <div class="px-2 flex items-center justify-center space-x-2">
                        <div id="previousD" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-left"></i>
                        </div>
                        <div id="nextD" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-right"></i>
                        </div>
                    </div>

                    @php
                        $serialNumber = 1;
                    @endphp

                    @foreach ($featureds as $featured)
                        <span
                            class="vegas_slide-icon slide-{{ $serialNumber }}-icon  h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>

                        @php
                            $serialNumber++;
                        @endphp
                    @endforeach



                </div>

            </div>

            <div class=" absolute z-20 left-0 top-0 bg-primarycolor opacity-50 h-full w-full"></div>

            <div class=" absolute z-20  h-full w-full"
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>

        </div>
        <!--End Featured-->


        <!--Mobile-->
        <div id="featured-vegasslider"
            class="showcase-featured-vegasslider-mobile lg:hidden block col-span-7 w-full relative ">
            <div class="  overflow-hidden  w-full h-full ">
                @php
                $serialNumber = 1;
            @endphp

            @foreach ($featureds as $featured)
                <div class="vegas-text{{ $serialNumber }} hidden absolute z-30 bottom-40 flex-col text-white text-left left-4">
                    <h4 class=" opacity-90 text-xl border-b w-[203px] font-bold text-secondarycolor pb">Featured
                        Showcase</h4>
                    <h1 class=" uppercase pt-4 text-2xl lg:text-4xl font-bold">{{ $featured->location }}</h1>
                    <p class=" text-[10px] lg:text-[16px] uppercase">{{ $featured->showcase }}</p>
                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            More</a>
                    </div>
                </div>
       

     

                @php
                    $serialNumber++;
                @endphp
                @endforeach

                <div class=" z-40 absolute bottom-4 right-28 h-[20px] items-center flex space-x-4">
                    <div class="px-2 flex items-center justify-center space-x-2">
                        <div id="previousM" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-left"></i>
                        </div>
                        <div id="nextM" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-right"></i>
                        </div>
                    </div>

                    @php
                        $serialNumber = 1;
                    @endphp

                    @foreach ($featureds as $featured)
                        <span
                            class="vegas_slide-icon slide-{{ $serialNumber }}-icon  h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>

                        @php
                            $serialNumber++;
                        @endphp
                @endforeach



                </div>

            </div>

            <div class=" absolute z-20 bg-primarycolor opacity-50 h-full w-full"></div>



            <div class=" absolute z-20  h-full w-full"
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>


            <!--    <video  class="absolute left-0 h-full object-cover " loop autoplay muted>
                                                    <source src="{{ asset('img/vid/hero2-video.mp4') }}" type="video/mp4">
                                                </video>  -->


        </div>
        <!--End Mobile-->
    </div>


    <main>

        <!--INVESTMENT-->
        <section class="investment bg-primarycolor overflow-hidden py-20  relative flex items-center ">
            <div class=" container px-4 h-full  xl:px-24 mx-auto">
                <div class=" mb-10 lg:text-center w-full flex flex-col space-y-2 justify-center items-center">

                    <div class="section-header pb-4 overflow-hidden relative flex justify-center text-center">
                        <span class=" border-b text-lg "><span class="font-bold">INVESTMENT</span> DESTINATIONS</span>
                    </div>
                    <p class=" lg:w-1/2 text-center w-full">As well as showcasing locations across America, our
                        platform includes
                        articles by
                        FDI and industrial development officials,
                        providing practical advice and International trade information
                    </p>
                </div>
                {{-- 
                <div
                    class="flex space-y-4  mb-4 border-b lg:border-0 lg:space-y-0 lg:flex-row flex-col justify-between lg:px-40">
                    <div>
                        <span class="pl-2  text-secondarycolor">Filter by Type:</span>
                    </div>

                    <div
                        class=" leading-none flex flex-wrap sm:flex-nowrap sm:justify-center lg:space-x-4 lg:justify-normal">
                        <button class=" mx-2 btn btn-default filter-button" data-filter="all">All</button>
                        <button class=" mx-2 btn btn-default filter-button" data-filter="Industry">Industry</button>
                        <button class=" mx-2 btn btn-default filter-button" data-filter="Location">Location</button>
                        <button class=" mx-2 btn btn-default filter-button" data-filter="Advice">Advice</button>
                        <button class=" mx-2 btn btn-default filter-button" data-filter="Events">Events</button>
                    </div>

                </div> --}}

                @if (session('searcherror'))
                    <div class=" text-red-600 flex justify-center my-8">
                        <span> {{ session('searcherror') }}</span>
                    </div>
                @endif

                <div class="  border-gray-600 flex items-center p-4 justify-between my-8">
                    <div class="font-bold text-[12px] uppercase">
                        {{ $currentissue[0]->issue }}
                    </div>
                    <button class=" filterBtn text-secondarycolor"> Filter by Issue <i
                            class="fa-sharp font-bold fa-light fa-bars-filter"></i>
                    </button>
                </div>

                <div class=" grid grid-cols-1 w-full lg:grid-cols-4 gap-4 min-h-[80vh]  xl:24">
                    @foreach ($showcases as $key => $showcase)
                        <div
                            class="filter {{ $showcase->category }}  showcase-card  lg:col-span-1   rounded-lg relative overflow-hidden">
                            <div data-modal="#modal{{ $showcase->id }}"
                                class="modal__trigger flex z-30 overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full  justify-center">
                                <div class=" flex flex-col space-y-1">
                                    <h4 class="font-bold">{{ $showcase->location }}</h4>
                                    <p class="  text-[14px]">{{ $showcase->showcase }}</p>
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

                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                    <i class="fa-sharp fa-light fa-trash"></i>
                                </button>

                            </form>
                        </div>
                    @endforeach

                </div>
                {{-- <div class="lg:px-40 mt-10">
                    <!-- Pagination links -->
                    {{ $showcases->links() }}
                </div> --}}
            </div>
        </section>
        <!--END INVESTMENT-->

        <div class=" articleHover-modal fixed w-full  hidden p-4 h-full top-0 left-0  z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">

        </div>

        <!---MODAL--->
        @foreach ($showcases as $showcase)
            <div id="modal{{ $showcase->id }}" class="modal modal__bg " role="dialog" aria-hidden="true">

                <div
                        class="font-bold text-lg p-4 bg-white lg:text-xl pb-4 overflow-hidden fixed w-full top-0 left-0  z-50 flex justify-left items-center ">
                    <h1 class=" border-b text-[16px]"><span class="font-bold pr-1"> {{ $showcase->issue }}
                        </span>{{ $showcase->issue_year }}
                    </h1>

                     <!-- modal close button -->
                     <span href="" class="modal__close demo-close">
                        <svg class="" viewBox="0 0 24 24">
                            <path
                                d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
                            <path d="M0 0h24v24h-24z" fill="none" />
                        </svg>
                    </span>

                </div>
                <div class="modal__dialog   lg:min-w-[748px] lg:p-5  p-4">

                    <div class="modal__content relative mt-20 md:mt-0  overflow-y-auto max-h-[90vh] lg:max-h-[80vh] rounded-lg">
                        <div class=" relative lg:h-[350px] overflow-hidden">
                            <img class="w-full" src="storage/showcase/{{ $showcase->image_url }}" alt="">
                            <div
                                class=" absolute top-0  p-4 text-xl  drop-shadow-lg flex w-full space-x-4 items-center justify-between">

                                <a href="http://{{ $showcase->url }}" target="_blank"
                                    class="text-white flex-center {{ $showcase->url ? 'block' : 'hidden' }}  items-center flex">
                                    <i class="fa-light fa-link"></i>
                                    <span class="text-[12px] font-bold">Anyflip</span>
                                </a>
                                <div
                                    class=" bg-primarycolor text-white rounded-md p-1 px-2 text-xl  drop-shadow-lg flex space-x-4 items-center justify-center">
                                    <a href="https://www.linkedin.com/company/fdi-alliance-international"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.facebook.com/fdiallianceinternational"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i
                                            class="fa-brands fa-instagram"></i></a>

                                </div>

                            </div>
                        </div>
                        <div class="py-4">
                            <h1 class=" p-4 border-gray-300   w-full border-t border-b   uppercase">
                                <span
                                    class="text-primarycolor font-bold lg:text-2xl text-xl">{{ $showcase->showcase }}</span>
                                <div class="  text-gray-400 ">
                                    {{ $showcase->location }}
                                </div>
                            </h1>
                        </div>
                        <div class="px-4">

                            <div>
                                <p class="  text-light">
                                    {!! $showcase->content !!}...
                                <div class=" flex mt-4">
                                    <a href="http://{{ $showcase->url }}" target="_blank" class=" text-secondarycolor underline ">
                                        Read More
                                    </a>
                                </div>
                                </p>
                            </div>

                           


                            <div class="grid lg:grid-cols-12 p-4 pb-10 lg:p-10 grid-col-1 contact-detail">

                                <div class="mt-4 flex space-x-2 col-span-8 ">
                                    <div class="  h-full  relative">
                                        <div class="h-20 w-20  overflow-hidden rounded-full flex justify-center items-center"
                                            style="background-image:url('storage/showcase/contact/{{ $showcase->contact_pic }}');
                                                    background-size:cover; background-position-x:center;
                                                    ">

                                        </div>
                                    </div>
                                    <div class=" flex flex-col space-y-2">
                                        <div class=" flex flex-col pb-1">
                                            <span
                                                class=" text-secondarycolor font-bold">{{ $showcase->contact }}</span>
                                            <span class=" text-[12px] text-gray-400">{{ $showcase->title }}</span>
                                        </div>

                                        <div class="border-b pb-2">
                                            <span class="text-[12px]"> {{ $showcase->address }}</span>
                                        </div>

                                        <div class=" mt-4 flex ">

                                            <a class="{{ $showcase->phone ? 'block' : 'hidden' }} pr-4"
                                                href="tel:{{ $showcase->phone }}"><i class="fa-light fa-phone"></i>
                                            </a>


                                            <a class="{{ $showcase->email ? 'block' : 'hidden' }} pr-4"
                                                href="mailto:{{ $showcase->email }}"><i
                                                    class="fa-light fa-envelope"></i></a>
                                            <a class="{{ $showcase->website ? 'block' : 'hidden' }} pr-4"
                                                href="http://{{ $showcase->website }}" target="_blank"><i
                                                    class="fa-light fa-globe"></i></a>
                                            <a id="redirectToUrl" class="{{ $showcase->url ? 'block' : 'hidden' }} pr-4"
                                                href="http://{{ $showcase->url }}" target="_blank"
                                                class=" text[10px] font-bold"><i
                                                    class="fa-light fa-link"></i>Anyflip</a>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            </div>
        @endforeach



        <!--FOOTER-->
        @include('layouts.footer')
        <!--End FOOTER-->



        {{-- Flash Messages --}}


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



        <div class=" filterIssue fixed w-full   items-center justify-center p-4 h-full top-0 left-0 z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">


            <div class="newsletter  lg:w-1/2 w-full overflow-hidden rounded-md bg-primarycolor  relative"
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                <button class=" absolute z-50 top-4 right-4 text-white text-xl closefilter"><i
                        class="fa-sharp fa-light fa-xmark"></i></button>

                <div class=" grid grid-cols-1">

                    <form action="{{ route('showcase.filterByIssue') }}" method="POST"
                        class=" flex items-center space-x-4  p-8 justify-center text-center flex-col lg:flex-row space-y-2">
                        @csrf

                        <div class="text-white">
                            <select name="issue_id" id="" class=" rounded-md p-2 w-full"
                                style="background: rgba(201, 201, 201, 0.123)">
                                <option value="All" class=" text-white">All</option>
                                @foreach ($issues as $issue)
                                    <option class="text-primarycolor " value='{{ $issue->id }}'>
                                        {{ $issue->issue }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-white">
                            <input id="year" class="rounded-md p-1 outline-none ring-0 hover:ring-0 w-full "
                                min="1900" max="{{ date('Y') }}" type="number" name="year"
                                value="{{ date('Y') }}" autofocus autocomplete="year"
                                style="background: rgba(201, 201, 201, 0.123)">
                        </div>

                        <button type="submit" class="px-8  text-secondarycolor">Search</button>

                    </form>
                </div>

            </div>
        </div>
    </main>



    <script>
        var featureds = @json($featureds);
        console.log(featureds);
    </script>
   
   

    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/showcases.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 3000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations

        });
    </script>
    <script>
        $filterIssue = $('.filterIssue');
        $filterBtn = $('.filterBtn');
        $closefilter = $('.closefilter');


        $filterBtn.click(function() {
            $filterIssue.addClass('active')
            console.log($filterIssue);
        })
        $closefilter.click(function() {
            $filterIssue.removeClass('active')

        })




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

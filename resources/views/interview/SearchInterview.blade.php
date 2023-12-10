<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-light.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-solid.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/vegas/vegas.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700;800&display=swap"
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
                <div class="vegas-text1 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">

                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40" src="{{ asset('/img/clients-bg/article/Fleming-img.jpg') }}"
                                alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4
                                class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">RICHARD C.D. FLEMING</h1>
                            <p class=" uppercase"> <span class=" font-bold">Article:</span> 4TH INDUSTRIAL REVOLUTION
                            </p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            Article</a>
                    </div>
                </div>
                <div class="vegas-text2 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">

                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40" src="{{ asset('/img/clients-bg/article/nast-img.jpg') }}"
                                alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4
                                class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">DAVID B. NAST</h1>
                            <p class=" uppercase"> <span class=" font-bold">Article:</span> OPTIMIZING TALENT IN
                                THRIVING INDUSTRIES</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            Article</a>
                    </div>
                </div>
                <div class="vegas-text3 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">

                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40" src="{{ asset('/img/clients-bg/article/shirar-img.jpg') }}"
                                alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4
                                class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">SHIRAR O’CONNOR</h1>
                            <p class=" uppercase"> <span class=" font-bold">Article:</span> LOOK TO THE CHALLENGES AND
                                YOU WILL FIND THE OPPORTUNITIES</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            Article</a>
                    </div>
                </div>
                <div class="vegas-text4 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">

                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40"
                                src="{{ asset('/img/clients-bg/article/Bernadette-img.jpg') }}" alt=""
                                style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4
                                class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">BERNADETTE FERNANDES</h1>
                            <p class=" uppercase"> <span class=" font-bold">Article:</span> INDUSTRIES THRIVE FROM GRAND
                                CHALLENGES</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            Article</a>
                    </div>
                </div>


                <div class=" z-40 absolute bottom-4 right-28 h-[20px] items-center flex space-x-4">
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

            <div class=" absolute z-30 left-0 top-0 bg-primarycolor opacity-50 h-full w-full"></div>

            <div class=" absolute z-30  h-full w-full"
                style="background-image: url('{{ asset('/img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>


            <!--    <video  class="absolute left-0 h-full object-cover " loop autoplay muted>
                                                    <source src="{{ asset('img/vid/hero2-video.mp4') }}" type="video/mp4">
                                                </video>  -->


        </div>
        <!--End Featured-->



        <!--Mobile-->
        <div id="featured-vegasslider"
            class="article-featured-vegasslider-mobile lg:hidden block col-span-7 w-full relative mt-16 ">

            <div class="  overflow-hidden  w-full h-full ">
                <div class="vegas-text1   hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">


                    <div class=" flex flex-col ">
                        <div>
                            {{--   <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/Fleming-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-xl">RICHARD C.D. FLEMING</h1>
                            <p class=" uppercase text-[12px]"> <span>Article:</span> 4TH INDUSTRIAL REVOLUTION</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            Article</a>
                    </div>
                </div>
                <div class="vegas-text2 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <div class=" flex flex-col ">
                        <div>
                            {{-- <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/nast-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">DAVID B. NAST</h1>
                            <p class=" uppercase text-[12px]"> <span class=" font-bold">Article:</span> OPTIMIZING
                                TALENT IN THRIVING INDUSTRIES</p>
                        </div>
                    </div>
                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            Article</a>
                    </div>
                </div>

                <div class="vegas-text3 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <div class=" flex flex-col ">
                        <div class="">
                            {{--     <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/shirar-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div class="">
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-xl">SHIRAR O’CONNOR</h1>
                            <p class=" uppercase text-[12px] pr-4"> <span class=" font-bold">Article:</span> LOOK TO
                                THE CHALLENGES AND YOU WILL FIND THE OPPORTUNITIES</p>
                        </div>
                    </div>
                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            Article</a>
                    </div>
                </div>

                <div class="vegas-text4 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <div class=" flex flex-col ">
                        <div>
                            {{--    <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/Bernadette-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">
                                Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-xl">BERNADETTE FERNANDES</h1>
                            <p class=" uppercase text-[12px]"> <span class=" font-bold">Article:</span> INDUSTRIES
                                THRIVE FROM GRAND CHALLENGES</p>
                        </div>
                    </div>
                    <div class="pt-10">
                        <a href=""
                            class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                            More</a>
                    </div>
                </div>

                <div class=" z-30 absolute bottom-4 right-4 h-[20px] items-center flex space-x-4">
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

            <div class=" absolute z-10 bg-primarycolor opacity-80 h-full w-full"></div>



            <div class=" absolute z-20  h-full w-full"
                style="background-image: url('{{ asset('/img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>


            <!--    <video  class="absolute left-0 h-full object-cover " loop autoplay muted>
                                                    <source src="{{ asset('img/vid/hero2-video.mp4') }}" type="video/mp4">
                                                </video>  -->


        </div>
        <!--End Mobile-->
    </div>


    <main>

        <!--Articles-->
        <section class="article bg-primarycolor overflow-hidden py-20 w-full relative flex  ">
            <div class=" container px-4 h-full  xl:px-24 mx-auto">

                <div class=" mb-10 text-center w-full flex flex-col space-y-2 justify-center items-center">

                    <div class="section-header pb-4 overflow-hidden relative flex justify-center text-center">
                        <h1 class=" border-b "><span class="font-bold"> EXPERT </span>CONTRIBUTORS ARTICLES</h1>
                    </div>

                </div>

                @if (session('delete-success'))
                    <div class=" text-green-600 flex justify-center my-8">
                        <span> {{ session('success') }}</span>
                    </div>
                @endif

                @if (session('searcherror'))
                    <div class=" text-red-600 flex justify-center my-8">
                        <span> {{ session('searcherror') }}</span>
                    </div>
                @endif

                <div class=" lg:px-40 flex justify-between my-8">
                    <span>

                        {{ $issue->issue }} {{ $articles[0]->issue_year }}

                    </span>
                    <a href="{{ route('articles') }}" class=" flex items-center justify-center space-x-2"><i
                            class="fa-sharp fa-light fa-arrow-left"></i> <span>Back</span></a>
                </div>
                <div class="  grid grid-cols-1 lg:grid-cols-2 lg:px-40 gap-2 lg:gap-10 w-full">
                    @foreach ($articles as $article)
                        <div class=" {{ Auth::user() ? '' : 'hidden' }}  flex space-x-4">
                            <a href="{{ route('article.edit', $article->id) }}" type="submit"
                                class="bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                            </a>

                            <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                    <i class="fa-sharp fa-light fa-trash"></i>
                                </button>

                            </form>
                        </div>
                        <div data-aos="fade-up" data-modal="#modal{{ $article->id }}"
                            class="modal__trigger relative article-detail hover:text-white gap-2 lg:gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md "
                            style="filter: drop-shadow(5px 5px 10px #000);">
                            <div class="col-span-1 overflow-hidden">

                                <img class="  w-full rounded-md " src="/storage/article/{{ $article->image_url }}"
                                    alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                            </div>
                            <a href class="flex justify-center flex-col col-span-2 w-full">
                                <span
                                    class="text-white font-bold  text-[16px] xl:text-lg leading-6">{{ $article->article }}
                                </span>
                                <hr />
                                <div class=" flex flex-col space-y-1">
                                    <h4 class=" mt-2 text-secondarycolor uppercase font-bold">{{ $article->author }}
                                    </h4>
                                    <h3 class="lg:text-[12px] text-[10px] leading-4">{{ $article->title }} <br>

                                </div>




                            </a>

                            <div class=" absolute bottom-1  lg:bottom-4 right-4">
                                <span class=" text-gray-400" style="font-size: 10px">{{ $article->issue }}
                                    {{ $article->issue_year }}</span>
                            </div>
                        </div>
                    @endforeach


                </div>


            </div>


        </section>
        <!--END Articles-->

        <div class=" articleHover-modal fixed w-full  hidden p-4 h-full top-0 left-0  z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">

        </div>

        <!---MODAL--->
        @foreach ($articles as $article)
            <div id="modal{{ $article->id }}" class="modal modal__bg " role="dialog" aria-hidden="true">

                <div class="modal__dialog   lg:min-w-[748px] lg:p-5  p-4">

                    <div class="modal__content relative   overflow-y-auto max-h-[90vh] lg:max-h-[80vh] rounded-lg">
                        <div
                            class="font-bold text-lg p-4 lg:px-10 lg:text-xl pb-4 overflow-hidden relative flex justify-left space-x-4 items-center ">

                            <h1 class=" border-b  uppercase"><span class="font-bold"> {{ $article->issue }}
                                </span>{{ $article->issue_year }}
                            </h1>

                        </div>
                        <div class="p-4  ">
                            <div class=" relative h-[350px] rounded-lg text-white"
                                style="background-image: url('storage/article/picture/{{ $article->picture }} '); background-attachment: fixed; background-size:cover; background-position:center center;">

                                <h1 class=" absolute z-50 bottom-0 p-4  w-full"
                                    style="background-color: rgb(10, 5, 63);">
                                    <span class=" font-bold lg:text-xl">{{ $article->article }}</span>
                                </h1>
                                <div
                                    class=" absolute top-4 right-4 text-xl  drop-shadow-lg flex space-x-4 items-center justify-center">
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                                    <a href=""><i class="fa-light fa-link"></i></a>
                                </div>
                            </div>

                            <div class="mt-8">
                                <p class="  text-light">
                                    {!! $article->content !!}...
                                <div class=" flex mt-4">
                                    <a href="" class=" text-secondarycolor underline ">
                                        Read More
                                    </a>
                                </div>
                                </p>


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


                        <div class="grid lg:grid-cols-12 p-4 pb-10 lg:p-10 grid-col-1 contact-detail">

                            <div class="mt-4 flex space-x-2 col-span-8 ">
                                <div class="  h-full  relative">
                                    <div class="h-20 w-20  overflow-hidden rounded-full">
                                        <img class=" " src="storage/article/{{ $article->image_url }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class=" flex flex-col space-y-2">
                                    <div class=" flex flex-col pb-1">
                                        <span class=" text-secondarycolor font-bold">{{ $article->author }}</span>
                                        <span class=" text-[12px] text-gray-400">{{ $article->title }}</span>
                                    </div>

                                    <div class="border-b pb-2">
                                        <span class="text-[12px]"> {{ $article->address }}</span>
                                    </div>

                                    <div class=" mt-4 flex ">

                                        <a class="{{ $article->phone ? 'block' : 'hidden' }} pr-4" href="#"
                                            onclick="window.location.href = 'tel:{{ $article->phone }}'"><i
                                                class="fa-light fa-phone"></i></a>


                                        <a class="{{ $article->email ? 'block' : 'hidden' }} pr-4" href="#"
                                            onclick="window.location.href = 'mailto:{{ $article->email }}'"><i
                                                class="fa-light fa-envelope"></i></a>
                                        <a class="{{ $article->website ? 'block' : 'hidden' }} pr-4" href="#"
                                            onclick="window.open('{{ $article->website }}', '_blank')"><i
                                                class="fa-light fa-globe"></i></a>
                                        <a class="{{ $article->url ? 'block' : 'hidden' }} pr-4" href="#"
                                            onclick="window.open('{{ $article->url }}', '_blank')"
                                            class=" text[10px] font-bold"><i class="fa-light fa-link"></i>Anyflip</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        </div>

        <!--FOOTER-->
        @include('layouts.footerSearch')
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
            <button class=" fixed z-50 top-10 right-10 text-white text-4xl closefilter"><i
                    class="fa-sharp fa-light fa-xmark"></i></button>

            <div class="newsletter  lg:w-1/2 w-full overflow-hidden rounded-md bg-primarycolor  relative"
                style="background-image: url('{{ asset('img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                <div class=" grid grid-cols-1">

                    <form action="{{ route('article.filterByIssue') }}" method="POST"
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



    <script src="{{ asset('/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('/js/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('/js/articles.js') }}"></script>
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

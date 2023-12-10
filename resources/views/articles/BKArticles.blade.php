<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/sharp-light.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/sharp-regular.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/sharp-solid.css')}}">
    <link rel="stylesheet" href="{{asset('js/vegas/vegas.min.css')}}">
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
        <div  class="featured-vegasslider hidden lg:block  w-full relative ">
            <div class="  overflow-hidden  w-full h-full ">
                <div
                    class="vegas-text1 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40" src="{{asset('img/clients-bg/article/Fleming-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">RICHARD C.D. FLEMING</h1>
                             <p class=" uppercase"> <span class=" font-bold">Article:</span> 4TH INDUSTRIAL REVOLUTION</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read Article</a>
                    </div>
                </div>
                <div
                    class="vegas-text2 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40" src="{{asset('img/clients-bg/article/nast-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">DAVID B. NAST</h1>
                             <p class=" uppercase"> <span class=" font-bold">Article:</span> OPTIMIZING TALENT IN THRIVING INDUSTRIES</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read Article</a>
                    </div>
                </div>
                <div
                    class="vegas-text3 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40" src="{{asset('img/clients-bg/article/shirar-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">SHIRAR O’CONNOR</h1>
                             <p class=" uppercase"> <span class=" font-bold">Article:</span> LOOK TO THE CHALLENGES AND YOU WILL FIND THE OPPORTUNITIES</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read Article</a>
                    </div>
                </div>
                <div
                    class="vegas-text4 hidden absolute z-50 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <div class=" flex items-end space-x-4">
                        <div>
                            <img class=" rounded-md w-40" src="{{asset('img/clients-bg/article/Bernadette-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">BERNADETTE FERNANDES</h1>
                             <p class=" uppercase"> <span class=" font-bold">Article:</span> INDUSTRIES THRIVE FROM GRAND CHALLENGES</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read Article</a>
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
                style="background-image: url('{{asset('img/pattern.png')}}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>


            <!--    <video  class="absolute left-0 h-full object-cover " loop autoplay muted>
                                                    <source src="{{asset('img/vid/hero2-video.mp4')}}" type="video/mp4">    
                                                </video>  -->


        </div><!--End Featured-->



        <!--Mobile-->
        <div id="featured-vegasslider" class="article-featured-vegasslider-mobile lg:hidden block col-span-7 w-full relative mt-16 ">
           
            <div class="  overflow-hidden  w-full h-full ">
                <div
                    class="vegas-text1   hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    
                    
                    <div class=" flex flex-col ">
                        <div>
                          {{--   <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/Fleming-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-xl">RICHARD C.D. FLEMING</h1>
                             <p class=" uppercase text-[12px]"> <span>Article:</span > 4TH INDUSTRIAL REVOLUTION</p>
                        </div>
                    </div>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read Article</a>
                    </div>
                </div>
                <div
                    class="vegas-text2 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <div class=" flex flex-col ">
                        <div>
                            {{-- <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/nast-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-2xl">DAVID B. NAST</h1>
                             <p class=" uppercase text-[12px]"> <span class=" font-bold">Article:</span> OPTIMIZING TALENT IN THRIVING INDUSTRIES</p>
                        </div>
                    </div>
                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read Article</a>
                    </div>
                </div>

                <div
                    class="vegas-text3 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <div class=" flex flex-col ">
                        <div class="">
                        {{--     <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/shirar-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div class="">
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-xl">SHIRAR O’CONNOR</h1>
                             <p class=" uppercase text-[12px] pr-4"> <span class=" font-bold">Article:</span> LOOK TO THE CHALLENGES AND YOU WILL FIND THE OPPORTUNITIES</p>
                        </div>
                    </div>
                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read Article</a>
                    </div>
                </div>

                <div
                    class="vegas-text4 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <div class=" flex flex-col ">
                        <div>
                         {{--    <img class=" rounded-md w-28" src="{{asset('img/clients-bg/article/Bernadette-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);"> --}}
                        </div>
                        <div>
                            <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">Featured Contributors </h4>
                            <h1 class="pt-4 uppercase font-bold text-xl">BERNADETTE FERNANDES</h1>
                             <p class=" uppercase text-[12px]"> <span class=" font-bold">Article:</span> INDUSTRIES THRIVE FROM GRAND CHALLENGES</p>
                        </div>
                    </div>
                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
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
                style="background-image: url('{{asset('img/pattern.png')}}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>


            <!--    <video  class="absolute left-0 h-full object-cover " loop autoplay muted>
                                                    <source src="{{asset('img/vid/hero2-video.mp4')}}" type="video/mp4">    
                                                </video>  -->


        </div><!--End Mobile-->
    </div>


    <main>

        <!--Articles-->
        <section class="article bg-primarycolor overflow-hidden py-20 w-full relative flex  ">
            <div class=" container px-4 h-full  xl:px-24 mx-auto">

                <div class=" mb-10 text-center w-full flex flex-col space-y-2 justify-center items-center">

                    <div class="section-header pb-4 overflow-hidden relative flex justify-center text-center">
                        <h1 class=" border-b "><span class="font-bold"> EXPERT </span>CONTRIBUTORS</h1>
                    </div>
                  
                </div>

                <div class="  grid grid-cols-1 lg:grid-cols-2 lg:px-40 gap-2 lg:gap-10 w-full">
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-2 lg:gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/Alia.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold  text-[16px] xl:text-lg leading-6">GROWING AVIATION INDUSTRY </span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">ALIA ABBAS</h4>
                            <h3 class="lg:text-[12px] text-[10px] ">ECONOMIC DEVELOPMENT OFFICER, CITY OF TORONTO - ECONOMIC DEVELOPMENT & CULTURE BUSINESS RETENTION AND EXPANSION UNIT</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full  rounded-md " src="{{asset('img/clients-bg/article/Brad.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">TURNING OUR BLUEGRASS GREEN </span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">BRAD THOMAS</h4>
                            <h3 class="lg:text-[12px] text-[10px] ">ECONOMIC DEVELOPMENT
                                KENTUCKY’S TOUCHSTONE ENERGY COOPERATIVES</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/ronnie.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">A FUTURE FORWARD VIEW INTO THE GLOBAL
                                MARKETPLACE OF OPPORTUNITIES</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">RONNIE L. BRYANT
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] ">PRINCIPAL | RONNIE L BRYANT, LLC</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/elliot.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">STB APPROVES MERGER BETWEEN CP AND KCS:
                                WILL THIS BE GOOD FOR BUSINESS IN THE US?</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">DANIEL ELLIOTT
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] ">PRINCIPAL | GKG LAW, P.C.</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/ERRAN.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">AGTECH: THE FUTURE OF FARMING</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">ERRAN F. PERSLEY
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] ">PRESIDENT/MANAGING PARTNER
                                EUPHRATES INTERNATIONAL INVESTMENT
                                COMPANY.</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/FINGAR.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">FDI INDUSTRIES OF THE FUTURE</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">COURTNEY FINGAR
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] ">FOUNDER & PRINCIPAL, FINGAR DIRECT INVESTMENT</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/Bernadette-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">INDUSTRIES THRIVE FROM GRAND CHALLENGES</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">BERNADETTE FERNANDES
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] ">CEO OF THE VARANDA NETWORK
                                INNOVATION UNIT PRINCIPAL AT THE
                                UNIVERSITY OF NEW BRUNSWICK</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/Sagar.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">OUTRUNNING THE BEAR</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">BOB SAGER
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] ">FOUNDER, SPEARPOINT
                                SOLUTIONS, LLC</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 w-full flex justify-center overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/Fleming-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">4TH INDUSTRIAL REVOLUTION</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">RICHARD C.D. FLEMING
                              
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] ">  CEO, Community Development Ventures, Inc.
                                CORTEX Innovation Community
                                CIC@4220 Duncan Avenue</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/webster.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">FUTURE OUTLOOK OF INDUSTRY SECTORS TO THRIVE IN 2023 AND BEYOND</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">C. PAIGE WEBSTER, CECD
                              
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] "> PRESIDENT, WEBSTER GLOBAL SITE SELECTORS</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/Ruth.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">TECHNOLOGY AND INNOVATION ANCHOR FLORIDA’S THRIVING INDUSTRIES</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">RUTH A. BUCHANAN, MBA, CEcD
                              
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] "> Vice President, GrowFL</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/TAKEFMAN.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">EXPLORING THRIVING INDUSTRIES SET TO ATTRACT FOREIGN
                                DIRECT INVESTMENT IN 2023</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">BRUCE TAKEFMAN
                              
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] "> President & Founder at ResearchFDI</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/nast-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-lg leading-6">OPTIMIZING TALENT IN THRIVING INDUSTRIES</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">DAVID B. NAST
                                
                              
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] "> MANAGING PARTNER</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/shirar-img.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-md leading-4">FDI ACTIVITITY IN 2023
                                LOOK TO THE CHALLENGES AND YOU WILL FIND THE OPPORTUNITIES</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">SHIRAR O’CONNOR
                                
                              
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] "> Vice President of Marketing, AdvanceCT</h3>
                        </div>
                    </a>
                    <a data-aos="fade-up" href="" class=" article-detail hover:text-white gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md " style="filter: drop-shadow(5px 5px 10px #000);">
                        <div class="col-span-1 overflow-hidden">
                            <img class="  w-full rounded-md " src="{{asset('img/clients-bg/article/Quin.jpg')}}" alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                        </div>
                        <div class="flex justify-center flex-col col-span-2 w-full">
                            <span class="text-white font-bold   text-md leading-4">UNLOCKING SUCCESS
                                HOW SMALL COMPANIES CAN SUCCEED IN THREE GROWING SECTORS OF 2023</span>
                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">“SUPER” DAVE QUINN, CECD
                                
                              
                                </h4>
                            <h3 class="lg:text-[12px] text-[10px] "> MANAGING PARTNER, DAY ONE EXPERTS</h3>
                        </div>
                    </a>
   
                </div>
            </div>
        </section><!--END Articles-->
        
        <!--FOOTER-->
        @include('layouts.footer') <!--End FOOTER-->
        
   

        {{-- Flash Messages --}}


        @if(session('success'))
              <div class="wrap  fixed w-full flex  items-center justify-center p-4 h-full top-0 left-0 z-50" style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">
            <button  class=" fixed z-50 top-10 right-10 text-white text-4xl closeNewsLetter"><i class="fa-sharp fa-light fa-xmark"></i></button>

                            
                <div class="newsletter  lg:w-[600px] w-full overflow-hidden rounded-md bg-primarycolor  relative" style="background-image: url('{{asset('img/pattern.png')}}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                  
                    <div class=" grid xl:grid-cols-2 grid-cols-1">
                        <div class=" flex items-center space-y-10 flex-col justify-center text-center p-4 text-white " >
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
            <div class="wrap  fixed w-full flex  items-center justify-center p-4 h-full top-0 left-0 z-50" style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">
                <button  class=" fixed z-50 top-10 right-10 text-white text-4xl closeNewsLetter"><i class="fa-sharp fa-light fa-xmark"></i></button>

                                
                    <div class="newsletter  lg:w-[600px] w-full overflow-hidden rounded-md bg-primarycolor  relative" style="background-image: url('{{asset('img/pattern.png')}}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    
                        <div class=" grid grid-cols-1">
                            <div class=" flex items-center space-y-10 flex-col justify-center text-center p-4 text-white " >
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



    <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('js/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('js/fontawesome.min.js')}}"></script>
    <script src="{{asset('js/articles.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            duration: 3000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations

        });
    </script>
<script >
    $modal =  $('.subscription-modal');
    $MediaModal =  $('.mediakit-modal');
   
    $subscribeBtn=  $('.subscribe-btn');
    $mediakitBtn=  $('.mediakit-btn');
    $closeModal=  $('.close-modal');
    $wrap =  $('.wrap');
    
    $subscribeBtn.click(function(){
        $modal.toggleClass('active');
    })

    $mediakitBtn.click(function(){
        $MediaModal.toggleClass('active');
    })
    
    $closeModal.click(function(){
        
        $modal.removeClass('active');
        $MediaModal.removeClass('active');
    })
    $closeNewsLetter =  $('.closeNewsLetter');
    $closeNewsLetter.click(function(){
        $wrap.addClass('closeNewsletter-active')
        
    })
    
    </script>




</body>

</html>
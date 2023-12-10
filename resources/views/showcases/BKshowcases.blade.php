<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcases</title>
  
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

        @vite('resources/css/app.css')
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
                    class="vegas-text1 hidden absolute z-30 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <h4 class=" opacity-90 text-xl border-b whitespace-nowrap w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class="pt-4 uppercase font-bold text-6xl">TOMBALL, TEXAS</h1>
                    <p class=" uppercase">WORKING TOGETHER AND OPEN FOR BUSINESS IN TOMBALL, TEXAS</p>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
                    </div>
                </div>
                <div
                    class="vegas-text2 hidden absolute z-30 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <h4 class=" opacity-90 text-xl border-b whitespace-nowrap w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class="pt-4 uppercase font-bold text-6xl">Maple Ridge</h1>
                    <p class=" uppercase">Make it here</p>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
                    </div>
                </div>
                <div
                    class="vegas-text3 hidden absolute z-30 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <h4 class=" opacity-90 text-xl border-b whitespace-nowrap w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class="pt-4 uppercase font-bold text-6xl">City of Dickinson</h1>
                    <p class=" uppercase">Right Place Right Now</p>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
                    </div>
                </div>
                <div
                    class="vegas-text4 hidden absolute z-30 bottom-1/3  flex-col text-white text-left left-20">
                    
                    <h4 class=" opacity-90 text-xl border-b whitespace-nowrap w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class="pt-4 uppercase font-bold text-6xl">Huntington County</h1>
                    <p class=" uppercase">175 Years and still growing stronger</p>

                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
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

            <div class=" absolute z-20 left-0 top-0 bg-primarycolor opacity-50 h-full w-full"></div>

            <div class=" absolute z-30  h-full w-full"
                style="background-image: url('/assets/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>


            <!--    <video  class="absolute left-0 h-full object-cover " loop autoplay muted>
                                                    <source src="{{asset('img/vid/hero2-video.mp4')}}" type="video/mp4">    
                                                </video>  -->


        </div><!--End Featured-->



        <!--Mobile-->
        <div id="featured-vegasslider" class="showcase-featured-vegasslider-mobile lg:hidden block col-span-7 w-full relative ">
           
            <div class="  overflow-hidden  w-full h-full ">
                <div
                    class="vegas-text1 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <h4 class=" opacity-90 text-xl border-b w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class=" uppercase pt-4 text-2xl lg:text-4xl font-bold">TOMBALL, TEXAS</h1>
                    <p class=" text-[10px] lg:text-[16px] uppercase">WORKING TOGETHER AND OPEN FOR BUSINESS IN TOMBALL, TEXAS</p>
                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
                    </div>
                </div>
                <div
                    class="vegas-text2 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <h4 class=" opacity-90 text-xl border-b lg:w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class="uppercase pt-4 text-2xl lg:text-4xl font-bold">Myrtle Beach</h1>
                    <p class=" uppercase text-[10px] lg:text-[16px]">More than just a vacation destination</p>
                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
                    </div>
                </div>

                <div
                    class="vegas-text3 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <h4 class=" opacity-90 text-xl border-b w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class="pt-4 uppercase text-2xl lg:text-4xl font-bold">Sierra Vista Arizona
                    </h1>
                    <div class="pt-10">
                        <a href="" class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read More</a>
                    </div>
                </div>

                <div
                    class="vegas-text4 hidden absolute z-30 bottom-20 flex-col text-white text-left left-4">
                    <h4 class=" opacity-90 pt-4 text-xl border-b w-[203px] font-bold text-secondarycolor pb">Featured Showcase</h4>
                    <h1 class="pt-4 uppercase text-2xl lg:text-4xl font-bold">Huntington County</h1>
                    <p class=" uppercase text-[10px] lg:text-[16px]">175 Years and still growing stronger</p>
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

            <div class=" absolute z-20 bg-primarycolor opacity-50 h-full w-full"></div>



            <div class=" absolute z-20  h-full w-full"
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>


            <!--    <video  class="absolute left-0 h-full object-cover " loop autoplay muted>
                                                    <source src="{{asset('img/vid/hero2-video.mp4')}}" type="video/mp4">    
                                                </video>  -->


        </div><!--End Mobile-->
    </div>


    <main>

        <!--INVESTMENT-->
        <section class="investment bg-primarycolor overflow-hidden py-20  relative flex items-center ">
            <div class=" container px-4 h-full  xl:px-24 mx-auto">
                <div class=" mb-10 lg:text-center w-full flex flex-col space-y-2 justify-center items-center">

                    <div class="section-header pb-4 overflow-hidden relative flex justify-center lg:text-center">
                        <span class=" border-b text-lg "><span class="font-bold">INVESTMENT</span> DESTINATIONS</span>
                    </div>
                    <p class=" lg:w-1/2 w-full">As well as showcasing locations across America, our platform includes articles by
                        FDI and industrial development officials,
                        providing practical advice and International trade information
                    </p>
                </div>

                <div class="flex space-y-4  mb-4 border-b lg:border-0 lg:space-y-0 lg:flex-row flex-col justify-between lg:px-40">
                    <div>
                        <span class="pl-2  text-secondarycolor">Filter by Type:</span>
                    </div>
                    
                        <div class=" leading-none flex flex-wrap sm:flex-nowrap sm:justify-center lg:space-x-4 lg:justify-normal" >
                            <button class=" mx-2 btn btn-default filter-button" data-filter="all">All</button>
                            <button class=" mx-2 btn btn-default filter-button" data-filter="Industry">Industry</button>
                            <button class=" mx-2 btn btn-default filter-button" data-filter="Location">Location</button>
                            <button class=" mx-2 btn btn-default filter-button" data-filter="Advice">Advice</button>
                            <button class=" mx-2 btn btn-default filter-button" data-filter="Events">Events</button>
                        </div>
                    
                </div>

                <div class=" grid grid-cols-1 w-full lg:grid-cols-4 gap-4 min-h-[80vh]  lg:px-40">
                    <div  class="filter Industry  showcase-card  lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex z-30 overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full  justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">HUNTINGTON COUNTY</h4>
                                <p class="  text-[12px]">Are they ever Coming Back? <br> Where is the workforce?</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover w-full h-full z-20 absolute"
                            src="{{asset('img/investments/2022-Teijin-August-24-2022-scaled.jpg')}}" alt="">
                    </div>
                    <div  class="filter Location showcase-card lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full z-30 justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">Myrtle Beach</h4>
                                <p class="  text-[12px]"> More Than Just A Vacation Destination</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover h-full w-full absolute" src="{{asset('img/clients-bg/beach.jpg')}}" alt="">
                    </div>
                    <div  class="filter Advice showcase-card lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full z-30 justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">ERIE, PENNSYLVANIA</h4>
                                <p class="  text-[12px]">A Wealth Of Water. Why Erie's A Natural Choice</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover h-full w-full absolute"
                            src="{{asset('img/investments/freeport_cover-2.jpg')}}" alt="">
                    </div>
                    <div  class="filter Events  showcase-card lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full z-30 justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">CONNECTICUT</h4>
                                <p class="  text-[12px]">FDI Alliance International Speaks to GOVERNOR NED LAMONT</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover h-full w-full absolute"
                            src="{{asset('img/investments/OCTOBER-ISSUE-2022-CONNECTICUT-INTERVIEW-2.jpg')}}" alt="">
                    </div>
                    <div  class="filter Location showcase-card lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full z-30 justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">MOKAN PARTNERSHIP</h4>
                                <p class="  text-[12px]">Top Location For Growing Companies</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover h-full w-full absolute" src="{{asset('img/investments/49167-scaled.jpg')}}"
                            alt="">
                    </div>
                    <div  class="filter Location showcase-card lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full z-30 justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">Clyde Texas</h4>
                                <p class="  text-[12px]">Why Doing Business In Clyde Texas Makes Perfect Sense</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover h-full w-full absolute"
                            src="{{asset('img/investments/20220621_132226-1.jpg')}}" alt="">
                    </div>
                    <div  class="filter Events showcase-card lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full z-30 justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">TEXAMERICAS CENTER</h4>
                                <p class="  text-[12px]">FDI ALLIANCE International Speaks with Eric Voyles</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover h-full w-full absolute"
                            src="{{asset('img/investments/Texarkana-USA-Water-Tower.jpg')}}" alt="">
                    </div>
                    <div  class="filter Events showcase-card lg:col-span-1   rounded-lg relative overflow-hidden">
                        <div
                            class="flex overlay flex-col  bg-gradient-to-r from-black/50 to-black/50 space-y-8  absolute items-center text-center w-full h-full z-30 justify-center">
                            <div class=" flex flex-col space-y-4">
                                <h4 class="font-bold">Jefferson County,</h4>
                                <p class="  text-[12px]">Where Business Feel At Home</p>
                            </div>
                            <div>
                                <i class="fa-sharp fa-solid fa-link"></i><br>
                                <a class=" text-secondarycolor" href="#">Read More</a>
                            </div>
                        </div>
                        <img class=" object-cover h-full w-full absolute" src="{{asset('img/investments/jefferson.jpg')}}"
                            alt="">
                    </div>

                </div>
            </div>
        </section><!--END INVESTMENT-->
        
 
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
    <script src="{{asset('js/showcases.js')}}"></script>
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
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

    {{--     <div class="h-[400px] relative">
        <div class="interview-header text-white text-center flex justify-center items-center absolute mt-[60px] top-0 w-full left-0 h-full bg-primarycolor"
            style="background-image:linear-gradient(153deg, rgba(2, 0, 36, 0.338) 0%, rgba(11,9,121,0.5187324929971988) 53%, rgba(9,21,121,1) 100%),url('storage/interview/interview1689856339.jpg'); background-size:cover; background-position-y:center;
    
    ">

            <div>
                <h1 class=" text-4xl   font-bold">Exlusive Interview</h1>
                <p>with</p>
                <p class=" text-2xl">ANDY BESHEAR</p>
                <p class=" text-gray-300 text-sm">KENTUCKY GOVERNOR</p>
            </div>
        </div>
    </div>
 --}}
    <main>

        
        <div class="container  lg:p-24 mx-auto bg-primarycolor  " style="background-image:linear-gradient(rgba(2, 14, 56, 0.803),rgba(2, 14, 56, 0.792)),url('/storage/img/fdi/background-3.jpg'); background-repeat: no-repeat; background-position: top; background-size: cover; background-attachment:fixed
        ">
            <div class="  grid grid-cols-1 lg:grid-cols-12 lg:gap-10">
                <div class=" relative col-span-4 w-full"> 
                    <div id="fixedDiv" 
                        class=" lg:border overflow-hidden rounded-lg  col-span-4  w-full lg:w-[400px] my-20 "
                        style="background-image: linear-gradient(rgba(2, 14, 56, 0.505),rgba(67, 179, 253, 0.585)),url('../storage/img/pattern.png');filter: drop-shadow(5px 5px 10px #000);">
                        <div class="container mx-auto text-white pb-10 ">
                            <!-- particles.js container -->
                            <div id="particles-js" class="z-20"></div>

                            <div class=" h-[100px]  overflow-hidden"
                                style="background-image: url('/storage/img/fdi/background-3.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">

                            </div>
                            <div class=" relative z-30 p-4 px-12 flex justify-center space-x-4 mt-10 ">
                                <div class=" h-[100px] w-[100px]  border rounded-md"
                                    style=" background-image:url('/storage/img/Team/ceo.jpg ');  background-size:cover; background-position: top; filter: drop-shadow(5px 5px 10px #000)">

                                </div>
                                <div class=" border h-[100px] w-[100px]  rounded-md"
                                    style=" background-image:url('/storage/interview/interviewee_image/{{ $interview->interviewee_image }}'); background-size:cover; background-position-y: top; filter: drop-shadow(5px 5px 10px #000)">

                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class=" text-xl  px-10">
                                    <div class=" text-bold">
                                        FDI ALLIANCE INTERNATIONAL
                                    </div>
                                    <div class="font-thin">
                                        SPEAKS WITH
                                    </div>
                                    <div class=" text-bold" >
                                        {{ $interview->interviewee }}
                                    </div>
                                    <div class=" text-[12px]  first-letter:uppercase">
                                        {{ $interview->interviewee_title }}
                                    </div>
                                </h1>
                            </div>
                            <div class=" flex justify-center relative z-40   mt-4">
                                <div
                                    class="bg-white {{ $interview->company_logo ? '' : 'hidden' }}  w-40 py-2 px-8  overflow-hidden  rounded-md">
                                    <img src="/storage/interview/company_logo/{{ $interview->company_logo }}"
                                        alt="">
                                </div>
                            </div>


                            <div
                                class=" {{ Auth::user() ? '' : 'hidden' }} z-40 justify-center  relative flex space-x-4">
                                <a href="{{ route('interview.edit', $interview->id) }}" type="submit"
                                    class="bg-secondary block  font-semibold  transition duration-75 ease-in-out mt-8">

                                    <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                                </a>

                                <form method="POST" action="{{ route('interview.destroy', $interview->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block  font-semibold  transition duration-75 ease-in-out mt-8">

                                        <i class="fa-sharp fa-light fa-trash"></i>
                                    </button>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="  rounded-lg col-span-8  relative">
                    <div class="lg:border mx-auto overflow-hidden bg-white lg:rounded-lg lg:w-5/6">


                        <div class=" relative">
                            <div class="lg:h-[400px] h-full overflow-hidden flex justify-center items-center">
                                <img src="/storage/interview/{{ $interview->image_url }}" class="object-center  w-full"
                                    alt="">
                            </div>
                            <div
                                class=" absolute top-0  p-4 text-xl  drop-shadow-lg flex w-full space-x-4 items-center justify-between">

                                <a href="http://{{ $interview->url }}" class="text-white flex-center items-center flex">
                                    <i class="fa-light fa-link"></i>
                                    <span class="text-[12px] font-bold">Anyflip</span>
                                </a>
                                <div>
                                    <script src="https://platform.linkedin.com/in.js" type="text/javascript">
                                        lang: en_US
                                    </script>
                                    <script type="IN/FollowCompany" data-id="0000" ></script>
                                </div>
                            </div>
                        </div>
                        <div class=" px-4 py-8 lg:p-8  text-light">
                            {!! $interview->content !!}

                            <div class=" flex mt-4">
                                <a href="http://{{ $interview->url }}" class=" text-secondarycolor underline ">
                                    Read More
                                </a>
                            </div>
                        </div>


                        <div class="grid lg:grid-cols-12 p-4 pb-10 lg:p-10 grid-col-1 contact-detail">

                            <div class="mt-4 flex space-x-2 col-span-8 ">
                                <div class="  h-full  relative">
                                    <div class="h-20 w-20  overflow-hidden rounded-full" style="background-image: url('/storage/interview/contact/{{ $interview->contact_pic }}'); background-size:cover; background-position:center">
                                     
                                    </div>
                                </div>
                                <div class=" flex flex-col space-y-2">
                                    <div class=" flex flex-col pb-1">
                                        <span class=" text-secondarycolor font-bold">{{ $interview->contact }}</span>
                                        <span class=" text-[12px] text-gray-400">{{ $interview->title }}</span>
                                    </div>

                                    <div class="border-b pb-2">
                                        <span class="text-[12px]"> {{ $interview->address }}</span>
                                    </div>

                                    <div class=" mt-4 flex ">

                                        <a class="{{ $interview->phone ? 'block' : 'hidden' }} pr-4" href="http://{{ $interview->phone }}"
                                          ><i
                                                class="fa-light fa-phone"></i></a>

                                        <a class="{{ $interview->email ? 'block' : 'hidden' }} pr-4" href="http://mailto:{{ $interview->email }}"><i
                                                class="fa-light fa-envelope"></i></a>
                                        <a class="{{ $interview->website ? 'block' : 'hidden' }} pr-4" href="http://{{ $interview->website }}"
                                           target="_blank"><i
                                                class="fa-light fa-globe"></i></a>
                                        <a class="{{ $interview->url ? 'block' : 'hidden' }} pr-4" href="http://{{ $interview->url }}"
                                            class=" text[10px] font-bold"><i class="fa-light fa-link"></i>Anyflip</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class=" articleHover-modal fixed w-full  hidden p-4 h-full top-0 left-0  z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">

        </div>



        </div>


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
                        <img src="/storage/emag/front/{{ $emag->e_front }}" alt="">
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
                        <img src="/storage/emag/front/{{ $emag->e_front }}" alt="">
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
                    style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">

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
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">

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


    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

    <script src="{{ asset('/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('/js/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}"></script>
    <script src="{{ asset('/js/particles.js') }}"></script>

    <script src="{{ asset('/js/particlescr.js') }}"></script>
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

    <script>
        window.addEventListener("scroll", function() {
            var fixedDiv = document.getElementById("fixedDiv");
            var scrollPosition = window.scrollY;

            if (scrollPosition >= 400) {
                fixedDiv.classList.add("active");
            } else {
                fixedDiv.classList.remove("active");
            }
        });
    </script>



</body>

</html>

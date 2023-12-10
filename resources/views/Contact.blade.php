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
    <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100;1,200;1,300;1,400;1,600&display=swap"
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



    <div class=" emag-header pt-10 h-[250px] lg:h-[400px] relative">
        <div class="blend absolute left-0 top-0 w-full h-full bg-primarycolor">
        </div>
        <div class="container relative mx-auto px-10 py-10 flex items-center w-full h-full justify-center">
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl border-b"> <span class="font-bold ">CONTACT
            </h1>
        </div>
    </div>
    <main>

        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 bg-primarycolor text-white py-[40px] min-h-[50vh]">
            <div class="container px-4 mx-auto lg:px-24">
                <div>
                    <div>
                        <h3 class=" text-2xl font-bold" style="line-height:32px !important;">Feel free to contact us
                            anytime.
                            We look forward to hearing from you.</h3>
                    </div>
                    <form action="{{ route('message.store') }}" method="POST">
                        @csrf
                        <div class="mt-8 ">
                            <input type="text" name="name"
                                class=" pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"
                                placeholder="Name">
                        </div>
                        <div class="mt-8 ">
                            <input type="email" name="email"
                                class="pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"
                                placeholder="Email">
                        </div>
                        <div class="mt-8 ">
                            <textarea placeholder="Message" name="message" id="message" rows="2"
                                class="w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent"></textarea>
                        </div>
                        <button type="submit" class=" p-4 rounded-md bg-secondarycolor px-12 mt-4">Submit</button>
                    </form>
                </div>
            </div>
            <div class="info "
                style="background-image: url('/assets/img/globe.png'); background-repeat: no-repeat; background-size: cover;">
                <div class=" container px-4 mx-auto lg:px-24">
                    <div class="  bg-secondarycolor py-4 rounded-lg">
                        <div class=" container px-4 mx-auto">
                            <div class=" flex items-center flex-col">
                                <div class=" flex flex-col items-center text-center">
                                    <h1 class=" lg:text-2xl font-bold">INFO</h1>
                                    <p class=" text-[12px]">For more information on all our <br> services, please
                                        contact:</p>
                                </div>
                                <div class=" flex justify-center space-x-4 items-center py-4">
                                    <i class="fa-light text-xl fa-phone-volume"></i> <a href="tel:+442082424531"
                                        class=" hover:text-primarycolor lg:text-xl font-bold ">+44 208 242 4531</a>
                                </div>
                                <div class=" flex justify-center space-x-4 items-center lg:py-4">
                                    <i class="fa-light text-xl fa-envelope"></i><a href="mailto:info@fdiallianceint.com"
                                        class=" hover:text-primarycolor  lg:text-xl font-bold ">info@fdiallianceint.com</a>
                                </div>
                                <div class=" flex justify-center">
                                    <span
                                        class="mediakit-btn p-4 bg-white text-primarycolor mt-4 px-12 rounded-md cursor-pointer">Media
                                        Kit</span>
                                </div>
                                <div class=" flex justify-center">
                                    <span
                                        class="subscribe-btn p-4 bg-white text-primarycolor mt-4 px-12 rounded-md cursor-pointer">Subscribe</span>
                                </div>
                                <div class=" flex justify-center pt-4 text-[12px] text-center">
                                    Please contact a member of our team to access our Media Kit. We will be in touch in
                                    due course.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


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

        <!--FOOTER-->
        @include('layouts.footer')
        <!--End FOOTER-->

        {{-- Flash Messages --}}


        @if (session('message-success'))

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
                                <h1 class=" text-2xl font-bold text-secondarycolor">Message sent successfully</h1>
                                <p>

                                    Your message was sent successfully, we will get in touch with you as soon as
                                    possible</p>
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


        @if (session('mediakit-success'))
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
                                <h1 class=" text-xl font-bold text-secondarycolor">Request sent</h1>
                                <p>

                                    MediaKit will be sent within 24 hours.</p>


                                <div class=" p-8 w-full ">
                                    <div class="font-bold underline">
                                        Follow us on:
                                    </div>

                                    <div class="flex items-center space-x-4 justify-center  mt-4">
                                        <a href="https://www.linkedin.com/company/fdi-alliance-international"
                                            class=" social-media1 px-4" href="">
                                            <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://www.facebook.com/fdiallianceinternational"
                                            class=" social-media2 px-4" href="">
                                            <i class="  text-2xl text-white fa-brands fa-facebook-f"></i>
                                        </a>

                                        <a class=" social-media3 px-4"
                                            href="https://www.instagram.com/fdi.alliance.international/?hl=en">
                                            <i class="fa-brands fa-instagram text-2xl text-white"></i>
                                        </a>



                                    </div>

                                </div>
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



        @if (session('subcription-success'))
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
                                <h1 class=" text-xl font-bold text-secondarycolor">Subscription Successful</h1>
                                <p>

                                    Thank you for signing up, Check your inbox soon for special offers from us</p>


                                <div class=" p-8 w-full ">
                                    <div class="font-bold underline">
                                        Follow us on:
                                    </div>

                                    <div class="flex items-center justify-center space-x-4  mt-4">
                                        <a href="https://www.linkedin.com/company/fdi-alliance-international"
                                            class=" social-media1 px-4" href="">
                                            <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://www.facebook.com/fdiallianceinternational"
                                            class=" social-media2 px-4" href="">
                                            <i class="  text-2xl text-white fa-brands fa-facebook-f"></i>
                                        </a>

                                        <a class=" social-media3 px-4"
                                            href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i
                                                class="fa-brands text-2xl text-white fa-instagram"></i>
                                        </a>



                                    </div>

                                </div>
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

            <div class="wrap  fixed  flex  items-center justify-center  p-4 h-screen w-full top-0 left-0 z-50"
                style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">


                <div class="newsletter overflow-y-auto overflow-x-hidden  lg:w-[600px] w-full  rounded-md bg-primarycolor  relative"
                    style="background-image: url('{{ asset('img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                    <button class=" absolute z-50 top-4 right-4 text-white text-xl closeNewsLetter"><i
                            class="fa-sharp fa-light fa-xmark"></i></button>

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

                                    <div class="flex items-center justify-center w-full space-x-4  mt-4">
                                        <a href="https://www.linkedin.com/company/fdi-alliance-international"
                                            class=" social-media1 px-4" href="">
                                            <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://www.facebook.com/fdiallianceinternational"
                                            class=" social-media2 px-4" href="">
                                            <i class="   text-white fa-brands fa-facebook-f"></i>
                                        </a>

                                        <a class=" social-media3 px-4"
                                            href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i
                                                class="fa-brands text-2xl fa-instagram"></i></a>



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
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
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

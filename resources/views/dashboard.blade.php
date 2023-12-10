<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
  
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

<body id="contact" class=" relative"> 


@include('layouts.navigation')

    
    <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>

   
    
    <div class=" emag-header pt-10 h-[250px] lg:h-[400px] relative">
        <div class="blend absolute left-0 top-0 w-full h-full bg-primarycolor">
        </div>
        <div class="container relative mx-auto px-10 py-10 flex items-center w-full h-full justify-center">
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl border-b"> <span class="font-bold ">Dashboard</h1>
        </div>
    </div>
    <main>
        <div class="container mx-auto lg:px-24 px-4 py-10 ">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <a href="{{route('newsletter.index')}}" class="article-detail bg-primarycolor hover:text-white text-white p-4 px-8 shadow-lg rounded-lg"  style="filter: drop-shadow(5px 5px 10px #000);">
                    <h1 class=" font-bold text-2xl">Newsletter Subscribers</h1>
                    <span class=" text-xl">{{$newsletter}}</span>
                </a>
                <a href="{{route('mediakit.index')}}" class="article-detail bg-primarycolor hover:text-white text-white p-4 px-8 shadow-lg rounded-lg"  style="filter: drop-shadow(5px 5px 10px #000);">
                    <h1 class=" font-bold text-2xl">Media Kit Request</h1>
                    <span class=" text-xl">{{$mediakit}}</span>
                </a>
                <a href="{{route('subscription.index')}}" class="article-detail bg-primarycolor hover:text-white text-white p-4 px-8 shadow-lg rounded-lg"  style="filter: drop-shadow(5px 5px 10px #000);">
                    <h1 class=" font-bold text-2xl">Magazine Subscribers</h1>
                    <span class=" text-xl">{{$subscription}}</span>
                </a>
                <a href="{{route('sent-messages.index')}}" class="article-detail bg-primarycolor hover:text-white text-white p-4 px-8 shadow-lg rounded-lg"  style="filter: drop-shadow(5px 5px 10px #000);">
                    <h1 class=" font-bold text-2xl">Sent Messages</h1>
                    <span class=" text-xl">{{$sentmessage}}</span>
                </a> 
                <a href="{{route('message.index')}}" class="article-detail bg-primarycolor hover:text-white text-white p-4 px-8 shadow-lg rounded-lg"  style="filter: drop-shadow(5px 5px 10px #000);">
                    <h1 class=" font-bold text-2xl">Inbox</h1>
                    <span class=" text-xl">{{$messages}}</span>
                </a> 

            </div>
        </div>
        

    

     </main>



            <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
            <script src="{{asset('js/vegas/vegas.min.js')}}"></script>
            <script src="{{asset('js/core.js')}}"></script>
            <script src="{{asset('js/fontawesome.min.js')}}"></script>
            <script src="{{asset('js/contact.js')}}"></script>
            <script src="{{asset('js/aos.js')}}"></script>
            <script>
                AOS.init({
                    duration: 3000, // values from 0 to 3000, with step 50ms
                    easing: 'ease', // default easing for AOS animations

                });
            </script>
        

        

        </body>

</html>
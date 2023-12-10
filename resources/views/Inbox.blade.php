<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
  
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
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl border-b"> <span class="font-bold ">Inbox</h1>
        </div>
    </div>
    <main>

        <div class="container mx-auto px-4  lg:px-24 py-10 ">
        @if (session('view-message'))
          
            <div id="message_box" class="  fixed z-50 left-0 top-0 h-screen w-screen xl:p-10 p-4 flex justify-center items-center" style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">
                <div class=" h-full w-full lg:w-[600px] rounded-xl bg-white xl:p-12  relative">
                    <button id="btn-msg">
                        <i class="fa-light fa-times p-2  text-xl  absolute top-4 right-4 cursor-pointer" ></i>
                    </button>
               
                  <div class="overflow-y-auto  p-4 custom-scrollbar h-full overflow-x-hidden ">
                    <div class=" mt-4 ">
                      
                        <span class="font-bold border-b block">  {{ session('view-message')['name'] }}</span>
                    </div>
                    <div class=" mt-4">
                       <span class=" font-bold border-b block"> {{ session('view-message')['email'] }}</span>
                    </div>
                    <div class=" mt-4">
                       <span class=" font-bold border-b block"> {{ session('view-message')['created_at']->format('d-m-Y')  }}</span>
                    </div>
    
                    <div class=" mt-4">
                        {!! session('view-message')['message'] !!}
                    </div>
                  </div>
                </div>
            </div>
        @endif


                <div class="overflow-auto">
                    <table class="w-full table-auto lg:table-fixed">
                        <thead>
                            <tr>
                      
                                <th class="px-4 py-2 w-[100px]">SN</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2 max-w-[100px]">Date</th>
                                <th class="px-4 py-2">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inbox as $index => $message)
                            
                            <tr>
                                <td class="border  text-[12px] px-4 py-4  w-[100px] text-center">{{ $index + 1 }}</td>    
                                    <td class="border  text-[12px] px-4 py-4 text-center  ">
                                        {{$message['name']}}
                                    </td>
                                    <td class="border  text-[12px] px-4 py-4 text-center  ">{{ $message['email'] }}</td>
                                 
                                    <td class="border text-[12px]  px-4 py-4 text-center  ">
                                     
                                        {{$message['created_at']->format('d-m-Y') }}
                                       </td>
                                      <td class="border text-[12px]  px-4 py-4 text-center   max-w-[100px] ">
                                        <a href="{{route('message.show', $message['id'] )}}" class=" text-secondarycolor">
                                            View
                                        </a> 

                                    </td>
                                </tr>
                          
                            @endforeach
                          
                        </tbody>
                    </table>


                </div>
        </div>
        

 
 
    

     </main>



            <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
            <script src="{{asset('js/vegas/vegas.min.js')}}"></script>
            <script src="{{asset('js/core.js')}}"></script>
            <script src="{{asset('js/fontawesome.min.js')}}"></script>
            <script src="{{asset('js/moment.js')}}"></script>
            <script>
               
            </script>
            <script src="{{asset('js/contact.js')}}"></script>
            <script src="{{asset('js/aos.js')}}"></script>
            <script>
                AOS.init({
                    duration: 3000, // values from 0 to 3000, with step 50ms
                    easing: 'ease', // default easing for AOS animations

                });
            </script>
        

            <script>
            
             $btnMsg =  document.getElementById('btn-msg');

             $btnMsg.addEventListener('click', function(){

                 document.getElementById('message_box').style.display = "none";
                 console.log('workijng');
             })

                
            </script>

        </body>

</html>
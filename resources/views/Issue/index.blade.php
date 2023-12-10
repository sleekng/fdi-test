<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue</title>
  
    <link rel="stylesheet" href="{{asset('css/custom-style.css')}}">
 
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/sharp-light.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/sharp-regular.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/sharp-solid.css')}}">
    <link rel="stylesheet" href="{{asset('js/vegas/vegas.min.css')}}">
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


    @include('layouts.navigation')
    <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>

   
    
    <div class=" emag-header pt-10 h-[250px] lg:h-[400px] relative">
        <div class="blend absolute left-0 top-0 w-full h-full bg-primarycolor">
        </div>
        <div class="container relative mx-auto px-10 py-10 flex items-center w-full h-full justify-center">
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl border-b"> <span class="font-bold ">Issue Create</h1>
        </div>
    </div>
    <main>

        <div class="container mx-auto px-4 lg:px-24 py-10 overflow-auto flex justify-center items-center ">
                <div class=" w-full xl:w-[800px]">
                    
                    @if (session('success'))
                    <div class=" text-green-600 flex justify-center my-8">
                       <span> {{ session('success') }}</span>
                    </div>
                @endif



                        <section class="">
                            <p class="text-lg text-gray
                            mb-3 font-bold uppercase tracking-widest">{{ __('All Interactive Issues') }}</p>
                            <hr/>

                        </section>
 
                            
                    @if (session('delete-success'))
                    <div class=" text-green-600 flex justify-center my-8">
                    <span> {{ session('success') }}</span>
                    </div>
                    @endif
                    
                        <div class=" mt-10">
                            <table class=" table-fixed w-full ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Issue</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($issues as $key => $issue)
                                            <tr class=" text-center hover:bg-gray-200 transition-all">
                                                <td class="p-4 whitespace-nowrap">{{$issue->id}}</td>
                                                <td class="p-4 whitespace-nowrap">{{$issue->issue}}</td>
                                                <td class="p-4 whitespace-nowrap">{{$issue->created_at}}</td>
                                                <td class="p-4 whitespace-nowrap flex justify-center items-center space-x-4">
                                                   <a href="{{route('issue.edit',$issue->id)}}" class=" font-bold"><i class="fa-sharp fa-regular fa-pen-to-square"></i></a>                                            

                                                   <form method="POST" action="{{route('issue.destroy',$issue->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                                    class=" font-bold text-red-600 hover:text-red-600">
                                                     
                                                        <i class="fa-sharp fa-light fa-trash"></i>
                                                    </button> 
                                                  
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                 </tbody>
                                
                            </table>

                            <div class="lg:px-40 mt-10">
                                <!-- Pagination links -->
                                {{ $issues->links() }}
                           </div>
                        </div>

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
        

        

        </body>

</html>
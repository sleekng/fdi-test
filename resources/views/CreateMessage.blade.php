<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Message</title>
  
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
        <!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
        <div class="container relative mx-auto lg:px-10 py-10 flex items-center w-full h-full justify-center">
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl border-b"> <span class="font-bold ">Create Message</h1>
        </div>
    </div>
    <main>

        <div class="container mx-auto xl:px-24 px-4 py-40 ">
            
            <form class="" action="{{ route('create-message.store') }}" method="POST">
                @csrf
                @if (session('status'))
                <div class=" text-green-600 flex justify-center my-8">
                   <span> {{ session('status') }}</span>
                </div>
            @endif
                <div class=" relative">
                    <div class=" grid xl:grid-cols-3  gap-4 xl:px-40 grid-cols-1">
                        <div>
                            <select value="{{ old('type') }}" name="type" id="" class="type focus-within:outline-none p-2 border rounded-md w-full">
                                
                                <option value="individual-message" selected>Individual Message</option>
                                <option value="magazine-subscribers">Magazine Subscribers</option>
                                <option value="newsletter-subscribers">Newsletter Subscribers</option>
                                <option value="media-kit">Mediakit Requests</option>
                            </select>
                            @error('type')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="individual-message">
                            <input type="email" value="{{ old('email') }}" name="email" placeholder="Enter Email" class="focus-within:outline-none p-2 border rounded-md w-full email">
                            @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input value="{{ old('subject') }}" type="text" name="subject" placeholder="Subject or Title" class="focus-within:outline-none p-2 border rounded-md w-full">
                            @error('subject')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
    
                    </div>
                    <div  class="w-full mt-4">
                   
    
                        <div id="message_body"  class=" rounded-lg "></div>
                        <textarea value="{{ old('content') }}" name="content" id="editor-content" style="display:none;"></textarea>
                        @error('content')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                      
                    </div>
                </div>

                
                <div class="flex justify-end mt-4">
                    <button type="submit" class=" bg-primarycolor p-4 rounded-md text-white  hover:bg-primarycolor-hover">Send Message
                        <i class="fa-thin fa-paper-plane"></i></button>
                </div>
    
            </form>
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
                $('.type').change(()=>{
                    if($('.type').val() == 'individual-message'){
                        $('#individual-message').show();
                    }else{
                        
                        $('.email')[0].value = ''
                        $('#individual-message').hide();
                    }
                })

             /*    if($('.type').value = 'individual-message'){
                    
                }else{
                    $('#individual-message').hide();
                } */
                
            </script>
        
 <!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
 <script>


    var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],        
            ['link','image','video','formula'] ,               // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']                                         // remove formatting button
            ];



            var quill = new Quill('#message_body', {
                modules: {
                toolbar: toolbarOptions
            },
                theme: 'snow'
            });

            quill.on('text-change', function() {
                    var editorContent = document.querySelector('#editor-content');
                    editorContent.value = quill.root.innerHTML;
                });


</script>
        

        </body>

</html>
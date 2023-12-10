<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emagazine Edit</title>
  
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
        <div class="container relative mx-auto px-10 py-10 flex items-center w-full h-full justify-center">
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl border-b"> <span class="font-bold ">Edit Emagazine</h1>
        </div>
    </div>
    <main>

        <div class="container mx-auto px-4 lg:px-24 py-10 overflow-auto flex justify-center items-center ">
                <div class=" w-full xl:w-[600px]">
                    
                    @if (session('success'))
                    <div class=" text-green-600 flex justify-center my-8">
                       <span> {{ session('success') }}</span>
                    </div>
                @endif
            
                @if (session('error-message'))
                    <div class=" text-red-600 flex justify-center my-8">
                    <span> {{ session('error-message') }}</span>
                    </div>
                 @endif
                @if (session('errorimage'))
                    <div class=" text-red-600 flex justify-center my-8">
                    <span> {{ session('errorimage') }}</span>
                    </div>
                 @endif
                



                        <section class="">
                            <p class="text-lg text-gray
                            mb-3 font-bold uppercase tracking-widest">{{ __('Edit Emag') }}</p>
                            <hr/>

                        </section>
 
                
                <form action="{{route('emagazine.update',$emag->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="mt-4">
                    
                        <x-input-label for="e_position" :value="__('Magazine Position')" />
                        <x-text-input id="e_position" class="block mt-1 w-full" type="number" min="1" name="e_position" value="{{$emag->e_position}}" autofocus autocomplete="e_position" />
                            <div class=" text-[12px] text-secondarycolor">
                                Last Position: {{ $last_postion }}
                            </div>
                        <x-input-error :messages="$errors->get('e_position')" class="mt-2" style="font-size:10px" />
                    </div>      
                    <div class="mt-4">
                    
                        <x-input-label for="e_header" :value="__('Header')" />
                        <x-text-input id="e_header" class="block mt-1 w-full" type="text" name="e_header" value="{{$emag->e_header}}" autofocus autocomplete="e_header" />
                        <x-input-error :messages="$errors->get('e_header')" class="mt-2" style="font-size:10px" />
                    </div>      
                    
                    <input type="text" name="id" class="hidden" value="{{$emag->id}}">
                    
                    <div class="mt-4">


                        <x-input-label for="e_url" :value="__('Anyflip')" />
                        <x-text-input id="e_url" class="block mt-1 w-full" type="text" name="e_url" value="{{$emag->e_url}}" autofocus autocomplete="e_url" />
                        <x-input-error :messages="$errors->get('e_url')" class="mt-2" style="font-size:10px" />
                    </div>

                    <div class="mt-4">


                        <x-input-label for="e_sponsor" :value="__('Sponsor')" />
                        <x-text-input id="e_sponsor" class="block mt-1 w-full" type="text" name="e_sponsor" value="{{$emag->e_sponsor}}" autofocus autocomplete="e_sponsor" />
                        <x-input-error :messages="$errors->get('e_sponsor')" class="mt-2" style="font-size:10px" />
                            
                    </div>

                    <div class="mt-4">

                        <x-input-label for="e_front" :value="__('Front Cover')" />
                        <img src="/storage/emag/front/{{$emag->e_front}}" class=" w-40" alt="">
                        <input  id="e_front" type="file" value="{{$emag->e_front}}" name="e_front" class='pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent'>
                        <p>{{$emag->e_front}}</p>
                        <x-input-error :messages="$errors->get('e_front')" class="mt-2" style="font-size:10px" />

                    </div>


                    <div class="mt-4">

                        <x-input-label for="e_back" :value="__('Back Cover')" />
                        <div class=" flex space-x-2 items-center">
                            <input type="checkbox" name="remove_back">
                            <label for="">No Back cover </label>
                        </div>
                        <img src="/storage/emag/back/{{$emag->e_back}}" class=" w-40" alt="">
                        <input  id="e_back" type="file" value="{{$emag->e_back}}" name="e_back" class='pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent'>
                        <p>{{$emag->e_back}}</p>
                        <x-input-error :messages="$errors->get('e_back')" class="mt-2" style="font-size:10px" />

                    </div>



            

                    <div class="mt-4">

                        <x-input-label for="issue_id" :value="__(' Emag Issue')" />
                        
                        <select name="issue_id" id="issue_id" class="pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent border-b border-b-tertiary bg-transparent">
                            <option value="" disabled selected> Select Issue</option>
                            
                            @foreach ($issues as $key => $issue)
                                <option value="{{ $issue->id }}"  {{ $issue->id == $emag->issue_id ? 'selected' : '' }}> {{ $issue->issue }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('url')" class="mt-2" style="font-size:10px" />

                    </div>

                    <div class="mt-4">

                        <x-input-label for="issue_year" :value="__(' Emag Issue Year')" />
                        
                        <input  id="issue_year" class="rounded-md p-1 outline-none ring-0 hover:ring-0 w-full " min="1900" max="{{ date('Y') }}" type="number" name="issue_year" value="{{$emag->issue_year}}" autofocus style="background: rgba(201, 201, 201, 0.123)">

                        <x-input-error :messages="$errors->get('issue_year')" class="mt-2" style="font-size:10px" />

                    </div>

                    <div  class="w-full mt-4">
                   
    
                        <div id="message_body"  class=" rounded-lg ">{!! $emag->e_body !!}</div>
                        <textarea value="" name="e_body" id="editor-content" style="display:none;"></textarea>
                        <x-input-error :messages="$errors->get('e_body')" class="mt-2" style="font-size:10px" />
                      
                    </div>

                    

                    <div class="mt-4 flex justify-between">


                        <a class=" p-4 bg-primarycolor rounded-md text-white px-12" href="{{route('emagazine')}}">Done</a>

                        <x-primary-button class=" ">
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                        
                    
                </form>

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
            [{ 'color': ['#43b2fd'] }],

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

    
            var editorContent = document.querySelector('#editor-content');
            editorContent.value = quill.root.innerHTML;
            
            quill.on('text-change', function() {
                var editorContent = document.querySelector('#editor-content');
                editorContent.value = quill.root.innerHTML;
                });


</script>
        

        </body>

</html>
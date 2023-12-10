<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
  
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
            <h1 class="text-white text-center text-2xl uppercase md:text-2xl border-b"> <span class="font-bold ">Interview Create</h1>
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
                            mb-3 font-bold uppercase tracking-widest">{{ __('Create New Interview') }}</p>
                            <hr/>

                        </section>
 
                
                <form action="{{route('interview.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-4">
                    
                        <x-input-label for="interviewee" :value="__('Interviewee')" />
                        <x-text-input id="interviewee" class="block mt-1 w-full" type="text" name="interviewee" :value="old('interviewee')" autofocus autocomplete="interviewee" />
                        <x-input-error :messages="$errors->get('interviewee')" class="mt-2" style="font-size:10px" />
                    </div>                   
                    <div class="mt-4">
                    
                        <x-input-label for="interviewee_title" :value="__('Interviewee Title')" />
                        <x-text-input id="interviewee_title" class="block mt-1 w-full" type="text" name="interviewee_title" :value="old('interviewee_title')" autofocus autocomplete="interviewee_title" />
                        <x-input-error :messages="$errors->get('interviewee_title')" class="mt-2" style="font-size:10px" />
                    </div>                   

                    <div class="mt-4">
                    
                        <x-input-label for="contact" :value="__('Contact')" />
                        <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" autofocus autocomplete="contact" />
                        <x-input-error :messages="$errors->get('contact')" class="mt-2" style="font-size:10px" />
                    </div>                   
                    <div class="mt-4">
                    
                        <x-input-label for="location" :value="__('Location')" />
                        <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" autofocus autocomplete="contact" />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" style="font-size:10px" />
                    </div>                   
                    
                    <div class="mt-4">


                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" style="font-size:10px" />
                    </div>

                    <div class="mt-4">


                        <x-input-label for="interview" :value="__('Interview')" />
                        <x-text-input id="interview" class="block mt-1 w-full" type="text" name="interview" :value="old('interview')" autofocus autocomplete="interview" />
                        <x-input-error :messages="$errors->get('interview')" class="mt-2" style="font-size:10px" />
                            
                    </div>

                    <div class="mt-4">


                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" autofocus autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" style="font-size:10px" />
                            
                    </div>

                    <div class="mt-4">


                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" style="font-size:10px" />
                            
                    </div>

                    <div class="mt-4">

                        
                                            <x-input-label for="website" :value="__('Website')" />
                                            <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" :value="old('website')" autofocus autocomplete="website" />
                                            <x-input-error :messages="$errors->get('website')" class="mt-2" style="font-size:10px" />
                                                

                    </div>

                    <div class="mt-4">

                        <x-input-label for="image_url" :value="__('Interview Image')" />
                        <input  id="image_url" type="file" name="image_url" class='pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent'>
                        <x-input-error :messages="$errors->get('image_url')" class="mt-2" style="font-size:10px" />

                    </div>

                    <div class="mt-4">

                        <x-input-label for="contact_pic" :value="__('Contact Image')" />
                        <input  id="contact_pic" type="file" name="contact_pic" class='pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent'>
                        <x-input-error :messages="$errors->get('contact_pic')" class="mt-2" style="font-size:10px" />

                    </div>
                    <div class="mt-4">

                        <x-input-label for="company_logo" :value="__('Company Logo')" />
                        <div class=" flex space-x-2 items-center">
                            <input type="checkbox" name="remove_logo" >
                            <label for="">No Company Logo </label>
                        </div>
                        <input  id="company_logo" type="file" name="company_logo" class='pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent'>
                        <x-input-error :messages="$errors->get('company_logo')" class="mt-2" style="font-size:10px" />

                    </div>
                    <div class="mt-4">

                        <x-input-label for="interviewee_image" :value="__('Interviewee Image')" />
                        <input  id="interviewee_image" type="file" name="interviewee_image" class='pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent text border-b border-b-tertiary bg-transparent'>
                        <x-input-error :messages="$errors->get('interviewee_image')" class="mt-2" style="font-size:10px" />

                    </div>

                    <div class="mt-4">


                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" style="font-size:10px" />
                    </div>
                    <div class="mt-4">


                        <x-input-label for="url" :value="__('interview URL')" />
                        <x-text-input id="url" class="block mt-1 w-full" type="text" name="url" :value="old('url')" autofocus autocomplete="url" />
                        <x-input-error :messages="$errors->get('url')" class="mt-2" style="font-size:10px" />
                    </div>
                    <div class="mt-4">

                        <x-input-label for="issue_id" :value="__(' Interview Issue')" />
                        
                        <select name="issue_id" id="issue_id" class="pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent border-b border-b-tertiary bg-transparent">
                            <option value="" disabled selected> Select Issue</option>
                            
                            @foreach ($issues as $key => $issue)
                                <option value="{{ $issue->id }}">{{ $issue->issue }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('issue_id')" class="mt-2" style="font-size:10px" />

                    </div>

     
                    <div class="mt-4">

                        <x-input-label for="category" :value="__(' Category')" />
                        
                        <select name="category" id="category" class="pb-2 w-full  focus-within:outline-none underline-offset-0 decoration-transparent border-b border-b-tertiary bg-transparent">
                            <option value="" disabled selected> Select Category</option>
                            
                            @foreach ($categories as $key => $category)
                                <option value="{{ $category->category }}">{{ $category->category }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('category')" class="mt-2" style="font-size:10px" />

                    </div>


                    <div class="mt-4">

                        <x-input-label for="issue_year" :value="__(' Interview Issue Year')" />
                        
                        <input  id="issue_year" class="rounded-md p-1 outline-none ring-0 hover:ring-0 w-full " min="1900" max="{{ date('Y') }}" type="number" name="issue_year" value="{{ date('Y') }}" autofocus style="background: rgba(201, 201, 201, 0.123)">

                        <x-input-error :messages="$errors->get('issue_year')" class="mt-2" style="font-size:10px" />

                    </div>

                    <div  class="w-full mt-4">
                   
    
                        <div id="message_body"  class=" rounded-lg "></div>
                        <textarea value="{{ old('content') }}" name="content" id="editor-content" style="display:none;"></textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" style="font-size:10px" />
                      
                    </div>


                    <div class="mt-4 flex justify-end">


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
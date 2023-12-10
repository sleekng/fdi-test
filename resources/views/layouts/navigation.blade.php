<header class=" top-nav top-nav-desktop  fixed lg:absolute z-50 w-full bg-primarycolor py-4">
    <div class="container px-4 mx-auto xl:px-24">
        <div class="lg:opacity-100 lg:flex lg:justify-between lg:items-center lg:w-full">
            <div class="  flex justify-between items-center w-full">
                <div class="logo">
                    <a href="{{ route('home') }}"> <img src="/storage/img/logo.png" class="w-40" alt=""></a>
                </div>
                <div class=" block relative z-50 lg:hidden">
                    <i id="toggle" class="text-3xl close cursor-pointer  text-white fa-thin fa-bars"></i>
                </div>
            </div>

  {{-- MOBILE SECTION --}}
            <div class="lg:hidden  navigation-mobile">
                <div class="navigation-mobile-nav  bg-primarycolor ">

                    <div class="h-[200px] bg-white z-40">
                        <div
                        class="flex absolute top-4 right-4 hover:scale-110 transition-all ease-in-out items-center space-x-1 cursor-pointer ">
                        <a href="{{ route('home') }}"> <img src="/storage/img/fdi_logo.png" class="w-10" alt=""></a>

                    </div>
                    
                       
                        <span><img class=" h-full w-full" src="/storage/img/home-bg1.png" alt=""></span>

                    </div>
                    <div class="{{ Auth::user() ? 'hidden' : '' }}">
                        <a href="{{ route('home') }}"
                            class="  {{ request()->routeIs('home') ? 'bg-secondarycolor' : 'hover:text-white' }} text-white flex items-center   py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase ">Home</span>
                        </a>
                        <a href="{{ route('home', ['id' => 'about']) }}"
                            class=" block text-white py-3 w-full px-8 border-b border-b-tertiary ">
                            <span class="uppercase h-full ">About</span>
                        </a>

                        <a href="/team"
                            class=" {{ request()->routeIs('team') ? 'bg-secondarycolor' : 'hover:text-white' }} block text-white py-3 w-full px-8 border-b border-b-tertiary ">
                            <span class="uppercase">Team</span>
                        </a>

                        <a href="/interviews"
                            class=" {{ request()->routeIs('interviews') ? 'bg-secondarycolor' : 'hover:text-white' }} block text-white py-3 w-full px-8 border-b border-b-tertiary ">
                            <span class="uppercase">Interviews</span>
                        </a>
                        <a href="/showcases"
                            class=" {{ request()->routeIs('showcases') ? 'bg-secondarycolor' : 'hover:text-white' }} block text-white py-3 w-full px-8 border-b border-b-tertiary ">
                            <span class="uppercase">Showcases</span>
                        </a>
                        <a href="/articles"
                            class=" {{ request()->routeIs('articles') ? 'bg-secondarycolor' : 'hover:text-white' }} block text-white py-3 w-full px-8 border-b border-b-tertiary ">
                            <span class="uppercase">Articles</span>
                        </a>
                        <a href="/emagazine"
                            class=" {{ request()->routeIs('emagazine') ? 'bg-secondarycolor' : 'hover:text-white' }} block text-white py-3 w-full px-8 border-b border-b-tertiary ">
                            <span class="uppercase whitespace-nowrap">E-mag</span>
                        </a>
                        <a href="/testimonials"
                            class=" {{ request()->routeIs('testimonials') ? 'bg-secondarycolor' : 'hover:text-white' }} block text-white py-3 w-full px-8 border-b border-b-tertiary ">
                            <span class="uppercase">Testimonials</span>
                        </a>
                        <a href="/contact"
                            class=" {{ request()->routeIs('contact') ? 'bg-secondarycolor' : 'hover:text-white' }} block text-white py-3 w-full px-8 border-b border-b-tertiary">
                            <span class="uppercase">Contact</span>
                        </a>

                    </div>
                    <div class="{{ Auth::user() ? '' : 'hidden' }}">
                        <a href="{{ route('home') }}"
                            class="  {{ request()->routeIs('home') ? 'bg-secondarycolor' : 'hover:text-white' }} text-white flex items-center   py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase ">Home</span>
                        </a>
                        <a href="/dashboard"
                            class=" text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase text-white">Dashboard</span>
                        </a>
                        <a href="{{ route('create-message.create') }}"
                            class=" text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase text-white">Create Message</span>
                        </a>

                        <div
                            class="article-nav relative text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase cursor-pointer text-white">Category</span>
                            <ul
                                class="dropdown-article flex overflow-hidden  h-0 flex-col absolute bg-primarycolor w-full left-0 -bottom-10">
                                <a class="px-8 py-4" href="{{ route('category.index') }}">Categories</a>
                                <a class="px-8 py-4" href="{{ route('category.create') }}">Create Category</a>
                            </ul>
                        </div>
                        <div
                            class="article-nav relative text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase cursor-pointer text-white">Issue</span>
                            <ul
                                class="dropdown-article flex overflow-hidden  h-0 flex-col absolute bg-primarycolor w-full left-0 -bottom-10">
                                <a class="px-8 py-4" href="{{ route('issue.index') }}">Issues</a>
                                <a class="px-8 py-4" href="{{ route('issue.create') }}">Create Issue</a>
                            </ul>
                        </div>

                        <div
                            class="article-nav relative text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase cursor-pointer text-white">Article</span>
                            <ul
                                class="dropdown-article flex overflow-hidden  h-0 flex-col absolute bg-primarycolor w-full left-0 -bottom-10">
                                <a class="px-8 py-4" href="{{ route('articles') }}">Articles</a>
                                <a class="px-8 py-4" href="{{ route('article-create') }}">Create Article</a>
                            </ul>
                        </div>

                        <div
                            class="article-nav relative text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase cursor-pointer text-white">Client</span>
                            <ul
                                class="dropdown-article flex overflow-hidden  h-0 flex-col absolute bg-primarycolor w-full left-0 -bottom-10">
                               
                                <a class="px-8 py-4" href="{{ route('client.create') }}">Create Client</a>
                            </ul>
                        </div>
                        <div
                            class="article-nav relative text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase cursor-pointer text-white">Showcase</span>
                            <ul
                                class="dropdown-article flex overflow-hidden  h-0 flex-col absolute bg-primarycolor w-full left-0 -bottom-10">
                                <a class="px-8 py-4" href="{{ route('showcases') }}">Showcases</a>
                                <a class="px-8 py-4" href="{{ route('showcase-create') }}">Create Showcase</a>
                            </ul>
                        </div>

                        <div
                            class="article-nav relative text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase cursor-pointer text-white">Interview</span>
                            <ul
                                class="dropdown-article flex overflow-hidden  h-0 flex-col absolute bg-primarycolor w-full left-0 -bottom-10">
                                <a class="px-8 py-4" href="{{ route('showcases') }}">Interview</a>
                                <a class="px-8 py-4" href="{{ route('showcase-create') }}">Create Interview</a>
                            </ul>
                        </div>
                        <div
                            class="article-nav relative text-white flex items-center bg-secondarycolor  py-3 w-full px-8 border-b border-b-tertiary  mt-[10px]">
                            <span class="uppercase cursor-pointer text-white">Emagazine</span>
                            <ul
                                class="dropdown-article flex overflow-hidden  h-0 flex-col absolute bg-primarycolor w-full left-0 -bottom-10">
                                <a class="px-8 py-4" href="{{ route('emagazine') }}">Emag</a>
                                <a class="px-8 py-4" href="{{ route('emagazine-create') }}">Create Emag</a>
                            </ul>
                        </div>


                        <form class=" absolute bottom-10 left-4  " method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                class="uppercase whitespace-nowrap flex space-x-2 items-center"
                                href="/create-message"><i
                                    class="fa-light fa-arrow-right-from-bracket text-white"></i><span
                                    class=" text-white">Logout </span>
                            </a>

                        </form>

                    </div>

                    <div class="{{ Auth::user() ? 'hidden' : 'flex' }} p-8 w-full flex items-center space-x-4 ">
        
                        <a href="https://www.linkedin.com/company/fdi-alliance-international" class="px-4 social-media1" href="">
                            <i class="text-2xl text-white  fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.facebook.com/fdiallianceinternational" class="px-4 social-media2" href="">
                            <i class="  text-2xl text-white fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/fdi.alliance.international/?hl=en" class="px-4 social-media3" href="">
                            <i class="text-2xl text-white  fa-brands fa-instagram"></i>
                
                        </a>

                    
                        <span  class=" search_btn_open_mobile flex items-center px-4 "><i
                            class="social-media3 text-2xl   border-none text-white fa-light fa-magnifying-glass"></i></span>
                    </div>

                </div>
            </div>


            {{-- DESKTOP SECTION --}}
            <div class="hidden lg:block navigation ">
                <ul class="text-[12px] space-x-6 xl:space-x-10 text-white  {{ Auth::user() ? 'hidden' : 'flex' }}">

                    <li class=" items-center ">
                        <a class="uppercase {{ request()->routeIs('home') ? 'text-secondarycolor' : 'text-white' }}"
                            href="/">Home</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase " href="{{ route('home', ['id' => 'about']) }}">About</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase  {{ request()->routeIs('team') ? 'text-secondarycolor' : 'text-white' }}"
                            href="/team">Team</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase  {{ request()->routeIs('interviews') ? 'text-secondarycolor' : 'text-white' }} "
                            href="/interviews">Interviews</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase  {{ request()->routeIs('showcases') ? 'text-secondarycolor' : 'text-white' }} "
                            href="/showcases">Showcases</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase  {{ request()->routeIs('articles') ? 'text-secondarycolor' : 'text-white' }}"
                            href="/articles">Articles</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase whitespace-nowrap  {{ request()->routeIs('emagazine') ? 'text-secondarycolor' : 'text-white' }}"
                            href="/emagazine">E-mag</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase  {{ request()->routeIs('testimonials') ? 'text-secondarycolor' : 'text-white' }}"
                            href="/testimonials">Testimonials</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase  {{ request()->routeIs('contact') ? 'text-secondarycolor' : 'text-white' }}"
                            href="/contact">Contact</a>
                    </li>
                    <li class="flex  relative items-center space-x-1 cursor-pointer ">
                        <span class=" search_btn_open_desktop flex items-center "><i
                                class="social-media3   border-none text-white fa-light fa-magnifying-glass"></i></span>

                    </li>

                </ul>
                <ul class=" space-x-10 text-white  {{ Auth::user() ? 'flex' : 'hidden' }}">
                    <li class=" items-center ">
                        <a class="uppercase {{ request()->routeIs('home') ? 'text-secondarycolor' : 'text-white' }}"
                            href="/">Home</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="flex items-center">
                        <a class="uppercase whitespace-nowrap" href="{{ route('create-message.create') }}">create
                            Message</a>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer uppercase whitespace-nowrap article-nav relative">Category

                            <ul
                                class="dropdown-article flex overflow-y-hidden w-[200px]  h-0 flex-col absolute bg-primarycolor  -left-10 top-10">
                                <a class="px-4 w-full py-4" href="{{ route('category.index') }}">Categories</a>
                                <a class="px-4 w-full py-4" href="{{ route('category.create') }}">Create Category</a>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer uppercase whitespace-nowrap article-nav relative">Issue

                            <ul
                                class="dropdown-article flex overflow-y-hidden w-[200px]  h-0 flex-col absolute bg-primarycolor  -left-10 top-10">
                                <a class="px-4 w-full py-4" href="{{ route('issue.index') }}">Issues</a>
                                <a class="px-4 w-full py-4" href="{{ route('issue.create') }}">Create Issue</a>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer uppercase whitespace-nowrap article-nav relative">Article

                            <ul
                                class="dropdown-article flex overflow-y-hidden w-[200px]  h-0 flex-col absolute bg-primarycolor  -left-10 top-10">
                                <a class="px-4 w-full py-4" href="{{ route('articles') }}">Articles</a>
                                <a class="px-4 w-full py-4" href="{{ route('article-create') }}">Create Article</a>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer uppercase whitespace-nowrap article-nav relative">Client

                            <ul
                                class="dropdown-article flex overflow-y-hidden w-[200px]  h-0 flex-col absolute bg-primarycolor  -left-10 top-10">
                          
                                <a class="px-4 w-full py-4" href="{{ route('client.create') }}">Create Client</a>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer uppercase whitespace-nowrap article-nav relative">Showcase

                            <ul
                                class="dropdown-article flex overflow-y-hidden w-[200px]  h-0 flex-col absolute bg-primarycolor  -left-10 top-10">
                                <a class="px-4 w-full py-4" href="{{ route('showcases') }}">Showcases</a>
                                <a class="px-4 w-full py-4" href="{{ route('showcase-create') }}">Create Showcase</a>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer uppercase whitespace-nowrap article-nav relative">Interview

                            <ul
                                class="dropdown-article flex overflow-y-hidden w-[200px]  h-0 flex-col absolute bg-primarycolor  -left-10 top-10">
                                <a class="px-4 w-full py-4" href="{{ route('interviews') }}">Interviews</a>
                                <a class="px-4 w-full py-4" href="{{ route('interview-create') }}">Create
                                    Interview</a>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer uppercase whitespace-nowrap article-nav relative">Emagazine

                            <ul
                                class="dropdown-article flex overflow-y-hidden w-[200px]  h-0 flex-col absolute bg-primarycolor  -left-10 top-10">
                                <a class="px-4 w-full py-4" href="{{ route('emagazine') }}">Emag</a>
                                <a class="px-4 w-full py-4" href="{{ route('emagazine-create') }}">Create
                                    Emag</a>
                            </ul>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                class="uppercase whitespace-nowrap flex space-x-2 items-center"
                                href="/create-message"><i
                                    class="fa-light fa-arrow-right-from-bracket"></i><span>Logout </span>
                            </a>

                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>


{{-- SEARCH SECTION --}}

<div class="fixed  search_section" style=" z-index:9999">
    <div class=" flex bg-primarycolor justify-between p-4 lg:px-24">
        <div class="logo z-50flex justify-between">
            <a href="{{ route('home') }}"> <img src="/storage/img/logo.png" class="w-40" alt=""></a>
        </div>
        <div class="  z-50    cursor-pointer ">
            <span class=" search_btn_close flex items-center "><i
                    class="social-media3 border-none text-white fa-light fa-times text-2xl"></i></span>

        </div>
    </div>

    <div class=" h-full relative flex w-full items-center justify-center bg-primarycolor">

        <form action="{{ route('search.store') }}" method="POST"
            class="rounded-lg  relative z-50 overflow-hidden w-full p-4 xl:w-1/2">
            @csrf
            <div class=" py-4 text-center font-bold text-white flex justify-center">
                <span class="w-full ">Bridging the gap between economic development and site selection. </span>
            </div>
            <input class="focus-visible:outline-none p-4 rounded-lg border w-full" placeholder="Search Website"
                type="text" name="query" id="query">
            <div class=" py-4 flex justify-center">
                <button type="submit" class=" bt relative">

                    <svg width="180px" height="60px" viewBox="0 0 180 60" class=" border border-gray-300">
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                    </svg>
                    <span>Search</span>

                </button>



            </div>
        </form>
        <video class="absolute w-full opacity-30 z-30 top-0 left-0 h-full object-cover " loop autoplay muted>
            <source src="/storage/img/vid/hero2-video.mp4" type="video/mp4">
        </video>



    </div>
</div>



<script>
    $search_btn_open_desktop = document.querySelector('.search_btn_open_desktop');
    $search_btn_open_mobile = document.querySelector('.search_btn_open_mobile');
    $search_btn_close = document.querySelector('.search_btn_close');
    $search_section = document.querySelector('.search_section');

    console.log($search_btn_close);

    $search_btn_open_desktop.addEventListener('click', function() {
        $search_section.classList.add('active')
    })
    $search_btn_open_mobile.addEventListener('click', function() {
        $search_section.classList.add('active')
    })


    $search_btn_close.addEventListener('click', function() {
        $search_section.classList.remove('active')
    })
</script>

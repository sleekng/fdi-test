

@extends('layouts.public')

@section('content')
    
<body id="team" class=" relative">

    <div class="nav-overlay absolute top-0 left-0 h-full w-full  z-40"></div>

    <div class="grid grid-cols-1  h-full  ">

        <!--Featured-->
        <div class="featured-vegasslider hidden lg:block  w-full relative ">
            <div class="  overflow-hidden  w-full h-full ">





                @php
                    $serialNumber = 1;
                @endphp

                @foreach ($featureds as $featured)
                    <div
                        class="vegas-text{{ $serialNumber }} absolute z-50 bottom-1/3 left-20  hidden  text-white text-left  overflow-hidden">

                        <div class=" flex items-center space-x-4">
                            <div>
                                <img class=" rounded-md w-40" src="/storage/article/{{ $featured->image_url }}"
                                    alt="" style="filter: drop-shadow(5px 5px 10px #000);">
                            </div>
                            <div>
                                <h4
                                    class=" opacity-90 text-xl border-b w-[230px] font-bold text-secondarycolor whitespace-nowrap pb">
                                    Featured Contributors </h4>
                                <h1 class="pt-4 pb-2 uppercase font-bold text-4xl">{{ $featured->author }}</h1>
                                <p class=" uppercase"> <span class="   font-bold">{{ $featured->article }}</span>
                                </p>

                                <div class="mt-8">
                                    <a href=""
                                        class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                                        Article</a>
                                </div>
                            </div>
                        </div>


                    </div>
                    @php
                        $serialNumber++;
                    @endphp
                @endforeach

                <div class=" z-40 absolute bottom-4 right-28 h-[20px] items-center flex space-x-4">
                    <div class="px-2 flex items-center justify-center space-x-2">
                        <div id="previousD" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-left"></i>
                        </div>
                        <div id="nextD" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-right"></i>
                        </div>
                    </div>

                    @php
                        $serialNumber = 1;
                    @endphp

                    @foreach ($featureds as $featured)
                        <span
                            class="vegas_slide-icon slide-{{ $serialNumber }}-icon  h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>

                        @php
                            $serialNumber++;
                        @endphp
                    @endforeach



                </div>

            </div>

            <div class=" absolute z-30 left-0 top-0 bg-primarycolor opacity-50 h-full w-full"></div>

            <div class=" absolute z-30  h-full w-full"
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>

        </div>
        <!--End Featured-->



        <!--Mobile-->
        <div id="featured-vegasslider"
            class="article-featured-vegasslider-mobile lg:hidden block col-span-7 w-full relative mt-8 ">

            <div class="  overflow-hidden  w-full h-full ">



                @php
                    $serialNumber = 1;
                @endphp

                @foreach ($featureds as $featured)
                    <div
                        class="vegas-text{{ $serialNumber }}   hidden absolute z-30 bottom-40 flex-col text-white text-left left-4">


                        <div class=" flex flex-col ">
                            <div>

                            </div>
                            <div>
                                <h4 class=" opacity-90 text-[16px]  font-bold text-secondarycolor whitespace-nowrap pb">
                                    Featured Contributors </h4>
                                <h1 class="pt-4 uppercase font-bold text-xl">{{ $featured->author }}</h1>
                                <p class=" uppercase text-[12px]"> <span>{{ $featured->article }}</span></p>
                            </div>
                        </div>

                        <div class="pt-10">
                            <a href=""
                                class="bg-secondarycolor py-2 px-4  rounded-md uppercase font-bold text-white hover:bg-white hover:text-secondarycolor">Read
                                Article</a>
                        </div>
                    </div>


                    @php
                        $serialNumber++;
                    @endphp
                @endforeach


                <div class=" z-30 absolute bottom-4 right-4 h-[20px] items-center flex space-x-4">
                    <div class="px-2 flex items-center justify-center space-x-2">
                        <div id="previousM" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-left"></i>
                        </div>
                        <div id="nextM" class="py-1 px-3 cursor-pointer rounded-md bg-secondarycolor text-white">
                            <i class="fa-light fa-chevron-right"></i>
                        </div>
                    </div>


                    @php
                        $serialNumber = 1;
                    @endphp

                    @foreach ($featureds as $featured)
                        <span
                            class="vegas_slide-icon slide-{{ $serialNumber }}-icon  h-[10px] w-[10px] border-2 cursor-pointer rounded-full border-white"></span>

                        @php
                            $serialNumber++;
                        @endphp
                    @endforeach
                </div>

            </div>

            <div class=" absolute z-10 bg-primarycolor opacity-80 h-full w-full"></div>



            <div class=" absolute z-20  h-full w-full"
                style="background-image: url('storage/img/pattern.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>

        </div>
        <!--End Mobile-->
    </div>


    <main>

        <!--Articles-->
        <section class="article bg-primarycolor overflow-hidden py-20 w-full relative flex  ">
            <div class=" container px-4 h-full  xl:px-24 mx-auto">


                @if (session('delete-success'))
                    <div class=" text-green-600 flex justify-center my-8">
                        <span> {{ session('success') }}</span>
                    </div>
                @endif

                @if (session('searcherror'))
                    <div class=" text-red-600 flex justify-center my-8">
                        <span> {{ session('searcherror') }}</span>
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

                <div class=" lg:px-40 flex justify-between my-8">
                    <span>

                        <h1 style="line-height:40px !important;">Search Results for "{{ $query }}"</h1>

                    </span>

                </div>
                <div class="  grid grid-cols-1 lg:grid-cols-2 lg:px-12 gap-2 lg:gap-10 w-full">


                    @if ($articles->isEmpty() && $showcases->isEmpty() && $interviews->isEmpty())
                        <p>No results found.</p>

                        <div>
                            <p>See other related search</p>

                            @foreach ($interviewsAll as $interview)
                                <div data-aos="fade-up"
                                    class=" relative article-detail  lg:gap-4  grid lg:grid-cols-12 grid-cols-1 p-4 w-full border rounded-md ">
                                    <div class=" {{ Auth::user() ? '' : 'hidden' }}  flex space-x-4 col-span-12">
                                        <a href="{{ route('interview.edit', $interview->id) }}" type="submit"
                                            class="bg-secondary block  font-semibold  transition duration-75 ease-in-out mt-8">

                                            <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                                        </a>

                                        <form method="POST"
                                            action="{{ route('interview.destroy', $interview->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block  font-semibold  transition duration-75 ease-in-out mt-8">

                                                <i class="fa-sharp fa-light fa-trash"></i>
                                            </button>

                                        </form>
                                    </div>
                                    <div class="col-span-3 w-full overflow-hidden flex items-center justify-center">

                                        <div class="rounded-full my-4  overflow-hidden w-28 h-28"
                                            style="filter: drop-shadow(5px 5px 10px #000); background-image:url('storage/interview/interviewee_image/{{ $interview->interviewee_image }}');background-size:cover; background-position:center">
                                        </div>
                                    </div>
                                    <a href="{{ route('interview.show', $interview->id) }}"
                                        class="flex justify-center lg:border-l border-t lg:pt-0 pt-4 lg:border-t-0 lg:pl-4 flex-col col-span-9 w-full">
                                        <div class=" flex justify-end pb-4">
                                            <span class=" text-gray-400"
                                                style="font-size: 10px">{{ $interview->issue }}
                                                {{ $interview->issue_year }}</span>
                                        </div>
                                        <span
                                            class=" font-bold  text-orange-100 text-[16px] xl:text-lg leading-6">{{ $interview->interview }}

                                        </span>

                                        <div class=" flex flex-col space-y-1">
                                            <h4 class=" mt-2 text-secondarycolor uppercase font-bold">
                                                {{ $interview->author }}
                                            </h4>
                                            <h3 class="lg:text-[12px] text-[10px] leading-4">
                                                {{ $interview->location }}
                                                <br>

                                        </div>




                                    </a>
                                </div>
                            @endforeach

                        </div>
                    @else
                        @foreach ($interviews as $interview)
                            <div class=" {{ Auth::user() ? '' : 'hidden' }}  flex space-x-4">
                                <a href="{{ route('article.edit', $interview->id) }}" type="submit"
                                    class="bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                    <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                                </a>

                                <form method="POST" action="{{ route('showcase.destroy', $interview->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                        <i class="fa-sharp fa-light fa-trash"></i>
                                    </button>

                                </form>
                            </div>
                            <div data-aos="fade-up"
                                class=" relative article-detail hover:text-white content-center gap-2 lg:gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md "
                                style="filter: drop-shadow(5px 5px 10px #000);">
                                <div class="col-span-1 overflow-hidden">

                                    <img class="  w-full rounded-md "
                                        src="/storage/interview/{{ $interview->image_url }}" alt=""
                                        style="filter: drop-shadow(5px 5px 10px #000);">
                                </div>
                                <a href="{{ route('interview.show', $interview->id) }}"
                                    class="flex justify-center flex-col col-span-2 w-full">
                                    <span
                                        class="text-white font-bold  text-[16px] xl:text-lg leading-6">{{ $interview->interview }}
                                    </span>
                                    <hr />
                                    <div class=" flex flex-col space-y-1">
                                        <h4 class=" mt-2 text-secondarycolor uppercase font-bold">
                                            {{ $interview->location }}
                                        </h4>


                                    </div>

                                    <div class="py-2 flex justify-end w-full lg:justify-start">
                                        <span class=" text-gray-400" style="font-size: 10px">{{ $interview->issue }}
                                            {{ $interview->issue_year }}</span>
                                    </div>
                                </a>

                            </div>
                        @endforeach


                        @foreach ($showcases as $showcase)
                            <div class=" {{ Auth::user() ? '' : 'hidden' }}  flex space-x-4">
                                <a href="{{ route('article.edit', $showcase->id) }}" type="submit"
                                    class="bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                    <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                                </a>

                                <form method="POST" action="{{ route('showcase.destroy', $showcase->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                        <i class="fa-sharp fa-light fa-trash"></i>
                                    </button>

                                </form>
                            </div>
                            <div data-aos="fade-up" data-modal="#modal{{ $showcase->id }}"
                                class="modal__trigger relative article-detail hover:text-white content-center gap-2 lg:gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md "
                                style="filter: drop-shadow(5px 5px 10px #000);">
                                <div class="col-span-1 overflow-hidden">

                                    <img class="  w-full rounded-md "
                                        src="/storage/showcase/{{ $showcase->image_url }}" alt=""
                                        style="filter: drop-shadow(5px 5px 10px #000);">
                                </div>
                                <a href class="flex justify-center flex-col col-span-2 w-full">
                                    <span
                                        class="text-white font-bold  text-[16px] xl:text-lg leading-6">{{ $showcase->showcase }}
                                    </span>
                                    <hr />
                                    <div class=" flex flex-col space-y-1">
                                        <h4 class=" mt-2 text-secondarycolor uppercase font-bold">
                                            {{ $showcase->location }}
                                        </h4>
                                        <h3 class="lg:text-[12px] text-[10px] leading-4">{{ $showcase->title }} <br>

                                    </div>

                                    <div class="py-2 flex justify-end w-full lg:justify-start">
                                        <span class=" text-gray-400" style="font-size: 10px">{{ $showcase->issue }}
                                            {{ $showcase->issue_year }}</span>
                                    </div>
                                </a>

                            </div>
                        @endforeach

                        @foreach ($articles as $article)
                            <div class=" {{ Auth::user() ? '' : 'hidden' }}  flex space-x-4">
                                <a href="{{ route('article.edit', $article->id) }}" type="submit"
                                    class="bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                    <i class="fa-sharp fa-regular fa-pen-to-square "></i>
                                </a>

                                <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class=" {{ Auth::user() ? '' : 'hidden' }} bg-secondary block hover:text-white font-semibold  transition duration-75 ease-in-out mt-8">

                                        <i class="fa-sharp fa-light fa-trash"></i>
                                    </button>

                                </form>
                            </div>
                            <div data-aos="fade-up" data-modal="#modal{{ $article->id }}"
                                class="modal__trigger relative article-detail hover:text-white gap-2 lg:gap-4  grid lg:grid-cols-3 grid-cols-2 p-4 w-full border rounded-md "
                                style="filter: drop-shadow(5px 5px 10px #000);">
                                <div class="col-span-1 overflow-hidden">

                                    <img class="  w-full rounded-md "
                                        src="/storage/article/{{ $article->image_url }}" alt=""
                                        style="filter: drop-shadow(5px 5px 10px #000);">
                                </div>
                                <a href class="flex justify-center flex-col col-span-2 w-full">
                                    <span
                                        class="text-white font-bold  text-[16px] xl:text-lg leading-6">{{ $article->article }}
                                    </span>
                                    <hr />
                                    <div class=" flex flex-col space-y-1">
                                        <h4 class=" mt-2 text-secondarycolor uppercase font-bold">
                                            {{ $article->author }}
                                        </h4>
                                        <h3 class="lg:text-[12px] text-[10px] leading-4">{{ $article->title }} <br>

                                    </div>




                                    <div class="py-2 flex justify-end w-full lg:justify-start">
                                        <span class=" text-gray-400" style="font-size: 10px">{{ $article->issue }}
                                            {{ $article->issue_year }}</span>
                                    </div>
                                </a>

                            </div>
                        @endforeach
                    @endif




                </div>


            </div>


        </section>
        <!--END Articles-->

        <div class=" articleHover-modal fixed w-full  hidden p-4 h-full top-0 left-0  z-50"
            style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5);">

        </div>

        <!---MODAL--->
        @foreach ($articles as $article)
            <div id="modal{{ $article->id }}" class="modal modal__bg " role="dialog" aria-hidden="true">
                <div
                class="font-bold text-lg p-4 bg-white lg:text-xl pb-4 overflow-hidden fixed w-full top-0 left-0  z-50 flex justify-left items-center ">

                <h1 class=" border-b text-[16px]"><span class="font-bold pr-1"> {{ $article->issue }}
                    </span>{{ $article->issue_year }}
                </h1>

                    <!-- modal close button -->
                    <span href="" class="modal__close demo-close">
                        <svg class="" viewBox="0 0 24 24">
                            <path
                                d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
                            <path d="M0 0h24v24h-24z" fill="none" />
                        </svg>
                    </span>
            </div>
                <div class="modal__dialog   lg:min-w-[748px] lg:p-5  p-4">

                    <div class="modal__content relative mt-20 md:mt-0  overflow-y-auto max-h-[90vh] lg:max-h-[80vh] rounded-lg">
                       
                        <div class=" relative lg:h-[350px] overflow-hidden">
                            <img class="w-full" src="storage/article/picture/{{ $article->picture }}"
                                alt="">
                            <div
                                class=" absolute top-0  p-4 text-xl  drop-shadow-lg flex w-full space-x-4 items-center justify-between">

                                <a href="{{ $article->url }}"
                                    class="text-white flex-center {{ $article->url ? 'block' : 'hidden' }}  items-center flex">
                                    <i class="fa-light fa-link"></i>
                                    <span class="text-[12px] font-bold">Anyflip</span>
                                </a>
                                <div
                                    class=" bg-primarycolor text-white rounded-md p-1 px-2 text-xl  drop-shadow-lg flex space-x-4 items-center justify-center">
                                    <a href="https://www.linkedin.com/company/fdi-alliance-international"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.facebook.com/fdiallianceinternational"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i
                                            class="fa-brands fa-instagram"></i></a>

                                </div>

                            </div>
                        </div>
                        <div class="py-4">
                            <h1 class=" p-4 border-gray-300   w-full border-t border-b   uppercase">
                                <span
                                    class="text-primarycolor font-bold lg:text-2xl text-xl">{{ $article->article }}</span>
                                <div class="  text-gray-400 ">
                                    {{ $article->author }}
                                </div>
                            </h1>
                        </div>
                        <div class="px-4  ">

                            <div class="">
                                <p class="  text-light">
                                    {!! $article->content !!}...
                                <div class=" flex mt-4">
                                    <a href="" class=" text-secondarycolor underline ">
                                        Read More
                                    </a>
                                </div>
                                </p>


                            </div>

                        </div>



                        <div class="grid lg:grid-cols-12 p-4 pb-10 lg:p-10 grid-col-1 contact-detail">

                            <div class="mt-4 flex space-x-2 col-span-8 ">
                                <div class="  h-full  relative">

                                    <div class="h-20 w-20  overflow-hidden rounded-full flex justify-center items-center"
                                        style="background-image:url('storage/article/{{ $article->image_url }}');
                                   background-size:cover; background-position-x:center;
                                   ">
                                    </div>
                                </div>
                                <div class=" flex flex-col space-y-2">
                                    <div class=" flex flex-col pb-1">
                                        <span class=" text-secondarycolor font-bold">{{ $article->author }}</span>
                                        <span class=" text-[12px] text-gray-400">{{ $article->title }}</span>
                                    </div>

                                    <div class="border-b pb-2">
                                        <span class="text-[12px]"> {{ $article->address }}</span>
                                    </div>

                                    <div class=" mt-4 flex ">

                                        <a class="{{ $article->phone ? 'block' : 'hidden' }} pr-4"
                                            href="tel:{{ $article->phone }}"><i class="fa-light fa-phone"></i></a>


                                        <a class="{{ $article->email ? 'block' : 'hidden' }} pr-4"
                                            href="mailto:{{ $article->email }}"><i
                                                class="fa-light fa-envelope"></i></a>
                                        <a class="{{ $article->website ? 'block' : 'hidden' }} pr-4"
                                            href="http://{{ $article->website }}" target="_blank"><i
                                                class="fa-light fa-globe"></i></a>
                                        <a class="{{ $article->url ? 'block' : 'hidden' }} pr-4"
                                            href="http://{{ $article->url }}" target="_blank"
                                            class=" text[10px] font-bold"><i class="fa-light fa-link"></i>Anyflip</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!---MODAL--->
        @foreach ($showcases as $showcase)
            <div id="modal{{ $showcase->id }}" class="modal modal__bg " role="dialog" aria-hidden="true">
                <div
                class="font-bold text-lg p-4 bg-white lg:text-xl pb-4 overflow-hidden fixed w-full top-0 left-0  z-50 flex justify-left items-center ">
            <h1 class=" border-b text-[16px]"><span class="font-bold pr-1"> {{ $showcase->issue }}
                </span>{{ $showcase->issue_year }}
            </h1>

             <!-- modal close button -->
             <span href="" class="modal__close demo-close">
                <svg class="" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z" />
                    <path d="M0 0h24v24h-24z" fill="none" />
                </svg>
            </span>

        </div>
                <div class="modal__dialog   lg:min-w-[748px] lg:p-5  p-4">

                    <div class="modal__content relative  mt-20 md:mt-0  overflow-y-auto max-h-[90vh] lg:max-h-[80vh] rounded-lg">
                        
                        <div class=" relative lg:h-[350px] overflow-hidden">
                            <img class="w-full" src="storage/showcase/{{ $showcase->image_url }}" alt="">
                            <div
                                class=" absolute top-0  p-4 text-xl  drop-shadow-lg flex w-full space-x-4 items-center justify-between">

                                <a href="http://{{ $showcase->url }}" target="_blank"
                                    class="text-white flex-center {{ $showcase->url ? 'block' : 'hidden' }}  items-center flex">
                                    <i class="fa-light fa-link"></i>
                                    <span class="text-[12px] font-bold">Anyflip</span>
                                </a>
                                <div
                                    class=" bg-primarycolor text-white rounded-md p-1 px-2 text-xl  drop-shadow-lg flex space-x-4 items-center justify-center">
                                    <a href="https://www.linkedin.com/company/fdi-alliance-international"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.facebook.com/fdiallianceinternational"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/fdi.alliance.international/?hl=en"><i
                                            class="fa-brands fa-instagram"></i></a>

                                </div>

                            </div>
                        </div>
                        <div class="py-4">
                            <h1 class=" p-4 border-gray-300   w-full border-t border-b   uppercase">
                                <span
                                    class="text-primarycolor font-bold lg:text-2xl text-xl">{{ $showcase->showcase }}</span>
                                <div class="  text-gray-400 ">
                                    {{ $showcase->location }}
                                </div>
                            </h1>
                        </div>
                        <div class="px-4">

                            <div>
                                <p class="  text-light">
                                    {!! $showcase->content !!}...
                                <div class=" flex mt-4">
                                    <a href="http://{{ $showcase->url }}" target="_blank"
                                        class=" text-secondarycolor underline ">
                                        Read More
                                    </a>
                                </div>
                                </p>
                            </div>

                            <div class="grid lg:grid-cols-12 p-4 pb-10 lg:p-10 grid-col-1 contact-detail">

                                <div class="mt-4 flex space-x-2 col-span-8 ">
                                    <div class="  h-full  relative">
                                        <div class="h-20 w-20  overflow-hidden rounded-full flex justify-center items-center"
                                            style="background-image:url('storage/showcase/contact/{{ $showcase->contact_pic }}');
                                                      background-size:cover; background-position-x:center;
                                                      ">

                                        </div>
                                    </div>
                                    <div class=" flex flex-col space-y-2">
                                        <div class=" flex flex-col pb-1">
                                            <span
                                                class=" text-secondarycolor font-bold">{{ $showcase->contact }}</span>
                                            <span class=" text-[12px] text-gray-400">{{ $showcase->title }}</span>
                                        </div>

                                        <div class="border-b pb-2">
                                            <span class="text-[12px]"> {{ $showcase->address }}</span>
                                        </div>

                                        <div class=" mt-4 flex ">

                                            <a class="{{ $showcase->phone ? 'block' : 'hidden' }} pr-4"
                                                href="tel:{{ $showcase->phone }}"><i class="fa-light fa-phone"></i>
                                            </a>


                                            <a class="{{ $showcase->email ? 'block' : 'hidden' }} pr-4"
                                                href="mailto:{{ $showcase->email }}"><i
                                                    class="fa-light fa-envelope"></i></a>
                                            <a class="{{ $showcase->website ? 'block' : 'hidden' }} pr-4"
                                                href="http://{{ $showcase->website }}" target="_blank"><i
                                                    class="fa-light fa-globe"></i></a>
                                            <a id="redirectToUrl"
                                                class="{{ $showcase->url ? 'block' : 'hidden' }} pr-4"
                                                href="http://{{ $showcase->url }}" target="_blank"
                                                class=" text[10px] font-bold"><i
                                                    class="fa-light fa-link"></i>Anyflip</a>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            </div>
        @endforeach


        </div>










        <!--FOOTER-->
        @include('layouts.footerSearch')
        <!--End FOOTER-->



        {{-- Flash Messages --}}


        @if (session('success'))
            <div class="wrap  fixed w-full flex  items-center justify-center p-4 h-full top-0 left-0 z-50"
                style="backdrop-filter: blur(3px);  background-color: rgba(10, 5, 63, 0.5); ">
                <button class=" fixed z-50 top-10 right-10 text-white text-4xl closeNewsLetter"><i
                        class="fa-sharp fa-light fa-xmark"></i></button>


                <div class="newsletter  lg:w-[600px] w-full overflow-hidden rounded-md bg-primarycolor  relative"
                    style="background-image: url('{{ asset('img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                    <div class=" grid xl:grid-cols-2 grid-cols-1">
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
                        <div>
                            @foreach ($emags as $emag)
                                <img src="storage/emag/front/{{ $emag->e_front }}" alt="">
                            @endforeach
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
                    style="background-image: url('{{ asset('img/pattern.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

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






    </main>


    <script>
        var featureds = @json($featureds);
        console.log(featureds);
    </script>
    <script src="{{ asset('/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('/js/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}"></script>
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




</body>
@endsection



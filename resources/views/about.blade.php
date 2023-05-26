@extends('layouts.app')

@section('content')
    <body class="bg-gray-50 dark:bg-slate-900">
    <!-- ========== MAIN CONTENT ========== -->
    <!-- Sidebar Toggle -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center py-4">
            <!-- Navigation Toggle -->
            <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ml-3 flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
                <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-400" aria-current="page">
                    pixelprompt
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Sidebar Toggle -->

    <!-- Sidebar -->
    <div style="display: flex;" id="application-sidebar" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-gray-800 dark:border-gray-700 flex flex-col">
        <div class="px-6">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">pixelprompt</a>
        </div>

        <nav class="hs-accordion-group gap-y-1.5 p-6 pb-0 h-full w-full flex flex-col grow flex-wrap justify-between" data-hs-accordion-always-open>

            <div class="flex flex-col gap-y-1.5">
                <a href="{{route("prompts.index")}}" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300
                            @if(Route::is('prompts.index'))
                                bg-gray-100
                                dark:bg-gray-900
                                dark:text-white
                            @endif">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                    </svg>
                    Community
                </a>
                <a href="{{route("prompts.showLikedPrompts")}}" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300
                        @if(Route::is('prompts.showLikedPrompts'))
                            bg-gray-100
                            dark:bg-gray-900
                            dark:text-white
                        @endif">
                    {{--                            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">--}}
                    {{--                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>--}}
                    {{--                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>--}}
                    {{--                            </svg>--}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" >
                        <symbol id="hpIconSymbol-like" viewBox="0 0 56 56" fill="currentColor"><path xmlns="http://www.w3.org/2000/svg" d="M 4.7265 20.6406 C 4.7265 30.6250 13.0937 40.4453 26.2890 48.8828 C 26.8046 49.1875 27.5078 49.5156 28.0000 49.5156 C 28.4922 49.5156 29.1953 49.1875 29.6875 48.8828 C 42.9062 40.4453 51.2735 30.6250 51.2735 20.6406 C 51.2735 12.3438 45.5781 6.4844 37.9843 6.4844 C 33.6250 6.4844 30.1094 8.5469 28.0000 11.7109 C 25.8906 8.5703 22.3515 6.4844 18.0156 6.4844 C 10.4219 6.4844 4.7265 12.3438 4.7265 20.6406 Z M 8.5000 20.6406 C 8.5000 14.4063 12.5312 10.2578 17.9687 10.2578 C 22.3750 10.2578 24.8828 13.0000 26.4062 15.3438 C 27.0390 16.2813 27.4375 16.5391 28.0000 16.5391 C 28.5625 16.5391 28.9141 16.2578 29.5937 15.3438 C 31.1875 13.0469 33.6484 10.2578 38.0312 10.2578 C 43.4687 10.2578 47.5000 14.4063 47.5000 20.6406 C 47.5000 29.3594 38.2890 38.7578 28.4687 45.2734 C 28.2343 45.4375 28.0937 45.5547 28.0000 45.5547 C 27.9062 45.5547 27.7422 45.4375 27.5078 45.2734 C 17.7109 38.7578 8.5000 29.3594 8.5000 20.6406 Z"></path></symbol>
                        <g class="background">
                            <rect width="100%" height="100%" fill="none" rx="0%" ry="0%" x="0%" y="0%" stroke-width="0%" stroke="none"></rect>
                        </g>
                        <use xlink:href="#hpIconSymbol-like" class="content" fill="rgb(255, 255, 255)" transform-origin="center" ></use>
                    </svg>
                    Liked
                </a>
                <a href="{{route("prompts.showYourPrompts")}}" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300
                        @if(Route::is('prompts.showYourPrompts'))
                            bg-gray-100
                            dark:bg-gray-900
                            dark:text-white
                        @endif">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    Personal
                </a>
            </div>
            <div  class="flex flex-col gap-y-1.5">
                        <span class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-md dark:text-white">
                            Hey {{auth()->user()->name}}
                        </span>
                <a href="{{route("about")}}" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300
                            @if(Route::is('about'))
                                bg-gray-100
                                dark:bg-gray-900
                                dark:text-white
                            @endif" >
{{--                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">--}}
{{--                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>--}}
{{--                    </svg>--}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                        <symbol id="hpIconSymbol" viewBox="0 0 56 56" fill="currentColor"><path xmlns="http://www.w3.org/2000/svg" d="M 27.9999 51.9063 C 41.0546 51.9063 51.9063 41.0781 51.9063 28 C 51.9063 14.9453 41.0312 4.0937 27.9765 4.0937 C 14.8983 4.0937 4.0937 14.9453 4.0937 28 C 4.0937 41.0781 14.9218 51.9063 27.9999 51.9063 Z M 27.9999 47.9219 C 16.9374 47.9219 8.1014 39.0625 8.1014 28 C 8.1014 16.9609 16.9140 8.0781 27.9765 8.0781 C 39.0155 8.0781 47.8983 16.9609 47.9219 28 C 47.9454 39.0625 39.0390 47.9219 27.9999 47.9219 Z M 27.7890 19.6563 C 29.4999 19.6563 30.8358 18.2968 30.8358 16.6094 C 30.8358 14.8984 29.4999 13.5390 27.7890 13.5390 C 26.0780 13.5390 24.7421 14.8984 24.7421 16.6094 C 24.7421 18.2968 26.0780 19.6563 27.7890 19.6563 Z M 23.8749 40.8906 L 33.4374 40.8906 C 34.3983 40.8906 35.1483 40.2109 35.1483 39.25 C 35.1483 38.3359 34.3983 37.6094 33.4374 37.6094 L 30.5312 37.6094 L 30.5312 25.6797 C 30.5312 24.4141 29.8749 23.5703 28.7030 23.5703 L 24.2733 23.5703 C 23.3358 23.5703 22.5858 24.2968 22.5858 25.2109 C 22.5858 26.1719 23.3358 26.8516 24.2733 26.8516 L 26.8046 26.8516 L 26.8046 37.6094 L 23.8749 37.6094 C 22.9374 37.6094 22.1874 38.3359 22.1874 39.25 C 22.1874 40.2109 22.9374 40.8906 23.8749 40.8906 Z"></path></symbol>
                        <g class="background">
                            <rect width="100%" height="100%" fill="none" rx="0%" ry="0%" x="0%" y="0%" stroke-width="0%" stroke="none"></rect>
                        </g>
                        <use xlink:href="#hpIconSymbol" class="content" fill="rgb(51, 43, 71)" transform-origin="center" style="transform: scale(1) rotate(0deg);"></use>
                    </svg>
                    About
                </a>
                <form action="{{route("logout")}}" method="POST">
                    @csrf
                    <button class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400  dark:hover:text-slate-300" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                            <symbol id="hpIconSymbol-logout" viewBox="0 0 56 56" fill="currentColor">
                                <path xmlns="http://www.w3.org/2000/svg" d="M35.0975,20.9883 C35.0975,21.9961 34.2538,22.8633 33.2694,22.8633 L9.1991,22.8633 L5.6835,22.6992 L7.371,24.293 L11.1444,27.8555 C11.5194,28.1836 11.7069,28.6758 11.7069,29.1445 C11.7069,30.1289 11.0038,30.8321 10.0663,30.8321 C9.5507,30.8321 9.1757,30.6211 8.8241,30.2695 L1.1835,22.3477 C0.7146,21.8789 0.5509,21.4805 0.5509,20.9883 C0.5509,20.5195 0.7146,20.0977 1.1835,19.6289 L8.8241,11.707 C9.1757,11.3555 9.5507,11.168 10.0663,11.168 C11.0038,11.168 11.7069,11.8945 11.7069,12.8789 C11.7069,13.3242 11.5194,13.8164 11.1444,14.1445 L7.371,17.6836 L5.7069,19.2774 L9.1991,19.1367 L33.2694,19.1367 C34.2538,19.1367 35.0975,19.9805 35.0975,20.9883 Z M53.4491,34.4414 C53.4491,39.3164 51.035,41.8008 46.1835,41.8008 L23.0741,41.8008 C18.2226,41.8008 15.8085,39.3164 15.8085,34.4414 L15.8085,27.9024 L19.5819,27.9024 L19.5819,34.3711 C19.5819,36.7148 20.8241,38.0274 23.2616,38.0274 L45.996,38.0274 C48.4335,38.0274 49.6757,36.7148 49.6757,34.3711 L49.6757,7.6055 C49.6757,5.3086 48.4335,3.9726 45.996,3.9726 L23.2616,3.9726 C20.8241,3.9726 19.5819,5.3086 19.5819,7.6055 L19.5819,14.0742 L15.8085,14.0742 L15.8085,7.5586 C15.8085,2.6367 18.246,0.1992 23.0741,0.1992 L46.1835,0.1992 C51.0116,0.1992 53.4491,2.6367 53.4491,7.5586 L53.4491,34.4414 Z" transform="translate(1 7)"></path>
                            </symbol>
                            <g class="background">
                                <rect width="100%" height="100%" fill="none" rx="0%" ry="0%" x="0%" y="0%" stroke-width="0%" stroke="none"></rect>
                            </g>
                            <use xlink:href="#hpIconSymbol-logout" class="content" fill="rgb(51, 43, 71)" transform-origin="center" style="transform: scale(1) rotate(0deg);"></use>
                        </svg>
                        Log out
                    </button>
                </form>
            </div>


        </nav>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72">
        <!-- Page Heading -->
        <header class="flex justify-between">
            <div class="flex flex-col">
                    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">
                        About <i>pixelprompt</i>
                    </h1>
                    <p class="mt-4 text-lg text-gray-800 dark:text-gray-400"><i>PixelPrompt</i> is an app that serves as a storage and viewing platform for your AI-generated image creations along with the prompts used to create them. With <i>pixelprompt</i>, you can easily access and showcase your artwork, allowing you to build a personal collection and share your creative journey with others.
                        <br><br>Welcome to <i>pixelprompt</i>, your hub for preserving and enjoying your AI-generated masterpieces.</p>
            </div>
        </header>
    </div>
    </body>
@endsection

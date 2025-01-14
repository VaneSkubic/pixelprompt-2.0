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
                @if(Route::is('prompts.showYourPrompts'))
                    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">
                        Personal
                    </h1>
                    <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">View the prompts that you uploaded yourself.</p>
                @elseif(Route::is('prompts.index'))
                    <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">
                        Community
                    </h1>
                    <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">Explore prompts from users in the community.</p>
                @elseif(Route::is('prompts.showLikedPrompts'))
                        <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">
                            Liked
                        </h1>
                        <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">Check out the prompts that you liked.</p>
                    @endif
            </div>

            @if(Route::is('prompts.showYourPrompts'))
                <button type="button" class="h-fit py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                    Add prompt
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                        <symbol id="hpIconSymbol-plus" fill="currentColor" viewBox="0 0 56 56"><path xmlns="http://www.w3.org/2000/svg" d="M 27.9883 47.7344 C 29.1367 47.7344 30.0976 46.8203 30.0976 45.6953 L 30.0976 30.1094 L 45.2383 30.1094 C 46.3633 30.1094 47.3476 29.1484 47.3476 28 C 47.3476 26.8516 46.3633 25.9141 45.2383 25.9141 L 30.0976 25.9141 L 30.0976 10.3047 C 30.0976 9.1797 29.1367 8.2656 27.9883 8.2656 C 26.8398 8.2656 25.9024 9.1797 25.9024 10.3047 L 25.9024 25.9141 L 10.7617 25.9141 C 9.6367 25.9141 8.6524 26.8516 8.6524 28 C 8.6524 29.1484 9.6367 30.1094 10.7617 30.1094 L 25.9024 30.1094 L 25.9024 45.6953 C 25.9024 46.8203 26.8398 47.7344 27.9883 47.7344 Z"></path></symbol>
                        <g class="background">
                            <rect width="100%" height="100%" fill="none" rx="0%" ry="0%" x="0%" y="0%" stroke-width="0%" stroke="none"></rect>
                        </g>
                        <use xlink:href="#hpIconSymbol-plus" class="content" fill="rgb(51, 43, 71)" transform-origin="center" style="transform: scale(1) rotate(0deg);"></use>
                    </svg>
                </button>
            @endif
            <div id="hs-vertically-centered-scrollable-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                <div class="hs-overlay-open:mt-7 justify-center hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                    <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                            <h3 class="font-bold text-gray-800 dark:text-white">
                                Add prompt
                            </h3>
                            <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>
                        <form method="POST" action="{{route('prompts.store')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="p-4 overflow-y-auto">
                            <div class="space-y-4">
                                <label for="body" class="block text-sm font-medium mb-2 dark:text-white">Prompt</label>
                                <textarea name="body" id="body" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="3" cols="50" placeholder="The prompt that was used used to generate the image"></textarea>

                                <label for="body" class="block text-sm font-medium mb-2 dark:text-white">Image</label>
                                    <label for="image" class="sr-only">Choose file</label>
                                    <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg, image/svg" name="image" id="image" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                        file:bg-transparent file:border-0
                                        file:bg-gray-100 file:mr-4
                                        file:py-3 file:px-4
                                        dark:file:bg-gray-700 dark:file:text-gray-400">

                            </div>
                        </div>
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                            <button type="reset" class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                Discard
                            </button>
                            <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                Add
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
            <main>
                @if($prompts->isEmpty())
                    <div class="mt-8 min-h-[15rem] w-full flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                        <div class="flex w-full flex-auto flex-col justify-center items-center p-4 md:p-5">
                            <svg class="max-w-[5rem]" viewBox="0 0 375 428" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M254.509 253.872L226.509 226.872" class="stroke-gray-400 dark:stroke-white" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                                <path d="M237.219 54.3721C254.387 76.4666 264.609 104.226 264.609 134.372C264.609 206.445 206.182 264.872 134.109 264.872C62.0355 264.872 3.60864 206.445 3.60864 134.372C3.60864 62.2989 62.0355 3.87207 134.109 3.87207C160.463 3.87207 184.993 11.6844 205.509 25.1196" class="stroke-gray-400 dark:stroke-white" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                                <rect x="270.524" y="221.872" width="137.404" height="73.2425" rx="36.6212" transform="rotate(40.8596 270.524 221.872)" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                <ellipse cx="133.109" cy="404.372" rx="121.5" ry="23.5" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                <path d="M111.608 188.872C120.959 177.043 141.18 171.616 156.608 188.872" class="stroke-gray-400 dark:stroke-white" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                                <ellipse cx="96.6084" cy="116.872" rx="9" ry="12" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                <ellipse cx="172.608" cy="117.872" rx="9" ry="12" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                <path d="M194.339 147.588C189.547 148.866 189.114 142.999 189.728 138.038C189.918 136.501 191.738 135.958 192.749 137.131C196.12 141.047 199.165 146.301 194.339 147.588Z" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                            </svg>
                            <p class="mt-5 text-sm text-gray-500 dark:text-gray-500">
                                No data to show
                            </p>
                        </div>
                    </div>
                @else
                    <div class="max-w-[85rem] py-8 mx-auto">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($prompts as $prompt)
                                <div class="w-full overflow-hidden relative h-fit hover:shadow-lg hover:cursor-pointer transition-all flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                    @if($prompt->user_id != auth()->user()->id)
                                        <form method="POST" action="{{route('prompts.likes')}}" >
                                            @csrf
                                            <input type="hidden" name="prompt_id" value="{{$prompt->id}}">
                                            <button type="submit" class="absolute top-0 right-0 text-white  rounded-bl-xl p-2 bg-white dark:bg-gray-800">
                                                {{--                                        @dd(auth()->user()->likes)--}}
                                                @if(auth()->user()->likes->contains($prompt->id))
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                                                        <symbol id="hpIconSymbol-unlike" viewBox="0 0 56 56"><path xmlns="http://www.w3.org/2000/svg" d="M 28.0000 49.5156 C 28.4922 49.5156 29.1953 49.1875 29.6875 48.8828 C 42.9765 40.5156 51.2735 30.6250 51.2735 20.6406 C 51.2735 12.3438 45.5781 6.4844 37.9843 6.4844 C 33.6250 6.4844 30.1094 9.0625 28.0000 13.0234 C 25.8906 9.0860 22.3515 6.4844 18.0156 6.4844 C 10.4219 6.4844 4.7265 12.3438 4.7265 20.6406 C 4.7265 30.6250 12.9531 40.6328 26.2890 48.8828 C 26.8046 49.1875 27.5078 49.5156 28.0000 49.5156 Z"></path></symbol>
                                                        <g class="background">
                                                            <rect width="100%" height="100%" fill="none" rx="0%" ry="0%" x="0%" y="0%" stroke-width="0%" stroke="none"></rect>
                                                        </g>
                                                        <use xlink:href="#hpIconSymbol-unlike" class="content" fill="rgb(254, 74, 73)" transform-origin="center" style="transform: scale(0.7) rotate(0deg);"></use>
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                                                        <symbol id="hpIconSymbol-like" viewBox="0 0 56 56"><path xmlns="http://www.w3.org/2000/svg" d="M 4.7265 20.6406 C 4.7265 30.6250 13.0937 40.4453 26.2890 48.8828 C 26.8046 49.1875 27.5078 49.5156 28.0000 49.5156 C 28.4922 49.5156 29.1953 49.1875 29.6875 48.8828 C 42.9062 40.4453 51.2735 30.6250 51.2735 20.6406 C 51.2735 12.3438 45.5781 6.4844 37.9843 6.4844 C 33.6250 6.4844 30.1094 8.5469 28.0000 11.7109 C 25.8906 8.5703 22.3515 6.4844 18.0156 6.4844 C 10.4219 6.4844 4.7265 12.3438 4.7265 20.6406 Z M 8.5000 20.6406 C 8.5000 14.4063 12.5312 10.2578 17.9687 10.2578 C 22.3750 10.2578 24.8828 13.0000 26.4062 15.3438 C 27.0390 16.2813 27.4375 16.5391 28.0000 16.5391 C 28.5625 16.5391 28.9141 16.2578 29.5937 15.3438 C 31.1875 13.0469 33.6484 10.2578 38.0312 10.2578 C 43.4687 10.2578 47.5000 14.4063 47.5000 20.6406 C 47.5000 29.3594 38.2890 38.7578 28.4687 45.2734 C 28.2343 45.4375 28.0937 45.5547 28.0000 45.5547 C 27.9062 45.5547 27.7422 45.4375 27.5078 45.2734 C 17.7109 38.7578 8.5000 29.3594 8.5000 20.6406 Z"></path></symbol>
                                                        <g class="background">
                                                            <rect width="100%" height="100%" fill="none" rx="0%" ry="0%" x="0%" y="0%" stroke-width="0%" stroke="none"></rect>
                                                        </g>
                                                        <use xlink:href="#hpIconSymbol-like" class="content" fill="rgb(254, 74, 73)" transform-origin="center" style="transform: scale(0.7) rotate(0deg);"></use>
                                                    </svg>
                                                @endif
                                            </button>
                                        </form>
                                    @endif
                                    <img class="w-full h-auto rounded-t-xl" src="{{asset('storage/'.$prompt->image)}}" alt="Image Description">
                                    <div class="p-4 md:p-5">
                                        <p class="mt-1 text-gray-800 dark:text-gray-400">
                                            {{$prompt->body}}
                                        </p>
                                        <div class="flex justify-between items-center gap-2">
                                            <p class="mt-5 text-xs text-gray-500 dark:text-gray-500">
                                                {{$prompt->user->name}}
                                            </p>
                                            <p class="mt-5 text-xs text-gray-500 dark:text-gray-500">
                                                {{$prompt->created_at->diffForHumans()}}
                                            </p>
                                        </div>
                                    </div>
                                    @if($prompt->user_id == auth()->user()->id)
                                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                                            <button type="button" class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal-edit-{{$prompt->id}}">
                                                Edit
                                            </button>
                                            <div id="hs-vertically-centered-scrollable-modal-edit-{{$prompt->id}}" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                                                <div class="hs-overlay-open:mt-7 justify-center hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                                                    <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                            <h3 class="font-bold text-gray-800 dark:text-white">
                                                                Edit prompt
                                                            </h3>
                                                            <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal-edit-{{$prompt->id}}">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="{{route('prompts.update')}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="p-4 overflow-y-auto">
                                                                <input type="hidden" name="prompt_id" value="{{$prompt->id}}">
                                                                <div class="space-y-4">
                                                                    <label for="body" class="block text-sm font-medium mb-2 dark:text-white">Prompt</label>
                                                                    <textarea name="body" id="body" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="3" cols="50" placeholder="The prompt that was used to generate the image">{{$prompt->body}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                                <button type="reset" class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-vertically-centered-scrollable-modal-edit-{{$prompt->id}}">
                                                                    Discard
                                                                </button>
                                                                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" action="{{route("prompts.delete")}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="prompt_id" value="{{$prompt->id}}">
                                                <button type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                @endif

                </div>

            </main>
    </div>
    </body>
@endsection

@section('title', 'Sign in to your account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Sign in to your account
        </h2>
        @if (Route::has('register'))
            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                Or
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    create a new account
                </a>
            </p>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Remember
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

{{--<main class="w-full max-w-md mx-auto p-6">--}}
{{--    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">--}}
{{--        <div class="p-4 sm:p-7">--}}
{{--            <div class="text-center">--}}
{{--                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>--}}
{{--                @if (Route::has('register'))--}}
{{--                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                        Don't have an account yet?--}}

{{--                        <a class="text-blue-600 decoration-2 hover:underline font-medium" href="{{ route('register') }}">--}}
{{--                            Sign up here--}}
{{--                        </a>--}}
{{--                    </p>--}}
{{--                @endif--}}

{{--            </div>--}}

{{--            <div class="mt-5">--}}

{{--                <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:mr-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ml-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">Or</div>--}}

{{--                <!-- Form -->--}}
{{--                <form wire:submit.prevent="authenticate">--}}
{{--                    <div class="grid gap-y-4">--}}
{{--                        <!-- Form Group -->--}}
{{--                        <div>--}}
{{--                            <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>--}}
{{--                            <div class="relative">--}}
{{--                                <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" required aria-describedby="email-error">--}}
{{--                                <div class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">--}}
{{--                                    <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">--}}
{{--                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @error('email')--}}
{{--                            <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <!-- End Form Group -->--}}

{{--                        <!-- Form Group -->--}}
{{--                        <div>--}}
{{--                            <div class="flex justify-between items-center">--}}
{{--                                <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>--}}
{{--                                <a class="text-sm text-blue-600 decoration-2 hover:underline font-medium" href="{{ route('password.request') }}">Forgot password?</a>--}}
{{--                            </div>--}}
{{--                            <div class="relative">--}}
{{--                                <input wire:model.lazy="password" id="password" type="password" required class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" required aria-describedby="password-error">--}}
{{--                                <div class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">--}}
{{--                                    <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">--}}
{{--                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @error('password')--}}
{{--                            <p class="text-xs text-red-600 mt-2" id="password-error">{{ $message }}</p>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <!-- End Form Group -->--}}

{{--                        <!-- Checkbox -->--}}
{{--                        <div class="flex items-center">--}}
{{--                            <div class="flex">--}}
{{--                                <input wire:model.lazy="remember" id="remember" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3">--}}
{{--                                <label for="remember" class="text-sm dark:text-white">Remember me</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Checkbox -->--}}

{{--                        <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Sign in</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <!-- End Form -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}

<x-guest>
    <div class="mx-auto max-w-md space-y-6 ">
        @if (session('success'))
        @include('partials.flashbag')
        @endif
        @if (session('error'))
        @include('partials.flashbag')
        @endif
        <div class="space-y-2 text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-50">Sign in to your account
            </h2>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Don't have an account?
                <a class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300"
                    href="{{ route('signup') }}">
                    Register
                </a>
            </p>
        </div>
        <form method="POST" action="{{ route('login') }}" >
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Email</label>
                <input id="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}" required
                    type="email"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-700 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:focus:ring-indigo-600">

            </div>
            <div class="mb-6">
                <label for="password"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-400">Password</label>
                <div class="flex items-center justify-between">
                    <input autoComplete="current-password" id="password" name="password"
                        placeholder="Enter your password" required type="password"
                        class="w-full rounded-md border border-gray-300 dark:border-gray-700 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:focus:ring-indigo-600">

                </div>
                <!-- Forgot password -->
                    {{--@if (Route::has('password.request')) --}}
                        <a class="text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300"
                            href="#">Forgot password?</a>
                   {{-- @endif --}}
            </div>
            <button type="submit"
                class="w-full flex justify-center items-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign
                in</button>
        </form>
    </div>

</x-guest>

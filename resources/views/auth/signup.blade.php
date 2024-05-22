<x-guest>
    <div class="mx-auto max-w-md space-y-6">
        <div class="space-y-2 text-center">
            <h1 class="text-3xl font-bold">Register</h1>
            <p class="text-gray-500 dark:text-gray-400">Create your account to get started.</p>
        </div>
        <form action="{{ route('referees.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="space-y-2">
                <label for="name">Full Name</label>
                <input id="name" name="fullName" placeholder="Enter your Full Name" required type="text" value="{{ old('fullName') }}"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-700 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                @error('fullName')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="number">License Number</label>
                <input id="number" name="licenseNum" placeholder="Enter your Number" required type="text" value="{{ old('licenseNum') }}"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-700 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                @error('licenseNum')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="email">Email</label>
                <input id="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}" required type="email"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-700 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="password">Password</label>
                <input id="password" name="password" placeholder="Enter your password" required type="password" value="{{ old('password') }}"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-700 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="cnPassword">Confirme Password</label>
                <input id="cnPassword" name="password_confirmation" placeholder="Confirme your password" required type="password" value="{{ old('password_confirmation') }}"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-700 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                    @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="w-full flex justify-center items-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Sign up
            </button>
            <p>Already registered!
                <a class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300"
                    href="{{ route('login.show') }}">
                    Login
                </a>
            </p>
        </form>
    </div>
</x-guest>

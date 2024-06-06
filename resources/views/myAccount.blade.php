<x-master>
    <div class="container mx-auto p-4 bg-white p-6 rounded shadow-md"
        style=" box-shadow: 10px 10px 20px #abafbb,
    -10px -10px 20px #ffffff;">
        @if (session('success'))
            @include('partials.flashbag')
        @endif
        <h1 class="text-2xl font-bold mb-6">Edit Profile</h1>
        <form action="{{ route('referees.update', $referee->id) }}" method="POST" enctype="multipart/form-data"
            class="">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Profile Picture:</label>
                <img id="profilePicturePreview"
                    src="{{ $referee->photo ? asset('storage/' . $referee->photo) : asset('storage/images/inconnu.png') }}"
                    alt="Profile Picture" class="mt-4 w-24 h-24 rounded-full">
                <input type="file" name="photo" id="photoInput"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                    onchange="previewImage(event)">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Full Name:</label>
                <input type="text" name="fullName" value="{{ old('fullName', $referee->fullName) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('fullName')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" name="email" value="{{ old('email', $referee->email) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" name="password" value=""
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Confirm Password:</label>
                <input type="password" name="password_confirmation" value=""
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password_confirmation')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
            </div>
        </form>
        <button id="deleteAccountButton"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 mx-auto">Delete
            My Account</button>
    </div>

    <!-- Modal -->
    <div id="confirmationModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 hidden">
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-xl font-bold mb-4">Confirm Deletion</h2>
            <p class="mb-4">Are you sure you want to delete your account? This action cannot be undone.</p>
            <div class="flex justify-end">
                <button id="cancelButton"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel</button>
                <form action="{{ route('referees.destroy', $referee->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Confirm</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('profilePicturePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        document.getElementById('deleteAccountButton').addEventListener('click', function() {
            document.getElementById('confirmationModal').classList.remove('hidden');
        });

        document.getElementById('cancelButton').addEventListener('click', function() {
            document.getElementById('confirmationModal').classList.add('hidden');
        });
    </script>
</x-master>

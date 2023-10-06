<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Picture') }}
        </h2>
    </header>

    <div class="mt-4">
        <!-- Display the user's profile picture -->
        <img src="{{ asset('storage/profile_pictures' . auth()->user()->profile_picture_path) }}" alt="{{ __('Profile Picture') }}" class="mt-2 w-32 h-32 rounded-full object-cover">

        <!-- Add an "Upload New Picture" button if you want users to be able to update their picture -->
        <div class="mt-4">
            <form action="{{ route('profile.picture.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label for="profile_picture" class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Upload New Picture') }}
                </label>
                <input type="file" id="profile_picture" name="profile_picture" class="mt-2" accept="image/*">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">{{ __('Upload') }}</button>
            </form>
        </div>
    </div>
</section>

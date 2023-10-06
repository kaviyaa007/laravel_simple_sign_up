<!-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Picture') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your profile picture.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Upload') }}</x-primary-button>
            @if (session('status') === 'profile-picture-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Profile picture updated.') }}</p>
            @endif
        </div>
    </form>
</section> -->

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Picture') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your profile picture.") }}
        </p>
    </header>

    <div class="mt-4">
        <!-- Display the user's current profile picture if available -->
        @if (auth()->user()->profile_picture_path)
            <img src="{{ asset('storage/' . auth()->user()->profile_picture_path) }}" alt="{{ __('Profile Picture') }}" class="mt-2 w-32 h-32 rounded-full object-cover">
        @else
            <p class="mt-2 text-gray-600 dark:text-gray-400">{{ __('No profile picture available.') }}</p>
        @endif
    </div>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Upload') }}</x-primary-button>
            @if (session('status') === 'profile-picture-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Profile picture updated.') }}</p>
            @endif
        </div>
    </form>
</section>
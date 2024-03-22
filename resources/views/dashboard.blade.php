<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("New Post Create!") }}

                    <form method="POST" action="{{ route('savepost') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="content" :value="__('Content')" />

                                <x-text-input id="content" class="block mt-1 w-full"
                                                type="text"
                                                name="content"
                                                required autocomplete="content" />

                                <x-input-error :messages="$errors->get('content')" class="mt-2" />
                            </div>

                           

                            <div class="flex items-center justify-end mt-4">
                               

                                <x-primary-button class="ml-3">
                                    {{ __('Save') }}
                                </x-primary-button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

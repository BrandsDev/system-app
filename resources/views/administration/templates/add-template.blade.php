<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Template') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <section>
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        {{ __('Template Information') }}
                                    </h2>
                                </header>

                                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                    @csrf
                                </form>

                                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('patch')

                                    <div>
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>

                                    <div>
                                        <x-input-label for="slug" :value="__('Slug')" />
                                        <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" required autofocus autocomplete="slug" />
                                        <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                                    </div>

                                    <div>
                                        <x-input-label for="email" :value="__('Seller Email')" />
                                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required autocomplete="username" />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />            
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                                        
                                            <p
                                                x-data="{ show: true }"
                                                x-show="show"
                                                x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400"
                                            >{{ __('Saved.') }}</p>
                                        
                                    </div>
                                </form>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <section>
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        {{ __('Template Information') }}
                                    </h2>
                                </header>

                                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                    @csrf
                                </form>

                                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('patch')

                                    <div>
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>

                                    <div>
                                        <x-input-label for="slug" :value="__('Slug')" />
                                        <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" required autofocus autocomplete="slug" />
                                        <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                                    </div>

                                    <div>
                                        <x-input-label for="email" :value="__('Seller Email')" />
                                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required autocomplete="username" />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />            
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                                        
                                            <p
                                                x-data="{ show: true }"
                                                x-show="show"
                                                x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400"
                                            >{{ __('Saved.') }}</p>
                                        
                                    </div>
                                </form>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Template') }}
        </h2>
    </x-slot>

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
                                <x-input-label for="category" :value="__('Category')" />
                                <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" required autofocus autocomplete="category" />
                                <x-input-error class="mt-2" :messages="$errors->get('category')" />
                            </div>

                            <div>
                                <x-input-label for="sub-category" :value="__('Sub Category')" />
                                <x-text-input id="sub-category" name="sub-category" type="text" class="mt-1 block w-full" required autofocus autocomplete="sub-category" />
                                <x-input-error class="mt-2" :messages="$errors->get('category')" />
                            </div>

                            <div>
                                <x-input-label for="sub-sub-category" :value="__('Sub Sub Category')" />
                                <x-text-input id="sub-sub-category" name="sub-sub-category" type="text" class="mt-1 block w-full" required autofocus autocomplete="sub-sub-category" />
                                <x-input-error class="mt-2" :messages="$errors->get('sub-sub-category')" />
                            </div>

                            <div>
                                <x-input-label for="sale-price" :value="__('Sale Price')" />
                                <x-text-input id="sale-price" name="sale-price" type="text" class="mt-1 block w-full" required autofocus autocomplete="sale-price" />
                                <x-input-error class="mt-2" :messages="$errors->get('sale-price')" />
                            </div>

                            <div>
                                <x-input-label for="regular-price" :value="__('Regular Price')" />
                                <x-text-input id="regular-price" name="regular-price" type="text" class="mt-1 block w-full" required autofocus autocomplete="regular-price" />
                                <x-input-error class="mt-2" :messages="$errors->get('regular-price')" />
                            </div>

                            <div>
                                <x-input-label for="short-description" :value="__('Short Description')" />
                                <x-text-input id="short-description" name="short-description" type="text" class="mt-1 block w-full" required autofocus autocomplete="short-description" />
                                <x-input-error class="mt-2" :messages="$errors->get('short-description')" />
                            </div>

                            <div>
                                <x-input-label for="long-description" :value="__('Long Description')" />
                                <x-text-input id="long-description" name="long-description" type="text" class="mt-1 block w-full" required autofocus autocomplete="long-description" />
                                <x-input-error class="mt-2" :messages="$errors->get('long-description')" />
                            </div>

                            <div>
                                <x-input-label for="bootstrap-v" :value="__('Bootstrap')" />
                                <x-text-input id="bootstrap-v" name="bootstrap-v" type="text" class="mt-1 block w-full" required autofocus autocomplete="bootstrap-v" />
                                <x-input-error class="mt-2" :messages="$errors->get('bootstrap-v')" />
                            </div>

                            <div>
                                <x-input-label for="released" :value="__('Released')" />
                                <x-text-input id="released" name="released" type="text" class="mt-1 block w-full" required autofocus autocomplete="released" />
                                <x-input-error class="mt-2" :messages="$errors->get('released')" />
                            </div>

                            <div>
                                <x-input-label for="updated" :value="__('Updated')" />
                                <x-text-input id="updated" name="updated" type="text" class="mt-1 block w-full" required autofocus autocomplete="updated" />
                                <x-input-error class="mt-2" :messages="$errors->get('updated')" />
                            </div>

                            <div>
                                <x-input-label for="version" :value="__('Version')" />
                                <x-text-input id="version" name="version" type="text" class="mt-1 block w-full" required autofocus autocomplete="version" />
                                <x-input-error class="mt-2" :messages="$errors->get('version')" />
                            </div>

                            <div>
                                <x-input-label for="seller-name" :value="__('Seller Name')" />
                                <x-text-input id="seller-name" name="seller-name" type="text" class="mt-1 block w-full" required autofocus autocomplete="seller-name" />
                                <x-input-error class="mt-2" :messages="$errors->get('seller-name')" />            
                            </div>

                            <div>
                                <x-input-label for="seller-email" :value="__('Seller Email')" />
                                <x-text-input id="seller-email" name="seller-email" type="text" class="mt-1 block w-full" required autofocus autocomplete="seller-email" />
                                <x-input-error class="mt-2" :messages="$errors->get('seller-email')" />            
                            </div>

                            <div>
                                <x-input-label for="Image" :value="__('Image')" />
                                <x-text-input id="Image" name="Image" type="text" class="mt-1 block w-full" required autofocus autocomplete="Image" />
                                <x-input-error class="mt-2" :messages="$errors->get('Image')" />
                            </div>

                            <div>
                                <x-input-label for="youtube-iframe" :value="__('Youtube Iframe')" />
                                <x-text-input id="youtube-iframe" name="youtube-iframe" type="text" class="mt-1 block w-full" required autofocus autocomplete="youtube-iframe" />
                                <x-input-error class="mt-2" :messages="$errors->get('youtube-iframe')" />
                            </div>

                            <div>
                                <x-input-label for="live-preview-link" :value="__('Live Preview Link')" />
                                <x-text-input id="live-preview-link" name="live-preview-link" type="text" class="mt-1 block w-full" required autofocus autocomplete="live-preview-link" />
                                <x-input-error class="mt-2" :messages="$errors->get('live-preview-link')" />
                            </div>

                            <div>
                                <x-input-label for="downloadable-link" :value="__('Downloadable Link')" />
                                <x-text-input id="downloadable-link" name="downloadable-link" type="text" class="mt-1 block w-full" required autofocus autocomplete="downloadable-link" />
                                <x-input-error class="mt-2" :messages="$errors->get('downloadable-link')" />
                            </div>

                            <div>
                                <x-input-label for="downloadable-file" :value="__('Upload Downloadable File')" />
                                <x-text-input id="downloadable-file" name="downloadable-file" type="text" class="mt-1 block w-full" required autofocus autocomplete="downloadable-file" />
                                <x-input-error class="mt-2" :messages="$errors->get('downloadable-file')" />
                            </div>

                            <div>
                                <x-input-label for="header-content" :value="__('Header Content')" />
                                <x-text-input id="header-content" name="header-content" type="text" class="mt-1 block w-full" required autofocus autocomplete="header-content" />
                                <x-input-error class="mt-2" :messages="$errors->get('header-content')" />
                            </div>

                            <div>
                                <x-input-label for="meta-title" :value="__('Meta Title')" />
                                <x-text-input id="meta-title" name="meta-title" type="text" class="mt-1 block w-full" required autofocus autocomplete="meta-title" />
                                <x-input-error class="mt-2" :messages="$errors->get('meta-title')" />
                            </div>

                            <div>
                                <x-input-label for="meta-description" :value="__('Meta Description')" />
                                <x-text-input id="meta-description" name="meta-description" type="text" class="mt-1 block w-full" required autofocus autocomplete="meta-description" />
                                <x-input-error class="mt-2" :messages="$errors->get('meta-description')" />
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
</x-app-layout>

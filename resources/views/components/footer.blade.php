<footer class="bg-white dark:bg-gray-800 shadow-inner mt-8">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ config('app.name') }}</h3>
                <p class="text-gray-600 dark:text-gray-400">{{ __('messages.tagline') }}</p>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ __('messages.quick_links') }}</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#contact-section" class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                            {{ __('messages.join_us') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                            {{ __('messages.about_us') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                            {{ __('messages.contact') }}
                        </a>
                    </li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ __('messages.contact') }}</h3>
                <p class="text-gray-600 dark:text-gray-400">Email: info@coursea.com</p>
            </div>
        </div>
        
        <div class="border-t border-gray-200 dark:border-gray-700 mt-8 pt-6 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-600 dark:text-gray-400 text-sm">
                &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('messages.all_rights_reserved') }}
            </p>
        </div>
    </div>
</footer>

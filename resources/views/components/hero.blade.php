<div class="relative bg-indigo-700 dark:bg-indigo-900">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-900 opacity-90"></div>
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Background">
    </div>
    
    <div class="relative container mx-auto px-4 py-24 md:py-32 lg:py-40">
        <div class="max-w-3xl">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                {{ __('messages.welcome') }}
            </h1>
            <p class="text-xl text-indigo-100 mb-10">
                {{ __('messages.tagline') }}
            </p>
            <div class="flex flex-wrap gap-4">
                @auth
                    <a href="/{{ app()->getLocale() }}/platform" class="bg-white text-indigo-700 hover:bg-gray-100 px-6 py-3 rounded-md font-medium">
                        {{ __('messages.go_to_platform') }}
                    </a>
                @else
                    <a href="/{{ app()->getLocale() }}/login" class="bg-white text-indigo-700 hover:bg-gray-100 px-6 py-3 rounded-md font-medium">
                        {{ __('messages.login') }}
                    </a>
                @endauth
                <a href="#contact-section" class="border border-white text-white hover:bg-indigo-800 px-6 py-3 rounded-md font-medium">
                    {{ __('messages.join_us') }}
                </a>
            </div>
        </div>
    </div>
</div>

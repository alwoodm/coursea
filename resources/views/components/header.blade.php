<header class="bg-white dark:bg-gray-800 shadow-sm">
    <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center">
            <a href="/{{ app()->getLocale() }}/welcome" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">
                {{ config('app.name') }}
            </a>
        </div>
        
        <div class="hidden md:flex items-center space-x-6">
            <!-- For authorized users only -->
            @auth
                <a href="/{{ app()->getLocale() }}/platform" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                    {{ __('messages.go_to_platform') }}
                </a>
            @endauth
            
            <div class="flex items-center space-x-4">
                <x-language-switcher />
                <x-theme-switcher />
                
                @auth
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                            {{ Auth::user()->name }}
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 z-10">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    {{ __('messages.logout') }}
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/{{ app()->getLocale() }}/login" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                        {{ __('messages.login') }}
                    </a>
                @endauth
            </div>
        </div>
        
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center space-x-3">
            <x-theme-switcher />
            <x-language-switcher />
            
            <button type="button" class="text-gray-700 dark:text-gray-300" id="mobileMenuBtn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>
    
    <!-- Mobile menu, show/hide based on menu state -->
    <div class="md:hidden hidden" id="mobileMenu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @auth
                <a href="/{{ app()->getLocale() }}/platform" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                    {{ __('messages.go_to_platform') }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                        {{ __('messages.logout') }}
                    </button>
                </form>
            @else
                <a href="/{{ app()->getLocale() }}/login" class="block px-3 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                    {{ __('messages.login') }}
                </a>
            @endauth
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>

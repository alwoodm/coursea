<div x-data="{ open: false }" class="relative">
    <button 
        @click="open = !open" 
        type="button" 
        class="flex items-center text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 space-x-1"
    >
        @php
            $locale = app()->getLocale();
            $localeName = [
                'en' => 'English',
                'es' => 'Español',
                'pl' => 'Polski'
            ][$locale] ?? 'English';
            
            $flagIcon = [
                'en' => '🇬🇧',
                'es' => '🇪🇸',
                'pl' => '🇵🇱'
            ][$locale] ?? '🇬🇧';
        @endphp
        
        <span class="text-lg">{{ $flagIcon }}</span>
        <span>{{ $localeName }}</span>
        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    
    <div 
        x-show="open" 
        @click.away="open = false" 
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 z-10"
        style="display: none;"
    >
        <a href="/en/welcome" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center">
            <span class="text-lg mr-2">🇬🇧</span> English
        </a>
        <a href="/es/welcome" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center">
            <span class="text-lg mr-2">🇪🇸</span> Español
        </a>
        <a href="/pl/welcome" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center">
            <span class="text-lg mr-2">🇵🇱</span> Polski
        </a>
    </div>
</div>

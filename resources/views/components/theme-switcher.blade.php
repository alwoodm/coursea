<div x-data="themeController" class="theme-switcher flex items-center">
    <button 
        @click="toggleTheme()" 
        class="flex items-center justify-center p-2 rounded-full text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        aria-label="Toggle Dark Mode"
    >
        <!-- Sun icon (for dark mode) -->
        <svg x-show="isDarkMode" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        
        <!-- Moon icon (for light mode) -->
        <svg x-show="!isDarkMode" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
    </button>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('themeController', () => ({
        isDarkMode: document.documentElement.classList.contains('dark'),
        
        init() {
            // Initialize theme based on localStorage or system preference
            const savedTheme = localStorage.getItem('darkMode');
            
            if (savedTheme === 'true' || (savedTheme === null && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                this.isDarkMode = true;
            } else {
                document.documentElement.classList.remove('dark');
                this.isDarkMode = false;
            }
        },
        
        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
            
            if (this.isDarkMode) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('darkMode', 'true');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('darkMode', 'false');
            }
        }
    }));
});
</script>

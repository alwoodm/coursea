@props(['course', 'featured' => false])

<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105 {{ $featured ? 'border-2 border-indigo-500' : '' }}">
    <div class="relative">
        <img src="{{ $course->image ?? 'https://via.placeholder.com/600x400' }}" alt="{{ $course->title ?? 'Course image' }}" class="w-full h-48 object-cover">
        @if($featured)
            <div class="absolute top-0 right-0 bg-indigo-600 text-white px-3 py-1 text-sm font-semibold">
                {{ __('messages.featured') }}
            </div>
        @endif
    </div>
    
    <div class="p-5">
        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-2">{{ $course->title ?? 'Course Title' }}</h3>
        
        <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-3">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
            </svg>
            {{ $course->lessons_count ?? 0 }} {{ __('messages.lessons') }}
        </div>
        
        <p class="text-gray-700 dark:text-gray-300 text-sm mb-4 line-clamp-3">
            {{ $course->description ?? 'This is a sample course description that highlights the key features of the course.' }}
        </p>
        
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-1">
                @for($i = 1; $i <= 5; $i++)
                    <svg class="w-4 h-4 {{ $i <= ($course->rating ?? 4) ? 'text-yellow-500' : 'text-gray-300 dark:text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                @endfor
                <span class="text-xs text-gray-600 dark:text-gray-400 ml-1">
                    ({{ $course->reviews_count ?? rand(10, 100) }})
                </span>
            </div>
            
            <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm font-medium transition">
                {{ __('messages.learn_more') }}
            </a>
        </div>
    </div>
</div>

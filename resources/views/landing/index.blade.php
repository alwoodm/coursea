<x-layout>
    <x-hero />
    
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
                        {{ __('features.why_choose_us') }}
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('features.expert_instructors') }}</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">{{ __('features.expert_instructors_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('features.secure_platform') }}</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">{{ __('features.secure_platform_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('features.flexible_learning') }}</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">{{ __('features.flexible_learning_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80" alt="Online learning" class="rounded-lg shadow-xl">
                    <div class="absolute -bottom-6 -right-6 h-24 w-24 bg-indigo-600 rounded-lg hidden lg:block"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact-section" class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-6">
                {{ __('contact.join_platform') }}
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 text-center mb-12 max-w-3xl mx-auto">
                {{ __('contact.join_platform_description') }}
            </p>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h3 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">{{ __('contact.join_as_instructor') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">{{ __('contact.join_as_instructor_description') }}</p>
                    
                    <form action="{{ route('contact.instructor') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="type" value="instructor">
                        
                        <div>
                            <label for="instructor_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.full_name') }}</label>
                            <input type="text" id="instructor_name" name="name" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>
                        
                        <div>
                            <label for="instructor_email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.email') }}</label>
                            <input type="email" id="instructor_email" name="email" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>
                        
                        <div>
                            <label for="instructor_specialty" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.specialty') }}</label>
                            <input type="text" id="instructor_specialty" name="specialty" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>
                        
                        <div>
                            <label for="instructor_message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.message') }}</label>
                            <textarea id="instructor_message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition">
                                {{ __('messages.send_request') }}
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h3 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">{{ __('messages.join_as_student') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">{{ __('messages.join_as_student_description') }}</p>
                    
                    <form action="{{ route('contact.student') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="type" value="student">
                        
                        <div>
                            <label for="student_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.full_name') }}</label>
                            <input type="text" id="student_name" name="name" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>
                        
                        <div>
                            <label for="student_email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.email') }}</label>
                            <input type="email" id="student_email" name="email" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>
                        
                        <div>
                            <label for="instructor_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.instructor_id') }}</label>
                            <input type="text" id="instructor_id" name="instructor_id" required class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('messages.instructor_id_required') }}</p>
                        </div>
                        
                        <div>
                            <label for="student_message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('messages.message') }}</label>
                            <textarea id="student_message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition">
                                {{ __('messages.send_request') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>

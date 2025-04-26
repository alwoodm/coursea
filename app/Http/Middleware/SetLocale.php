<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported languages
     */
    protected $languages = ['en', 'es', 'pl'];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the first URL segment is a language code
        $segment = $request->segment(1);
        
        if (in_array($segment, $this->languages)) {
            // Set the language
            App::setLocale($segment);
            Session::put('locale', $segment);
            
            // If we only have the language prefix without a path, redirect to the home page
            if (count($request->segments()) === 1) {
                return redirect("/$segment/welcome");
            }
        } else {
            // Default language from config
            $defaultLocale = config('app.locale', 'en');
            
            // If the user has previously selected a language, use it
            if (Session::has('locale')) {
                $defaultLocale = Session::get('locale');
            }
            
            // Redirect to the language version if we're on the root URL
            if (!$segment && $request->path() === '/') {
                return redirect("/$defaultLocale/welcome");
            }
        }
        
        return $next($request);
    }
}

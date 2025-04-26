<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LandingController extends Controller
{
    public function index(Request $request, $locale = null)
    {
        if ($locale && in_array($locale, ['en', 'es', 'pl'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }
        
        return view('landing.index');
    }
}

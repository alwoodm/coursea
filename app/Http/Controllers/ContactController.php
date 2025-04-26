<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function instructorContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'specialty' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);
        
        // Save to database
        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'type' => 'instructor',
            'specialty' => $validated['specialty'],
            'message' => $validated['message'] ?? '',
        ]);
        
        // Could add email notification to admin here
        
        return redirect()->back()->with('success', __('notifications.instructor_request_sent'));
    }
    
    public function studentContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'instructor_id' => 'required|string|max:50',
            'message' => 'nullable|string',
        ]);
        
        // Save to database
        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'type' => 'student',
            'instructor_id' => $validated['instructor_id'],
            'message' => $validated['message'] ?? '',
        ]);
        
        // Could add email notification to admin or instructor here
        
        return redirect()->back()->with('success', __('notifications.student_request_sent'));
    }
}

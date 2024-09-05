<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('help');
    }

    /**
     * Store a new contact message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        $validatedData['user_id'] = auth()->id();

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
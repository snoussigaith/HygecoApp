<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        $contacts = ContactForm::orderBy('id', 'desc')->get();
        return view('contact.contact-form', ['contacts' => $contacts]);

        
    }

    public function submitForm(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'first_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'object' => 'required',
            'note' => 'required',
        ]);


        // Create a new ContactForm instance with validated data
        $contactForm = new ContactForm($validatedData);
        
        // Save the contact form data into the database
        $contactForm->save();

       

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Form submitted successfully');
    }
}

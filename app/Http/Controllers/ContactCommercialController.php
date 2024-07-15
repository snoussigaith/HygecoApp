<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactCommercial;


class ContactCommercialController extends Controller
{
    public function index()
    {
        $contacts = ContactCommercial::orderBy('id', 'desc')->get();
        return view('contact.contact-commercial', ['contacts' => $contacts]);
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'nom_entreprise' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'nom_responsable' => 'required',
            'rue' => 'required',
            'unite' => 'required',
            'ville' => 'required',
            'province' => 'required',
            'code_postal' => 'required',

        ]);

        $contactForm = new ContactCommercial($validatedData);

        $contactForm->save();

        return redirect()->back()->with('status', 'Form submitted successfully');
    }
}

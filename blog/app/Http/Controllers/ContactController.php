<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact; 
class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); 
    }

    public function store(Request $request)
    {
        // on initialise notre nouvelle entrée contact
        $contact = new Contact; 

        // on vérifie les données entrées dans le formulaire
        $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'email' => ['required', 'max:255', 'string', 'email'],
            'message' => ['required']
        ]); 
        // si il y a une erreur, on redirige avec un message d'erreur 
        if(!$validatedData){
            dd('passe bien dans le if'); 
        }
        
        $contact->firstname = $validatedData['firstname'];
        $contact->lastname = $validatedData['lastname'];
        $contact->subject = $validatedData['subject'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];
        $contact->save(); 

        return redirect()->route('contact')->with('contact_success', 'Votre demande de contact à bien été prise en compte. Nous allons vous contactez les plus tôt possible.'); 
    }
}

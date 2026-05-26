<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function rgpd()
    {
        return view('pages.rgpd');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'project_type' => 'required|string',
            'message' => 'required|string|min:10',
        ]);

        // Pour l'instant, on peut juste rediriger avec un message de succès
        // Plus tard, vous pouvez ajouter l'envoi d'email ici
        
        return redirect()->route('contact')
            ->with('success', 'Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
    }
}
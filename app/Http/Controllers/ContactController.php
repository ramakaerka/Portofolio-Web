<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'nullable|max:100',
            'subject' => 'required|max:200',
            'message' => 'required|max:2000',
        ]);

        // Data yang akan dikirim ke view email
        // Kirim email
        Mail::to('noreply@ramakuncaranto.com')->send(new ContactFormMail($validated));

        return redirect('/')->with('success', 'Your message has been sent successfully! Thank you for reaching out.');
    }
}
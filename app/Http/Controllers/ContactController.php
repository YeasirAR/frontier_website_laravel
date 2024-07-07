<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    private function validateRecaptcha(string $token_captcha) {
        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $token_captcha,
            ]);

            return $response['success'];
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        /* Hacer una request para validar el recaptcha */
        $valid_token = $this->validateRecaptcha($request['g-recaptcha-response']);

        if( !$valid_token )
            return back()->withInput();

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'phone' => $request->phone
        ];

        Mail::to($request->email)
            ->send( new ContactRequest($details) );

        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}

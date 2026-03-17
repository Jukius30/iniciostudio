<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Simpan ke Database
        ContactMessage::create($data);

        // Kirim ke Email
        Mail::raw("Pesan Baru dari: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['subject']}\n\nIsi Pesan:\n{$data['message']}", function ($message) use ($data) {
            $message->to('inicio.studioid@gmail.com')
                    ->subject('New Contact Form: ' . $data['subject']);
        });

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
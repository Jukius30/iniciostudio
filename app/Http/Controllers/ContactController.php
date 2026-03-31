<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Pastikan validasi sesuai dengan atribut 'name' di form
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 1. Simpan ke Database
        ContactMessage::create($data);

        // 2. Kirim ke Email
        // Tips: Masukkan email pengirim ke Subject agar muncul di notifikasi HP
        Mail::raw("Pesan Baru dari: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['subject']}\n\nIsi Pesan:\n{$data['message']}", function ($message) use ($data) {
            $message->to('inicio.studioid@gmail.com')
                    ->from('inicio.studioid@gmail.com', $data['name']) // Nama pengirim muncul di notif
                    ->replyTo($data['email'], $data['name'])          // Balas langsung ke email user
                    ->subject("Contact: {$data['name']} - {$data['subject']}"); 
        });

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
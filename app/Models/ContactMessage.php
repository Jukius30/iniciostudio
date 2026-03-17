<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    // Tambahkan baris ini agar data bisa disimpan melalui Controller
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
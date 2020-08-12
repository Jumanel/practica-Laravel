<?php

namespace App\Http\Controllers;

use App\Mail\MenssajeRecive;
use Illuminate\Support\Facades\Mail;

class menssagecontroller extends Controller
{
    public function store()
    {
       request()->validate([
       		'name' => 'required',
       		'email' => 'required|email',
       		'subject' => 'required',
       		'content' => 'required|min:4',
       ]);

       mail::to('juanmanueldiz1@gmail.com')->send(new MenssajeRecive($message));

       return 'mensaje enviado';
    }
}

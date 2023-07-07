<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contact extends Controller
{
    public function index(){
        return view('contactus');
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['alpha:ascii'],
            'email' => 'required | email',
            'phone' => ['required','max:10'],
            'message' => 'required'
        ]);

        $correo = new contactMail($request->all());
     //   Mail::to('Esmeldyfm@gmail.com')->send($correo);
        return back()->with('success', 'Mensaje enviado correctamente');
    }

    public function aboutus(){
        return view('aboutus');
    }
}

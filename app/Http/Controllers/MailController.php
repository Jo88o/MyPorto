<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store (Request $request){
        Mail::to('cubeddu29@gmail.com')->send(new MailSender($request));
        return redirect()->back(); 
    }
}

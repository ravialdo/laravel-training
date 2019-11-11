<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail;
use App\MailCategori;

class UjiCobaController extends Controller
{
    public function uji(){
        $mail = Mail::find(1);
        $mail->mail_categories;
        return $mail;
    }

    public function latihan(){

    }
}

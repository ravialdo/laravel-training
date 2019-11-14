<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail;
use App\MailCategori;

class UjiCobaController extends Controller
{
    public function uji(){
        $mailCategory = Mail::find(1);

        if($mailCategory) :

          $mailCategory->mail_categori;
          return $mailCategory;

        else :

          return 'Tidak ada data!';
          
        endif;


    }

    public function latihan(){

    }
}

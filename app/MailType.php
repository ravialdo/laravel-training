<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailType extends Model
{
    protected $guarded = 'id';

    protected $table = 'mails_type';

    public function mails(){

      return $this->hasMany('App\Mail');

    }
}

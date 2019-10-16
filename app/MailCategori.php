<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailCategori extends Model
{
    protected $guarded = 'id';

    protected $table = 'mail_categories';

    protected $fillable = [
      'name'
    ];

    public function mails(){

      return $this->belongsToMany('App\Mail');
      
    }
}

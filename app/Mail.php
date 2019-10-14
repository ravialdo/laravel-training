<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $guarded = 'id';

    protected $fillable = [
		    'incoming_at', 'mail_code', 'mail_date', 'mail_from', 'mail_to', 'mail_subject', 'description', 'file_upload', 'mail_type_id', 'user_id'
    ];

    public function mailType(){

      return $this->belongsTo('App\MailType');

    }

    public function user(){

      return $this->belongsTo('App\User');

    }
}

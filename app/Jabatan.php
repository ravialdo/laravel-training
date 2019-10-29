<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $guarded = ['id_jabatan'];

    protected $table = 'jabatan';

    protected $primaryKey = 'id_jabatan';

    public function users()
    {
      return $this->belongsToMany('App\User','jabatan_user','jabatan_id','user_id');
    }

}

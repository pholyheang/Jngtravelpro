<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'tbl_client';


    public function user()
    {
        // return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }
}

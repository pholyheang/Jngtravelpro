<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'tbl_post';

   	public function category()
    {
        // return $this->belongsTo('App\User');
        return $this->belongsTo(Category::class);
    }


    public function user()
    {
        // return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }
}

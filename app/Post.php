<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'tbl_program';


	// public function users(){
	//     //return $this->hasMany('App\User');
	//     // return $this->belongsTo('App\User');
	//     return $this->belongsTo('App\User');
	//     return $this->belongsTo('App\Post');
	//     // return $this->hasMany('App\User');
	// }
	public function user()
    {
        // return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        // return $this->belongsTo('App\User');
        return $this->belongsTo(Category::class);
    }
}

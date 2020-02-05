<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'tbl_category';

 	public function post()
    {
        return $this->hasMany(Post::class);
    }	
	
    public function news()
    {
        return $this->hasMany(News::class);
    }

    public static function CheckCat ($catName){
    	return self::select('title')->where('title', $catName)->first();
    }

}

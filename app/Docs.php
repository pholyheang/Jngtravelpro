<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    protected $connection = 'mysql_second';
   	protected $table='tbl_docs';
}

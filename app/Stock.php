<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //table name
    protected $table = 'stocks';
    protected $primaryKey = 'STK_ID';
    public $timestamps = false;
    
}

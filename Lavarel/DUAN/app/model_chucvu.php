<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_chucvu extends Model
{
    protected $table = 'bang_chucvu';
    protected $primaryKey = 'macv';
    public $incrementing = false;
    protected $keyType = 'string';
     public $timestamps = false;
     protected $dateFormat = 'U';
}

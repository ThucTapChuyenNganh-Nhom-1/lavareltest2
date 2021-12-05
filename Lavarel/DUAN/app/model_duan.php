<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_duan extends Model
{
    protected $table = 'bang_duan';
    protected $primaryKey = 'macv';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
}

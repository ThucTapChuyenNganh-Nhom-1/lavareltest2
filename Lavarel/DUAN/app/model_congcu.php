<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_congcu extends Model
{
    protected $table = 'bang_congcu';
    protected $primaryKey = 'macc';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
}

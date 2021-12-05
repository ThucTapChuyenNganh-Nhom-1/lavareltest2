<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_ngoaingu extends Model
{
    protected $table = 'bang_ngoaingu';
    protected $primaryKey = 'mann';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
}

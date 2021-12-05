<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_kynang extends Model
{
    protected $table = 'bang_kynang';
    protected $primaryKey = 'makn';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
}

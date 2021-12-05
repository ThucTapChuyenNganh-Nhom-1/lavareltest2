<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_nhanvien extends Model
{
    protected $table = 'bang_nhanvien';
    protected $primaryKey = 'manv';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $table = 'configs';

    protected $fillable = [
        'bg_homepage',
        'id_chuyen_xe',
        'chuyen_xe_2',
        'chuyen_xe_3',
    ];
}

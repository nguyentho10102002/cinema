<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    use HasFactory;

    protected $table = 'xes';

    protected $fillable = [
        'ten_xe',
        'tinh_trang',
        'hang_doc',
        'hang_ngang',
    ];
}

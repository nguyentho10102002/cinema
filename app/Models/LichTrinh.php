<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichTrinh extends Model
{
    use HasFactory;

    protected $table = 'lich_trinhs';

    protected $fillable = [
        'id_xe',
        'id_chuyen_xe',
        'thoi_gian_chay_chinh',
        'thoi_gian_nghi_chan',
        'thoi_gian_bat_dau',
        'thoi_gian_ket_thuc',
    ];
}

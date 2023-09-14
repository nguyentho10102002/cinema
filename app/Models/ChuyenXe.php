<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenXe extends Model
{
    use HasFactory;

    protected $table ='chuyen_xes';
    protected $fillable = [
        'ten_nha_xe',
        'slug_ten_nha_xe',
        'noi_xuat_phat',
        'noi_ket_thuc',
        'loai_xe',
        'thoi_gian_chay',
        'ngay_bat_dau_chay',
        'avatar',
        'mo_ta',
        'trailer',
        'tinh_trang',
    ];
}

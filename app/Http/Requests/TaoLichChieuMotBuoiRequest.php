<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class TaoLichChieuMotBuoiRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $now = Carbon::today();
        return [
            'id_xe'                  =>  'required|exists:xes,id',
            'id_chuyen_xe'                   =>  'required|exists:chuyen_xes,id',
            'thoi_gian_chay_chinh'     =>  'required|numeric|min:0',
            'thoi_gian_nghi_chan'       =>  'required|numeric|min:0',
            'ngay_chieu'                =>  'required|date|after_or_equal:'. $now,
            'ngay_ket_thuc'             =>  'nullable|date|after_or_equal:ngay_bat_dau',
            'gio_bat_dau'               =>  'required',
            'gio_ket_thuc'              =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'id_xe.*'                 => 'Xe không được để trống!',
            'id_chuyen_xe.*'                  => 'Chuyến xe không được để trống',
            'thoi_gian_chay_chinh.*'    => 'Thời gian chạy chính không được để trống',
            'thoi_gian_nghi_chan.*'      => 'Thời lượng nghỉ chân không được để trống!',
            'ngay_chieu.*'               => 'Ngày chạy phải lớn hơn hoặc bằng ngày hôm nay!',
            'ngay_ket_thuc.*'            => 'Ngày kết thúc không được để trống!',
            'gio_bat_dau.*'              => 'Giờ bắt đầu không được để trống!',
            'gio_ket_thuc.*'             => 'Giờ kết thúc không được để trống!',

        ];
    }

}

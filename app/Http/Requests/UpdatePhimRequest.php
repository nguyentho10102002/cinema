<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhimRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'                => 'required|exists:chuyen_xes,id',
            'ten_nha_xe'          => 'required',
            'slug_ten_nha_xe'     => 'required|unique:chuyen_xes,slug_ten_nha_xe,' . $this->id,
            'noi_xuat_phat'          => 'required',
            'ngay_bat_dau_chay'   => 'required|date',
            'noi_ket_thuc'         => 'required',
            'loai_xe'          => 'required',
            'thoi_gian_chay'        => 'required|numeric|min:5',
            'mo_ta'             => 'required|min:20',
            'avatar'            => 'required',
            'trailer'           => 'required',
            'tinh_trang'        => 'required|numeric|max:2|min:0',
        ];
    }

    public function messages()
    {
        return [
            'id.*'                      => 'Chuyến xe phải tồn tại trong hệ thống!',
            'ten_nha_xe.*'                => 'Tên nhà xe không được để trống',
            'slug_ten_nha_xe.required'    => 'Slug không được để trống',
            'slug_ten_nha_xe.unique'      => 'Slug đã tồn tại!',
            'noi_xuat_phat.*'                => 'Nơi xuất phát không được để trống',
            'ngay_bat_dau_chay.*'         => 'Ngày bắt đầu phải là định dạng ngày tháng',
            'noi_ket_thuc.*'               => 'Nơi đến không được để trống',
            'loai_xe.*'                => 'Thể loại không được để trống',
            'thoi_gian_chay.*'              => 'Thời lượng phải từ 5p trở lên',
            'mo_ta.*'                   => 'Mô tả phải từ 20 đến 200 ký tự',
            'avatar.*'                  => 'Avatar không được để trống',
            'trailer.*'                 => 'Trailler không được để trống',
            'tinh_trang.*'              => 'Tình trạng phải chọn theo yêu cầu',
        ];
    }
}

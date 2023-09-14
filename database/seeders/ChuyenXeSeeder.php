<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ChuyenXeSeeder extends Seeder
{
    public function run()
    {
        // 1. Khi seeder thì ta muốn xóa toàn bộ dữ liệu ở table đó
        DB::table('chuyen_xes')->delete();

        // Reset id về lại 1
        DB::table('chuyen_xes')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('chuyen_xes')->insert([
            [
                'ten_nha_xe'          => "Hoang Trung",
                'slug_ten_nha_xe'     => "hoang-trung",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Quảng Bình",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 240,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=OD_i80ldZLY",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Trung Tín",
                'slug_ten_nha_xe'     => "trung-tin",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Quảng Bình",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 240,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],
            [
                'ten_nha_xe'          => "Sỹ Hảo",
                'slug_ten_nha_xe'     => "sy-hao",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Quảng Bình",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 240,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Quốc Tín",
                'slug_ten_nha_xe'     => "quoc-tin",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Sài Gòn",
                'loai_xe'          => "Xe 40 chỗ , ghế ngồi",
                'thoi_gian_chay'        => 1000,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Minh Phương",
                'slug_ten_nha_xe'     => "minh-phuong",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Sài Gòn",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 1000,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Cao Nguyen",
                'slug_ten_nha_xe'     => "cao-nguyen",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Đắk Lắk",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 650,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Kim Anh",
                'slug_ten_nha_xe'     => "kim-anh",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Đắk Lắk",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 650,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Thái Sơn",
                'slug_ten_nha_xe'     => "thai-son",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Đắk Lắk",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 650,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Hồng Hải",
                'slug_ten_nha_xe'     => "hong-hai",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Gia Lai",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 450,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Hương Sơn",
                'slug_ten_nha_xe'     => "huong-son",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Hà Tĩnh",
                'loai_xe'          => "Xe giường nằm",
                'thoi_gian_chay'        => 450,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_nha_xe'          => "Hai Hoang Gia",
                'slug_ten_nha_xe'     => "hai-hoang-gia",
                'noi_xuat_phat'          => "Đà Nẵng",
                'noi_ket_thuc'         => "Quảng Trị",
                'loai_xe'          => "Xe ghế ngồi",
                'thoi_gian_chay'        => 180,
                'ngay_bat_dau_chay'   => "2023-4-24",
                'avatar'            => "https://hcm01.vstorage.vngcloud.vn/v1/AUTH_0e0c1e7edc044168a7f510dc6edd223b/media-prd/cache/short/6267b74e91e52594264385.jpg",
                'mo_ta'             => "Xe chạy nhanh , rất êm , nhà xe uy tín , thân thiện,...",
                'trailer'           => "https://www.youtube.com/watch?v=qlxSoMlMgmk",
                'tinh_trang'        => 2,
            ],
        ]);

        // php artisan db:seed --class="ChuyenXeSeeder"
    }
}

<?php

namespace Database\Seeders;

use App\Models\GheBan;
use App\Models\LichChieu;
use App\Models\Xe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LichChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lich_trinhs')->delete();
        DB::table('ghe_bans')->delete();

         // Reset id về lại 1
        DB::table('lich_trinhs')->truncate();
        DB::table('ghe_bans')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('lich_trinhs')->insert([
            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 10:30:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 10:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 12:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 14:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 16:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 18:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 20:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 22:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 00:00:00',
            ],

            [
                'id_xe'               =>  '1',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-06 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 02:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 08:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 10:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 12:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 14:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 16:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 18:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 20:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 22:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 00:00:00',
            ],

            [
                'id_xe'               =>  '2',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '240',
                'thoi_gian_nghi_chan'    =>  '30',
                'thoi_gian_bat_dau'      =>  '2023-01-07 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 02:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 08:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 10:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 12:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 14:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 16:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 18:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 20:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 22:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 00:00:00',
            ],

            [
                'id_xe'               =>  '3',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-08 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 02:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 08:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 10:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 12:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 14:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 16:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 18:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 20:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 22:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 00:00:00',
            ],

            [
                'id_xe'               =>  '4',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-09 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 02:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 08:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 10:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 12:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 14:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 16:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 18:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 20:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 22:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 00:00:00',
            ],

            [
                'id_xe'               =>  '5',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-11 02:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 08:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 10:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 12:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 14:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 16:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 18:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 20:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 22:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 00:00:00',
            ],
            [
                'id_xe'               =>  '6',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-06 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-06 02:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 08:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 10:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 12:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 14:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 16:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 18:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 20:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '450',
                'thoi_gian_nghi_chan'    =>  '45',
                'thoi_gian_bat_dau'      =>  '2023-01-07 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 22:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-07 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 00:00:00',
            ],
            [
                'id_xe'               =>  '7',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-07 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-07 02:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 08:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 10:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 12:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 14:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 16:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 18:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 20:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 22:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 00:00:00',
            ],
            [
                'id_xe'               =>  '8',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-08 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-08 02:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 08:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 10:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 12:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 14:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 16:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 18:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 20:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 22:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '650',
                'thoi_gian_nghi_chan'    =>  '60',
                'thoi_gian_bat_dau'      =>  '2023-01-09 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 00:00:00',
            ],
            [
                'id_xe'               =>  '9',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-09 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-09 02:00:00',

            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '1',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 08:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '2',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 10:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '3',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 12:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '4',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 14:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '5',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 16:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '6',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 18:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '7',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 20:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '8',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 22:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '9',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 00:00:00',
            ],
            [
                'id_xe'               =>  '10',
                'id_chuyen_xe'                =>  '10',
                'thoi_gian_chay_chinh'  =>  '1000',
                'thoi_gian_nghi_chan'    =>  '100',
                'thoi_gian_bat_dau'      =>  '2023-01-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-01-10 02:00:00',
            ],

        ]);


        $list_lich_chieu = LichChieu::get();
        foreach ($list_lich_chieu as $value) {
            $tat_ca_ghe = Xe::where('xes.id', $value->id_xe)
                           ->join('ghes', 'ghes.id_xe', 'xes.id')
                           ->get();

            foreach($tat_ca_ghe as $key => $value_xe) {
                GheBan::create([
                    'id_lich'   => $value->id,
                    'ten_ghe'   => $value_xe->ten_ghe,
                ]);
            }
        }
    }
}

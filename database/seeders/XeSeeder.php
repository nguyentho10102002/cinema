<?php

namespace Database\Seeders;

use App\Models\Ghe;
use App\Models\Xe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class XeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('xes')->delete();
        DB::table('ghes')->delete();

        // Reset id về lại 1
        DB::table('xes')->truncate();
        DB::table('ghes')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('xes')->insert([
            [
                'ten_xe'     =>"Hoàng Trung",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 7,
                'hang_ngang'    => 6,
            ],
            [
                'ten_xe'     =>"Trung Tín",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 7,
                'hang_ngang'    => 6,
            ],
            [
                'ten_xe'     =>"Kim Anh",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 7,
                'hang_ngang'    => 6,
            ],
            [
                'ten_xe'     =>"Sĩ Hảo",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 7,
                'hang_ngang'    => 6,
            ],
            [
                'ten_xe'     =>"Thái Sơn",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 7,
                'hang_ngang'    => 6,
            ],
            [
                'ten_xe'     =>"Hồng Hải",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 8,
                'hang_ngang'    => 6,
            ],
            [
                'ten_xe'     =>"Minh Phương",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 8,
                'hang_ngang'    => 6,
            ],
            [
                'ten_xe'     =>"Quốc Đạt",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 9,
                'hang_ngang'    => 6,
            ],[
                'ten_xe'     =>"Cao Nguyên",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 8,
                'hang_ngang'    => 3,
            ],[
                'ten_xe'     =>"Hương Sơn",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 9,
                'hang_ngang'    => 3,
            ],[
                'ten_xe'     =>"Hải Hoàng Gia",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => 8,
                'hang_ngang'    => 3,
            ],
        ]);

        $list_xe = Xe::get();
        foreach ($list_xe as $key => $value) {
            for($dong = 1; $dong <= $value->hang_ngang; $dong++) {
                $chu = chr($dong + 64);
                for($cot = 1; $cot <= $value->hang_doc; $cot++) {
                    $ten_ghe = $chu . $cot;
                    $ghe = Ghe::create([
                        'ten_ghe'       => $ten_ghe,
                        'tinh_trang'    => 1,
                        'id_xe'      => $value->id,
                    ]);
                }
            }
        }
    }
}

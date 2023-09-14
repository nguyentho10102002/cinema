<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use App\Models\Xe;
use Illuminate\Http\Request;

class XeController extends Controller
{
    public function index()
    {
        return view('AdminRocker.page.Xe.index');
    }

    public function store(Request $request)
    {
        // 1. Ta sẽ thêm mới
        $newXe = Xe::create([
            'ten_xe'     => $request->ten_xe,
            'tinh_trang'    => $request->tinh_trang,
            'hang_ngang'    => $request->hang_ngang,
            'hang_doc'      => $request->hang_doc,
        ]);

        for($dong = 1; $dong <= $request->hang_ngang; $dong++) {
            $chu = chr($dong + 64);
            for($cot = 1; $cot <= $request->hang_doc; $cot++) {
                $ten_ghe = $chu . $cot;
                Ghe::create([
                    'ten_ghe'       => $ten_ghe,
                    'tinh_trang'    => 1,
                    'id_xe'      => $newXe->id,
                ]);
            }
        }

        return response()->json([
            'status'    =>  true,
        ]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $xe = Xe::where('id', $request->id)->first();

        if($xe) {
            $xe->ten_xe   = $request->ten_xe;
            $xe->tinh_trang  = $request->tinh_trang;
            $xe->hang_ngang  = $request->hang_ngang;
            $xe->hang_doc    = $request->hang_doc;
            $xe->save();

            // Xóa sạch ghế trong phòng
            Ghe::where('id_xe', $request->id)->delete();
            // Tạo mới lại số ghế $request->hang_doc * $request->hang_ngang
            for($dong = 1; $dong <= $request->hang_ngang; $dong++) {
                $chu = chr($dong + 64);
                for($cot = 1; $cot <= $request->hang_doc; $cot++) {
                    $ten_ghe = $chu . $cot;
                    Ghe::create([
                        'ten_ghe'       => $ten_ghe,
                        'tinh_trang'    => 1,
                        'id_xe'      => $request->id,
                    ]);
                }
            }
        }

        return response()->json([
            'status' => true,
            'messs'  => "Cập nhập xe thành công!",
        ]);
    }

    public function getData()
    {
        $data = Xe::get();
        return response()->json([
            'list'  => $data
        ]);
    }

    public function changeStatus($id)
    {
        $xe = Xe::where('id', $id)->first();

        if($xe) {
            $xe->tinh_trang = !$xe->tinh_trang;
            $xe->save();
        }
    }

    public function destroy($id)
    {
        $xe = Xe::where('id', $id)->first();

        if($xe) {
            Ghe::where('id_xe', $id)->delete();
            $xe->delete();
        }
    }

    public function edit($id)
    {
        $xe = Xe::where('id', $id)->first();

        return response()->json([
            'data'  => $xe
        ]);
    }

    public function getDataGhe($id_xe)
    {
        $xe = Xe::where('id', $id_xe)->first();
        $data  = Ghe::where('id_xe', $id_xe)->get();

        return response()->json([
            'danh_sach_ghe'     => $data,
            'thong_tin_Xe'   => $xe,
        ]);
    }
}

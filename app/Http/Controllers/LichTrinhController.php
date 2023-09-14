<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLichChieuRequest;
use App\Http\Requests\TaoLichChieuMotBuoiRequest;
use App\Http\Requests\XoaLichRequest;
use App\Models\GheBan;
use App\Models\LichTrinh;
use App\Models\Xe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LichTrinhController extends Controller
{
    public function viewKhachHangDatVe($id_lich_trinh)
    {
        $lichTrinh = LichTrinh::where('id', $id_lich_trinh)
                              ->where('thoi_gian_ket_thuc', '>=', Carbon::now()->toDateTimeString())
                              ->first();
        $user_login = Auth::guard('customer')->user()->id;

        if($lichTrinh) {
            return view('client.dat_ve', compact('id_lich_trinh', 'user_login'));
        } else {
            toastr()->error("Lịch chạy không tồn tại!");
            return redirect('/');
        }
    }

    public function showDataByIdLich($id_lich_trinh)
    {
        $data = GheBan::where('id_lich', $id_lich_trinh)->get();
        $xe = LichTrinh::join('xes', 'lich_trinhs.id_xe', 'xes.id')
                          ->where('lich_trinhs.id', $id_lich_trinh)
                          ->first();

        return response()->json([
            'data'      => $data,
            'hang_doc'  => $xe->hang_doc,
            'hang_ngang'=> $xe->hang_ngang,
        ]);
    }

    public function destroy(XoaLichRequest $request)
    {
        LichTrinh::where('id', $request->id)->delete();

        GheBan::where('id_lich', $request->id)->delete();
    }

    public function getData()
    {
        $data = LichTrinh::join('chuyen_xes', 'lich_trinhs.id_chuyen_xe', 'chuyen_xes.id')
                         ->join('xes','lich_trinhs.id_xe', 'xes.id')
                         ->select('chuyen_xes.ten_nha_xe', 'xes.ten_xe', 'lich_trinhs.*')
                         ->orderBy('lich_trinhs.thoi_gian_bat_dau')
                         ->get();
        return response()->json([
            'data'  => $data,
        ]);
    }

    public function viewTaoMotBuoi()
    {
        return view('AdminLTE.Page.LichChieu.view_mot_buoi');
    }

    public function actionTaoMotBuoi(TaoLichChieuMotBuoiRequest $request)
    {
        $ngay_chieu = Carbon::createFromFormat("Y-m-d", $request->ngay_chieu);
        $ngay       = $ngay_chieu->day;
        $thang      = $ngay_chieu->month;
        $nam        = $ngay_chieu->year;
        $gio_bd     = Carbon::parse($request->gio_bat_dau);
        $gio_kt     = Carbon::parse($request->gio_ket_thuc);


        $now = Carbon::today();
        if( $ngay_chieu < $now) {
            return response()->json([
                'status'    => false,
                'message'   => 'Ngày chạy phải lớn hơn hoặc bằng ngày hôm nay!'
            ]);
        }
        if($gio_bd > $gio_kt ) {
            return response()->json([
                'status'    => false,
                'message'   => 'Giờ kết thúc phải lớn hơn giờ bắt đầu!'
            ]);
        }
        $thoi_gian_bat_dau  = Carbon::create($nam, $thang, $ngay, $gio_bd->hour, $gio_bd->minute, 0);
        $thoi_gian_ket_thuc = Carbon::create($nam, $thang, $ngay, $gio_kt->hour, $gio_kt->minute, 0);

        // Th1 là giờ bắt đầu nằm giữa [thoi_gian_bat_dau và thoi_gian_ket_thuc]
        $gio_bat_dau  = $thoi_gian_bat_dau->toDateTimeString();
        $gio_ket_thuc = $thoi_gian_ket_thuc->toDateTimeString();


        $check_th1 = LichTrinh::where('id_xe', $request->id_xe)
                              ->where('thoi_gian_bat_dau', '<=', $gio_bat_dau)
                              ->where('thoi_gian_ket_thuc', '>=', $gio_bat_dau)
                              ->first();

        // Th2 là giờ kết thúc nằm giữa [thoi_gian_bat_dau và thoi_gian_ket_thuc]
        $check_th2 = LichTrinh::where('id_xe', $request->id_xe)
                              ->where('thoi_gian_bat_dau', '<=', $gio_ket_thuc)
                              ->where('thoi_gian_ket_thuc', '>=', $gio_ket_thuc)
                              ->first();
        // Th3 là giờ bắt đầu và giờ kết thúc bao trùm lên cả [thoi_gian_bat_dau và thoi_gian_ket_thuc]
        $check_th3 = LichTrinh::where('id_xe', $request->id_xe)
                              ->where('thoi_gian_bat_dau', '>=', $gio_bat_dau)
                              ->where('thoi_gian_ket_thuc', '<=', $gio_ket_thuc)
                              ->first();

        // $check = LichTrinh::where('id_xe', $request->id_xe)
        //                   ->where(function($query) use ($gio_bat_dau, $gio_ket_thuc) {
        //                         $query->where(function($query_1) use ($gio_bat_dau) {
        //                             $query_1->where('thoi_gian_bat_dau', '<=', $gio_bat_dau)
        //                                     ->where('thoi_gian_ket_thuc', '>=', $gio_bat_dau);
        //                         })->orWhere(function($query_1) use ($gio_ket_thuc) {
        //                             $query_1->where('thoi_gian_bat_dau', '<=', $gio_ket_thuc)
        //                                     ->where('thoi_gian_ket_thuc', '>=', $gio_ket_thuc);
        //                         })->orWhere(function($query_1) use ($gio_bat_dau, $gio_ket_thuc) {
        //                             $query_1->where('thoi_gian_bat_dau', '>=', $gio_bat_dau)
        //                                     ->where('thoi_gian_ket_thuc', '<=', $gio_ket_thuc);
        //                         });
        //                   })
        //                   ->first();

        if($check_th1 || $check_th2 || $check_th3) {
            return response()->json([
                'status'    => false,
                'message'   => 'Lịch chạy đã bị trùng'
            ]);
        }

        $lich_trinh = LichTrinh::create([
            'id_xe'                  => $request->id_xe,
            'id_chuyen_xe'             => $request->id_chuyen_xe,
            'thoi_gian_chay_chinh'     => $request->thoi_gian_chay_chinh,
            'thoi_gian_nghi_chan'       => $request->thoi_gian_nghi_chan,
            'thoi_gian_bat_dau'         => $thoi_gian_bat_dau,
            'thoi_gian_ket_thuc'        => $thoi_gian_ket_thuc,
        ]);

        // Lấy tất các các ghế của phòng
        $tat_ca_ghe = Xe::where('xes.id', $request->id_xe)
                           ->join('ghes', 'ghes.id_xe', 'xes.id')
                           ->get();

        foreach($tat_ca_ghe as $key => $value) {
            GheBan::create([
                'id_lich'   => $lich_trinh->id,
                'ten_ghe'   => $value->ten_ghe,
            ]);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Đã tạo lịch trình thành công'
        ]);
    }

    public function index()
    {
        return view('AdminLTE.Page.LichChieu.index');
    }

    public function store(CreateLichChieuRequest $request)
    {
        $ngay_bat_dau           = Carbon::createFromFormat("Y-m-d", $request->ngay_bat_dau)->startOfDay();
        $ngay_ket_thuc          = Carbon::createFromFormat("Y-m-d", $request->ngay_ket_thuc)->addDay()->startOfDay();

        $gio_bat_dau  = Carbon::parse($request->gio_bat_dau);
        $gio_ket_thuc = Carbon::parse($request->gio_ket_thuc);

        // Nếu ngày kết thúc < ngày bắt đầu => ngày kết thúc - ngày bắt đầu > 0
        while($ngay_ket_thuc->diffInDays($ngay_bat_dau) > 0) {
            $thu_cua_ngay = $ngay_bat_dau->dayOfWeek;
            $ten          = "thu_" . $thu_cua_ngay;

            if(isset($request->$ten)) {
                // Tạo ra lịch chiếu
                $year   = $ngay_bat_dau->year;
                $month  = $ngay_bat_dau->month;
                $day    = $ngay_bat_dau->day;
                $hour_1 = $gio_bat_dau->hour;
                $mi_1   = $gio_bat_dau->minute;
                $hour_2 = $gio_ket_thuc->hour;
                $mi_2   = $gio_ket_thuc->minute;

                $thoi_gian_bat_dau  = Carbon::create($year, $month, $day, $hour_1, $mi_1, 0);
                $thoi_gian_ket_thuc = Carbon::create($year, $month, $day, $hour_2, $mi_2, 0);

                $lich_trinh = LichTrinh::create([
                    'id_xe'                  => $request->id_xe,
                    'id_chuyen_xe'            => $request->id_chuyen_xe,
                    'thoi_gian_chay_chinh'     => $request->thoi_gian_chay_chinh,
                    'thoi_gian_nghi_chan'       => $request->thoi_gian_nghi_chan,
                    'thoi_gian_bat_dau'         => $thoi_gian_bat_dau,
                    'thoi_gian_ket_thuc'        => $thoi_gian_ket_thuc,
                ]);
                $tat_ca_ghe = Xe::where('xes.id', $lich_trinh->id_xe)
                                        ->join('ghes', 'ghes.id_xe', 'xes.id')
                                        ->get();

                foreach($tat_ca_ghe as $key => $value) {
                    GheBan::create([
                        'id_lich'   => $lich_trinh->id,
                        'ten_ghe'   => $value->ten_ghe,
                    ]);
                }
            }
            $ngay_bat_dau->addDay();
        }
    }

    // public function viewThoiKhoaBieu()
    // {
    //     return view('AdminLTE.Page.LichChieu.thoi_khoa_bieu');
    // }

    // public function dataThoiKhoaBieu()
    // {
    //     $data = LichTrinh::join('chuyen_xes', 'lich_trinhs.id_chuyen_xe', 'chuyen_xes.id')
    //                      ->join('xes','lich_trinhs.id_xe', 'xes.id')
    //                      ->select('chuyen_xes.ten_nha_xe', 'xes.ten_xe',
    //                               'lich_trinhs.thoi_gian_bat_dau as start',
    //                               'lich_trinhs.thoi_gian_ket_thuc as end'
    //                             )
    //                      ->get();
    //     foreach($data as $key => $value) {
    //         $value->title = 'Tên hãng xe: ' . $value->ten_nha_xe . " - Xe: " . $value->ten_xe;
    //     }
    //     return response()->json($data);
    // }
}

<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Jobs\SendMailLienHe;
use App\Models\Config;
use App\Models\LichTrinh;
use App\Models\LienHe;
use App\Models\ChuyenXe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomepageController extends Controller
{
    public function index()
    {
        $config = Config::orderByDESC('id')->first();
        $list_chuyen_xe = ChuyenXe::where('tinh_trang' , '>' , 0)->get();
        if($config){
            $chuyenxe_1 = ChuyenXe::where('id', $config->id_chuyen_xe)->first();
            $chuyen_xe_2 = ChuyenXe::where('id', $config->chuyen_xe_2)->first();
            $chuyen_xe_3 = ChuyenXe::where('id', $config->chuyen_xe_3)->first();

            return view('Client.homepage', compact('config', 'chuyenxe_1', 'chuyen_xe_2', 'chuyen_xe_3' , 'list_chuyen_xe'));
        }else{
            return view('Client.homepage', compact('list_chuyen_xe'));
        }

    }

    public function test()
    {
        Log::info("Oke, đã chạy!");
        // return view('client.kich_hoat_tai_khoan');
    }

    public function chiTietPhim($slug)
    {
        $parts = explode('-', $slug);
        preg_match('/\d+$/', $slug, $matches);
        $id = $matches[0];
        $chuyenxe = ChuyenXe::where('id' , $id)->first();
        $lichChieu = LichTrinh::where('id_chuyen_xe', $id)
                              ->where('thoi_gian_ket_thuc', '>=', Carbon::now()->toDateTimeString())
                              ->get();

        return view('client.chi_tiet_phim' , compact('chuyenxe', 'lichChieu'));
    }

    public function viewLogin()
    {
        return view('client.login');
    }

    public function viewPhimDangChieu()
    {
        $list_chuyen_xe = ChuyenXe::where('tinh_trang' , 1)->get();
        return view('client.phim' , compact('list_chuyen_xe'));
    }

    public function viewchuyen_xesapChieu()
    {
        $list_chuyen_xe = ChuyenXe::where('tinh_trang' , 2)->get();
        return view('client.phim' , compact('list_chuyen_xe'));
    }

    public function actionTimKiem(Request $request)
    {
        $search = $request->search;
        // "SELECT * FROM `chuyen_xes` WHERE ten_nha_xe LIKE '%Avatar%';"
        $list_chuyen_xe = ChuyenXe::where('ten_nha_xe' , 'like' , '%' . $search . '%')
                         ->get();

        return view('client.phim' , compact('list_chuyen_xe'));
    }

    public function viewLienHe()
    {
        return view('client.lien_he');
    }

    public function sendLienHe(Request $request)
    {
        $data = $request->all();
        LienHe::create($data);
        // Phân cụm này qua JOB
        $dataMail['ho_va_ten'] = $request->ho_va_ten;
        $dataMail['email']     = $request->email;
        $dataMail['tieu_de']   = $request->tieu_de;
        $dataMail['noi_dung']  = $request->noi_dung;

        SendMailLienHe::dispatch($dataMail);

        return response()->json([
            'status'    =>   true,
            'message'   =>   'Đã gửi liên hệ chúng tôi sẽ phản hồi sớm !'
        ]);
    }

}

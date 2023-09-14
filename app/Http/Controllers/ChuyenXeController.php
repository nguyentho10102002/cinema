<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckIdPhimRequest;
use App\Http\Requests\CreatePhimRequest;
use App\Http\Requests\UpdatePhimRequest;
use App\Models\ChuyenXe;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChuyenXeController extends Controller
{
    public function index()
    {
        return view('AdminLTE.Page.Phim.index');
    }

    public function store(Request $request)
    {
        $chuyenxe = ChuyenXe::where('slug_ten_nha_xe', $request->slug_ten_nha_xe)->first();
        if ($chuyenxe) {
            return response()->json([
                'slug' => true,
            ]);
        } else {
            $data   = $request->all();
            ChuyenXe::create($data);
            return response()->json([
                'trang_thai_them_moi' => true,
            ]);
        }
    }

    public function getData()
    {
        $data = ChuyenXe::orderByDESC('created_at')->get();
        return response()->json([
            'phim'  => $data,
        ]);
    }

    public function indexVue()
    {
        return view('AdminRocker.page.Phim.index_vue');
    }

    public function storeVue(CreatePhimRequest $request)
    {
        $data   = $request->all();
        ChuyenXe::create($data);
    }

    public function destroy(CheckIdPhimRequest $request)
    {
        ChuyenXe::where('id', $request->id)->first()->delete();

        return response()->json([
            'status'    => true,
        ]);
    }

    public function update(UpdatePhimRequest $request)
    {
        $data = $request->all();
        $chuyenxe = ChuyenXe::where('id', $request->id)->first();
        $chuyenxe->update($data);

        return response()->json([
            'status'    => true,
        ]);
    }
}

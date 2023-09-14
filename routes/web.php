<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GheBanController;
use App\Http\Controllers\GiaoDichController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\ChuyenXeController;
use App\Http\Controllers\LichTrinhController;
use App\Http\Controllers\XeController;
use App\Http\Controllers\QuanLyBaiVietController;
use App\Http\Controllers\TestController;
use App\Models\Xe;
use App\Models\QuanLyBaiViet;
use App\Models\QuanLyKhachHang;
use Illuminate\Support\Facades\Route;


Route::get('/test', [TestController::class, 'test']);
Route::get('/chart', [TestController::class, 'chart']);

Route::get('/e48c2936-ec56-4452-8e01-9ce7f1b38952', [GheBanController::class, 'huyVeAuto']);

Route::get('/', [HomepageController::class, 'index']);
Route::get('/auto', [GiaoDichController::class, 'auto']);

Route::get('/update-password/{hash}', [CustomerController::class, 'viewUpdatePassword']);
Route::post('/update-password', [CustomerController::class, 'actionUpdatePassword']);

Route::get('/reset-password', [CustomerController::class, 'viewResetPassword']);
Route::post('/reset-password', [CustomerController::class, 'actionResetPassword']);

Route::get('/login', [CustomerController::class, 'viewLogin']);
Route::post('/login', [CustomerController::class, 'actionLogin']);

Route::get('/register', [CustomerController::class, 'viewRegister']);
Route::post('/register', [CustomerController::class, 'actionRegister']);

Route::get('/logout', [CustomerController::class, 'actionLogout']);

Route::get('/active/{hash}', [CustomerController::class, 'actionActive']);




//BEGIN Phim
Route::get('/phim-dang-chieu', [HomepageController::class, 'viewPhimDangChieu']);
Route::get('/phim-sap-chieu', [HomepageController::class, 'viewchuyen_xesapChieu']);

Route::post('/tim-kiem', [HomepageController::class, 'actionTimKiem']);
//END Phim
Route::get('/lien-he', [HomepageController::class, 'viewLienHe']);
Route::post('/send-lien-he', [HomepageController::class, 'sendLienHe']);


Route::get('/chi-tiet-phim/{slug}', [HomepageController::class, 'chiTietPhim']);
Route::get('/bai-viet', [CustomerController::class, 'viewBaiViet']);
Route::get('/bai-viet/detail/{id}', [CustomerController::class, 'viewBaiVietDetail']);

Route::get('/admin/login', [AdminController::class, 'viewLogin']);
Route::post('/admin/login', [AdminController::class, 'actionLogin']);

Route::group(['prefix' => '/client', 'middleware' => 'loginCustomer'],function() {

    Route::get('/cap-nhap-thong-tin', [CustomerController::class, 'viewCapNhapThongTin']);
    Route::post('/cap-nhap-thong-tin', [CustomerController::class, 'capNhapThongTin']);

    Route::get('/cap-nhap-mat-khau', [CustomerController::class, 'viewCapNhapMatKhau']);
    Route::post('/cap-nhap-mat-khau', [CustomerController::class, 'capNhapMatKhau']);

    Route::get('/dat-ve/{id_lich_trinh}', [LichTrinhController::class, 'viewKhachHangDatVe']);
    Route::get('/hien-thi-ghe-ban/{id_lich_trinh}', [LichTrinhController::class, 'showDataByIdLich']);
    Route::post('/dat-ve/giu-cho', [GheBanController::class, 'giuChoDatVe']);
    Route::post('/dat-ve/huy-cho', [GheBanController::class, 'huyChoDatVe']);
    Route::get('/thanh-toan', [GheBanController::class, 'thanhToan']);
});

Route::group(['prefix' => '/admin', 'middleware' => 'loginAdmin'],function() {
    Route::get('/', [AdminController::class, 'viewHome']);

    Route::group(['prefix' => '/cau-hinh'], function() {
        Route::get('/index', [ConfigController::class, 'index']);
        Route::post('/index', [ConfigController::class, 'store']);
    });
    Route::group(['prefix' => '/xe'], function() {
        Route::get('/index', [XeController::class, 'index']);
        Route::get('/data', [XeController::class, 'getData']);
        Route::post('/index', [XeController::class, 'store']);
        Route::post('/update', [XeController::class, 'update']);

        Route::get('/change-status/{id}', [XeController::class, 'changeStatus']);
        Route::get('/delete/{id}', [XeController::class, 'destroy']);
        Route::get('/edit/{id}', [XeController::class, 'edit']);

        Route::get('/data-ghe/{id_xe}', [XeController::class, 'getDataGhe']);
    });

    Route::group(['prefix' => '/phim'], function() {
        Route::get('/index', [ChuyenXeController::class, 'index']);
        Route::post('/create', [ChuyenXeController::class, 'store']);
        Route::get('/data' , [ChuyenXeController::class, 'getData']);

        Route::get('/index-vue', [ChuyenXeController::class, 'indexVue']);
        Route::post('/index-vue', [ChuyenXeController::class, 'storeVue']);

        Route::post('/delete', [ChuyenXeController::class, 'destroy']);
        Route::post('/update', [ChuyenXeController::class, 'update']);
    });

    Route::group(['prefix' => '/lien-he'], function() {
        Route::get('/index', [LienHeController::class, 'index']);
        Route::get('/data', [LienHeController::class, 'getData']);
        Route::post('/delete', [LienHeController::class, 'deleteLienHe']);
    });

    Route::group(['prefix' => '/lich-chieu'], function() {
        Route::get('/index', [LichTrinhController::class, 'index'])->name('tao_nhieu_buoi');
        Route::post('/index', [LichTrinhController::class, 'store']);

        Route::get('/data', [LichTrinhController::class, 'getData']);

        Route::get('/thoi-khoa-bieu', [LichTrinhController::class, 'viewThoiKhoaBieu']);
        Route::get('/data-thoi-khoa-bieu', [LichTrinhController::class, 'dataThoiKhoaBieu']);

        Route::get('/tao-mot-buoi', [LichTrinhController::class, 'viewTaoMotBuoi'])->name('tao_mot_buoi');
        Route::post('/tao-mot-buoi', [LichTrinhController::class, 'actionTaoMotBuoi']);

        Route::post('/xoa-lich', [LichTrinhController::class, 'destroy']);

        Route::get('/danh-sach-ghe/{id_lich}', [GheBanController::class, 'getData']);
        Route::post('/danh-sach-ghe/doi-trang-thai', [GheBanController::class, 'doiTrangThaiGheBan']);
    });

    Route::group(['prefix' => '/tai-khoan'], function() {
        Route::get('/index', [AdminController::class, 'index']);
        Route::get('/index/data', [AdminController::class, 'getData']);
        Route::post('/create', [AdminController::class, 'store']);
    });

    Route::group(['prefix' => '/bai-viet'], function() {
        Route::get('/index', [QuanLyBaiVietController::class, 'index']);
        Route::post('/create', [QuanLyBaiVietController::class, 'createBaiViet']);
        Route::post('/update', [QuanLyBaiVietController::class, 'updateBaiViet']);
        Route::get('/data', [QuanLyBaiVietController::class, 'getData']);
        Route::get('/status/{id}', [QuanLyBaiVietController::class, 'doiTrangThai']);
        Route::post('/delete', [QuanLyBaiVietController::class, 'delete']);
    });
    Route::group(['prefix' => '/khach-hang'], function() {
        Route::get('/thong-tin', [CustomerController::class, 'viewThongTin']);
        Route::get('/data', [CustomerController::class, 'getData']);
        Route::post('/update', [CustomerController::class, 'update']);
        Route::post('/delete', [CustomerController::class, 'destroy']);
        Route::get('/change-status/{id}', [CustomerController::class, 'changeStatus']);
        Route::get('/kich-hoat/{id}', [CustomerController::class, 'kichHoat']);
        Route::post('/change-password', [CustomerController::class, 'changePassword']);
    });
});

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

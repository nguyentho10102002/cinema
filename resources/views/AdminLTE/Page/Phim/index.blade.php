@extends('AdminLTE.Share.master')
@section('tieu_de')
    Quản Lý Phim
@endsection
@section('noi_dung')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Chuyen Xe
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Nhà Xe</label>
                        <input type="text" class="form-control" id="ten_nha_xe" placeholder="Nhập vào tên nhà xe">
                    </div>
                    <div class="form-group">
                        <label>Slug Tên Nhà Xe</label>
                        <input type="text" class="form-control" id="slug_ten_nha_xe" placeholder="Nhập vào slug tên phim">
                    </div>
                    <div class="form-group">
                        <label>Ngày Bắt Đầu Chạy</label>
                        <input type="date" class="form-control" id="ngay_bat_dau_chay" placeholder="Nhập vào tên phim">
                    </div>
                    <div class="form-group">
                        <label>Nơi bắt đầu</label>
                        <input type="text" class="form-control" id="noi_xuat_phat" placeholder="Nhập vào nơi xuất phát">
                    </div>
                    <div class="form-group">
                        <label>Nơi Xuất Phát</label>
                        <input type="text" class="form-control" id="noi_ket_thuc" placeholder="Nhập vào nơi kết thúc">
                    </div>
                    <div class="form-group">
                        <label>Thời Gian Chạy</label>
                        <input type="number" class="form-control" id="thoi_gian_chay" placeholder="Nhập vào phút">
                    </div>
                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea id="mo_ta" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Loại Xe</label>
                        <input type="text" class="form-control" id="loai_xe" placeholder="Nhập vào loại xe">
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="text" class="form-control" id="avatar" placeholder="Nhập vào link ảnh">
                    </div>
                    <div class="form-group">
                        <label>Trailer</label>
                        <input type="text" class="form-control" id="trailer" placeholder="Nhập vào link trailer">
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select id="tinh_trang" class="form-control">
                            <option value="1">Đang Chạy</option>
                            <option value="2">Sắp Chạy</option>
                            <option value="0">Ngưng Chạy</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                       <button class="btn btn-primary" id="themmoiphim">Thêm Mới Chuyến Xe</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_phim">
                    <thead class="bg-primary">
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Tên Nhà Xe</th>
                            <th>Ngày Bắt Đầu Chạy</th>
                            <th>Nơi Bắt Đầu</th>
                            <th>Nơi Kết Thúc</th>
                            <th>Thời Gian Chạy</th>
                            <th>Mô Tả</th>
                            <th>Loại Xe</th>
                            <th>Avatar</th>
                            <th>Trailer</th>
                            <th>Tình Trạng</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <a target="_blank" href=""></a>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#themmoiphim').click(function(){
                var payload = {
                    'ten_nha_xe'          : $("#ten_nha_xe").val(),
                    'slug_ten_nha_xe'     : $("#slug_ten_nha_xe").val(),
                    'noi_bat_dau'          : $("#noi_bat_dau").val(),
                    'ngay_bat_dau_chay'   : $("#ngay_bat_dau_chay").val(),
                    'noi_ket_thuc'         : $("#noi_ket_thuc").val(),
                    'loai_xe'          : $("#loai_xe").val(),
                    'thoi_gian_chay'        : $("#thoi_gian_chay").val(),
                    'mo_ta'             : $("#mo_ta").val(),
                    'avatar'            : $("#avatar").val(),
                    'trailer'           : $("#trailer").val(),
                    'tinh_trang'        : $("#tinh_trang").val(),
                };
                axios
                    .post('/admin/phim/create' , payload)
                    .then((res) => {
                        console.log(res.data.trang_thai_them_moi);
                        if(res.data.slug) {
                            toastr.error('Tên Nhà Xe đã tồn tại!');
                        } else {
                            if(res.data.trang_thai_them_moi) {
                                toastr.success('Thêm mới thành công!');
                            } else {
                                toastr.error('bạn đã rơi vào ô mất lượt');
                            }
                        }
                    });
            });


            loadTable();

            function loadTable() {
                var noi_dung = '';
                axios
                    .get('/admin/phim/data')
                    .then((res) => {
                        var list = res.data.phim;
                        var noi_dung ='';
                        $.each(list , function(key , value){
                            noi_dung += '<tr>';
                            noi_dung += '<th class="align-middle">'+ (key + 1) +'</th>';
                            noi_dung += '<td class="align-middle">'+ value.ten_nha_xe +'</td>';
                            noi_dung += '<td class="align-middle">'+ value.ngay_bat_dau_chay +'</td>';
                            noi_dung += '<td class="align-middle">'+ value.noi_bat_dau +'</td>';
                            noi_dung += '<td class="align-middle">'+ value.noi_ket_thuc.substring(0, 50) +' ...</td>';
                            noi_dung += '<td class="align-middle">'+ value.thoi_gian_chay +'</td>';
                            noi_dung += '<td class="align-middle">'+ value.mo_ta.substring(0, 100) +' ...</td>';
                            noi_dung += '<td class="align-middle">'+ value.loai_xe +'</td>';
                            noi_dung += '<td class="align-middle"><img  src="'+value.avatar+'" alt=""></td>';
                            noi_dung += '<td class="align-middle"><a target="_blank" href="'+value.trailer+'">TRAILER</a></td>';
                            noi_dung += '<td class="align-middle text-nowrap">';
                            if(value.tinh_trang == 1) {
                                noi_dung += '<button class="btn btn-success">Đang Chạy</button>';
                            } else if(value.tinh_trang == 2) {
                                noi_dung += '<button class="btn btn-warning">Sắp Chạy</button>';
                            } else {
                                noi_dung += '<button class="btn btn-danger">Ngừng Chạy</button>';
                            }
                            noi_dung +='</td>';
                            noi_dung += '<td class="text-nowrap">';
                            noi_dung += '<button class="btn btn-info">Edit</button>';
                            noi_dung += '<button class="btn btn-danger">Delete</button>';
                            noi_dung += '</td>';
                            noi_dung += '</tr>';
                        });
                        $("#table_phim tbody").html(noi_dung);
                    });
            }
        });
    </script>
@endsection

@extends('AdminRocker.share.master')
@section('noi_dung')
<div class="row" id="app">
    <div class="col-md-12">
        <div class="card border-danger border-bottom border-3 border-0">
            <div class="card-header">
                Tạo Buổi Chạy
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Chọn chuyến xe</label>
                        <select v-on:change="updateThoiGian()" v-model="create_lich.id_phim_xxx" class="form-control">
                            <template v-for="(value, key) in list_phim" v-if="value.tinh_trang > 0">
                                <option v-bind:value="{id_chuyen_xe : value.id, thoi_luong: value.thoi_luong}">@{{ value.ten_nha_xe }}</option>
                            </template>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Thời Lượng Chạy</label>
                        <input v-model="create_lich.thoi_gian_chay_chinh" type="number" min="0" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Thời Lượng Nghỉ Chân</label>
                        <input v-model="create_lich.thoi_gian_nghi_chan" type="number" min="0" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="form-label">Ngày chạy</label>
                        <input v-model="create_lich.ngay_chieu" type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Giờ Bắt Đầu</label>
                        <input v-model="create_lich.gio_bat_dau" type="time" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Giờ Kết Thúc</label>
                        <input v-model="create_lich.gio_ket_thuc" type="time" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Xe chạy chuyến</label>
                        <select v-model="create_lich.id_xe" class="form-control">
                            <template v-for="(value, key) in list_phong" v-if="value.tinh_trang == 1">
                                <option v-bind:value="value.id">@{{ value.ten_xe }}</option>
                            </template>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button v-on:click="themLichChieu()" class="btn btn-primary">Thêm Lịch Chạy</button>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                Danh Sách Các Buổi Chạy
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tên nhà xe</th>
                            <th class="text-center">Tên xe</th>
                            <th class="text-center">Bắt Đầu</th>
                            <th class="text-center">Kết Thúc</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(v, k) in list_lich">
                            <th class="align-middle text-center">@{{ k + 1 }}</th>
                            <td class="align-middle">@{{ v.ten_nha_xe }}</td>
                            <td class="align-middle">@{{ v.ten_xe }}</td>
                            <td class="align-middle text-center">@{{ v.thoi_gian_bat_dau }}</td>
                            <td class="align-middle text-center">@{{ v.thoi_gian_ket_thuc }}</td>
                            <td class="text-center">
                                <button v-on:click="layDataGhePhong(v)" class="btn btn-primary mr-1" data-bs-toggle="modal" data-bs-target="#gheModal">Xem Ghế</button>
                                <button v-on:click="deleteLich(v)" class="btn btn-danger mr-1" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa Lịch</button>
                                <button v-on:click="editLich(v)" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateModal">Cập Nhật Lịch</button>
                            </td>
                        </tr>
                    </tbody>
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <p>Bạn có muốn xóa lịch chạy <b class="text-danger">@{{ delete_lich.ten_nha_xe }}</b> tại xe <b class="text-danger">@{{ delete_lich.ten_xe }}</b> này không?</p>
                            <p>Thời gian chiếu dự kiến từ @{{ delete_lich.thoi_gian_bat_dau }} đến @{{ delete_lich.thoi_gian_ket_thuc }}</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button v-on:click="xoaLichChieu()" type="button" class="btn btn-primary"  data-bs-dismiss="modal">Xóa Lịch</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Chọn Chuyến Xe</label>
                                        <select v-on:change="updateThoiGian()" v-model="update_lich.id_chuyen_xe" class="form-control">
                                            <template v-for="(value, key) in list_phim" v-if="value.tinh_trang > 0">
                                                <option v-bind:value="value.id">@{{ value.ten_nha_xe }}</option>
                                            </template>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Thời Lượng Chạy Chính</label>
                                        <input v-model="update_lich.thoi_gian_chay_chinh" type="number" min="0" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Thời Lượng Nghỉ Chân</label>
                                        <input v-model="update_lich.thoi_gian_nghi_chan" type="number" min="0" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <label class="form-label">Ngày Chạy</label>
                                        <input v-model="update_lich.ngay_chieu" type="date" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Giờ Bắt Đầu</label>
                                        <input v-model="update_lich.gio_bat_dau" type="time" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Giờ Kết Thúc</label>
                                        <input v-model="update_lich.gio_ket_thuc" type="time" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Xe Chạy</label>
                                        <select v-model="update_lich.id_xe" class="form-control">
                                            <template v-for="(value, key) in list_phong" v-if="value.tinh_trang == 1">
                                                <option v-bind:value="value.id">@{{ value.ten_xe }}</option>
                                            </template>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button v-on:click="capNhatLichChieu()" type="button" class="btn btn-primary"  data-bs-dismiss="modal">Cập Nhật Lịch</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </table>
                <div class="modal fade" id="gheModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Danh Sách Ghế</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="alert alert-primary" role="alert">
                                        <b style="font-size: 24px">ĐẦU XE</b>
                                     </div>
                                </div>
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <tr v-for="i in (0, tt_phong.hang_ngang)">
                                            <template v-for="j in (0, tt_phong.hang_doc)">
                                                <td v-on:click="doiTrangThaiGhe(ds_ghe[(i - 1) * tt_phong.hang_doc +  j - 1])" v-if="ds_ghe[(i - 1) * tt_phong.hang_doc +  j - 1].co_the_ban == 1" style="background-color: #e6e7e9" class="text-center align-middle" >
                                                    @{{ ds_ghe[(i - 1) * tt_phong.hang_doc +  j - 1].ten_ghe }}
                                                </td>
                                                <td v-on:click="doiTrangThaiGhe(ds_ghe[(i - 1) * tt_phong.hang_doc +  j - 1])" v-else class="bg-danger text-center align-middle text-white">
                                                    @{{ ds_ghe[(i - 1) * tt_phong.hang_doc +  j - 1].ten_ghe }}
                                                </td>
                                            </template>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script>
    new Vue({
        el  :  "#app",
        data:   {
            create_lich :   {},
            delete_lich :   {},
            update_lich :   {},
            list_phim   :   [],
            list_phong  :   [],
            list_lich   :   [],
            tt_phong    :   {},
            ds_ghe      :   [],
        },
        created()   {
            this.loadDataPhim();
            this.loadDataPhong();
            this.loadLichChieu();
        },
        methods :   {
            doiTrangThaiGhe(v) {
                axios
                    .post('/admin/lich-chieu/danh-sach-ghe/doi-trang-thai', v)
                    .then((res) => {
                        toastr.success('Đã đổi trạng thái ghế thành công!');
                    });

                axios
                    .get('/admin/lich-chieu/danh-sach-ghe/' + v.id_lich)
                    .then((res) => {
                        this.ds_ghe = res.data.data;
                    });
            },
            layDataGhePhong(v) {
                axios
                    .get('/admin/xe/data-ghe/' + v.id_xe)
                    .then((res) => {
                        this.tt_phong = res.data.thong_tin_Xe;
                    });

                axios
                    .get('/admin/lich-chieu/danh-sach-ghe/' + v.id)
                    .then((res) => {
                        this.ds_ghe = res.data.data;
                    });

            },
            deleteLich(v) {
                this.delete_lich = v;
            },
            editLich(v) {
                this.update_lich = v;
                this.update_lich.ngay_chieu   = moment(v.thoi_gian_bat_dau).format('YYYY-MM-DD');
                this.update_lich.gio_bat_dau  = moment(v.thoi_gian_bat_dau).format('HH:mm');
                this.update_lich.gio_ket_thuc = moment(v.thoi_gian_ket_thuc).format('HH:mm');

                // update_lich.ngay_chieu   = thoi_gian_bat_dau chỉ lấy ngày tháng năm
                // update_lich.gio_bat_dau  = thoi_gian_bat_dau chỉ lấy giờ và phút
                // update_lich.gio_ket_thuc = thoi_gian_ket_thuc chỉ lấy giờ và phút
            },
            themLichChieu() {
                axios
                    .post('/admin/lich-chieu/tao-mot-buoi', this.create_lich)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            this.loadLichChieu();
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            xoaLichChieu() {
                axios
                    .post('/admin/lich-chieu/xoa-lich', this.delete_lich)
                    .then((res) => {
                        toastr.success('Đã xóa lịch chạy thành công!');
                        this.loadLichChieu();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            loadDataPhim() {
                axios
                    .get('/admin/phim/data')
                    .then((res) => {
                        this.list_phim = res.data.phim;
                    });
            },
            loadLichChieu() {
                axios
                    .get('/admin/lich-chieu/data')
                    .then((res) => {
                        this.list_lich = res.data.data;
                    });
            },
            loadDataPhong() {
                axios
                    .get('/admin/xe/data')
                    .then((res) => {
                        this.list_phong = res.data.list;
                    });
            },
            updateThoiGian() {
                this.create_lich.thoi_gian_chieu_chinh = this.create_lich.id_phim_xxx.thoi_luong;
                this.create_lich.id_chuyen_xe = this.create_lich.id_phim_xxx.id_chuyen_xe;
            },
        },
    });
</script>
@endsection

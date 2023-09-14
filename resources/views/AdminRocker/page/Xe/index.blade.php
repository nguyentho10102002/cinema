@extends('AdminRocker.share.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Xe
                </div>
                <div class="card-body">
                    <div class="form-group mt-2">
                        <label>Tên Xe</label>
                        <input v-model="them_moi.ten_xe" type="text" class="form-control"  placeholder="Nhập vào tên Xe">
                    </div>
                    <div class="form-group mt-3">
                        <label>Tình Trạng</label>
                        <select  v-model="them_moi.tinh_trang"  class="form-control">
                            <option value="1">Còn Chạy</option>
                            <option value="0">Dừng Chạy</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label>Số Ghế Hàng Dọc</label>
                        <input v-model="them_moi.hang_doc"  type="number" class="form-control" >
                    </div>
                    <div class="form-group mt-3">
                        <label>Số Ghế Hàng Ngang</label>
                        <input  v-model="them_moi.hang_ngang" type="number" class="form-control" >
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button v-on:click="createXe()" class="btn btn-primary">Thêm Mới Xe</button>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Danh Sách Các Xe
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên Xe</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Ghế Hàng Dọc</th>
                                <th class="text-center">Ghế Hàng Ngang</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, key) in ds_xe">
                                <th class="align-middle text-center">@{{ key + 1 }}</th>
                                <td class="align-middle">@{{ value.ten_xe }}</td>
                                <td class="align-middle text-center text-nowrap">
                                    <button v-on:click="changeStatus(value.id)" class="btn btn-danger" v-if="value.tinh_trang == 0">Dừng Kinh Doanh</button>
                                    <button v-on:click="changeStatus(value.id)" class="btn btn-primary" v-else>Còn Kinh Doanh</button>
                                </td>
                                <td class="align-middle text-center">@{{ value.hang_doc }}</td>
                                <td class="align-middle text-center">@{{ value.hang_ngang }}</td>
                                <td class="align-middle text-center text-nowrap">
                                    <button v-on:click="loadGhe(value.id, value.hang_ngang, value.hang_doc)" class="ghe btn btn-primary " style="margin-right: 5px" data-bs-toggle="modal" data-bs-target="#gheModal">Xem Ghế</button>
                                    <button v-on:click="xe_update = value" data-bs-toggle="modal" data-bs-target="#editModal" style="margin-right: 5px" class="btn btn-info">Cập Nhật</button>
                                    <button v-on:click="delete_xe = value"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa Xe</button>
                                </td>
                            </tr>
                        </tbody>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xóa Xe</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Chúng ta sẽ xóa Xe, đồng nghĩa với việc Xóa tất cả Ghế của Xe đó.</p>
                                        <p><b>Lưu ý:</b> Việc này không thể hoàn tác, hãy cẩn thận!</p>
                                        <input type="hidden" class="form-control" v-model="delete_xe.id"
                                            placeholder="Nhập vào id cần xóa">
                                    </div>
                                    <div class="modal-footer" >
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button v-on:click="xoaXe()" type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Chấp Nhận Xóa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Xe</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" id="edit_id">
                                        <div class="form-group mt-1">
                                            <label>Tên Xe</label>
                                            <input  v-model="xe_update.ten_xe" type="text" class="form-control"
                                                placeholder="Nhập vào tên Xe">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Tình Trạng</label>
                                            <select  v-model="xe_update.tinh_trang"  class="form-control">
                                                <option v-bind:value="1">Còn hoạt động</option>
                                                <option v-bind:value="0">Dừng hoạt động</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Số Ghế Hàng Dọc</label>
                                            <input v-model="xe_update.hang_doc" type="number" class="form-control" >
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Số Ghế Hàng Ngang</label>
                                            <input v-model="xe_update.hang_ngang" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button v-on:click="capNhatXe()" type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Cập Nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </table>
                    <div class="modal fade" id="gheModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Danh Sách Các Ghế</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-primary text-center" role="alert">
                                        ĐẦU XE
                                    </div>
                                    <table class="table table-bordered" id="table_ghe">
                                        <thead>

                                        </thead>
                                    </table>
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
    <script>
         new Vue({
            el      :   '#app',
            data    :   {
                them_moi   :   {},
                ds_xe   :   [],
                delete_xe  :   {},
                xe_update:   {},
            },
            created()   {
                this.createXe();
                this.loadXe();
            },
            methods :   {
                createXe() {
                    axios
                        .post('/admin/xe/index' , this.them_moi)
                        .then((res) => {
                            toastr.success('Đã thêm mới Xe thành công!');
                            this.loadXe();
                            this.them_moi = {};
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                loadXe()  {
                    axios
                        .get('/admin/xe/data')
                        .then((res) => {
                            this.ds_xe = res.data.list;
                            console.log(this.ds_xe);
                        });
                },
                xoaXe() {
                    console.log(this.delete_xe.id);
                    axios
                        .get('/admin/xe/delete/'+ this.delete_xe.id)
                        .then((res) => {
                            toastr.success('Đã xóa Xe thành công!');
                            this.loadXe();
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
                capNhatXe() {
                    axios
                        .post('/admin/xe/update' , this.xe_update)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.messs);
                                this.loadXe();
                            } else {
                                toastr.error('Có lỗi không mong muốn!');
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                loadGhe(id_xe, hang_ngang, hang_doc) {
                    console.log(id_xe);
                    axios
                        .get('/admin/xe/data-ghe/' + id_xe)
                        .then((res) => {
                            var list_ghe = res.data.danh_sach_ghe;
                            console.log(list_ghe);
                            var noi_dung   = '';
                            var x          = 0;
                            for(j = 0; j < hang_ngang; j++){
                                noi_dung += '<tr>';
                                for(i = 0; i < hang_doc; i++){
                                    x = j * hang_doc + i;
                                    if(list_ghe[x].tinh_trang) {
                                        noi_dung += '<th data-id="'+ list_ghe[x].id +'" class="change text-center aligin-middle" style="height: 70px; font-size: 30px; background-color: #DEF5E5">'+ list_ghe[x].ten_ghe +'</th>';
                                    } else {
                                        noi_dung += '<th data-id="'+ list_ghe[x].id +'" class="change text-center aligin-middle" style="height: 70px; font-size: 30px; background-color: red">'+ list_ghe[x].ten_ghe +'</th>';
                                    }
                                }
                                noi_dung += '</tr>';
                            }
                            $("#table_ghe thead").html(noi_dung);
                    });
                },

                changeStatus(id) {
                    axios
                        .get('/admin/xe/change-status/' + id)
                        .then((res) => {
                            this.loadXe();
                            toastr.success('Đã đổi trạng thái thành công!');
                        });
                }
            },
        });
    </script>
@endsection

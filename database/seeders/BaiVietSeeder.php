<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // 1. Khi seeder thì ta muốn xóa toàn bộ dữ liệu ở table đó
         DB::table('quan_ly_bai_viets')->delete();

         // Reset id về lại 1
         DB::table('quan_ly_bai_viets')->truncate();

         // 2. Ta sẽ thêm mới phim bằng lệnh create
         DB::table('quan_ly_bai_viets')->insert([
             [
                 'tieu_de'          => "Nhà xe Hoàng Trung : Đà Nẵng - Quảng Bình",
                 'mo_ta_ngan'       => "VI VU ĐÀ NẴNG, ĐÓN LỄ PHÁO HOA!",
                 'noi_dung'         => "Cảm ơn Quý khách đã, đang và sẽ đồng hành cùng HOÀNG TRUNG👉Mong muốn được phục vụ khách yêu trong những hành trình tiếp theo 🎉 CHÚC TẤT CẢ MỌI NGƯỜI CÓ MỘT KỲ NGHỈ LỄ VUI VẺ, AN TOÀN 💞
                                        XE KHÁCH HOÀNG TRUNG
                                        Tuyến: ĐÀ NẴNG- LỆ THUỶ
                                            TỔNG ĐÀI ĐẶT VÉ:
                                            xe1:Ra 6h sáng Vào 12h trưa
                                                0906446999
                                            xe2: Ra 9h20 sáng Vào 15h chiều
                                                0932545452
                                            xe3: Ra 11h20 trưa vào 17h45 chiều
                                                0906597797
                                            xe4 : Ra 15h chiều Vào 7h00 sáng
                                                0935066852
                                            xe5: Ra 18h00 chiều Vào 11h00 trưa
                                                0972522522",
                 'hinh_anh'         => "https://static1.dienanh.net/upload/202301/c1d8781f-16a2-499c-b51b-778bbdb006ab.jpeg,https://static1.dienanh.net/upload/202301/d49dad41-787d-4f33-86aa-48bc68b4dd9f.png",
                 'is_open'          => 1,
             ],

             [
                'tieu_de'          => "Nhà xe Sỹ Hảo",
                'mo_ta_ngan'       => "Nhà xe Sỹ Hảo : Chuyến xe san sẻ yêu thương!!!",
                'noi_dung'         => "- Chuyến xe san sẻ yêu thương 0 đồng.
                                            Những đối tượng là bệnh nhân đi khám và chữa bệnh ở bệnh viện các TP.Đông Hà, TP. Huế, TP. Đà Nẵng kèm giấy chứng nhận của bệnh viện xác nhận ra vào không mất tiền mãi mãi
                                       - Đặc biệt sinh viên đang học tại Đà Nẵng gửi hàng hoá KHÔNG MẤT TIỀN mãi mãi",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202212/b3602cf5-b27d-405c-b3f3-3a60aed8c4d8.jpg,https://static1.dienanh.net/upload/202212/9289703e-d03e-4c3a-9736-24cdead34512.jpg,https://static1.dienanh.net/upload/202212/defe9660-d0a8-497d-b621-ccc3d5de6a4d.png",
                'is_open'          => 1,
            ],

            [
                'tieu_de'          => "Nhà xe Trung Tín",
                'mo_ta_ngan'       => "Nhà xe Trung Tín : Hân hạnh phục vụ bà con!!!",
                'noi_dung'         => " Tuyến Đà Nẵng - Ba Đồn - Quảng Bình
                                            Xuất bến hằng ngày:
                                            Xe 1: Ra 05h30 - Vô 12h00 (0982.034.194)
                                            Xe 2: Ra 07h00 - Vô 13h00 (0935.022.681)
                                            Xe 3: Ra 08h00 - Vô 21h00 (0905.416.681)
                                            Xe 4: Ra 15h40 - Vô 07h30 (0935.055.681)
                                            Xe 5: Ra 21h15 - Vô 11h30 (0982.022.681)
                                            ----------------------------------------------------------
                                            Tuyến Đà Nẵng - Đồng Hới - Quảng Bình 🚌
                                            Xuất phát hằng ngày:
                                            Xe 1: Ra 06h15 - Vô 12h30 (0913.022.681)
                                            Xe 2: Ra 21h15 - Vô 11h30 (0982.022.681)
                                            ĐẶT VÉ HOẶC ĐÓNG GÓP Ý KIẾN XIN LIÊN HỆ
                                            TỔNG ĐÀI: 0905.122.681",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202301/ba1dd635-8935-4b5f-a867-c7d3fcccad9f.jpeg,https://static1.dienanh.net/upload/202301/bff251c5-6ccd-45c8-8ffb-8006f41bc2a3.jpeg,https://static1.dienanh.net/upload/202301/12b2b10c-0596-4012-af9c-d697e2e0103a.jpeg",
                'is_open'          => 1,
            ],

            [
                'tieu_de'          => "Nhà Xe Phương Trang",
                'mo_ta_ngan'       => "Phương Trang - FUTA Bus Lines!!!",
                'noi_dung'         => "“Bạn ơi sắp hết năm rồi,
                                        Tết Dương giữ giá, mỗi Phương Trang thôi
                                        Đặt vé có FUTA rồi,
                                        Bao la khuyến mãi, xếp đồ mình đi. ”
                                        Phương Trang “nhắc nhẹ” với bạn về việc không tăng giá vé Tết Dương Lịch và nhiều khuyến mãi khi mua vé qua App FUTA. Còn nữa, Phương Trang đã nhận đặt chỗ và xuất vé luôn rồi bạn nhé!
                                        Tải App Futa tại đây: https://futagroup.page.link/app
                                        Ngoài ra, bạn có thể mua vé qua Website Futabus.vn hoặc Tổng đài Đặt vé & CSKH 24/7: 1900 6067
                                        #nha_xe_phuong_trang #tong_dai_xe_phuong_trang #phuong_trang_bus_line",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202301/18625979-945c-47d2-b1c2-c4930259446a.jpeg,https://static1.dienanh.net/upload/202301/e04ae5a1-8640-4b9c-b1c6-2c8b39d2ac6c.jpeg,https://static1.dienanh.net/upload/202301/57334364-0009-44a0-9cc4-3192e76d9480.jpeg",
                'is_open'          => 1,
            ],

            [
                'tieu_de'          => "Nhà Xe Kim Anh",
                'mo_ta_ngan'       => "Nhà Xe Kim Anh - Kết Thúc Kì Nghỉ Lễ !!!",
                'noi_dung'         => "Cảm ơn quý khách hàng ủng hộ nhà xe #KimAnh
                                            Nhà xe Kim Anh : Tuyến
                                            #ĐàNẵng _ #ĐàLạt
                                            #SàiGòn-_ #ĐồngNai _ #VũngTàu.
                                            Thanks You So Much <3 !!!",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202212/afd291ea-9c43-4e90-985c-5e2ffc49e3eb.jpg,https://static1.dienanh.net/upload/202212/a3231e15-1b8c-41e9-9336-a8053ca1a949.jpg,https://static1.dienanh.net/upload/202212/4c0a6f25-20e2-4770-92a5-b5fcbcdc555b.jpg",
                'is_open'          => 1,
            ],

            [
                'tieu_de'          => "Nhà Xe Hải Hoàng Gia",
                'mo_ta_ngan'       => "Hải Hoàng Gia - Xe giường cao cao cấp!!!",
                'noi_dung'         => "Hành Trình An Toàn
                                       Trọn Một Chữ Tín
                                       Trọn Một Niềm Tin
                                       Dịch Vụ Chu Đáo",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202212/9cda9598-ac73-4ee9-a5dd-a01e902a4ec1.jpg,https://static1.dienanh.net/upload/202212/6d56dee6-4ab6-4708-b468-ee8bed13f5a6.jpg,https://static1.dienanh.net/upload/202212/e890d6ab-ce67-40a4-842b-5f08b9793a47.jpg",
                'is_open'          => 1,
            ],

         ]);

         // php artisan db:seed --class="BaiVietSeeder"
     }

}

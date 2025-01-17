<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('2010-01-01 08:00:00');
        $list = [
            [
                'id'       => 1,
                'q_ten'      => "Giám đốc",
                'q_dienGiai' => "Duyệt chương trình khuyến mãi, ký tên phiếu nhập, ký tên hóa đơn, ...",
                'q_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'q_capNhat'  => $today->format('Y-m-d H:i:s'),
                'q_trangThai'     => random_int(1,2)

            ], 
            [
                'id'       => 2,
                'q_ten'      => "Quản trị",
                'q_dienGiai' => "Quản lý người dùng, khách hàng, sản phẩm, ...",
                'q_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'q_capNhat'  => $today->format('Y-m-d H:i:s'),
                'q_trangThai'     => random_int(1,2)

            ], 
            [
                'id'       => 3,
                'q_ten'      => "Quản lý kho",
                'q_dienGiai' => "Quản lý sản phẩm, đối tác, nhập kho, ...",
                'q_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'q_capNhat'  => $today->format('Y-m-d H:i:s'),
                'q_trangThai'     => random_int(1,2)

            ], 
            [
                'id'       => 4,
                'q_ten'      => "Kế toán",
                'q_dienGiai' => "Xuất phiếu thu, ký tên hóa đơn, ...",
                'q_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'q_capNhat'  => $today->format('Y-m-d H:i:s'),
                'q_trangThai'     => random_int(1,2)

            ], 
            [
                'id'       => 5,
                'q_ten'      => "Nhân viên kinh doanh",
                'q_dienGiai' => "Lập kế hoạch khuyến mãi, lập hóa đơn, xử lý đơn hàng, ...",
                'q_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'q_capNhat'  => $today->format('Y-m-d H:i:s'),
                'q_trangThai'     => random_int(1,2)

            ], 
            [
                'id'       => 6,
                'q_ten'      => "Nhân viên giao hàng",
                'q_dienGiai' => "Lập phiếu giao hàng, giao sản phẩm, ...",
                'q_taoMoi'   => $today->format('Y-m-d H:i:s'),
                'q_capNhat'  => $today->format('Y-m-d H:i:s'),
                'q_trangThai'     => random_int(1,2)

            ]
        ];

        DB::table('quyen')->insert($list);
    }
}

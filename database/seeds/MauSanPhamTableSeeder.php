<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;
use Illuminate\Support\Facades\DB;

class MauSanPhamTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $list = [];
        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();

        for ($i=1; $i <= 5; $i++) {
            $today = new DateTime();
            array_push($list, [
                'sp_ma'                   => $i,
                'm_ma'                    => $i,
                'msp_soluong'             => $i
            ]);
        }
        DB::table('mau_sanpham')->insert($list);
    }
}
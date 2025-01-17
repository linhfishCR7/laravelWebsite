<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class PhieuNhap extends Model
{
    use SoftDeletes;// add soft delete

    const     CREATED_AT    = 'pn_taoMoi';
    const     UPDATED_AT    = 'pn_capNhat';

    protected $table        = 'phieunhap';
    protected $fillable     = ['pn_nguoiGiao', 'pn_soHoaDon', 'pn_ngayXuatHoaDon', 'pn_ghiChu', 'nv_nguoiLapPhieu', 'pn_ngayLapPhieu', 'nv_keToan', 'pn_ngayXacNhan', 'nv_thuKho', 'pn_ngayNhapKho', 'pn_taoMoi', 'pn_capNhat', 'pn_trangThai', 'ncc_ma','delete_at'];
    protected $guarded      = ['pn_ma'];

    protected $primaryKey   = 'pn_ma';

    protected $dates        = ['pn_ngayXuatHoaDon', 'pn_ngayLapPhieu', 'pn_ngayXacNhan', 'pn_ngayNhapKho', 'pn_taoMoi', 'pn_capNhat','delete_at'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function nhapKho()
    {
        return $this->hasMany('App\ChiTietNhap', 'pn_ma', 'pn_ma');
    }
    public function phieuNhap_nhanVienLapPhieu()
    {
        return $this->belongsTo('App\User', 'nv_nguoiLapPhieu', 'id');
    }
    public function phieuNhap_nhanVienKeToan()
    {
        return $this->belongsTo('App\User', 'nv_keToan', 'id');
    }
    public function phieuNhap_nhanVienThuKho()
    {
        return $this->belongsTo('App\User', 'nv_thuKho', 'id');
    }
    public function nhaCungCap()
    {
        return $this->belongsTo('App\NhaCungCap', 'ncc_ma', 'ncc_ma');
    }

}

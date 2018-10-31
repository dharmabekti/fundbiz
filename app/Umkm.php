<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'tbl_umkm';
    protected $fillable = ['nama_umkm','deskripsi_umkm','id_pengguna','nomor_telp','nomor_rekening','alamat_umkm'];

    public function users(){
    	return $this->hasOne('App\User','id','id_pengguna');
    }
}

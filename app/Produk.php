<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
	protected $table = 'produks';
	protected $primaryKey = 'id_produk';
    protected $fillable = ['nama_produk','dana','deskripsi_produk','picture','umkm_id']; 

    public function donate(){
        return $this->hasMany('App\Donate','product_id','id');
    }

	public function getRouteKeyName()
	    {
	        return 'slug';
	    }

	public function users(){
    	return $this->hasMany('App\User','id','user_id');
    }
}

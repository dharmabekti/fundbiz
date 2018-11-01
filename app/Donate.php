<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = 'donates';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','product_id','amount','email_penerima'];

    public function users(){
    	return $this->hasMany('App\User','id','user_id');
    }

    public function products(){
    	return $this->hasMany('App\Produk','id_produk','product_id');
    }
}

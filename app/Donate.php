<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = 'donates';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','product_id','amount','email_penerima','date','status'];

    public function users(){
    	return $this->hasMany('App\User','id','user_id');
    }

    public function products(){
    	return $this->hasMany('App\Produk','id','product_id');
    }
}

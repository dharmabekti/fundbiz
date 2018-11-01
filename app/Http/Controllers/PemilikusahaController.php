<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PemilikusahaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
    	try {

            $pemilikusaha = User::where('role_id', 2)->where('status',1)->simplePaginate(25);
            return view('pages.tampilpemilikusaha', compact('pemilikusaha'));
            
        } catch (ModelNotFound $ex) {
            return redirect('/');
        }  
    }

    public function hapusPemilikUsaha($id_user)
    {
        $destroy = User::find($id_user);
        $destroy->status = 0;
        $destroy->save();
        return redirect('/pemilikusaha/');
    }
}

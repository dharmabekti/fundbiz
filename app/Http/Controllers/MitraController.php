<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MitraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
    	try {

            $mitra = User::where('role_id', 3)->where('status',1)->simplePaginate(25);
            return view('pages.tampilmitra', compact('mitra'));
            
        } catch (ModelNotFound $ex) {
            return redirect('/');
        }  
    }

    public function hapusMitra($id_user)
    {
        $destroy = User::find($id_user);
        $destroy->status = 0;
        $destroy->save();
        return redirect('/mitra/');
    }
}

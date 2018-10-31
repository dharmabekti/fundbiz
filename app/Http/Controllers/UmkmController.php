<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Umkm;
use Illuminate\Support\Facades\Auth;
use Image;


class UmkmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUmkm()
    { 
        return view('pages.addumkm');
    }

    public function postUmkm(Request $request)
     {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
            'telp' => 'required',
            'rekening' => 'required',
            'address' => 'required']);

        $post = new Umkm();

        $post->nama_umkm = $request['name'];
        $post->deskripsi_umkm = $request['description'];
        $post->id_pengguna = Auth::user()->id;
        $post->nomor_telp = $request['telp'];
        $post->nomor_rekening = $request['rekening'];
        $post->alamat_umkm = $request['address'];        
        
        $post->save();

        return redirect('/');
    }

    public function viewUmkm()
    {
        try {

            $id = Auth::user()->id;
            $umkm = Umkm::where('id_pengguna', '=', $id)->first();
            return view('pages.umkm', compact('umkm'));
            
        } catch (ModelNotFound $ex) {
            return redirect('/');
        }   
    }

    public function editUmkm($id)
    {
        $umkm = Umkm::find($id);
        if ($umkm != null) {

            return view('pages.updateumkm', compact('umkm'));
        }
        return redirect('/');
    }

    public function updateUmkm(Request $request, $id)
    {
        try {

            $post = Umkm::find($id);

            if ($post != null) {

            	$post->nama_umkm = $request->input('name');
		        $post->deskripsi_umkm = $request->input('description');
		        $post->nomor_telp = $request->input('telp');
		        $post->nomor_rekening = $request->input('rekening');
		        $post->alamat_umkm = $request->input('address');
                $post->save();
                
                return redirect('/umkm/show');
            }
            
            return redirect('/login');

        } catch (ModelNotFound $ex) {
            return redirect('/');
        } 
    }
}

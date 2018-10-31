<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;
use App\Mail\DonateShipped;
use App\Donate;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
class DonateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDonasi($id)
    { 
        $produk = Produk::where('id_produk', '=', $id)->first();
        return view('pages.adddonate', compact('produk'));
    }

    public function postDonasi(Request $request, $id)
     {
        $produk = Produk::find($id);
        $post = new Donate();

        $post->user_id = Auth::user()->id;
        $post->product_id = $id;
        $post->amount = $request['amount'];
         $post->email_penerima = $request['email_penerima'];
        $post->date = $request['date'];
        $post->status = 'Donate';      
        
        $post->save();
        Mail::to($post->email_penerima)->send(new DonateShipped());

        return redirect('/');
    }

    public function viewDonasi()
    {
        try {

            $id = Auth::user()->id;
            $umkm = Umkm::where('id_pengguna', '=', $id)->first();
            return view('pages.umkm', compact('umkm'));
            
        } catch (ModelNotFound $ex) {
            return redirect('/');
        }   
    }

    public function editDonasi($id)
    {
        $umkm = Umkm::find($id);
        if ($umkm != null) {

            return view('pages.updateumkm', compact('umkm'));
        }
        return redirect('/');
    }

    public function updateDonasi(Request $request, $id)
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

<?php

namespace App\Http\Controllers;
use App\Produk;
use Auth;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Image;

class ProdukController extends Controller
{

	public function getProduk()
    {   
        return view('pages.addproduk');
    }
    
    public function postProduk(Request $request)
    {
        
        $this->validate($request, [
            'nama_produk' => 'required|max:255',
            'dana' => 'required|max:255',
            'waktu_pinjam' => 'required',
            'deskripsi_produk' => 'required',
            'picture' => 'required']);

        $post = new Produk();

       
        $post->nama_produk = $request['nama_produk'];
        $post->dana = $request['dana'];
        $post->waktu_pinjam = $request['waktu_pinjam'];
        $post->user_id = Auth::user()->id;
        $post->deskripsi_produk = $request['deskripsi_produk'];
         $post->slug = $request['nama_produk'];
        //if($request->hasFile('picture'))
      //  {
            $file = $request->file('picture');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(351,176)->save (public_path('/images/' . $fileName));
            $post->picture = $fileName;    
        //}
        
        
   

        $post->save();

        return redirect('/');
    }

     public function viewProduk($slug)
    {
        try {

            $produk = Produk::where('slug', '=', $slug)->first();
            return view('pages.detailproduct', compact('produk'));
            
        } catch (ModelNotFound $ex) {
            return redirect('/');
        }   
    }

    public function showProduk()
    {
        if(Auth::user()->role_id == 2) // Role Pemilik Usaha
            $produks = Produk::orderBy('id_produk')->where('user_id',Auth::user()->id)->simplePaginate(100);
        else if(Auth::user()->role_id == 3) // Role Mitra
            $produks = Produk::orderBy('id_produk')->where('status','Approved')->simplePaginate(100);
        else
            $produks = Produk::orderBy('id_produk')->where('status','Waiting')->simplePaginate(100);
        return view('pages.products',compact('produks'));  
    }

    public function deleteProduk($id_produk)
    {
       
        $destroy = Produk::find($id_produk)->delete();
        return redirect('/products');
    }

    public function approveProduk($id_produk)
    {
        
        $produks = Produk::find($id_produk);

        if ($produks != null) {
            $produks->status = 'Approved';
            $produks->save();
        }
        
        return redirect('/');
    }

    public function editProduk($id_produk)
    {
        
        $produks = Produk::find($id_produk);

        if ($produks != null) {
            return view('pages.updateproduk', compact('produks'));
        }
        
        return redirect('/');
    }

    public function updateProduk(Request $request, $id_produk)
    {
        try {
            $post =Produk::find($id_produk);

            if ($post != null) {          
                $post->nama_produk = $request->input('nama_produk');
                $post->dana = $request->input('dana');
                $post->deskripsi_produk = $request->input('deskripsi_produk');
                $post->waktu_pinjam = $request['waktu_pinjam'];
                
                if($request->hasFile('picture'))
                {
                    $file = $request->file('picture');
                    $fileName = time() . '.' . $file->getClientOriginalExtension();
                    Image::make($file)->resize(351,176)->save (public_path('/images/' . $fileName));
                    $post->picture = $fileName; 
                }

                $post->save();
                
                return redirect('/products');
            }
            
            return redirect('/login');

        } catch (ModelNotFound $ex) {
            return redirect('/');
        } 
    }


    


   
}














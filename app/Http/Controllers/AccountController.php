<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUser()
    { 
        return view('pages.Detailaccount');
    }

    public function postUser(Request $request)
     {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|string|min:6|confirmed']);

        $post = new User();

        $post->id = Auth::user()->id;
        $post->nama= $request['name'];
        $post->username = $request['username'];
        $post->password = $request['password'];     
        
        $post->save();

        return redirect('/');
    }

    public function viewUser()
    {
        try {

            $id = Auth::user()->id;
            $user = User::where('id', '=', $id)->first();
            return view('pages.Detailaccount', compact('user'));
            
        } catch (ModelNotFound $ex) {
            return redirect('/');
        }   
    }

    public function editUser($id)
    {
        $user = User::find($id);
        if ($user != null) {

            return view('pages.updateaccount', compact('user'));
        }
        return redirect('/');
    }

    public function updateUser(Request $request, $id)
    {
        try {

            $post = User::find($id);

            if ($post != null) {

                $post->id = Auth::user()->id;
                $post->name= $request['name'];
                $post->username = $request['username'];
                $post->password = bcrypt($request['password']);
                if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save (public_path('images/uploads/' . $filename));
            $user =Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
                $post->save();
                
                return redirect('/Detailaccount');
            }
            
            return redirect('/login');

        } catch (ModelNotFound $ex) {
            return redirect('/');
        } 
    }
  public function profile(){
        return view('profile', array('user'=> Auth::user()));
    }

     public function update_avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save (public_path('images/uploads/' . $filename));
            $user =Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('pages.Detailaccount', array('user'=> Auth::user()));
    }
}

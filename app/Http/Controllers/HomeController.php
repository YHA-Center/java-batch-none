<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('user.home');
    }

    // profile
    public function profile()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', Auth::user()->id)->paginate(6);
        return view('layouts.backend', compact('user', 'posts'));
    }

    // update profile
    public function update(Request $request){
        Validator::make($request->all(), [
            'name' => 'required',
            'cpassword' => 'required|min:8',
            'npassword' => 'required|min:8',
        ])->validate();
        $user = Auth::user(); // current user
        if(Hash::check($request->cpassword, $user->password)){ // check current password
            $data = [  // change array format
                'name' => $request->name,
                'password' => Hash::make($request->npassword),
            ];
            $admin = User::find(Auth::user()->id); // search user
            $admin->update($data); // update
            return redirect()->back()->with(['success' => 'Updated success']);
        }else{
            return redirect()->back()->with(['error' => 'Current password is incorrect']);
        }
    }
}

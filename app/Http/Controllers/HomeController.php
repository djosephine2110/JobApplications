<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Storage;

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
        return view('home');
    }

    public function adminHome()
    {
        $user = User::all();
        return view('adminHome', compact('user'));
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('files', $filename, 'public');
            Auth()->user()->update(['file'=>$filename]);
        }
        return view('user_detail.create');
    }
}

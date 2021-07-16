<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Storage;
use Illuminate\Support\Facades\DB;

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
    public function index(Request $request)
    {
        return view('home');
    }

    public function adminHome()
    {
        $users = User::get();
        return view('adminHome', compact('users'));
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

    public function changeStatus(Request $request)
    {
        \Log::info($request->all());
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'sometimes',
            'email' => 'sometimes',
            'is_admin' => 'sometimes',
            'image' => 'sometimes',
            'file' =>'sometimes',
            'status' => 'sometimes',
            
        ]);

        $user->update($request->all());

        return redirect()->route('edit_user');
    }
}

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
    public function index(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->filter_gender)) {
                $data = DB::table('users')
         ->select('name', 'email', 'id', 'image', 'file', 'status', 'category')
         ->where('category', $request->filter_gender)
         ->get();
            } else {
                $data = DB::table('users')
         ->select('name', 'email', 'id', 'image', 'file', 'status', 'category')
         ->get();
            }
            return datatables()->of($data)->make(true);
        }
        $country_name = DB::table('users')
          ->select('created_at')
          ->groupBy('created_at')
          ->orderBy('created_at', 'ASC')
          ->get();
        return view('custom_search', compact('country_name'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomSearchController extends Controller
{
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DateRangeController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->from_date)) {
                $data = DB::table('users')
         ->whereBetween('created_at', array($request->from_date, $request->to_date))
         ->get();
            } else {
                $data = DB::table('users')
         ->get();
            }
            return datatables()->of($data)
            ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>';
                        $btn = $btn.'<a href="/test_detail/{{$user->id}}">View</a> ';
                        $btn = $btn.'<a href="/testdetaill/{{$user->id}}">Download</a>';
         
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('daterange');
    }
}

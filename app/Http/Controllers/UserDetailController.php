<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = auth()->user()->details;

        return view('user_detail.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'ktp'=>'required|integer',
            'birth_place'=>'required',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'home_number' => 'sometimes',
            'sim_a' => 'required',
            'sim_c' => 'sometimes',
            'vehicle' => 'required',
            'hobby' => 'required',

        ]);

        $detail = new UserDetail();

        $detail->name = $request->input('name');
        $detail->ktp = $request->input('ktp');
        $detail->birth_place = $request->input('birth_place');
        $detail->dob = $request->input('dob');
        $detail->gender = $request->input('gender');
        $detail->religion = $request->input('religion');
        $detail->address = $request->input('address');
        $detail->zipcode = $request->input('zipcode');
        $detail->phone = $request->input('phone');
        $detail->home_number = $request->input('home_number');
        $detail->sim_a = $request->input('sim_a');
        $detail->sim_c = $request->input('sim_c');
        $detail->vehicle = $request->input('vehicle');
        $detail->hobby = $request->input('hobby');

        $detail->user_id = auth()->id();
        $detail->save();


        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        return view('user_detail.edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        $request->validate([
            'name'=>'required',
            'ktp'=>'required|integer',
            'birth_place'=>'required',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'home_number' => 'sometimes',
            'sim_a' => 'required',
            'sim_c' => 'sometimes',
            'vehicle' => 'sometimes',
            'hobby' => 'sometimes',

        ]);


        $userDetail->update($request->except('_token'));

        return redirect()->route('user-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        $userDetail->delete();
        return back();
    }
}

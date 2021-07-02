<?php

namespace App\Http\Controllers;

use App\Married;
use Illuminate\Http\Request;

class MarriedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marrieds = auth()->user()->marrieds;

        return view('married.index', compact('marrieds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('married.create');
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
            'married_status'=>'required',
            'spouse_name'=>'sometimes',
            'spouse_bplace'=>'sometimes',
            'spouse_dob' => 'sometimes',
            'spouse_education' => 'sometimes',
            'spouse_job' => 'sometimes',
            

        ]);

        $detail = new Married();

        $detail->married_status = $request->input('married_status');
        $detail->spouse_name = $request->input('spouse_name');
        $detail->spouse_bplace = $request->input('spouse_bplace');
        $detail->spouse_dob = $request->input('spouse_dob');
        $detail->spouse_education = $request->input('spouse_education');
        $detail->spouse_job = $request->input('spouse_job');
        

        $detail->user_id = auth()->id();
        $detail->save();


        return redirect()->route('married.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Married $married)
    {
        return view('married.edit', compact('married'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Married $married)
    {
        $request->validate([
            'married_status'=>'required',
            'spouse_name'=>'sometimes',
            'spouse_bplace'=>'sometimes',
            'spouse_dob' => 'sometimes',
            'spouse_education' => 'sometimes',
            'spouse_job' => 'sometimes',

        ]);


        $married->update($request->except('_token'));

        return redirect()->route('married.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Married $married)
    {
        $married->delete();
        return back();
    }
}

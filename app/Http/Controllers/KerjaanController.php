<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kerjaan;

class KerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerjaans = auth()->user()->kerjaans;

        return view('kerjaan.index', compact('kerjaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kerjaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'job_name' => 'required',
            'job_position' => 'required',
            'job_salary' => 'required',
            'job_facilities' => 'required',
            'job_starts' => 'required',
            
        ]);

        // $formData = $request->except('_token');

        auth()->user()->kerjaans()->create($formData);

        return redirect()->route('kerjaan.index');
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
    public function edit(Kerjaan $kerjaan)
    {
        return view('kerjaan.edit', compact('kerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerjaan $kerjaan)
    {
        $request->validate([
            'job_name' => 'required',
            'job_position' => 'required',
            'job_salary' => 'required',
            'job_facilities' => 'required',
            'job_starts' => 'required',
            
        ]);

        $kerjaan->update($request->all());

        return redirect()->route('kerjaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerjaan $kerjaan)
    {
        $kerjaan->delete();

        return back();
    }
}

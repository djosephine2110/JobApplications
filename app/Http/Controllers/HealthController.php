<?php

namespace App\Http\Controllers;

use App\Health;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healths = auth()->user()->healths;

        return view('health.index', compact('healths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('health.create');
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
            'blood_type' => 'required',
            'light_disease' => 'sometimes',
            'heavy_disease' => 'sometimes',
            'opname' => 'required',
            'alasan' => 'sometimes',
            'eyesight' => 'required',
            'hearing' => 'required',
            'health' => 'required',
            'name' => 'sometimes',
            'address' => 'sometimes',
            'zipcode' => 'sometimes',
            'phone' => 'sometimes',
            'relation' => 'sometimes',


        ]);

        // $formData = $request->except('_token');

        auth()->user()->healths()->create($formData);

        return redirect()->route('health.index');
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
    public function edit(Health $health)
    {
        return view('health.edit', compact('health'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Health $health)
    {
        $request->validate([
            'blood_type' => 'required',
            'light_disease' => 'sometimes',
            'heavy_disease' => 'sometimes',
            'opname' => 'required',
            'alasan' =>'sometimes',
            'eyesight' => 'required',
            'hearing' => 'required',
            'health' => 'required',
            'name' => 'sometimes',
            'address' => 'sometimes',
            'zipcode' => 'sometimes',
            'phone' => 'sometimes',
            'relation' => 'sometimes',
        ]);

        $health->update($request->all());

        return redirect()->route('health.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Health $health)
    {
        $health->delete();

        return back();
    }
}

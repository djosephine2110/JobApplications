<?php

namespace App\Http\Controllers;

use App\Asing;
use Illuminate\Http\Request;

class AsingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asings = auth()->user()->asings;

        return view('asing.index', compact('asings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asing.create');
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
            'language' => 'required',
            'reading' => 'required',
            'writing' => 'required',
            'speaking' => 'required',
            
        ]);

        // $formData = $request->except('_token');

        auth()->user()->asings()->create($formData);

        return redirect()->route('asing.index');
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
    public function edit($id)
    {
        return view('asing.edit', compact('asing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asing $asing)
    {
        $request->validate([
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'state' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $asing->update($request->all());

        return redirect()->route('asing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asing $asing)
    {
        $asing->delete();

        return back();
    }
}

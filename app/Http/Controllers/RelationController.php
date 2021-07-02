<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relation;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = auth()->user()->relations;

        return view('relation.index', compact('relations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relation.create');
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
            'name' => 'required',
            'relationship' => 'required',
            'dob' => 'required',
            'job' => 'required',
            
        ]);

        // $formData = $request->except('_token');

        auth()->user()->relations()->create($formData);

        return redirect()->route('relation.index');
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
    public function edit(Relation $relation)
    {
        return view('relation.edit', compact('relation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relation $relation)
    {
        $request->validate([
            'name' => 'required',
            'relationship' => 'required',
            'dob' => 'required',
            'job' => 'required',
            
        ]);

        $relation->update($request->all());

        return redirect()->route('relation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relation $relation)
    {
        $relation->delete();

        return back();
    }
}

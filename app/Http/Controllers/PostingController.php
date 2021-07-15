<?php

namespace App\Http\Controllers;

use App\Posting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postings = auth()->user()->postings;

        return view('posting.index', compact('postings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posting.create');
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
            'title' => 'required',
            'description' => 'required',
            'education' => 'required',
            'experience' => 'required',
            'status' => 'required',
            'category' => 'required',

        ]);

        // $formData = $request->except('_token');

        auth()->user()->postings()->create($formData);

        return view('posting.index');
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
    public function edit(Posting $posting)
    {
        return view('posting.edit', compact('posting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posting $posting)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'education' => 'required',
            'experience' => 'required',
            'status' => 'required',
            'category' => 'required',

        ]);

        $posting->update($request->all());

        return redirect()->route('posting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posting $posting)
    {
        $posting->delete();

        return back();
    }
}

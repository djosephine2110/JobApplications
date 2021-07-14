<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posting;

class JobpostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posting::all();
        return view('board', compact('posts'));
    }

    public function it()
    {
        $posts = Posting::all();
        return view('board_it', compact('posts'));
    }

    public function finance()
    {
        $posts = Posting::all();
        return view('board_finance', compact('posts'));
    }

    public function hrd()
    {
        $posts = Posting::all();
        return view('board_hrd', compact('posts'));
    }

    public function legal()
    {
        $posts = Posting::all();
        return view('board_legal', compact('posts'));
    }

    public function sales()
    {
        $posts = Posting::all();
        return view('board_sales', compact('posts'));
    }

    public function social()
    {
        $posts = Posting::all();
        return view('board_social', compact('posts'));
    }

    public function product()
    {
        $posts = Posting::all();
        return view('board_product', compact('posts'));
    }

    public function others()
    {
        $posts = Posting::all();
        return view('board_others', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Posting::find($id);
        return view('job_details', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

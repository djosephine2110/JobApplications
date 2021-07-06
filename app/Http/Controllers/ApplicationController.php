<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Experience;
use App\Education;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        $user = User::all();
        return view('adminHome', compact('user'));

        //$experiences = Experience::all();
        //$educations = Education::all();
        //return view('test', compact('experiences', 'educations'));
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
        $user = User::find($id);
        $educations = $user->education()->get();
        $userDetail = $user->details()->get();
        $skills = $user->skills()->get();
        $asings = $user->asings()->get();
        $experiences = $user->experiences()->get();
        $marrieds = $user->marrieds()->get();
        $anaks = $user->anaks()->get();
        $relations = $user->relations()->get();
        $organizations = $user->organizations()->get();
        $healths = $user->healths()->get();
        $references = $user->references()->get();
        $connections = $user->connections()->get();
        $jobs = $user->jobs()->get();
        $images = $user->images()->get();
        $files=$user->files()->get();
        return view('test_detail', compact('files', 'educations', 'userDetail', 'asings', 'skills', 'asings', 'experiences', 'marrieds', 'anaks', 'relations', 'organizations', 'healths', 'references', 'connections', 'jobs', 'images'));
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
    public function download($id)
    {
        $user = User::find($id);
        $educations = $user->education()->get();
        $userDetail = $user->details()->get();
        $skills = $user->skills()->get();
        $asings = $user->asings()->get();
        $experiences = $user->experiences()->get();
        $marrieds = $user->marrieds()->get();
        $anaks = $user->anaks()->get();
        $relations = $user->relations()->get();
        $organizations = $user->organizations()->get();
        $healths = $user->healths()->get();
        $references = $user->references()->get();
        $connections = $user->connections()->get();
        $jobs = $user->jobs()->get();
        $images = $user->images()->get();
        
        $pdf = \PDF::loadView('pdf_test', compact('educations', 'userDetail', 'asings', 'skills', 'asings', 'experiences', 'marrieds', 'anaks', 'relations', 'organizations', 'healths', 'references', 'connections', 'jobs', 'images'));
        return $pdf->download('application.pdf');
    }
    public function downloadPdf($id)
    {
        $user = User::find($id);
        $pathToFile = storage_path('public/files' . $user->files->file);
        return response()->download($pathToFile);
    }
}

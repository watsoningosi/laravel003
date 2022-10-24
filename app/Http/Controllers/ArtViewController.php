<?php

namespace App\Http\Controllers;

use App\Models\ArtView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::select('select * from articles');
        return view('welcome', ['articles' => $articles]);
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
     * @param  \App\Models\ArtView  $artView
     * @return \Illuminate\Http\Response
     */
    public function show(ArtView $artView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtView  $artView
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtView $artView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArtView  $artView
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtView $artView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtView  $artView
     * @return \Illuminate\Http\Response
     */


    public function destroy(ArtView $artView)
    {
        $artView->delete();
        return redirect('welcome');
    }
}

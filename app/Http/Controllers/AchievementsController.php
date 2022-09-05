<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Achievements;

use App\WhatWeDo;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\NewsRequest;

class AchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $achievements = Achievements::latest('id', 'DESC')->get();
        $achievements_featured = Achievements::latest('id')->first();
        $wwd_content = WhatWeDo::latest('id')->first();
        
        return

        view('company', compact('achievements', 'achievements_featured', 'wwd_content'));

    }

    public function index_mm()
    {
        //
        $achievements = Achievements::latest('id', 'DESC')->get();
        $achievements_featured = Achievements::latest('id')->first();
        $wwd_content = WhatWeDo::latest('id')->first();
        
        return

        view('mm.company', compact('achievements', 'achievements_featured', 'wwd_content'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     $path = $request->file('path_name')->store('images');

    //     return $path;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //
        $input = $request->all();

        if($file = $request->file('path_name')){
            $name  = time() . $file->getClientoriginalName();
            $file->move('images', $name);

            $input['path_name'] = $name;
        }
        
        Achievements::create($input);
    
        return back()->with('success', 'Created News Successfully');
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
        $achievement = Achievements::findOrFail($id);
        return view('achievement', compact('achievement'));
    }

    public function show_mm($id)
    {
        //
        $achievement = Achievements::findOrFail($id);
        return view('mm.achievement', compact('achievement'));
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

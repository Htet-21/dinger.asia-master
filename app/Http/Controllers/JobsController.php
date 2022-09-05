<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs;

use App\Http\Requests\CreateJobsRequest;

class JobsController extends Controller
{
    //

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function contact(){
    //     // $people = ['MinThu', 'YeWint', 'HtetArkar', 'TintHtoo', 'ZinLin'];
    //     $people = [];
    //     return view('contact', compact('people'));
    // }
    public function store(Request $request)
    {

        $input = $request->all();

        Jobs::create($input);

    }

    public function show($id){

        $job = Jobs::findOrFail($id);

        return view('jobs-detail', compact('job'));

    }

    public function show_mm($id){

        $job = Jobs::findOrFail($id);

        return view('mm.jobs-detail', compact('job'));

    }

    public function index(){

        $jobs = Jobs::all();

        $jobscount = Jobs::count();

        return

        view('career', compact('jobs','jobscount'));
    }

    public function index_mm(){

        $jobs = Jobs::all();

        $jobscount = Jobs::count();

        return

        view('mm.career', compact('jobs','jobscount'));
    }

}

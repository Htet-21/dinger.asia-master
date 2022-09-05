<?php

namespace App\Http\Controllers;

use App\JobsFiles;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\URL;

use App\Http\Requests\JobsFilesRequest;


class JobsFilesController extends Controller

{

    public function store(JobsFilesRequest $request)
    {

        if ($file = $request->file('path_name')) {
            $name  = time() . $file->getClientoriginalName();
            $file->move('jobfiles', $name);
            JobsFiles::create(['path_name' => $name]);
            return Redirect::to(URL::previous() . "#job-application-title")->with('success', 'Sent Successfully');
        }

    }
}

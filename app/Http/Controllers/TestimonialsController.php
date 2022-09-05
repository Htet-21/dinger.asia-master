<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimonials;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\TestimonialsRequest;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonials = DB::table('testimonials')->orderBy('id', 'DESC')->get();

        return

            view('welcome', compact('testimonials'));
    }

    public function index_mm()
    {
        //
        $testimonials = DB::table('testimonials')->orderBy('id', 'DESC')->get();

        return

            view('mm.welcome', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/testimonials/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialsRequest $request)
    {
        //
        $input = $request->all();

        if($file = $request->file('profile_img')){
            $name  = time() . $file->getClientoriginalName();
            $image = base64_encode($name); 
            $file->move('images/testimonials', $image);
            $input['profile_img'] = $image;
        }

        if($logo = $request->file('logo')){
            $logo_name  = time() . $logo->getClientoriginalName();
            $logo_image = base64_encode($logo_name);
            $logo->move('images/testimonials', $logo_image);
            $input['logo'] = $logo_image;
        }

        Testimonials::create($input);

        return back()->with('success', 'Created Testimonial Successfully');
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
        //
        $testimonials = Testimonials::findOrFail($id);
        return view('testimonials.edit', compact('testimonials'));
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

        $input = $request->all();
        if($file = $request->file('profile_img')){
            $name  = time() . $file->getClientoriginalName();
            $image = base64_encode($name);
            $file->move('images/testimonials', $image);
            $input['profile_img'] = $image;
        }

        if($logo = $request->file('logo')){
            $logo_name  = time() . $logo->getClientoriginalName();
            $logo_image = base64_encode($logo_name);
            $logo->move('images/testimonials', $logo_image);
            $input['logo'] = $logo_image;
        }

        Testimonials::whereId($id)->first()->update($input);

        return back()->with('success', 'Updated Testimonial Successfully');
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
        $testimonials = Testimonials::whereId($id)->delete();

        return redirect('/testimonials');
    }
}

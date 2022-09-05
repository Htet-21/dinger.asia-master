<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shoplist;

use App\Http\Requests\ShoplistRequest;


class ShoplistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shoplists = Shoplist::paginate(4);
        
        return

        view('clients', compact('shoplists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/shoplist/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShoplistRequest $request)
    {
        //
        $input = $request->all();

        if($file = $request->file('path_name')){
            $name  = time() . $file->getClientoriginalName();
            $file->move('images', $name);

            $input['path_name'] = $name;
        }
        
        Shoplist::create($input);
    
        return back()->with('success', 'Created Shop Successfully');
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
        $shoplists = Shoplist::findOrFail($id);
        return view('shoplist.edit', compact('shoplists'));
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

        if($file = $request->file('path_name')){
            $name  = time() . $file->getClientoriginalName();
            $file->move('images', $name);

            $input['path_name'] = $name;
        }
        
        Shoplist::whereId($id)->first()->update($input);

         return back()->with('success', 'Updated Shop Successfully');
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
        $shoplists = Shoplist::whereId($id)->delete(); 

        return redirect('/shoplist');
    }
}

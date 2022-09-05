<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactSupport;

use App\Http\Requests\CreateContactSupportRequest;

class ContactSupportController extends Controller
{
    //
    public function index()
    {

    }
    
    public function show(ContactSupport $id)
    {
        return view('contactsupport.show');
    }
    
    public function create(CreateContactSupportRequest $request)
    {
        ContactSupport::create($request->all());
        
        return redirect ('/contact')->with('success', 'Sent Successfully');
        
    }
    public function store(){
        

    }

}

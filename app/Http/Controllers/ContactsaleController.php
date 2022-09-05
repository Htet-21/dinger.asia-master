<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactSale;

use App\Http\Requests\CreateContactSaleRequest;

class ContactSaleController extends Controller
{

    public function show($id)
    {
        return view('contactsale.show');
    }

    public function create(CreateContactSaleRequest $request)
    {
        ContactSale::create($request->all());

        return back()->with('success', 'Sent Successfully');
    }

    public function create_mm(CreateContactSaleRequest $request)
    {
        ContactSale::create($request->all());

        return back()->with('success', 'Sent Successfully');
    }

}

<?php

namespace App\Http\Controllers;

use App\NewsSubscription;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\URL;

use App\Http\Requests\NewsSubscriptionRequest;

class NewsSubscriptionController extends Controller
{

    public function create(NewsSubscriptionRequest $request)
    {

        NewsSubscription::create($request->all());

        return Redirect::to(URL::previous() . "#success-block")->with('success_news', 'Newsletter Subscribed Successfully');

    }
}

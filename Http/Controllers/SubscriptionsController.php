<?php namespace App\Modules\Crevisoft\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Crevisoft\Subscriptions;
use App\Modules\Crevisoft\Http\Requests\SubscriptionFormRequest;

class SubscriptionsController extends Controller {

	/**
	 * Save the subscription email.
	 * 
	 * @param  SubscriptionFormRequest $request
	 * @return Response
	 */
	public function postSubscribe(SubscriptionFormRequest $request)
	{
		Subscriptions::create($request->all());
		return redirect()->back()->with('message', 'Thanx for subscriptions');
	}
}

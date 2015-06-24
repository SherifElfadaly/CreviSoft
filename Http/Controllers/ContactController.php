<?php namespace App\Modules\Crevisoft\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Crevisoft\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

	/**
	 * Send the contact email.
	 * 
	 * @param  ContactFormRequest $request
	 * @return Response
	 */
	public function postContact(ContactFormRequest $request)
	{
		\Mail::send('crevisoft::emails.contact', $request->all(), function($message)use($request)
		{
    		$message->from($request->get('user_email'), $request->get('user_name'));
			$message->to(\CMS::coreModuleSettings()->getSettingValuByKey('Email', 'crevisoft'), 'CreviSoft')->subject('Contact Form');
		});
		return redirect()->back()->with('message', 'Your email had been sent');
	}
}
